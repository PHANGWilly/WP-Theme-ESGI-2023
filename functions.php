<?php
/* 
    The footer.
*/
?>

<?php 
    
    function esgi_supports() {
        add_theme_support( 'title-tag');
        register_nav_menu( 'header', 'En tête du menu' );
    }

    //Affichage des fichiers js et css
    function esgi_register_assets(){
        //css
        wp_register_style('esgi-css',get_template_directory_uri().'/style.css');
        wp_enqueue_style('esgi-css');
        //js
        wp_register_script('esgi-js',get_template_directory_uri().'/src/js/app.js');
        wp_enqueue_script('esgi-js');
    }

    function esgi_menu_class($classes){
        $classes[] = '';
        return $classes;
    }

    add_action('after_setup_theme','esgi_supports');
    add_action('wp_enqueue_scripts','esgi_register_assets');
    add_filter('nav_menu_css_class', 'esgi_menu_class');
?>