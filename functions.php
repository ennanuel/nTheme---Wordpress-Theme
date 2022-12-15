<?php 

    function nTheme_theme_support() {
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    };

    add_action('after_setup_theme', 'nTheme_theme_support');


    function nTheme_menus() {
        $locations = array(
            'primary' => 'Primary top menu items',
            'footer' => 'Footer Menu Items'
        );
        register_nav_menus($locations);
    };

    add_action('init', 'nTheme_menus');


    function nTheme_register_styles() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('nTheme-style', get_template_directory_uri() .'/style.css', array(), $version, 'all');
        wp_enqueue_style('nTheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    };

    add_action('wp_enqueue_scripts', 'nTheme_register_styles');


    function nTheme_register_scripts() {
        wp_enqueue_script('nTheme-main-script', get_template_directory_uri(). '/scripts/script.js', array(), '.0', true);
    };

    add_action('wp_enqueue_scripts', 'nTheme_register_scripts');

    
    function nTheme_widget_areas () {
        register_sidebar(
            array(
                'before_title' => '<ul class="footer-widgets">',
                'after_title' => '</ul>',
                'before_widget' => '',
                'after_widget' => '',
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'sidebar widget area'
            )
        );

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '<ul class="footer-widgets">',
                'after_widget' => '</ul>',
                'name' => 'Footer Area 1',
                'id' => 'footer-1',
                'description' => 'footer widget area'
            )
        );
    }

    add_action('widgets_init', 'nTheme_widget_areas');

    require_once('theme-hero/nTheme-hero.php');

?>