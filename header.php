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
    <!-- START HEADER -->
        <header id="site-header">
            <div class="header-container">
                <div class="menu-mobile">
                    <button id="mobile-button">
                        <span class="burger-icon"></span>
                    </button>
                </div>
                <nav class="main-nav">
                    
                    <?php 
                        wp_nav_menu([
                            'theme_location' => 'header',
                            'menu_class' => 'list-nav'
                        ]);
                    ?>
                </nav>
            </div>            
        </header>
    <!-- END HEADER -->

    <!-- START MAIN CONTENT-->
    <main id="site-content" class="container my-0 mx-auto">
        <div class="main-container">