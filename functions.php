<?php
/* 
 * Theme functions
 *
 * @package richviptransfer
 */
function richviptransfer_enqueue_scripts()
{
  // Styles Register
  wp_register_style('main-style', get_template_directory_uri() . '/assets/css/dist/output.css', [], filemtime(get_template_directory() . '/assets/css/dist/output.css'), 'all');

  // Scripts Register
  wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], filemtime(get_template_directory() . '/assets/js/main.js'), true);


  // Call Style
  wp_enqueue_style('main-style');
  wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');


  // Call Script
  wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'richviptransfer_enqueue_scripts')
  ?>