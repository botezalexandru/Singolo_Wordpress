<?php 


$args1 = array(
        'post_type' => 'social_media',
        'orderby' => 'menu_order',
        'post_per_page' => -1
    );
    $social_media = new WP_Query ( $args1 );


?>

<footer>
    <div class="inner-content">
        <div class="copyright">© Copyright <?php echo date('Y');?> · by PSDchat.com</div>
        <div class="social-media-container">
            <ul class="social-media-sites">
                <li class="facebook-button"><a href="https://www.facebook.com/"></a></li>
                <li class="google-plus-button"><a href="https://plus.google.com/"> </a></li>
                <li class="twitter-button"><a href="https://twitter.com/"> </a></li>
                <li class="linkedin-button"><a href="https://www.linkedin.com/"> </a></li>
            </ul>
        </div>
    </div>
</footer>