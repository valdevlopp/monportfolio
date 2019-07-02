<?php require_once('inc/header.inc.php'); ?>

<section id="competences" class="menus style3">
                <div class="container"> 
                    <div class="row"> 
        <!-- Section Header -->
        <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
            <h2><span class="highlight-text">Compétences</span></h2>
            
            <p class="col-md-8 offset-md-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
        </div>
        <!-- Section Header End -->
				
        <div class="menus-container"> 
                <!-- menu --> 
                    <div class="menu row">
                        <?php foreach ($competences as $competence) {
                            $id = $competence->id_competence;

                            if (($id %2) == 0 ) {
                        ?>
                        <div class="col-md-6 wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
                            <div class="menu-column">
                                <div class="food" style="width: 100%;">
                                    <div class="food-desc">
                                        <h6 class="food-name"><?php echo $competence->description; ?></h6>
                                        <div class="dots"></div>
                                        <div class="food-details">
                                            <span><?php echo $competence->niveau; ?></span>
                                        </div><!-- /food-details -->
                                    </div><!-- /food-desc -->
                                    <div class="food-price">
                                        <span><?php echo $competence->nom; ?></span>
                                    </div><!-- /food-price -->
                                </div><!-- /food -->
                            </div><!-- /menu-column -->
                        </div><!-- /col-md-6 -->
                        <?php } else { ?>
                            <div class="col-md-6 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                            <div class="menu-column">
                                <div class="food" style="width: 100%;">
                                    <div class="food-desc">
                                        <h6 class="food-name"><?php echo $competence->description; ?></h6>
                                        <div class="dots"></div>
                                        <div class="food-details">
                                            <span><?php echo $competence->niveau; ?></span>
                                        </div><!-- /food-details -->
                                    </div><!-- /food-desc -->
                                    <div class="food-price">
                                        <span><?php echo $competence->nom; ?></span>
                                    </div><!-- /food-price -->
                                </div><!-- /food -->
                            </div><!-- /menu-column -->
                        </div><!-- /col-md-6 -->
                        <?php } } ?>
                    </div><!-- /row -->
                    </div><!-- /menu-carousel -->
        </div><!-- /menus-container --> 
    </div><!-- /container -->
</section>