<?php 
/*
Theme Name : ESGI 2023
Author : Phang Willy ESGI 2023
Description : Thème pour la classe 1 ESGI 2022-2023
*/
?>
<?php get_header() ?>
	<?php
	get_template_part('template-parts/identity-card');
	?>

	<?php 
	if(!is_front_page()){
		get_template_part('template-parts/posts-list');
	}
	?>
<?php get_footer() ?> 