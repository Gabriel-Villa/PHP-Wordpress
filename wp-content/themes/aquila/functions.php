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
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');