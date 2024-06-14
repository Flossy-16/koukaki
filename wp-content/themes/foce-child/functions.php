<?php
// Enqueue parent theme styles (déjà présent)
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Ajout du nouveau fichier js du thème enfant
function enqueue_child_theme_scripts() {
    // Enqueue the child theme script
    wp_enqueue_script( 'animations-script', get_stylesheet_directory_uri() . '/js/animations.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_scripts' );

// Ajout du fichier CSS compilé
function enqueue_child_theme_styles() {
    // Enqueue the child theme CSS
    wp_enqueue_style( 'animations-style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles' );


// Get customizer options form parent theme (Récupérer les options du personnalisateur à partir du thème parent)
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

?>