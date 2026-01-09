<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body>

<header class="site-header">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
           alt="Logo"
           height="40">

      <nav>
        <a href="#">Home</a>
        <a href="#">Service</a>
        <a href="#">Feature</a>
        <a href="#">Product</a>
        <a href="#">Testimonial</a>
        <a href="#">FAQ</a>
        <a href="#" class="btn btn-success btn-sm ms-3">Sign Up</a>
      </nav>

    </div>
  </div>
</header>
