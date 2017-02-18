<?php 

function torontoOnline_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'torontoOnline_scripts');


/**NAVIGATION**/

register_nav_menus(array(
			'main_menu' => __('Main Menu', 'torontoOnline')
	) );


/**Widget zone**/

function theme_widgets() {
    register_sidebar(array(
    
    'name'          => __('Sidebar Testimonials'),
    'id'            => 'testimonials',
    'description'   => 'Testimonials Widgets',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget_title">',
    'after_title'   => '</h3>',
    
    ));
}

add_action('widgets_init', 'theme_widgets');

add_filter('show_admin_bar', '__return_false');