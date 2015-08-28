<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>

   <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/Css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/Css/singoloCss.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/Css/resizeCssSingolo.css">


    <meta name="viewport" content="initial-scale=1">
    <script src="<?php bloginfo ('template_url'); ?> /JavaScript/jquery-2.1.4.min.js"></script>
    <script src="<?php bloginfo ('template_url'); ?> /JavaScript/main.js"></script>
    <script src="<?php bloginfo ('template_url'); ?> /JavaScript/slider.js"></script>
    <script src="<?php bloginfo ('template_url'); ?> /JavaScript/NewMVC.js"></script>


</head>
<body>

<header>
	<div class="inner-content">
			
            <a class="header-logo" href="<?php bloginfo('url'); ?>"><?php bloginfo('name') ?><span>*</span>
			</a>
            <div class="toggle-menu">
                <img src="images/menu_toggle.png">
            </div>
			<!--  <ul class="nav-menu">
                <li><a href="#">HOME</a></li>
                <li><a href="#our-services-menu">SERVICES</a></li>
                <li><a href="#portofolio-menu">PORTOFOLIO</a></li>
                <li><a href="#about-us-menu">ABOUT</a></li>
                <li><a href="#get-a-quote-menu">CONTACT</a></li>
            </ul> -->
            <div class="nav-menu">
                <?php wp_nav_menu( $args ); ?> 
            </div>
	</div>
</header>