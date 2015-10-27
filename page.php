<?php
	get_header();
?>

	<!-- page content start -->
	<section class="container">
		<article>
			<?php
				if (have_posts()) :
					while (have_posts()) : the_post();
			?>
				<?php the_content(); ?>

			<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;
			?>
		</article>
	</section>
	<!-- page content end -->

<?php
	get_footer();
?>