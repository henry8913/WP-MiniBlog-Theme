
<?php
function minimal_tailwind_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'minimal-tailwind'),
    ));
}
add_action('after_setup_theme', 'minimal_tailwind_setup');

function minimal_tailwind_scripts() {
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), null);
}
add_action('wp_enqueue_scripts', 'minimal_tailwind_scripts');
