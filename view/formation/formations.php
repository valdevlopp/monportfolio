<?php require_once('inc/header.inc.php'); ?>


<section id="info" class="info-section">
<div class="container text-xs-center">
         <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">Formation</span></h2>
                    <p class="col-md-8 offset-md-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
                </div>
                    
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline4">
            <?php foreach ($formations as $formation) {
            $id = $formation->id_formation;

            if (($id % 2) == 0 ) {
        ?>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="year"><?php echo $formation->date; ?></span>
                                <div class="inner-content">
                                    <h3 class="title"><?php echo $formation->nom; ?></h3>
                                    <p class="description">
                                    <?php echo $formation->description; ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
                                    </p>
                                </div>
                            </a>
                        </div>
            <?php } else { ?>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="year"><?php echo $formation->date; ?></span>
                                <div class="inner-content">
                                    <h3 class="title"><?php echo $formation->nom; ?></h3>
                                    <p class="description">
                                    <?php echo $formation->description; ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ex odio, rhoncus sit amet tincidunt eu, suscipit a orci. In suscipit quam eget dui auctor.
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