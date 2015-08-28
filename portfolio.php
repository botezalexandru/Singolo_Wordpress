<?php
/*
Template Name: Portfolio
*/

include "header.php";
?>



<?php 
    $args = array(
        'post_type' => 'portfolio_projects',
        'posts_per_page' => -1
    );
    $portfolio_projects = new WP_Query ( $args );
?>



<div class="portofolio" id="portofolio-menu">
    <div class="inner-content">

        <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                <h3 class="portofolio_title"><?php the_title(); ?></h3>
                <p class="portofolio_text"><?php echo get_the_content(); ?></p>
            <?php endwhile; endif; ?>

        <!-- <h3 class="portofolio_title">Portfolio</h3>

        <p class="portofolio_text">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio
            sem nec elit.</p> -->



       


        <input type="radio" id="radio1" name="group1" value="li" checked>
        <label for="radio1">All</label>


         <?php $terms = get_terms('projects_category', array('hide_empty' => false)); ?>
            <?php foreach ($terms as $term) : ?>

                <?php $category_class= strtolower($term->name);
                $category_class= str_replace(" ", "-", $category_class);?>

                <input type="radio" id="<?php echo $category_class; ?>" name="group1" value="<?php echo "." . $category_class ?>">
                <label for="<?php echo $category_class; ?>"><?php echo $term->name; ?></label>
            <?php endforeach; ?>


       <!--  <input type="radio" id="radio2" name="group1" value=".webdesign-filter">
        <label for="radio2">Web Design</label>
        <input type="radio" id="radio3" name="group1" value=".graphicsdesign-filter">
        <label for="radio3">Graphics Design</label>
        <input type="radio" id="radio4" name="group1" value=".artwork-filter">
        <label for="radio4">Artwork</label> -->



        


        <ul class="portofolio_pictures">



            <?php while( $portfolio_projects->have_posts() ) : $portfolio_projects->the_post();  ?>

            <?php 
                $post_terms = wp_get_post_terms( $post->ID, 'projects_category', array( "fields" => "slugs" ) );
                $post_terms_space_separated = implode(" ", $post_terms);                
            ?>

            <li class="<?php echo $post_terms_space_separated; ?>"><?php the_post_thumbnail('project-thumb'); ?></li>
            



            <?php  endwhile; ?>

            <!--  <li class="webdesign-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_1.png"></li>

             <li class="graphicsdesign-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_2.png"></li>

            <li class="webdesign-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_3.png"></li>

            <li class="artwork-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_4.png"></li>

            <li class="graphicsdesign-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_5.png"></li>

            <li class="artwork-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_6.png"></li>

            <li class="webdesign-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_7.png"></li>

            <li class="graphicsdesign-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_8.png"></li>

            <li class="artwork-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_9.png"></li>

            <li class="graphicsdesign-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_10.png"></li>

            <li class="webdesign-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_11.png"></li>

            <li class="artwork-filter"><img src="<?php bloginfo ('template_url'); ?>/Images/Portofolio/portofolio_12.png"></li> 
 -->

        </ul>
    </div>
</div>


<?php include "footer.php"; ?>