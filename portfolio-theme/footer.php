<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>




<!--/.[jQuery first, then Popper.js, then Bootstrap JS ]-->
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery-3.4.1.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" >
</script><script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
<!--/.[animater typing text js file]-->
<script src="<?php bloginfo('template_directory');?>/assets/js/typed.min.js"></script>


<script>
    var typed = new Typed('.typing', {      
      // Waits 1000ms after typing "First"
      strings: ["<?php the_field('banner_typing_text_1');?>","<?php the_field('banner_typing_text_2');?>"],
      typeSpeed:80,
      loop:true,
      backSpeed:40,
      backDelay:1500,
    });
//animated skill bar
    $(window).scroll(function() {
    var hT = $('#skill-bar-wrapper').offset().top,
        hH = $('#skill-bar-wrapper').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
    if (wS > (hT+hH-1.4*wH)){
        jQuery(document).ready(function(){
            jQuery('.skillbar-container').each(function(){
                jQuery(this).find('.skills').animate({
                    width:jQuery(this).attr('data-percent')
                }, 1000); // 5 seconds
            });
        });
    }
 });
</script>

<?php wp_footer(); ?>

</body>
</html>
