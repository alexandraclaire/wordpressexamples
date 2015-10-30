<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8">
  <title><?php wp_title() ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_url' ); ?>/assets/css/styles.css" >
  
  <?php wp_head(); ?> 

</head>

<body>

  <header>

    <h1><?php echo get_bloginfo( 'name' ); ?></h1>
    
  </header> 
      
 <nav id="site-navigation" class="main-navigation" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
</nav><!-- #site-navigation -->