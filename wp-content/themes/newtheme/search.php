<?php
 get_header();
?>
<?php
global $wp_query; 

$thesearch = get_search_query(); 
$args = array_merge( $wp_query->query, array( 
    'meta_query' => array(
     array(
         'key' => 'field_to_seach',
         'value' => $thesearch,
         'compare' => 'IN'
     )
 )
     ));
 query_posts( $args ); 
?>
    
<?php
 get_footer();
?>