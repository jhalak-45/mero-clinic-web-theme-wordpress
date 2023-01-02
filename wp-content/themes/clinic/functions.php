<?php 

if (!function_exists('theme_enquee_scripts')) {
    function theme_enquee_scripts()
    {
        //css
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/regular.min.css');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.css');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap-utilities.css');
        wp_enqueue_style('script', get_template_directory_uri() . '/js/bootstrap.js');
        wp_enqueue_style('script', get_template_directory_uri() . '/js/bootstrap.min.js');
        wp_enqueue_style('script', get_template_directory_uri() . '/js/bootstrap.bundle.js');
        wp_enqueue_style('script', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
        wp_enqueue_style('script', get_template_directory_uri() . '/js/bootstrap.esm.js');
        wp_enqueue_style('script', get_template_directory_uri() . '/js/bootstrap.esm.min.js');




    }
}
add_action('wp_enqueue_scripts', 'theme_enquee_scripts');

add_theme_support('menus');

function wp_theme_setup()
{

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'primary menu'),
        'Secondary' => __('Mobile Menu', 'Mobile menu'),

    ));
}
add_action('after_setup_theme', 'wp_theme_setup');

function themename_custom_logo_setup()
{
    $defaults = array(
        'height'      => 80,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');


add_theme_support('post-thumbnails');
add_theme_support('html5');
add_theme_support('featured-content');
add_theme_support('custom-logo');
add_theme_support('title-tag');





  if ( function_exists('register_sidebar') ) {

    register_sidebar(array(
    'name' => 'footer center ',
    'id'=>'footer_center',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
     ));
 
    register_sidebar(array(
    'name' => 'footer sidebar 1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
    ));
}
?>