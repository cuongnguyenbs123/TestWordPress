<!-- Get post by category slug -->
<?php
    $slug = get_site_url();
    $category  = get_the_category();
    $perPage = get_option( 'posts_per_page' );    
    $current_url = $wp->request;
    list($remove, $category) =  explode('category/',$current_url);
    $args = array( 'numberposts' => $perPage, 'category_name' => $category );
    $posts = get_posts( $args );
    foreach( $posts as $post ): setup_postdata($post); 
?>
<div>
    <?php
        the_title();
    ?>

    <?php
        the_content();
    ?>
    <br>
</div>

<?php endforeach; ?>