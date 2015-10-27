<?php

/*
Template Name: Home Template
 */

	get_header();
?>

	<div class="slider">
	<!-- slider start -->
	<?php masterslider(1); ?>
	<!-- slider end -->
	</div>

	<!-- home content start -->
	<section class="container clearfix">
		<div class="home_art">
			<?php
				$intro = new WP_Query('cat=1');

				if ($intro->have_posts()) :
					while ($intro->have_posts()) : $intro->the_post();
			?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;
					wp_reset_postdata();
			?>
		</div>
		<div class="home_promo">
			<?php
				$intro = new WP_Query('cat=3');

				if ($intro->have_posts()) :
					while ($intro->have_posts()) : $intro->the_post();
			?>
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
			<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;
					wp_reset_postdata();
			?>
		</div>
	</section>
	<!-- home content end -->

<?php
	get_footer();
?>