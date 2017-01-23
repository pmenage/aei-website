<?php

add_action('after_setup_theme', function() {
  
  // Ajoute le support automatique d'une image dans le header
  add_theme_support('custom-header', ['height' => 60]);
  
});

add_action('init', function() {

  // Déclare le menu qui est utilisé dans le thème pour pouvoir le modifier dans l'interface d'admin
  register_nav_menu('header-menu',__( 'Header Menu' ));
  
  // Fait en sorte que WordPress construise une miniature de taille appropriée à la page d'accueil
  add_image_size('presentation', 300, 300, true);
  
});

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Lato');
    wp_enqueue_style('aei', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
});