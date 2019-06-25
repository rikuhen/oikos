<?php

//required plugins
include_once 'lib/jl_require_plugins.php';


if(!function_exists('oikos_theme_setup')) {

    function oikos_theme_setup() {
        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support('post-thumbnails');

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support( 'title-tag' );
        
        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
        );
        
        /**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 112,
				'width'       => 199,
				'flex-width'  => true,
				'flex-height' => false,
			)
        );
        

        // This theme uses wp_nav_menu() in two locations.
	    register_nav_menus( array(
		    'top'    => __( 'Top Menu', 'oikostheme' )
	    ) );
    }

    add_action( 'after_setup_theme', 'oikos_theme_setup');

}


if(! function_exists('oikos_scripts') ) {
    function oikos_scripts() {

        //styles
        wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css' ,false, '4.1.3');
        wp_enqueue_style('fontawesome-css', get_template_directory_uri().'/assets/css/font-awesome.min.css' ,false, '4.1.3');
    
        //main style
        wp_enqueue_style('style',get_stylesheet_uri(), array('bootstrap-css'), '1.0');

        //scripts
        wp_enqueue_script('jquery');
        wp_enqueue_script('popper',get_template_directory_uri().'/assets/js/popper.js',array('jquery'),'1.0',true);
        wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.min.js',array('popper'),'1.0',true);
        
        
    }
    
    add_action( 'wp_enqueue_scripts',  'oikos_scripts');
}


if (! function_exists('oikos_widgets_init')) {

    function oikos_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Header Slider', 'oikos' ),
            'id'            => 'header-slider',
            'before_widget' => '<div>',
		    'after_widget'  => '</div>',
            'description'   => __( 'Agrega widget para el header.', 'oikos' )
        ) );
        
        register_sidebar( array(
            'name'          => __( 'Page Footer Sidebar 1', 'oikos' ),
            'id'            => 'sidebar-footer-1',
            'before_widget' => '<div>',
		    'after_widget'  => '</div>',
            'description'   => __( 'Agrega widget para el footer.', 'oikos' )
        ) );

        register_sidebar( array(
            'name'          => __( 'Page Footer Sidebar 2', 'oikos' ),
            'id'            => 'sidebar-footer-2',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<p class="yellow-text text-center bolder">',
		    'after_title'   => '</p>',
            'description'   => __( 'Agrega widget para el footer.', 'oikos' )
        ) );
    }
    add_action( 'widgets_init', 'oikos_widgets_init', 10, 3 );
}



/*
    AGREGA LA CLASE NAV-LINK DE BOOTSTRAP AL MENU PRINCIPAL
*/
if (! function_exists('oikos_enlace_class')) {
    function oikos_enlace_class($atts, $item, $args) {
        if($args->theme_location == 'top'){
            $atts['class'] = 'nav-link';
        }
        return $atts;
    }
    add_filter('nav_menu_link_attributes','oikos_enlace_class',10, 3);
}

/*
    Add class for <li> item bootstrap
*/
if (! function_exists('oikos_item_class')) {
    function oikos_item_class($atts, $item, $args) {
        if($args->theme_location == 'top'){
            $atts['class'] = 'nav-item';
        }

        //add .active class
        if (in_array('current-menu-item', $atts)) {
            $atts['class'] = 'active';
        }
        return $atts;
    }
    add_filter('nav_menu_css_class','oikos_item_class',10, 3);
}

