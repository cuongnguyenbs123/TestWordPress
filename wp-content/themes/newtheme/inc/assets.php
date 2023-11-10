<?php
    //this goes in functions.php near the top
    function my_scripts_method() {
        // register your script location, dependencies and version
        wp_register_script('jquery-lib',
        get_stylesheet_directory_uri() .'../assets/js/jquery.js',
        array('jquery'),
        '1.0' );
        // enqueue the script
        wp_enqueue_script('jquery-lib');


        wp_register_script('custom_script',
        get_stylesheet_directory_uri() .'../assets/js/script.js',
        array(),
        '1.0',  array(
            'strategy' => 'defer',
            'in_footer' =>true
        ) );
        // enqueue the script
        wp_enqueue_script('custom_script');
        }
    add_action('wp_enqueue_scripts', 'my_scripts_method');
?>

