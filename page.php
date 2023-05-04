<?php get_header(); ?>
    <?php 
        if(is_front_page()){
            get_template_part( './template-parts/identity-card' );
        }else{
            the_title();
            the_content();
        }
    ?>
<?php get_footer(); ?>
