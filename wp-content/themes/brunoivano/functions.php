<?php
    //theme support
    function brunoivano_theme_support(){
        add_theme_support('title-tag');
    }
    add_action('after_theme_setup', 'brunoivano_theme_support');

    //menu
    function brunoivano_menus(){
        $locations = array(
            'primary' => "Desktop Primary Left Sidebar",
            'footer' => "Footer Menu Items"
        );
        register_nav_menus($locations);
        add_theme_support('post-thumbnails');
    }
    add_action('init', 'brunoivano_menus');

    //head
    function brunoivano_register_styles(){
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('brunoivano_style', get_template_directory_uri()."/style.css", array(), $version, 'all'); //Se aggiungi l'array il sito crasha
        wp_enqueue_style('brunoivano_fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css", array(), '1.0', 'all');
        wp_enqueue_style('brunoivano_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
        wp_enqueue_style('brunoivano_MDBbootstrap', "https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css", array(), '1.0', 'all');
        wp_enqueue_style('brunoivano_googleFont', "https://fonts.googleapis.com", array(), '1.0', 'all');
        wp_enqueue_style('brunoivano_googleFont', "https://fonts.gstatic.com", array(), '1.0', 'all');
        wp_enqueue_style('brunoivano_googleFont', "https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap", array(), '1.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'brunoivano_register_styles');

    //font
    function wpb_add_google_fonts(){
        wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap', false );    
    }        
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

    //footer
    function brunoivano_register_scripts(){
        wp_enqueue_script('brunoivano_jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
        wp_enqueue_script('brunoivano_popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
        wp_enqueue_script('brunoivano_bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);
        wp_enqueue_script('brunoivano_MDBbootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js', array(), '3.4.1', true);
        wp_enqueue_script('brunoivano_main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'brunoivano_register_scripts');

    //logo
    function brunoivano_custom_logo_setup() {
        $defaults = array(
            'height'               => 100,
            'width'                => 300,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'brunoivano_custom_logo_setup' );

    //widgets
    function brunoivano_widgets_areas(){
        register_sidebar( 
            array(
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'Sidebar Widget Area',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
                'before_title' => '',
                'after_title' => '',
            )   
            );
    }
    register_sidebar( 
        array(
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'before_title' => '',
            'after_title' => '',
        )   
    );
    register_sidebar( 
        array(
            'name' => 'Footer Links Area',
            'id' => 'footer-2',
            'description' => 'Footer Widget Area',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'before_title' => '',
            'after_title' => '',
        )   
    );
    add_action('widgets_init', 'brunoivano_widgets_areas');
?>


