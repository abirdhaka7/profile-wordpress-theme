<?php
/**
 * Template Name: Contact Page                 
 *
 */

get_header(); ?>


<!----======================
  Contact section
==========================--->
<section id="contact">
   <div class="container">
      <div class="contact-text text-center">
        <h1>Contact me</h1>
        <p>Fell free to contact me, anytime?</p>
    </div><!---/.[CONTACT-TEXT]-->
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
             <div class="divider-left"></div><!--/.divider-->
              <div class="contact-left-div">
              <div class="form-content">
                  
<?php  while( have_posts() ) : the_post() ;?>

<?php the_content();?>


<?php endwhile;?>

              </div><!--/.[form-content]-->
             </div><!--/.[contact-left-div]-->
          </div><!--/.[col]-->
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              
                <div class="divider-right"></div><!--/.divider-->
              <div class="address">
                <div class="address-content">
                    <a href="#"><i class="far fa-envelope"></i>
                      abirdhaka7@gmail.com</a>
                      <hr>
                    <a href="#"><i class="fas fa-map-marker-alt"></i>xxx kadamtala, Dhaka-1214.</a>
                    <hr>
                    <a href="#"><i class="fas fa-phone-square"></i>+8801676239690</a>
                    <hr>
                </div><!--/.address-content-->
              </div><!--/.address-->
            </div><!--/.col-->
        </div><!--[row]-->
     </div><!--/.[container]-->
</section><!--/.[section-contact]-->





<?php get_footer();?>


