<section class="sidebar__left">
	<!-- FORMULARIO DE BUSQUEDA -->
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<input type="text" placeholder="Buscar…" value="<?php the_search_query(); ?>" name="s" id="s" />
		<button type="submit" class="icon-only"  id="searchsubmit"></button>
	</form>
	<!-- Widgets barra lateral -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) : ?>
	<?php endif; ?>
</section>
