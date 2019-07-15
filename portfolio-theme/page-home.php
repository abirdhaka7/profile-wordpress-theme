<?php
/**
 * Template Name: Home Page
 *
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content' , 'home' );?>

<?php get_template_part( 'template-parts/content' , 'about' );?>

<?php get_template_part( 'template-parts/content' , 'skills' );?>

<?php get_template_part( 'template-parts/content' , 'what-can-do' );?>

<?php get_template_part( 'template-parts/content' , 'portfolio' );?>

<?php get_template_part( 'template-parts/content' , 'contact' );?>

<?php get_template_part( 'template-parts/content' , 'footer' );?>




<?php
get_footer();?>
