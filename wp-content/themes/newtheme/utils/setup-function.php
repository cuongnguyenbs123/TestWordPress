<?php

    // set image crop
    function wpdocs_setup_theme() {
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 300, 300, true ); // Normal post thumbnails
        add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size
    }
    add_action( 'after_setup_theme', 'wpdocs_setup_theme' );
    
    function add_srcsetToImage($html, $id, $attachment, $size, $image) {
        $srcset = wp_get_attachment_image_srcset($id, $size);
        $sizes = wp_get_attachment_image_sizes($id, $size);
        $html = str_replace(' srcset="', ' srcset="' . $srcset . '"', $html);
        $html = str_replace(' sizes="', ' sizes="' . $sizes . '"', $html);
        return $html;
    }
    add_action ('init', 'add_srcsetToImage', 10, 5);
?>