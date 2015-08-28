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

        <!-- <h2>About Us</h2>

        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.
            Duis mollis, non commodo luctus, nisi erat porttitor ligula,
            eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
 -->
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


              
            


            <!-- <li>
                <img src=" <?php bloginfo ('template_url'); ?>/Images/About%20Us/Desmond%20Miles.png">
                <h4>Desmond Miles</h4>

                <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices
                    velit.</p>
                <ul class="social-media-sites">
                    <li class="facebook-button"><a href="https://www.facebook.com/"></a></li>
                    <li class="google-plus-button"><a href="https://plus.google.com/"> </a></li>
                    <li class="twitter-button"><a href="https://twitter.com/"> </a></li>
                    <li class="linkedin-button"><a href="https://www.linkedin.com/"> </a></li>
                </ul>
            </li>


            <li>
                <img src=" <?php bloginfo ('template_url'); ?>/Images/About%20Us/Scolara%20Visari.png">
                <h4>Scolara Visari</h4>

                <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque
                    condimentum.</p>
                <ul class="social-media-sites">
                    <li class="facebook-button"><a href="https://www.facebook.com/"></a></li>
                    <li class="google-plus-button"><a href="https://plus.google.com/"> </a></li>
                    <li class="twitter-button"><a href="https://twitter.com/"> </a></li>
                    <li class="linkedin-button"><a href="https://www.linkedin.com/"> </a></li>
                </ul>
            </li> -->
        </ul>

    </div>

</div>


<?php include "footer.php"; ?>