<?php
/*
Template Name: Services
*/

include "header.php";
?>


<?php 
	$args = array(
		'post_type' => 'services-list',
		'orderby' => 'menu_order',
		'post_per_page' => -1
	);
	$services_list = new WP_Query ( $args );
?>




<div class="our-services" id="our-services-menu">
	<div class="inner-content">

		<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
				<span class="our-services-title"><?php the_title(); ?></span>
				<p><?php echo get_the_content(); ?></p>
			<?php endwhile; endif; ?>


		<!-- <span class="our-services-title">Our Services</span>
		<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
 -->

		<div class="services-list">

			<?php 
				while ($services_list -> have_posts()) : $services_list -> the_post(); ?>

					<div class="service">
					<div class="service-logo">
						<?php 	the_post_thumbnail('services'); ?>
					</div>
					<div class="service-description">
						<span><?php the_title(); ?></span>
					<p><?php echo get_the_content(); ?></p>
				</div>			
				</div>

			<?php 	endwhile; 

			?>


			<!-- <div class="service">
				<div class="service-logo">
					<img src=" <?php bloginfo ('template_url'); ?> /Images/pen.png">
				</div>
				<div class="service-description">
					<span>Custom Design</span>
					<p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
				</div>
			</div> -->

			<!-- <div class="service">
				<div class="service-logo">
					<img src=" <?php bloginfo ('template_url'); ?> /Images/bulb.png">
				</div>
				<div class="service-description">
					<span>Inovative Ideas</span>
					<p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>
				</div>
			</div>
			<div class="service">
				<div class="service-logo">
					<img src=" <?php bloginfo ('template_url'); ?> /Images/heart.png">
				</div>
				<div class="service-description">
					<span>Love Is The Answer</span>
					<p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
				</div>
			</div>
			<div class="service">
				<div class="service-logo">
					<img src=" <?php bloginfo ('template_url'); ?> /Images/phone_menu.png">
				</div>
				<div class="service-description">
					<span>Responsive Layout</span>
					<p>Sed porttitor placerat rhoncus. In at nunc tellus. Maecenas blandit nunc ligula. Praesent elit leo.</p>
				</div>
			</div>
			<div class="service">
				<div class="service-logo">
					<img src=" <?php bloginfo ('template_url'); ?> /Images/bubble.png">
				</div>
				<div class="service-description">
					<span>24 / 7 Support</span>
					<p>Vivamus vel quam lacinia, tincidunt dui non, vehicula nisi. Nulla a sem erat. Pellentesque egestas venenatis lorem.</p>
				</div>
			</div>
			<div class="service">
				<div class="service-logo">
					<img src=" <?php bloginfo ('template_url'); ?> /Images/star.png">
				</div>
				<div class="service-description">
					<span>Feel Like A Star</span>
					<p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus.</p>
				</div>
			</div> -->



		</div>
	</div>
</div>


<?php include "footer.php"; ?>