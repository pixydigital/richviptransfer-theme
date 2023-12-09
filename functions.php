<?php
/* 
 * Theme functions
 *
 * @package richviptransfer
 */

function richviptransfer_enqueue_scripts()
{
  // Styles Register
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/dist/output.css', [], filemtime(get_template_directory() . '/assets/css/dist/output.css'), 'all');
  wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');

  // Scripts Register
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], filemtime(get_template_directory() . '/assets/js/main.js'), true);
}

add_action('wp_enqueue_scripts', 'richviptransfer_enqueue_scripts');

// Nav Menu 
if (!function_exists('richviptransfer_register_nav_menu')) {
  function richviptransfer_register_nav_menu()
  {
    add_theme_support('menus');

    register_nav_menus(
      array(
        'primary_menu' => __('Primary Menu', 'richviptransfer'),
        'footer_menu' => __('Footer Menu', 'richviptransfer'),
      )
    );
  }

  add_action('after_setup_theme', 'richviptransfer_register_nav_menu', 0);
}
?>