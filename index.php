<?php 
/*
Theme Name : ESGI 2023
Author : Phang Willy ESGI 2023
Description : Thème pour la classe 1 ESGI 2022-2023
*/
?>
<?php get_header();?>
    <?php
        $page_id = get_queried_object_id();
        $page_post = get_post( $page_id );
        if(!is_front_page()){
            echo "<h1 class='page-title'>" . $page_post->post_title . "</h1>";
        }
        echo apply_filters( 'the_content', $page_post->post_content );

        
        get_template_part('./template-parts/identity-card');
        
    ?>
<?php get_footer();?>