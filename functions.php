<!--
Theme Name: Lynx
Theme URI: http://www.tesokdesogn.es
Description: Lynx theme / Licencia Creative Commons Atribución 4.0 Internacional http://creativecommons.org/licenses/by/4.0/
Author: Jokin Lopez
Author URI: http://www.tesokdesogn.es
Version: 1.0
-->

<?php
// Registro del menú de WordPress
	add_theme_support( 'nav-menus' );

	if ( function_exists( 'register_nav_menus' ) ) {
	    register_nav_menus(
	        array(
	          'main' => 'Main'
	        )
	    );
	}
?>

<?php
//  Right Sidebar
 if(function_exists('register_sidebar'))
      register_sidebar(array(
      'name' => 'Right Sidebar',
      'before_widget' => '<hr>',
      'after_widget' => '',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
 ));
?>

<?php
	//Habilitar thumbnails
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(150, 150, true);
?>

<?php
	// Permitir comentarios encadenados
	function enable_threaded_comments(){
	    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
	       wp_enqueue_script('comment-reply');
	    }
	}
	add_action('get_header', 'enable_threaded_comments');
?>