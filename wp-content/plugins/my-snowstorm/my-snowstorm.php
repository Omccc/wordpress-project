<?php
/*
Plugin Name: My Snow Storm for Mr
Plugin URI: https://omccc.github.io/Portfolio/
Description: This is a wonderfull plugin that enables you to make a snowstorm within your website
Author: Omar
Version: 1.0
*/

function let_it_snow_for_god_snake()
{
  if (is_front_page()) {
    wp_enqueue_script('my_snow_storm_js', plugin_dir_url(__FILE__) . 'snowstorm.js');
  }
}
add_action('wp_enqueue_scripts', 'let_it_snow_for_god_snake', 1);

function my_snowstorm_front_settings_script()
{
?>
  <script>
    snowStorm.snowColor = '<?php echo get_option('my_snowstorm_color', '#FFFFFF') ?>'; // blue-ish snow!?
    snowStorm.flakesMaxActive = 400; // show more snow on screen at once
    snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
    snowStorm.snowCharacter = '<?php echo get_option('my_snowstorm_character', '&hearts;') ?>';
    snowStorm.flakeWidth = 20;
    snowStorm.flakeHeight = 20;
  </script>
<?php
}
add_action('wp_head', 'my_snowstorm_front_settings_script');

//Adding an options button to the options admin tab
function my_snowstorm_admin_options()
{
  add_options_page(
    'My Snowstorm Options',
    'Snowstorm Options',
    'manage_options',
    'my-snowstorm-options',
    'my_snowstorm_rendering_function'
  );
}
add_action('admin_menu', 'my_snowstorm_admin_options');
// Adding a rendering callback to handle my admin options
function my_snowstorm_rendering_function()
{
?>
  <h2>
    My SnowStorm Options
  </h2>
  <form action="options.php" method="post">
    <?php
    settings_fields('my-snowstorm-options');
    do_settings_sections('my-snowstorm-options');
    ?>
    <input type="submit" name="Save" value="Save" class="button button-primary">
  </form>
<?php
}

// Adding the settings options sections and fields
function my_snowstorm_register_settings_sections_and_fields()
{

  register_setting(
    'my-snowstorm-options',
    'my_snowstorm_color'
  );
  register_setting(
    'my-snowstorm-options',
    'my_snowstorm_character'
  );
  add_settings_section(
    'my_snowstorm_settings_section',
    'Snowstorm Settings Section',
    'my_snowstorm_first_section',
    'my-snowstorm-options'
  );
  add_settings_field(
    'my_snowstorm_color',
    'Snowstorm Color Hex',
    'my_snowstorm_color_html_input',
    'my-snowstorm-options',
    'my_snowstorm_settings_section'
  );
  add_settings_field(
    'my_snowstorm_character',
    'Snowstorm Character',
    'my_snowstorm_character_html_input',
    'my-snowstorm-options',
    'my_snowstorm_settings_section'
  );
}

add_action('admin_init', 'my_snowstorm_register_settings_sections_and_fields');

function my_snowstorm_first_section()
{
?>
  <p>
    This is our Snowstorm settings section
  </p>
<?php

}

function my_snowstorm_color_html_input()
{
?>
  <input type="color" name="my_snowstorm_color" id="my_snowstorm_color" value="<?php echo get_option('my_snowstorm_color', '#FFF') ?>">
<?php
}
function my_snowstorm_character_html_input()
{
?>
  <input type="text" name="my_snowstorm_character" id="my_snowstorm_character" value="<?php echo get_option('my_snowstorm_character', '&hearts;') ?>">
<?php
}
