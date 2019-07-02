<?php
//var_dump($_POST);
require_once('../../inc/init.inc.php'); ob_start();
require_once('../../inc/adminHeader.inc.php');
$r = execute_requete("SELECT * FROM experience");?>

  <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Tableau de bord</a>
          </li>
          <li class="breadcrumb-item active">Parcours</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           Tableau des expériences</div>
          <div class="card-body">
            <div class="table-responsive">
            <button type="button" class="btn btn-success" ><a href="?exp=new" style="color:white;">Ajouter une expérience</a></button><br>
              
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>

                  <?php
                  // Supression des compétences :
                  if(isset($_GET['exp']) && $_GET['exp'] == 'delete'){ // si il y a une 'action' dans l'URL et que c'est égale à 'suppression'

                    execute_requete("DELETE FROM experience WHERE id_experience='$_GET[id_experience]'");

                    header('location:TabExperience.php');
                  }
                    for ($i = 0; $i < $r->columnCount(); $i++) {
                    //debug($r);

                    $colonne = $r->getColumnMeta($i);
                  ?>

                    <th><?php echo $colonne['name'];?></th>

                  <?php } ?>

                  <th colspan="2" style="text-align: center;">Action</th>
                  </tr>
              </thead>
              
              <tbody>
                <?php while($experiences = $r->fetch(PDO::FETCH_ASSOC)) { ?>
                  <tr>
                    <?php foreach($experiences as $indice => $experience) : ?>
                    <td><?php echo $experience; ?></td>
                <?php endforeach; ?>
                  <td>
                    <button type="button" class="btn btn-success">
                    <a href="?exp=delete&id_experience=<?php echo $experiences['id_experience']; ?>" style="color:white;">
                        Delete
                    </a>
                  </button>
                </td>
                <td>
                  <button type="button" class="btn btn-success">
                    <a href="?exp=update&id_experience=<?php echo $experiences['id_experience']; ?>" style="color:white;">
                        Edite
                    </a>
                  </button>
                </td>

              </tr>
            <?php } 


            if(!empty($_POST)){ // si le formulaire n'est pas vide et qu'il ya des infos dedans
              
              foreach ($_POST as $key => $value) {
                  $_POST[$key] = htmlentities(addslashes($value)); //alors tu me Convertit les caractères en HTML
              }

              if(isset($_GET['exp']) && $_GET['exp'] == 'update'){
                //$_GET récupéres dans l'URL
                // si il existe _GET exp et que $GET exp est égal à update 

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

            $nom = (isset($experiences['nom'])) ? $experiences['nom'] :'';
            $date = (isset($experiences['date'])) ? $experiences['date'] :'';
            $lieu = (isset($experiences['lieu'])) ? $experiences['lieu'] :'';
            $description = (isset($experiences['description'])) ? $experiences['description'] :'';
            $photo = (isset($experiences['photo'])) ? $experiences['photo'] :'';
            ?>

                </tbody>
              </table>
            </div>
          </div>
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

    <label for="date">date</label><br>
    <input type="text" name="date" id="date" class="form-control" value="<?=$date?>"><br><br>

    <label for="lieu">lieu</label><br>
    <input type="text" name="lieu" id="lieu" class="form-control" value="<?=$lieu?>"><br><br>

    <label for="description">Description</label><br>
    <input type="text" class="form-control" name="description" id="description" value="<?=$description?>" rows="3"><br><br>

    <label for="photo">photo</label><br>
    <input type="text" name="photo" id="photo" class="form-control" value="<?=$photo?>"><br><br>

    <input type="submit" class="btn btn-secondary" value="Envoyer">

</form>

<?php endif ?>
        </div>

      </div>
      <!-- /.container-fluid -->

      <?php require_once('../../inc/adminFooter.inc.php'); ?>