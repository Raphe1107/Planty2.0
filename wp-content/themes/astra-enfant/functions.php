<?php
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
    function theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
    }

    // Ajout d'un menu avec la fonction 
    function astra_enfant_menus (){
        register_nav_menu ('header', 'En tête menu');
        register_nav_menu ('footer', 'Pied de page');
    }

    add_action ( 'after_setup_theme', 'astra_enfant_menus' );

    
    function add_admin_link_to_menu( $items, $args ) {
        if ( is_user_logged_in() && $args->theme_location == 'header' ) {
            $admin_link = '<li><a href="' . admin_url() . '">Admin</a></li>';
            // On divise la chaîne en tableau d'éléments de menu
            $menu_items = explode( '</li>', $items );
            // On insère l'élément "Admin" en deuxième position
            array_splice( $menu_items, 1, 0, $admin_link );
            // On fusionne les éléments de menu modifiés en une chaîne
            $items = implode( '</li>', $menu_items );
        }
        return $items;
    }
    add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );
    
    
    
    
?>
