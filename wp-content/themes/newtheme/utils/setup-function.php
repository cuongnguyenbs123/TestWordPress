<?php

    // set image crop
    function wpdocs_setup_theme() {
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 300, 300, true ); // Normal post thumbnails
        add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size
    }
    add_action( 'after_setup_theme', 'wpdocs_setup_theme' );

    
?>