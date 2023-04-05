<?php
 function theme_register_style(){

    wp_enquen_style('theme-bootstrap',get_template_directory_uri(). "/style.css", array(), '1.0', 'all');
 }

 add_action('wp_enqueue_scripts', 'theme_register_style');
?>