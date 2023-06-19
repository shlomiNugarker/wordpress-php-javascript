<?php

    function getFiles(){
        wp_enqueue_style('main_styles',get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts','getFiles');
   