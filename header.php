<?php
/* 
    The header.
*/
?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    
    <!-- START MAIN CONTENT-->
    <main id="site-content" class="container my-0 mx-auto">

        <!-- START HEADER -->
        <header id="site-header" class="my-4 d-flex flex-row justify-content-center align-items-center">
            <nav class="">
                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'menu_class' => 'd-flex justify-content-center'
                ])?>
            </nav>
            <button class="burger-menu">
                <img src="<?php echo get_template_directory_uri().'/src/img/burger-icon.svg';?>" alt="">
            </button>
        </header>
        <!-- END HEADER -->
