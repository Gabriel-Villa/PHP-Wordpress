<?php
/**
 * Theme Functions
 * 
 * @package Aquila
*/


// echo get_template_directory_uri();
// echo get_template_directory();
// echo get_stylesheet_uri();

function aquila_enqueue_scripts()
{
    // wp_enqueue_style('secondstyle', get_template_directory_uri() . '/main.css', ['firststyle']);
    wp_enqueue_style(
        'firststyle', 
        get_stylesheet_uri(), 
        [], 
        filemtime(get_template_directory() . '/style.css'),
        'all'
    );

    wp_enqueue_script(
        'main.js',
        get_template_directory_uri() . "/assets/main.js",
        [],
        filemtime(get_template_directory() . '/assets/main.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');