<?php
    
    function my_theme_scripts() {
        // Anexar la hoja de estilos principal
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        // Anexar todas las hojas de estilo restantes
        wp_enqueue_style( 'plugins', get_template_directory_uri().'/assets/css/plugins.min.css');
        wp_enqueue_style( 'template', get_template_directory_uri().'/assets/css/template.css');
        wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
        // Anexar los ficheros de JS
        wp_register_script( 'plugins-js', get_template_directory_uri().'/assets/js/plugins.min.js', null, null, true );
        wp_enqueue_script( 'plugins-js' );
        
        wp_register_script( 'custom-js', get_template_directory_uri().'/assets/js/custom.min.js', null, null, true);
        wp_enqueue_script( 'custom-js' ); 
        
        wp_register_script( 'jquery-js', get_template_directory_uri().'/assets/js/jquery.min.js', null, null, false);
        wp_enqueue_script( 'jquery-js' ); 
        
        wp_register_script( 'bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', null, null, true);
        wp_enqueue_script( 'bootstrap-js' ); 
        
        wp_register_script( 'popper-js', get_template_directory_uri().'/assets/js/popper.min.js', array( 'jquery-js' ), null, true);
        wp_enqueue_script( 'popper-js' ); 
    }
    add_action('wp_enqueue_scripts', 'my_theme_scripts');


    /**
     * Retrieve a page object giving its title
     * @param  $title String  Page title 
     * @return $page  Object  Page 
     * 
     */