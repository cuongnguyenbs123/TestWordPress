<!-- Get post by category slug -->

<?php
 get_header();
?>
<div class="content-container">
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
    
    <?php the_post_thumbnail('single-post-thumbnail'); ?>
     <a href=<?= get_the_permalink() ?>>   <?php
        the_title();
    ?></a>

        <?php
        the_content();
    ?>

        <br>
    </div>

    <?php endforeach; ?>
</div>

<?=  get_template_directory_uri() ?>
<button id="load-more" data-perpage=<?= $perPage?> data-slug=<?= $category?>
    data-url=<?= get_template_directory_uri()?>>Load more</button>

<?php
    get_footer();    
?>