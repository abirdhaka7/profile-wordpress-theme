<?php

?>

<?php $loop = new WP_query( array(
          
          'post_type' => 'contact',
          'orderby' => 'post_id',
          'order' => 'ASC'

     ));
     ?>
<!----======================
  Contact section
==========================--->
<section id="contact">
   <div class="container">
      <div class="contact-text text-center">
        

<?php  while( $loop->have_posts() ) : $loop->the_post() ;?>

        <h1><?php the_title();?></h1>
        <p><?php the_field('contact_section_text');?></p>

    </div><!---/.[CONTACT-TEXT]-->
      <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
             <div class="divider-left"></div><!--/.divider-->
              <div class="contact-left-div">
              <div class="form-content">
         

<?php the_content();?>

<?php the_field('what_can_i_do_feature_icon');?>

              </div><!--/.[form-content]-->
             </div><!--/.[contact-left-div]-->
          </div><!--/.[col]-->
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              
                <div class="divider-right"></div><!--/.divider-->
              <div class="address">
                <div class="address-content">
                    <a href=""><i class="far fa-envelope"></i>
                    <?php the_field('static_email');?></a>
                      <hr>
                    <a href=""><i class="fas fa-map-marker-alt"></i><?php the_field('static_location');?></a>
                    <hr>
                    <a href=""><i class="fas fa-phone-square"></i><?php the_field('static_phone_number');?></a>
                    <hr>
                </div><!--/.address-content-->

                
<?php endwhile; wp_reset_query();?>

              </div><!--/.address-->
            </div><!--/.col-->
        </div><!--[row]-->
     </div><!--/.[container]-->
</section><!--/.[section-contact]-->



