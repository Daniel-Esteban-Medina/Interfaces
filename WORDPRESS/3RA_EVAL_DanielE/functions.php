<?php
function mis_menus(){
    register_nav_menus(array(
        "menu-principal" => __("Menú principal", "3raEvaluacion2026"),
        "menu-redes" => __("Menú redes", "3raEvaluacion2026")
    ));
}
add_action("init", "mis_menus");

function size_posts(){
    add_theme_support("post-thumbnails");
    add_image_size( 'squere', 350, 350, true );
    add_image_size( 'portrait', 350, 724, true );
    add_image_size( 'cajas', 400, 375, true );
    add_image_size( 'mediano', 700, 400, true );
    add_image_size( 'blog', 966, 644, true );
}
add_action("after_setup_theme", "size_posts");

function estilos_scripts(){
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');
    wp_enqueue_style( 'bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'slicknavCSS', 'bootstrapcss'), '1.0.0');

    wp_enqueue_script( 'slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri( ) . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '3.3.3', true );
}
add_action( 'wp_enqueue_scripts', 'estilos_scripts');