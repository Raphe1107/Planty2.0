<?php
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
    function theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
    }

    function astra_enfant_menus (){
        register_nav_menu ('header', 'En tête menu');
        register_nav_menu ('footer', 'Pied de page');
    }

    add_action ( 'after_setup_theme', 'astra_enfant_menus' );

   
    
?>
