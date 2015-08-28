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
		
            <div class="nav-menu">
                <?php wp_nav_menu( $args ); ?> 
            </div>
	</div>
</header>
