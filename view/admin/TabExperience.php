<?php
require_once('../../inc/init.inc.php');
ob_start();
require_once('../../inc/adminHeader.inc.php');
$r = execute_requete("SELECT * FROM experience");
?>

<div id="content-wrapper">
    <div class="container-fluid">

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header" style="margin-left: 37%; margin-bottom: 16px;">
                <i class="fas fa-table"></i>
                     TABLEAU DES EXPERIENCES
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <button type="button" class="btn btn-success" ><a href="?exp=new" style="color:white;">Ajouter une expérience</a>
                    </button><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <!-- définit un ensemble de lignes qui définit l'en-tete des colonnes du tableau -->
                <thead>
                    <!-- ligne du tableau -->
                    <tr> 
                        <?php
                        // Supression des compétences :
                        // si il y a une 'action' dans l'URL et que c'est égale à 'suppression'
                        if(isset($_GET['exp']) && $_GET['exp'] == 'delete'){ 
                          // exécution de la requete : suppression dans la table experience où il y a l'id_experience de celui que l'on veut supprimer.
                          execute_requete("DELETE FROM experience WHERE id_experience='$_GET[id_experience]'");
                          //renvoie un en-tête au client et envoie un statut REDIRECT au navigateur. 
                          header('location:TabExperience.php');
                        }
                          //boucle for pour ajouter une experience dans une ligne 
                          for ($i = 0; $i < $r->columnCount(); $i++) {
                          // debug($r); Vérification que la requete est bien exécutée.
                          //création d'une var qui est égale à $r qui exécute la requete sql qui selectionne toute la table 
                          $colonne = $r->getColumnMeta($i);
                        ?>
                          <!-- cellule d'en tête du tableau -->
                          <th style="text-align: center;"><?php echo $colonne['name'];?></th>

                        <?php } ?>

                          <th colspan="2" style="text-align: center;">action</th>
                    </tr>
                </thead>

                <!-- Regroupe les tr pour former le corps du tableau -->
                <tbody>
                    <?php while($experiences = $r->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <?php foreach($experiences as $indice => $experience) : ?>
                              <!-- cellule interne du tableau -->
                              <td><?php echo $experience; ?></td>
                            <?php endforeach; ?>
                            <td>
                                <button type="button" class="btn btn-success">
                                  <a href="?exp=delete&id_experience=<?php echo $experiences['id_experience']; ?>" style="color:white;">
                                      Supprimer
                                  </a>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-success">
                                  <a href="?exp=update&id_experience=<?php echo $experiences['id_experience']; ?>" style="color:white;">
                                      Modifier
                                  </a>
                                </button>
                            </td>
                        </tr>
                    <?php } 
                    // si le formulaire n'est pas vide et qu'il ya des infos dedans
                    if(!empty($_POST)){ 
                      
                      foreach ($_POST as $key => $value) {
                        //alors tu me Convertit les caractères en HTML
                          $_POST[$key] = htmlentities(addslashes($value)); 
                      }
                      //$_GET récupéres dans l'URL et donc si il existe _GET exp et que $GET exp est égal à updat
                      if(isset($_GET['exp']) && $_GET['exp'] == 'update'){
                        
                        execute_requete("UPDATE experience SET nom='$_POST[nom]',date='$_POST[date]',lieu='$_POST[lieu]',description='$_POST[description]',photo='$_POST[photo]' WHERE id_experience ='$_GET[id_experience]'");
                        //alors tu me fais un execute requete: modifie les lignes dans la bdd tout en modifiant les caractères spéciaux

                        header('location:TabExperience.php');

                      }else{

                        execute_requete("INSERT INTO experience(nom, date,lieu, description,photo) VALUES('$_POST[nom]','$_POST[date]','$_POST[lieu]','$_POST[description]','$_POST[photo]')");
                        debug($_GET);
                        header('location:TabExperience.php');

                      }
                    }
                    if(isset($_GET['exp']) && $_GET['exp'] == 'update'){

                      $r = execute_requete("SELECT * FROM experience WHERE id_experience='$_GET[id_experience]'");
                      
                      $experiences = $r->fetch(PDO::FETCH_ASSOC);
                    
                    }
                    // variables à modifier
                    $nom = (isset($experiences['nom'])) ? $experiences['nom'] :'';
                    $date = (isset($experiences['date'])) ? $experiences['date'] :'';
                    $lieu = (isset($experiences['lieu'])) ? $experiences['lieu'] :'';
                    $description = (isset($experiences['description'])) ? $experiences['description'] :'';
                    $photo = (isset($experiences['photo'])) ? $experiences['photo'] :'';
                    ?>
            </tbody> <!-- fin du coprs du tableau -->
          </table> <!-- fin du tableau -->
        </div> <!-- card-body -->
      </div> <!-- card mb-3 -->

                    <?php
                      if(isset($_GET['exp']) && ($_GET['exp'] == 'new' || $_GET['exp'] == 'update' )) : 
                      //debug($_GET);
                      if(isset($_GET['id_experience'])){ // si l'id_experience est présent dans l'URL
                        $r = execute_requete("SELECT * FROM experience WHERE id_experience ='$_GET[id_experience]'");
                
                        $experiences_actuel = $r->fetch(PDO::FETCH_ASSOC);
                        //debug($experiences_actuel);
                      }
                    ?>
          
<form method="post">
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom" class="form-control" value="<?=$nom?>"><br><br>

    <label for="date">Date</label><br>
    <input type="text" name="date" id="date" class="form-control" value="<?=$date?>"><br><br>

    <label for="lieu">Lieu</label><br>
    <input type="text" name="lieu" id="lieu" class="form-control" value="<?=$lieu?>"><br><br>

    <label for="description">Description</label><br>
    <textarea name="description" id="description" cols="122" rows="10"><?=$description?></textarea><br><br>

    <label for="photo">Photo</label><br>
    <input type="text" name="photo" id="photo" class="form-control" value="<?=$photo?>"><br><br>

    <input type="submit" class="btn btn-secondary" value="Envoyer">
</form>

        <?php endif ?>
     </div> <!-- fin container-fluid -->
  </div> <!-- fin content-wrapper --> 
      
 <?php require_once('../../inc/adminFooter.inc.php'); ?>