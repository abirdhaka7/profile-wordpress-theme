<?php
 //Advance custom_fields for banner section
 $banner_title        = get_field('section_banner_title');
 $banner_button_1     = get_field('section_banner_button_1');
 $banner_button_1_url = get_field('section_banner_button_1_url');
 $banner_button_2     = get_field('section_banner_button_2');
 $banner_button_2_url = get_field('section_banner_button_2_url');
 $banner_social_icon_url_facebook   = get_field('facebook');
 $banner_social_icon_url_instagram  = get_field('instagram');
 $banner_social_icon_url_github     = get_field('github');
 $banner_social_icon_url_twitter    = get_field('twitter');
 $banner_social_icon_url_linked_in  = get_field('linked_in');
 $banner_img                        = get_field('banner_section_img');

?>
<!----======================
      Banner section
==========================--->

<section id="banner">  
<div id="banner-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="banner-pic">
        
         <!-- <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/cartoon.png" class="img-responsive" alt="cartoon"> -->
        
         <?php if(!empty($banner_img)) :;?>
         <img src="<?php echo $banner_img[url]?>" alt="<?php echo $banner_img[alt]?>">
          
<?php endif;?>

        </div>
      </div><!--/.[col]-->
      <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="banner-content">
               <p id="animate-text">
                  <span >
                      <!-- HI! I'm Abir Hasan Himel. -->
                      <?php echo $banner_title;?>
                  </span>
               </p>
              <h1>
                <span class="typing"></span>
              </h1>  
              <div class="banner-button">
                  <a href="<?php echo $banner_button_1_url;?>" class="button Explore"><?php echo $banner_button_1;?></a>
                  <a href="<?php echo $banner_button_2_url;?>" class="button contact-me"><?php echo $banner_button_2;?></a>
              </div><!--[banner-button]-->

              <div class="social-icon">
                <ul>
                  <li><a href="<?php echo $banner_social_icon_url_facebook?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="<?php echo $banner_social_icon_url_instagram?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  <li> <a href="<?php echo $banner_social_icon_url_github?>" target="_blank"><i class="fab fa-github"></i></a></li>
                  <li><a href="<?php echo $banner_social_icon_url_twitter?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="<?php echo $banner_social_icon_url_linked_in?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div><!---/.[social-cion]-->
         </div><!--/.[banner-content]-->
       </div><!--/.[col]-->
  </div><!---/.[row]-->
</div><!---/.[container]-->
</div><!---/.[banner-bg]-->
</section><!--/.[section-banner]-->
