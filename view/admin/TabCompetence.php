<?php require_once('../../inc/init.inc.php');
ob_start();
require_once('../../inc/adminHeader.inc.php');
$r = execute_requete("SELECT * FROM competence");
?>

<div id="content-wrapper">
    <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header" style="margin-left: 37%; margin-bottom: 16px;">
                  <i class="fas fa-table"></i>
                        TABLEAU DES COMPETENCES
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <button type="button" class="btn btn-success" >
                          <a href="?op=new" style="color:white;">Ajouter une compétence
                          </a>
                    </button><br>
            <!-- En-tête du Tableau -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <!-- définit un ensemble de lignes qui définit l'en-tete des colonnes du tableau -->
                <thead>
                    <!-- ligne du tableau -->
                    <tr>

                  <?php
                  // Supression des compétences :
                  if(isset($_GET['op']) && $_GET['op'] == 'delete'){ // si il y a une 'action' dans l'URL et que c'est égale à 'suppression'

                    execute_requete("DELETE FROM competence WHERE id_competence='$_GET[id_competence]'");

                    header('location:TabCompetence.php');
                  }
                    for ($i = 0; $i < $r->columnCount(); $i++) {
                    //debug($r);

                    $colonne = $r->getColumnMeta($i);
                  ?>
                        <th style="text-align: center;"><?php echo $colonne['name'];?></th>

                  <?php } ?>

                        <th colspan="2" style="text-align: center;">action</th>
                    </tr>
                </thead>
              
                <!-- Regroupe les tr pour former le corps du tableau -->
                <tbody>
                        <?php while($competences = $r->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <?php foreach($competences as $indice => $competence) : ?>
                    
                    <!-- cellule interne du tableau -->
                        <td style="text-align: center;"><?php echo $competence; ?></td>
                            <?php endforeach; ?>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-success">
                                <a href="?op=delete&id_competence=<?php echo $competences['id_competence']; ?>" style="color:white;">
                                    Supprimer
                                </a>
                            </button>
                        </td>
                        <td style="text-align: center;">
                            <button type="button" class="btn btn-success">
                                <a href="?op=update&id_competence=<?php echo $competences['id_competence']; ?>" style="color:white;">
                                    Modifier
                                </a>
                            </button>
                        </td>
                    </tr>
                            <?php } 

            // récupère les infos dans ma base de données
            if(!empty($_POST)){ // si le formulaire n'est pas vide et qu'il ya des infos dedans
              
              foreach ($_POST as $key => $value) {
                  $_POST[$key] = htmlentities(addslashes($value)); //alors tu me Convertit les caractères en HTML
              }
              //$_GET récupéres dans l'URL, si il existe _GET op et que $GET op est égal à update
              if(isset($_GET['op']) && $_GET['op'] == 'update'){
                 
                execute_requete("UPDATE competence SET nom='$_POST[nom]',niveau='$_POST[niveau]',description='$_POST[description]' WHERE id_competence ='$_GET[id_competence]'");
                //alors tu me fais un execute requete: modifie les lignes dans la bdd tout en modifiant les caractères spéciaux

                header('location:TabCompetence.php');

              }else{

                execute_requete("INSERT INTO competence(nom, niveau, description) VALUES('$_POST[nom]','$_POST[niveau]','$_POST[description]')");
                debug($_GET);
                header('location:TabCompetence.php');

              }
            }
            // modifie les données dans mon tableau et ma base de donnée.
            if(isset($_GET['op']) && $_GET['op'] == 'update'){

              $r = execute_requete("SELECT * FROM competence WHERE id_competence='$_GET[id_competence]'");
              
              $competences = $r->fetch(PDO::FETCH_ASSOC);
            }
              // variables à modifier
              $nom = (isset($competences['nom'])) ? $competences['nom'] :'';
              $niveau = (isset($competences['niveau'])) ? $competences['niveau'] :'';
              $description = (isset($competences['description'])) ? $competences['description'] :'';
            ?>
                </tbody>
            </table>
          </div> <!-- card-body -->
      </div> <!-- card mb-3 -->

          <?php
          
            if(isset($_GET['op']) && ($_GET['op'] == 'new' || $_GET['op'] == 'update' )) : 
            //debug($_GET);
            if(isset($_GET['id_competence'])){ // si l'id_competence est présent dans l'URL
              $r = execute_requete("SELECT * FROM competence WHERE id_competence ='$_GET[id_competence]'");
      
              $competences_actuel = $r->fetch(PDO::FETCH_ASSOC);
              //debug($competences_actuel);
          }
            ?>

<form method="post">
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom" class="form-control" value="<?=$nom?>"><br><br>

    <label for="niveau">Niveau</label><br>
    <input type="text" name="niveau" id="niveau" class="form-control" value="<?=$niveau?>"><br><br>

    <label for="description">Description</label><br>
    <textarea name="description" id="description" cols="122" rows="10"><?=$description?></textarea><br><br>

    <input type="submit" class="btn btn-secondary" value="Envoyer"> 
</form>

        <?php endif ?>
    </div> <!-- fin container-fluid -->
</div> <!-- fin content-wrapper --> 

<?php require_once('../../inc/adminFooter.inc.php'); ?>