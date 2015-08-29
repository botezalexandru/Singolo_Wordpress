<?php get_header(); ?>

<div class="portofolio" id="portofolio-menu">
    <div class="inner-content">
    	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
				<div>
					<?php the_post_thumbnail('medium'); ?>
				</div>
				<div>
					<h3 class="portofolio_title"><?php the_title(); ?></h3>
					<span class="portofolio_text"><?php echo the_content(); ?><span>					
				</div>
			<?php endwhile; endif; ?>
    </div>
 </div>

<?php get_footer(); ?>