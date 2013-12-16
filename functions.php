<?php 
/* AJAX */
//on change l'affichage des urls
	add_filter('post_link', 'ajaxed_links');
	add_filter('category_link', 'ajaxed_links');
	add_filter('page_link', 'ajaxed_links');
	function ajaxed_links($fullLink){ 
		//on décompose
		$ndd = get_bloginfo('url');
		$ancre = str_replace($ndd,'',$fullLink);
		return $ndd.'#!'.$ancre;
	}

//bidouillage du read more
function remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');
/* Fin AJAX */

add_action( 'init', 'theme_style_init', 0 ); 
function theme_style_init(){
	if(!is_admin()) {
		wp_enqueue_style('style', get_bloginfo( 'stylesheet_url' ), false, NULL, 'screen');
		//wp_enqueue_style('style_print', get_stylesheet_directory_uri().'/print.css', false, NULL, 'print');
	}
}

add_action( 'wp', 'opt_load_scripts' );
function opt_load_scripts() {
	wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', false, '', true);
	wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js', false, '', true);
}

// create function theme_footer
add_filter('theme_powered_by', '__return_false');

/* Disable the Admin Bar. */
add_filter( 'show_admin_bar', '__return_false' );

function yoast_hide_admin_bar_settings() {
?>
	<style type="text/css">
		.show-admin-bar {
			display: none;
		}
	</style>
<?php
}

function yoast_disable_admin_bar() {
    add_filter( 'show_admin_bar', '__return_false' );
    add_action( 'admin_print_scripts-profile.php', 
         'yoast_hide_admin_bar_settings' );
}
add_action( 'init', 'yoast_disable_admin_bar' , 9 );
/* End Disable the admin Bar. */