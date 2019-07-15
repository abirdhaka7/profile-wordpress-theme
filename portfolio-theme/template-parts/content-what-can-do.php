<?php

 //Advance custom_fields for What can id do section
 $what_can_i_do_section_title = get_field('what_can_i_do_section_title');
 $what_can_i_do_section_text = get_field('what_can_i_do_section_text');
 $what_can_i_do_feature_icon = get_field('what_can_i_do_feature_icon');
 

?>


<!----======================
What can i do for you section
==========================--->

<section id="service">
  <div class="service-heading">
   <h2><?php echo $what_can_i_do_section_title;?></h2>
     <p><?php echo $what_can_i_do_section_text;?></p>
     </div>
   <div class="container">
     <div class="row">

     <?php $loop = new WP_query( array(
          
          'post_type' => 'what_can_i_do_sec',
          'orderby' => 'post_id',
          'order' => 'ASC'

     ));
     ?>

     <?php while( $loop->have_posts() ) : $loop->the_post () ;?>


        <div class="col-md-6 col-xl-3 col-sm-6 col-12">
        <div class="service-div text-center">
            <div class="banner-service">
                <div class="service-content-box text-center">
                    <div class="service-content-icon">
                      <span><i class="<?php the_field('what_can_i_do_feature_icon');?>"></i></span>
                    </div>
                    <h4><?php the_title();?></h4>
                    <p><?php the_content();?>
                    </p>
                </div><!--/.[service-content-box]-->
              </div><!--/.[banner-service]-->
          </div><!---/.[service-div]-->
        </div><!--/.[col]-->

    <?php endwhile; wp_reset_query(); ?>
    
    </div><!---/.[row]-->
   </div><!---/.[container]-->
 </section><!--/.[section-service]-->

 