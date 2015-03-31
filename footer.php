	<footer>
		<div class="container">
			<!-- Widgets barra lateral -->
			<div class="col-sm-4">
				<?php if ( ! dynamic_sidebar( 'Footer 1' ) ) {} ?>
			</div>
			<div class="col-sm-4">
				<?php if ( ! dynamic_sidebar( 'Footer 2' ) ) {} ?>
			</div>
			<div class="col-sm-4">
				<?php if ( ! dynamic_sidebar( 'Footer 3' ) ) {} ?>
			</div>
			<div class="col-sm-4">
				<?php if ( ! dynamic_sidebar( 'Footer 4' ) ) {} ?>
			</div>
		</div>

		<p>copy; <?php bloginfo('name'); ?>, <?=date('Y');?>. Mi primer tema de WP.</p>
	</footer>

	<?php wp_footer(); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/lynx.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
</body>
</html>