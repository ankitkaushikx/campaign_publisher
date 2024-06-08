<?php
require_once (get_stylesheet_directory() . "/redirects.php");


//
add_action( 'wp_enqueue_scripts', 'enqueue_parent_and_custom_styles' );

function enqueue_parent_and_custom_styles() {
    // Enqueue parent theme styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css', array(), '4.0.0' );

    // Enqueue jQuery (Slim version)
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.1.1.min.js', array(), '3.2.1', true );

    // Enqueue Popper.js
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', array('jquery-slim'), '1.12.9', true );

    // Enqueue Bootstrap JS
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array('popper'), '4.0.0', true );
    
    // Enqueue Custom JS 
    $controller_js_version = filemtime(get_stylesheet_directory() . '/js/controller.js');
    wp_enqueue_script('controller', get_stylesheet_directory_uri() . '/js/controller.js',' ', $controller_js_version, true);

    //ajaxbase
    wp_localize_script('controller', 'ajax_object', array(
        "ajax_base"=> get_site_url() . '/wp-json/sgews/v1', 'nonce'=>  wp_create_nonce('wp_rest'),
        "upload_url" => wp_get_upload_dir()['baseurl'], 
        'site_url' =>  get_bloginfo('url'),
    ));

    

}

