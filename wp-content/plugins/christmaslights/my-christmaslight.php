<?php
/*

Plugin Name: My Christmas Lights
PLugin URI: https://omccc.github.io/Portfolio/
Description: This is a wonderfull plugin that enables you to make Christmas lights within your website
Author: Omar
Version: 1.0

*/ 

function christmas_lights() {

    

    wp_enqueue_style('christmas_lights_css', plugin_dir_url(__FILE__) . 'christmaslights.css');

    wp_enqueue_script('yahoo_animate_min_js', plugin_dir_url(__FILE__) . 'yahoo-animate-min.js');

    wp_enqueue_script('sound_manager_js', plugin_dir_url(__FILE__) . 'soundmanager.js');

    wp_enqueue_script('christmas_lights_js', plugin_dir_url(__FILE__) . 'christmaslights.js');

    wp_enqueue_media('image', plugin_dir_url(__DIR__) . 'image');


    wp_enqueue_media('sound', plugin_dir_url(__DIR__) . 'sound');

}

add_action('wp_enqueue_scripts', 'christmas_lights', 1);

function christmas_lights_front_settings_script()
{
?>
<script type="text/javascript">
        var urlBase = 'wp-content/plugins/christmaslights/';
        soundManager.url = 'wp-content/plugins/christmaslights/sound';
    </script>
<?php
}


add_action('wp_head', 'christmas_lights_front_settings_script');


function christmas_lights_display()
{
?>
<div id="lights">
        <!-- lights go here -->
    </div>
<?php
}

add_action('wp_body_open', 'christmas_lights_display');
