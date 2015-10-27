<?php

/*
Template Name: Contact Template
 */

	get_header();
?>

	<!-- contact start -->
	<section class="container">
		<article class="clearfix">
			<h2>Contact</h2>
			<p></p>

			<div class="form">
				<h4>Send Inquiry</h4>
				<?php
					if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }
				?>
			</div>

			<address>
				<h4>Our Information</h4>
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
			</address>
		</article>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3191.9483962219124!2d174.77720509999997!3d-36.867653999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d4876959d2e8d%3A0x72353becd12edd15!2s485+Khyber+Pass+Rd%2C+Newmarket%2C+Auckland+1023!5e0!3m2!1sen!2snz!4v1443751440707" width="980" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>
	<!-- contact end -->

<?php
	get_footer();
?>