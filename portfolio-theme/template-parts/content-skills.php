<?php

 //Advance custom_fields for My Skill section
 $my_skill_section_title = get_field('my_skill_section_title');
 $my_skill_section_image = get_field('my_skill_section_image');
 

?>


<!----======================
      Skill Section
==========================--->
<section id="skill">
  <div class="container">
   <div class="row">
    <div class="col-md-6 col-sm-6 col-12">
      <div class="skill-img">
        
<?php if(!empty($my_skill_section_image)) : ;?>

<img src="<?php echo $my_skill_section_image[url] ; ?>" class="img-responsive" alt="<?php echo $my_skill_section_image[alt] ; ?>">

<?php endif;?>  

      </div><!--/.[skill-img]-->
    </div><!--/.[col]-->
    <div class="col-md-6 col-sm-6 col-12">
      <div id="skill-bar-wrapper">
            <h4 class="text-center"><?php echo $my_skill_section_title?></h4>
            <div class="text-left">
           
            <?php
                      $loop = new WP_query( array(
                    'post_type' => 'my_skill',
                    'orderby' => 'post_id',
                    'order' => 'ASC'
                ));?>

                    
           <?php 
          

           while( $loop->have_posts() ):   $loop->the_post();   ?>

            <!-- html -->
              <p><?php the_title();?></p>

              <span style="float:right;"><?php the_field('my_skill_bar_percentages');?></span>
              <div class="skillbar-container clearfix" data-percent="<?php the_field('my_skill_bar_percentages');?>">
                <div class="skills" style="background: #222;"></div>
              </div>

          <?php endwhile; wp_reset_query(); ?>

           
            </div><!---/.[text-left]-->
          </div><!--/.[skill-bar-wrapper]-->
        </div><!---/.[COL-MD-6 ]-->
   </div><!--/.[row]-->
  </div><!--/.[container]-->
</section><!--/.[section-skill]-->
