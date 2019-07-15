<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Aclonica&display=swap" rel="stylesheet">
      <!--/.[Google fonts]-->
	<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri&display=swap" rel="stylesheet">
	 <!-- Font-awesome 5.8.2 CDN-->
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">
 

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

	<header>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top">
      <div class="container">
    
      <a href="#" class="navbar-brand">
  
 <?php if ( function_exists( 'the_custom_logo' ) ) {?>
     
 <?php the_custom_logo(); }?>
    
 </a> 
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"
         aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
	
	<?php 
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'container' => 'nav',
			'container_class' => 'collapse navbar-collapse',
			'menu_class' => 'navbar-nav ml-auto cl-effect-1'

		) );
	
	?>
	<!-- <div class="" id="navbarNav">
		<ul class="navbar-nav ml-auto cl-effect-1">
          <li class="nav-item active"><a class="nav-link" href="#">Home </a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#skill">Skill</a></li>
          <li class="nav-item"><a class="nav-link" href="#service" >Service</a></li>
          <li class="nav-item"><a class="nav-link" href="#Portfolio">Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>-/.[collapse] -->

  </div><!--/.[container]-->
</nav><!--/.[navbar]-->
 </header>

