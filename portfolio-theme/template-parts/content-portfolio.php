<?php
 //Advance custom_fields for Portfolio section
 $portfolio_section_title = get_field('portfolio_section_title');
 $portfolio_section_text = get_field('portfolio_section_text');
?>


<!----======================
 Portfolio you section
==========================--->
<section id="Portfolio">
  <div class="container">
      <div class="portfolio-text text-center">
          <h1><?php echo $portfolio_section_title?></h1>
          <p><?php echo $portfolio_section_text?></p>
      </div><!--/.[portfolio-text]-->
    <div class="row">

          <?php $loop = new WP_query( array(

                      'post_type' => 'portfolio',
                      'orderby' => 'post_id',
                      'order' => 'ASC'
                  ));
              ?>

<?php while( $loop->have_posts() ) : $loop->the_post () ;?>

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="portfolio-img">  

          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail( array(300, 400));
                };
          ?>
            

                <div class="portfolio-overlay"></div>     
                <div class="portfolio-link">
                  <a href="<?php the_field('portfolio_links_1'); ?>"><i class="fas fa-link"></i></a>
                 
                  <a href="<?php the_field('portfolio_links_1'); ?>"><i class="fab fa-google-plus-g"></i></a>
                </div> <!--/.service-img-link--> 
            </div><!--/.[portfolio-img]-->
      </div><!--/.[col]-->

<?php endwhile; ?>

    </div><!--/.[row]-->
  </div><!--/.[container]-->
</section><!--/.[section-portfolio]-->
