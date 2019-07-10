<!-- PORTFOLIO -->

<section id="portfolio" class="bgSection portfolio-section">
        <div class="container">
            <div class="row">

                <!-- Section Header -->
                <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                    <h2><span class="highlight-text">Portfolio</span></h2>
                   
                    <p class="col-md-8 offset-md-2">Réalisation de sites web dynamiques et d'intégrations</p>
                </div>
                <!-- Section Header End -->

            </div>
        </div>

        <!-- Works -->
        <div class="portfolio-works wow fadeIn" data-wow-duration="2s">

            <!-- Filter Button Start -->
            <div id="portfolio-filter" class="portfolio-filter-btn-group">
                <ul>
                    <li>
                        <a href="#" class="selected" data-filter="*">TOUT</a> 
						<a href="#" data-filter=".web">E-commerce</a> 
						<a href="#" data-filter=".seo">Intégration</a> 
						<a href="#" data-filter=".works">Vitrine</a> 
						<a href="#" data-filter=".brands">CV</a> 
                    </li>
                </ul>
            </div>
            <!-- Filter Button End -->

            <div class="portfolio-items">

                <!-- Portfolio Items -->
                <div class="item portfolio-item web seo">
                    <img src="public/images/img-portfolio/graphisme.png" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                <!-- <a href="projets/ma_boutique/maboutique.html" target="_blank"> -->
                                    <li class="lighbox"><a href="public/images/img-portfolio/graphisme.png" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                <!-- </a> -->
                                    </ul>
                                </div>
                        </div>
                    </div>
            </div>
                <!-- Portfolio Items End -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item works seo">

                    <img src="public/images/img-portfolio/resto.jpg" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="public/images/img-portfolio/resto.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item web">

                    <img src="public/images/img-portfolio/boutique.jpg" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="public/images/img-portfolio/boutique.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item web works brands">

                    <img src="public/images/img-portfolio/jurassic.png" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="public/images/img-portfolio/jurassic.png" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Items -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item web brands">

                   <img src="public/images/img-portfolio/licorne.png" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="public/images/img-portfolio/licorne.png" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item works seo">

                    <img src="public/images/img-portfolio/manga.png" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="public/images/img-portfolio/manga.png" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->

                <div class="item portfolio-item brands seo">

                    <img src="public/images/img-portfolio/gite.png" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="public/images/img-portfolio/gite.png" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->

                <!-- Portfolio Items -->
                <div class="item portfolio-item web seo works">

                    <img src="public/images/img-portfolio/portfolio2.jpg" alt="">
                    <div class="portfolio-details-wrapper">
                        <div class="portfolio-details">
                            <div class="portfolio-meta-btn">
                                <ul class="work-meta">
                                    <li class="lighbox"><a href="public/images/img-portfolio/portfolio8.jpg" class="featured-work-img"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Portfolio Items End -->
            </div>
        </div>
        <!-- Works End -->
    </section>
    <!-- PORTFOLIO END -->


<!-- CONTACT -->

<?php
if(isset($_POST['email']) and isset($_POST['nom']) and isset($_POST['message'])){
   $destinataire = 'vlemaitreweb@gmail.com';
   $email = htmlentities($_POST['email']);
   if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',str_replace('&amp;','&',$email))){
       $nom = 'Contact: '.stripslashes($_POST['nom']);
       $message = stripslashes($_POST['message']);
       $headers = "From: <".$email.">\n";
       $headers .= "Reply-To: ".$email."\n";
       $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
       if(mail($destinataire,$nom,$message,$headers)){
           echo "<strong>Votre message a bien &eacute;t&eacute; envoy&eacute;.</strong>";
       }
       else{
           echo "<strong style=\"color:#ff0000
;\">Une erreur c'est produite lors de l'envois du message.</strong>";
       }
   }
   else{
       echo "<strong style=\"color:#ff0000
;\">L'email que vous avez entr&eacute; est invalide.</strong>";
   }
}
else{
?>

<section id="contact" class="section-wrapper contact-section col-md-8 offset-md-2" data-stellar-background-ratio="0.5">
    <div class="parallax-overlay"></div>
         
    <div class="container">
        <div class="row">
            <!-- Section Header Contact-->
            <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                <h2 class="entete"><span class="highlight-text">Me contacter</span></h2>
                <p class="col-md-8 offset-md-2">Laissez moi un message pour davantage de renseignements sur mon parcours.</p>
            </div> 
            <!-- Section Header Contact End -->

            <div class="contact-details">
                <!-- Contact Form -->
                <div class="contact-form wow bounceInRight"> 
                    <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
                    <form name="sentMessage" id="contactForm"  novalidate>  
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Nom" name="nom" id="name" required data-validation-required-message="Please enter your name" />
                                <p class="help-block"></p>
                            </div> 	

                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required data-validation-required-message="Please enter your email" />
                            </div> 	
                        </div> <!-- fin div row -->


                        <div class="row">
                            <div class="col-md-12">
                                <textarea rows="10" cols="100" class="form-control" placeholder="Message" name="message" id="message" required data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" maxlength="999" style="resize:none"></textarea>
                            </div> 	
                        </div>
            
                        <div class="col-md-8 offset-md-2"><br><div id="success"> </div>
                        <button type="submit" class="btn btn-primary">Envoyez votre message</button></div> 
                    </form>
                </div>
            </div> <!--fin div contact-details-->
        </div> <!-- Fin div row -->
    </div> <!-- fin div container -->
</section> <!-- fin de section -->
<?php } ?>
<!-- Contact Section End -->


<!--FOOTER -->
<section class="footer-container">
        <div class="container">
            <div class="row footer-containertent">
                <div class="col-md-4">
                    <h4 class="citation-footer">Se réaliser professionnellement</h4>
                    <p class="paraf-footer">La seule manière de faire du bon travail <br>c'est d'aimer ce que vous faites.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="citation-footer">La persévérance</h4>
                    <p class="paraf-footer">La rigueur vient toujours à bout de l'obstacle.</p>
                </div>
                <div class="col-md-4">
                    <h4 class="citation-footer">Aller au bout de ses rêves</h4>
                    <p class="paraf-footer">Ne jamais renoncer, ne jamais faire semblant, ne jamais rester immobile, ne jamais s'accrocher au passé, ne jamais s'arrêter de rêver.</p>
                </div>
            </div>
        </div>
    </section>

<footer>

<div class="container">
    <div class="row">
        <div class="footer-containertent col-md-4 offset-md-4">
            <ul class="footer-social-info">
                <li>
                    <a href="https://www.linkedin.com/in/vlemaitre-journaliste-web" target="_blank"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/valerielemaitrelemoult" target="_blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://www.viadeo.com/p/0028in2i47fpa7h" target="_blank"><i class="fa fa-viadeo"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="col-md-6 offset-md-3">
        <p>Copyright © 2018. <a target="_blank" href="https://webthemez.com/tag/free" target="_blank">Free Website Template</a> by WebThemez.com. All rights reserved</p>
    </div>
</div>
</footer>
<!-- Footer End -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="public/js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="public/js/modernizr.min.js"></script>
<script src="public/js/jquery.easing.1.3.js"></script>
<script src="public/js/jquery.scrollUp.min.js"></script>
<script src="public/js/jquery.easypiechart.js"></script>
<script src="public/js/isotope.pkgd.min.js"></script>
<script src="public/js/jquery.fitvids.js"></script>
<script src="public/js/jquery.stellar.min.js"></script>
<script src="public/js/jquery.waypoints.min.js"></script>
<script src="public/js/wow.min.js"></script>
<script src="public/js/jquery.nav.js"></script>
<script src="public/js/imagesloaded.pkgd.min.js"></script>
<script src="public/js/smooth-scroll.min.js"></script>
<script src="public/js/jquery.magnific-popup.min.js"></script>
<script src="public/js/jquery.sliderPro.min.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/contact/jqBootstrapValidation.js"></script>
<script src="public/contact/contact_me.js"></script>
<script src="public/js/custom.js"></script>
       
    </body>
</html>