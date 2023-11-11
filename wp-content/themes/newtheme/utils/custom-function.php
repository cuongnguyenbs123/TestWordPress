<?php

/// Load more ajax function
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
