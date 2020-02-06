<?php
function loadstylesheets(){
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css', array(),1,'all' );
	wp_enqueue_style( 'bootstrap');

	wp_register_style( 'customstylesheet', get_template_directory_uri() . '/inc/assets/style.css', array(),1,'all' );
	wp_enqueue_style( 'customstylesheet');

	wp_register_style( 'fontawesome', get_template_directory_uri() . '/inc/font-awesome/css/font-awesome.css', array(),1,'all' );
	wp_enqueue_style( 'fontawesome');


} 
add_action( 'wp_enqueue_scripts','loadstylesheets');


function loadscripts(){
    wp_deregister_script( 'jquery' );
	wp_register_script('jquery', get_template_directory_uri() . '/inc/bootstrap/jquery-v1.12.1.min.js', array(), 1,1,1);
	wp_enqueue_script( 'jquery');

	wp_register_script('bootstrapjs', get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.min.js', array('jquery'), 1,1,1);
	wp_enqueue_script( 'bootstrapjs');
}
add_action( 'wp_enqueue_scripts','loadscripts');

// Menu support
add_theme_support( "menus" );

// Register Menus
register_nav_menus( 
    array(
        'top-menu' => __('Top Menu','theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
        'french-menu' => __('Top French Menu', 'theme'),
        'french-menu-footer' => __('Footer French Menu', 'theme'),

    )
 );


function so_37823371_menu_item_class ( $classes, $item, $args, $depth ){
  $classes[] = 'nav-link';
  return $classes;
}
add_filter ( 'nav_menu_css_class', 'so_37823371_menu_item_class', 1, 4 );


function add_search_form($items, $args) {
          if( $args->theme_location == 'top-menu' ){
          $items .= '<li><a href="https://hub.tradesystem.ca" class="btn btn-custom">Login</a></li>';
                  
          }else if( $args->theme_location == 'french-menu' ){
            $items .= '<li><a href="https://hub.tradesystem.ca" class="btn btn-custom">sidentifier
</a></li>';
          }
        return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);