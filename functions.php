<?php
function mytheme_enqueue_assets(){
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    wp_enqueue_script('mytheme-script', get_template_directory_uri().'/assets/js/script.js', array('jquery'),false,true);
}
?>