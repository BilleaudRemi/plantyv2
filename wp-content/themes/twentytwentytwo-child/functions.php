<?php 

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
 
function theme_enqueue_styles(){ 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/child_style.css', array(), filemtime(get_stylesheet_directory() . '/css/child_style.css'));
}

function register_my_menus() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
  }
  add_action( 'init', 'register_my_menus' );

add_theme_support( 'custom-logo' );

/* MENU ADMIN */
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in() && $args->theme_location == 'header-menu'  ) {
      $items_array = array(); // création tableau menu
      while ( false !== ( $item_pos = strpos ( $items, '<li', 3 ) ) ) // limitation du menu à 3 éléments
      {
          $items_array[] = substr($items, 0, $item_pos);
          $items = substr($items, $item_pos);
      }
      $items_array[] = $items;
      array_splice($items_array, 1, 0, '<li class="menu-item menu-admin"><a href="/wp-admin/">Admin</a></li>'); // insertion du lien en 2e position

      $items = implode('', $items_array);
      }
    return $items;
}