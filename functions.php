<?php

namespace site\tachyons;

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'tachyons-theme', get_parent_theme_file_uri( 'runtime/style.theme.css' ) );
    wp_enqueue_style( 'tachyons-style', get_stylesheet_uri() );
} );
