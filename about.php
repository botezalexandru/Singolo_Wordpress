<?php
/*
Template Name: About Us
*/

include "header.php";
?>

 <?php 
    $args = array(
        'post_type' => 'about_staff',
        'orderby' => 'menu_order',
        'post_per_page' => -1
    );
    $about_staff = new WP_Query ( $args );

?>

<div class="about-us" id="about-us-menu">
    <div class="inner-content">

        <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <p><?php echo get_the_content(); ?></p>
            <?php endwhile; endif; ?>

        <ul class="about-us_profile">
            

                <?php while ($about_staff -> have_posts()) : $about_staff -> the_post(); ?>
                    <li>
                        <?php   the_post_thumbnail('medium'); ?>
                        <h4><?php the_title(); ?></h4>

                        <p><?php echo get_the_content(); ?></p>

                        <ul class="social-media-sites">
                            <!-- <li class="facebook-button"><a href="https://www.facebook.com/"></a></li> -->

                                <?php if(get_post_meta($post->ID, "facebook", true)) { 
                                     echo '<li class="facebook-button"><a href="' .get_post_meta($post->ID, "facebook", true).'" target="_blank"></a></li>';
                                } ?>

                                  <?php if(get_post_meta($post->ID, "twitter", true)) { 
                                     echo '<li class="twitter-button"><a href="' .get_post_meta($post->ID, "twitter", true).'" target="_blank"></a></li>';
                                } ?>


                                <?php if(get_post_meta($post->ID, "googleplus", true)) { 
                                     echo '<li class="google-plus-button"><a href="' .get_post_meta($post->ID, "googleplus", true).'" target="_blank"></a></li>';
                                } ?>

                                 <?php if(get_post_meta($post->ID, "linkedin", true)) { 
                                     echo '<li class="linkedin-button"><a href="' .get_post_meta($post->ID, "linkedin", true).'" target="_blank" ></a></li>';
                                } ?>

                        </ul>  
                    </li>

            <?php endwhile; ?>

        </ul>

    </div>

</div>


<?php include "footer.php"; ?>
