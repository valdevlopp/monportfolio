<?php require_once('../../inc/adminHeader.inc.php'); // pour nous connecter à la bdd 
?>

<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-4 col-sm-5 mb-5">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="mr-5"> COMPETENCES
                        </div><br><br> 
                        <div class="item-competence">
                          <img class="image-competence" src="../../public/images/team.jpg" alt="vue d'une équipe">
                        </div>
                    </div> <!-- fin card-body -->
                    <a class="card-footer text-white clearfix small z-1" href="TabCompetence.php">
                          <span class="float-left"> Voir le Détail
                          </span>
                          <span class="float-right">
                              <i class="fas fa-angle-right"></i>
                          </span>
                    </a>
                </div> <!-- card text-white -->
            </div> <!-- col -->
            <div class="col-xl-4 col-sm-5 mb-5">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-business-time"></i>
                        </div>
                        <div class="mr-7">EXPERIENCE
                            <div class="item-experience">
                              <img class="image-experience" src="../../public/images/developer.jpg" alt="vue d'une équipe">
                            </div>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="TabExperience.php">
                        <span class="float-left"> Voir le Détail
                        </span>
                        <span class="float-right">
                          <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div> <!-- card text-white -->
            </div> <!-- col -->
            <div class="col-xl-4 col-sm-5 mb-5">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="mr-7">FORMATION
                            <div class="item-formation">
                                <img class="image-formation" src="../../public/images/diplome.jpg" alt="vue d'une équipe">
                            </div>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="TabFormation.php">
                        <span class="float-left"> Voir le Détail
                        </span>
                        <span class="float-right">
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </a>
                </div> <!-- card text-white -->
            </div> <!-- col -->
    </div> <!-- FIN DE LA ROW -->
</div> <!-- FIN CONTAINER -->

<?php require_once('../../inc/adminFooter.inc.php'); ?>

