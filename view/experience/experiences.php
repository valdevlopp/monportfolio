<?php require_once('inc/header.inc.php'); ?>

<section id="services" class="section-wrapper">
    <div class="container">
        <div class="row">
            <!-- Section Header -->
            <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                <h2><span class="highlight-text">Experiences</span></h2>
                <p class="col-md-8 offset-md-2">
                    Un parcours athypique qui m'a permise d'aquérir de nombreuses compétences et d'enrichir mes savoirs afin de me réaliser pleinement en tant que développeuse.
                    </p>
            </div>
            <!-- Section Header End -->

            <div class="our-services">
                <div class="row">
                    <?php foreach ($experiences as $experience) : ?>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-xs-center wow fadeInDown" data-wow-delay=".2s">
                        <div class="service-box">
                            <div class="icon">
                                <h3><?php echo $experience->nom; ?></h3>
                                <h5><?php echo $experience->lieu; ?> | <?php echo $experience->date; ?></h5>
                            </div> 
                            <p><?php echo $experience->description;?></p>
                            <img src="<?php echo $experience->photo; ?>" alt="image">

                           
                            
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div> 
        </div>
    </div>
</section> 