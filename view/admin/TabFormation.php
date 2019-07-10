<?php require_once('../../inc/init.inc.php'); ob_start();
require_once('../../inc/adminHeader.inc.php');
$r = execute_requete("SELECT * FROM formation");?>

<div id="content-wrapper">
    <div class="container-fluid">
      <!-- DataTables Example -->
      <div class="card mb-3">
          <div class="card-header" style="margin-left: 37%; margin-bottom: 16px;">
               <i class="fas fa-table"></i>
                  TABLEAU DES FORMATIONS</div>
          <div class="card-body">
              <div class="table-responsive">
                  <button type="button" class="btn btn-success" ><a href="?form=new" style="color:white;">Ajouter une formation</a></button><br>
              <!-- Tableau -->
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <?php
                          // Supression des compétences :
                          if(isset($_GET['form']) && $_GET['form'] == 'delete'){ // si il y a une 'action' dans l'URL et que c'est égale à 'suppression'

                            execute_requete("DELETE FROM formation WHERE id_formation='$_GET[id_formation]'");

                            header('location:TabFormation.php');
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
                      <?php while($formations = $r->fetch(PDO::FETCH_ASSOC)) { //fait écho à $formations du controller ?>
                        <tr>
                          <?php foreach($formations as $indice => $formation) : ?>
                          <td><?php echo $formation; ?></td>
                      <?php endforeach; ?>
                      <td>
                          <button type="button" class="btn btn-success">
                              <a href="?form=delete&id_formation=<?php echo $formations['id_formation']; ?>" style="color:white;">
                                  Supprimer
                              </a>
                          </button>
                      </td>
                      <td>
                          <button type="button" class="btn btn-success">
                              <a href="?form=update&id_formation=<?php echo $formations['id_formation']; ?>" style="color:white;">
                                  Modifier
                              </a>
                          </button>
                      </td>
                  </tr>
                      <?php } 

                      if(!empty($_POST)){ // si le formulaire n'est pas vide et qu'il ya des infos dedans
                        
                        foreach ($_POST as $key => $value) {
                            $_POST[$key] = htmlentities(addslashes($value)); //alors tu me Convertit les caractères en HTML
                        }

                        if(isset($_GET['form']) && $_GET['form'] == 'update'){
                          //$_GET récupéres dans l'URL
                          // si il existe _GET form et que $GET form est égal à update 

                          execute_requete("UPDATE formation SET nom='$_POST[nom]',date='$_POST[date]',lieu='$_POST[lieu]',description='$_POST[description]' WHERE id_formation ='$_GET[id_formation]'");
                          //alors tu me fais un execute requete: modifie les lignes dans la bdd tout en modifiant les caractères spéciaux

                          header('location:TabFormation.php');

                        }else{

                          execute_requete("INSERT INTO formation(nom, date,lieu, description) VALUES('$_POST[nom]','$_POST[date]','$_POST[lieu]','$_POST[description]')");
                          debug($_GET);
                          header('location:TabFormation.php');

                        }
                      }
                      
                      if(isset($_GET['form']) && $_GET['form'] == 'update'){

                        $r = execute_requete("SELECT * FROM formation WHERE id_formation='$_GET[id_formation]'");
                        
                        $experiences = $r->fetch(PDO::FETCH_ASSOC);
                      
                      }

                      $nom = (isset($experiences['nom'])) ? $experiences['nom'] :'';
                      $date = (isset($experiences['date'])) ? $experiences['date'] :'';
                      $lieu = (isset($experiences['lieu'])) ? $experiences['lieu'] :'';
                      $description = (isset($experiences['description'])) ? $experiences['description'] :'';
                      ?>
                  </tbody>
              </table>
          </div> <!-- card-body -->
        </div> <!-- card mb-3 -->

                      <?php
                      if(isset($_GET['form']) && ($_GET['form'] == 'new' || $_GET['form'] == 'update' )) : 
                      //debug($_GET);
                      if(isset($_GET['id_formation'])){ // si l'id_experience est présent dans l'URL
                        $r = execute_requete("SELECT * FROM formation WHERE id_formation ='$_GET[id_formation]'");
                
                        $formations_actuel = $r->fetch(PDO::FETCH_ASSOC);
                        //debug($eformations_actuel);
                    }
                      ?>

<form method="post">
    <label for="nom">Nom</label><br>
    <input type="text" name="nom" id="nom" class="form-control" value="<?=$nom?>"><br><br>

    <label for="date">date</label><br>
    <input type="text" name="date" id="date" class="form-control" value="<?=$date?>"><br><br>

    <label for="lieu">lieu</label><br>
    <input type="text" name="lieu" id="lieu" class="form-control" value="<?=$lieu?>"><br><br>

    <label for="description">Description</label><br>
    <textarea name="description" id="description" cols="122" rows="10"><?=$description?></textarea><br><br>

    <input type="submit" class="btn btn-secondary" value="Envoyer">
</form>

<?php endif ?>
        </div>
      </div>
      <!-- /.container-fluid -->

      <?php require_once('../../inc/adminFooter.inc.php'); ?>