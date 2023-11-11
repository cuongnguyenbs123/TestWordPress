<?php
    // set image crop
    function wpdocs_setup_theme() {
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 300, 300, true ); // Normal post thumbnails
        add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size
        add_image_size('large-img', 1000, 702);
        add_image_size('medium-img', 700, 372);
        add_image_size('small-img', 300, 200);
    }
    add_action( 'after_setup_theme', 'wpdocs_setup_theme' );

    //add srcset to image 
    
    function add_srcset_to_image($post,$option) {
        if($option == 'thumbnail'){
            $content= get_the_post_thumbnail();
        }
        else {
            $content = $post->post_content;
        }
        $dom = new DOMDocument();
        $dom->loadHTML('<?xml encoding="utf-8" ?>'. $content, LIBXML_NOERROR);
        if(sizeof($dom->getElementsByTagName('img')) > 0){
            foreach ($dom->getElementsByTagName('img') as $img) {
                $url= $img->getAttribute('src');
                $url = $url . ' 1x,' . $url . ' 2x';
                $img->setAttribute('srcset', $url);
                $img->setAttribute('loading', 'lazy');
            }
            $content = $dom->saveHTML();
        }
        echo $content;
    }

    //get trending post

    function get_trending_post($paged = 1) {
        $args = array(
            'meta_key'     => 'post_views',
            'meta_value'   => '2',
            'meta_compare' => '>=',
            'orderby'    => 'meta_value_num',
            'ignore_sticky_posts' => 1,
            'posts_per_page' => get_option( 'posts_per_page' ),
            'paged' => $paged,
            'date_query' => array(
                array(
                        'year'  => $today['year'],
                        'month' => $today['mon'],
                        'day'   => $today['mday'],
            ),
      ),
      );
      $trenquery = new WP_Query( $args );
      return $trenquery;
    }
?>