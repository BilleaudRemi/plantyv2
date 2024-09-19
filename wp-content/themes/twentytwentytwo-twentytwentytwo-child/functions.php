<?php 

// Chargement des styles
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() { 
    // Chargement du style parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
    // Chargement du style enfant avec la gestion du cache via filemtime
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/child_style.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/css/child_style.css') );
}

// Enregistrement des menus
function register_my_menus() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
    register_nav_menu('footer-menu', __( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menus' );

// Support du logo personnalisé
add_theme_support( 'custom-logo' );

// Ajout d'un élément "Admin" au menu pour les utilisateurs connectés
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    // Vérifie si l'utilisateur est connecté et si c'est le bon menu
    if ( is_user_logged_in() && $args->theme_location == 'header-menu' ) {
        $items_array = array(); // Création d'un tableau pour contenir les éléments du menu
        
        // Limitation du menu à 3 éléments
        while ( false !== ( $item_pos = strpos( $items, '<li', 3 ) ) ) {
            $items_array[] = substr($items, 0, $item_pos);
            $items = substr($items, $item_pos);
        }
        $items_array[] = $items;
        
        // Insertion du lien vers le tableau de bord admin en 2ème position
        array_splice( $items_array, 1, 0, '<li class="menu-item menu-admin"><a href="/wp-admin/">Admin</a></li>' );

        // Réassemblage du menu
        $items = implode('', $items_array);
    }
    return $items;

    
}
?>
