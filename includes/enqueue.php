<?php
function calculadora_plugin_scripts()
{
    //jquery mask js
    wp_enqueue_script('jquery-mask-js', plugins_url('/assets/jquery.mask.js',CALCULADORA_PLUGIN_URL));
    //script js
    wp_enqueue_script('script-plugin-js', plugins_url('/assets/script.js',CALCULADORA_PLUGIN_URL));
    //style css
    wp_enqueue_style('style-plugin-css', plugins_url('/assets/style-plugin.css',CALCULADORA_PLUGIN_URL));

}
add_action('wp_enqueue_scripts', 'calculadora_plugin_scripts');