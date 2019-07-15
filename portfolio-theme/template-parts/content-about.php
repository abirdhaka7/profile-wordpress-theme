
<!----======================
  About me section
==========================--->
<?php

 //Advance custom_fields for About me section
 $about_me_section_title  = get_field('about_me_section_title');
 $about_me_section_text   = get_field('about_me_section_text');
 $about_me_button_title   = get_field('about_me_button_title');
 $about_me_button_url     = get_field('about_me_button_url');
 $about_me_feature_image  = get_field('about_me_section_feature_image');
 
?>
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="about-content">

          <h1><?php echo $about_me_section_title?></h1>

          <p><?php echo $about_me_section_text?></p>

          <a href="<?php echo $about_me_button_url?>" target="_blank" class="download-btn"><?php echo $about_me_button_title?></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="about-img text-center">
      
<?php if(!empty($about_me_feature_image)) : ;?>

<img src="<?php echo $about_me_feature_image[url] ; ?>" class="img-responsive" alt="<?php echo $about_me_feature_image[alt] ; ?>">

<?php endif;?>

      </div><!--/.[col]-->
    </div><!--/.[col]-->
    </div><!--/.[row]-->
  </div><!--/.[container]-->
</section><!--/.[section-about]-->

