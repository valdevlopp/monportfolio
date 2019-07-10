<?php require_once('inc/header.inc.php'); ?>


<section id="info" class="info-section">
<div class="container text-xs-center">
         <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2 class="entete"><span class="highlight-text">Formation</span></h2>
                    <p class="col-md-8 offset-md-2">Des études dans le domaine du juridique m'ont permise d'acquérir rigueur et méthode.</p>
                </div>
                    
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline4">
            <?php foreach ($formations as $formation) {
            $id = $formation->id_formation;

            if (($id % 2) == 0 ) {
        ?>
                        <div class="timeline wow fadeInLeft">
                            <a href="#" class="timeline-content">
                                <span class="year"><?php echo $formation->date; ?></span>
                                <div class="inner-content">
                                    <h3 class="title"><?php echo $formation->nom; ?></h3>
                                    <p class="description">
                                    <?php echo $formation->description; ?>
                                    </p>
                                </div>
                            </a>
                        </div>
            <?php } else { ?>
                        <div class="timeline wow fadeInRight">
                            <a href="#" class="timeline-content">
                                <span class="year"><?php echo $formation->date; ?></span>
                                <div class="inner-content">
                                    <h3 class="title"><?php echo $formation->nom; ?></h3>
                                    <p class="description">
                                    <?php echo $formation->description; ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <?php } } ?>
                    </div> <!-- div main-timeline4 -->
                </div> <!-- div col md12 -->
            </div> <!-- div row timleline -->
        </div> <!-- div container timeline -->
    </div>    <!-- div container text-xs-center -->
</section> <!-- fin de la section -->

<?php require_once('inc/footer.inc.php'); ?>