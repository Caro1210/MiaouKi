<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{

    //parent style theme
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // CSS theme activation
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), time());

    // script JavaScript activation
    wp_enqueue_script('burger-js', get_theme_file_uri() . '/js/burger.js', array(), '1.0.0', true);
    wp_enqueue_script('script-js', get_theme_file_uri() . '/js/script.js', array('swiper'), '1.0.0', true);
    wp_enqueue_script('flower-animation-js', get_theme_file_uri() . '/js/flower-animation.js', array(), '1.0.0', true);


    // Swiper JS & CSS
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '5.4.0', true);
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '5.4.0');

}


// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

