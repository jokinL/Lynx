<?php get_header(); ?>

	<section>
		<?php
		if (have_posts()) :
		while (have_posts()) :
		the_post();
		the_content();
		endwhile;
		endif;
		?>
	</section> <!-- Fin de main -->

<?php get_footer(); ?>