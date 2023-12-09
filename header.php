<?php
/*
 * Header  template.
 *
 * @package richviptransfer 
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>
    <?php
    wp_title('|', true, 'right');
    bloginfo('name');
    ?>
  </title>
</head>

<body <?php body_class() ?>>
  <header>
    <div>
      <div>
        0850 123 45 67
      </div>
      <div class="relative inline-block text-left">
        Language
      </div>
    </div>
    <!-- ENDs: BLOK HEADER -->
    <nav class="">
      <div class="">
        <img src="" />
      </div>
      <div class="">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container' => 'nav',
            'container_class' => 'main-menu yoo1',
            'menu_class' => 'nav-menu',
          )
        );
        ?>
      </div>
    </nav>
  </header>