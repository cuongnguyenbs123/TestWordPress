<?php
    function register_nav_header(){
        register_nav_menus(array(
            'cuong-top-nav'=>__('Cuong Top Nav')
        ));
    }
    add_action('init','register_nav_header');
?>`