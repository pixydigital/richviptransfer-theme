<?php
/*
 *
 * Theme Functions.
 * 
 * @package richviptransfer
 *
 */
function richviptransfer_enqueue_scripts()
{
  wp_register_style(
    'main-styles',
    get_template_directory_uri() . '/assets/css/dist/output.css',
    array(),
    filemtime(get_template_directory() . '/assets/css/dist/output.css'),
    'all'
  );
  wp_register_script(
    'main-js',
    get_template_directory_uri() . '/assets/js/main.js',
    ['jquery'],
    filemtime(get_template_directory() . '/assets/js/main.js'),
    true
  );

  wp_enqueue_style('main-styles');
  wp_enqueue_script('main-js');
  wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
}

add_action('wp_enqueue_scripts', 'richviptransfer_enqueue_scripts')

  ?>