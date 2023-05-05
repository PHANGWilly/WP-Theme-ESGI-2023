<?php 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = [
			'numberposts' => 6,
            'paged' => $paged
		];
$posts = get_posts($args);

?>
<hr class="separator">
<section class="posts-list">
	<ul  class="post-nav">
		<?php 
		    foreach ($posts as $post) { ?>
                <li class="the-post">
                    <a href="<?= get_permalink($post->ID) ?>"  class="post-article">
                        <div class="post-article__container">
                            <span class="post-title"><?= $post->post_title ?></span> 
                            <time class="post-date">
                                <?= wp_date('j F Y', strtotime($post->post_date)) ?>
                            </time>
                        </div>
                    </a>
                </li>
		<?php } ?>
	</ul>
    <div class="pagination">

    </div>
</section>