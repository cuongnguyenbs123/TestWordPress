
<?php
    function resign_js_assets(){
        wp_enqueue_script('script', get_stylesheet_directory_uri() .'../assets/js/script.js',array());

    }

    add_action('wp_enqueue_scripts','resign_js_assets');
?>

