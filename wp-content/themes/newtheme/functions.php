<?php
    include('inc/nav-header.php');
    include('inc/assets.php');


    function resign_js_jquery(){
        wp_enqueue_script('jquery', get_stylesheet_directory_uri() .'../assets/js/jquery.js',array('jquery'));
    }


    add_action('wp_enqueue_scripts','resign_js_jquery');


    function loadMoreCategory() {

        $ajaxposts = new WP_Query([
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'slug',
                    'terms' => $_POST['slug']
                )
                ),
          'posts_per_page' => $_POST['posts_per_page'],
          'orderby' => 'date',
          'order' => 'DESC',
          'paged' => $_POST['paged'],
        ]);
      
        $response = '';
        $max_pages = $ajaxposts->max_num_pages;

        if($ajaxposts->have_posts()) {
          ob_start();
            while($ajaxposts->have_posts()) : $ajaxposts->the_post();
              $response .= "<div>".$ajaxposts->post->post_title.
              $ajaxposts->post->post_content.
              "<br>
          </div>" ;
            endwhile;
            $output = ob_get_contents();
            ob_end_clean();
        }
        else {
            $response = '';
        }

            $result = [
            'max' => $max_pages,
            'html' => $response,
            ];
            echo json_encode($result);
            exit;
            }
            add_action('wp_ajax_loadMoreCategory', 'loadMoreCategory');
            add_action('wp_ajax_nopriv_loadMoreCategory', 'loadMoreCategory');

?>