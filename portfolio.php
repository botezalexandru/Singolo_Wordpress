<?php
/*
Template Name: Portfolio
*/

include "header.php";
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
        
        <input type="radio" id="radio1" name="group1" value="li" checked>
        <label for="radio1">All</label>
        
        <?php $terms = get_terms('projects_category', array('hide_empty' => false));
        foreach ($terms as $term) : ?>
            <?php $category_class= strtolower($term->name);
            $category_class= str_replace(" ", "-", $category_class);?>
            <input type="radio" id="<?php echo $category_class; ?>" name="group1" value="<?php echo "." . $category_class ?>">
            <label for="<?php echo $category_class; ?>"><?php echo $term->name; ?></label>
        <?php endforeach; ?>
        
        <ul class="portofolio_pictures">
        <?php while( $portfolio_projects->have_posts() ) : $portfolio_projects->the_post();  ?>
            <?php 
                $post_terms = wp_get_post_terms( $post->ID, 'projects_category', array( "fields" => "slugs" ) );
                $post_terms_space_separated = implode(" ", $post_terms);                
            ?>
            <li class="<?php echo $post_terms_space_separated; ?>"><a href=" <?php echo get_permalink(); ?> "><?php the_post_thumbnail('project-thumb'); ?></a></li>
            
        <?php endwhile; ?>

        </ul>
    </div>
</div>

<?php 
include "footer.php";
