<?php
    function register_nav_header(){
        register_nav_menus(array(
            'cuong-top-nav'=>__('Cuong Top Nav','text_domain'),
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ));
    }
    add_action('init','register_nav_header');
?>`