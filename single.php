<?php get_header(); ?>
    <section class="single-post">
        <h1 class="post-title"><?php the_title();?></h1>
        <br>
        <div class="post-info">
            <div class="post-author">
                <div class="post-autor-picture">
                    <?= get_avatar($post->post_author); ?>
                </div>
                <span class="post-autor-name">
                    <?= $post->post_author; ?>
                </span>
            </div>
            <span class="circle"></span>
            <div class="post-date">
                <?= wp_date('j F Y', strtotime($post->post_date));?>
            </div>
        </div>
        <?= get_the_post_thumbnail() ?>
        <br>
        <div class="post-content">
            <?= $post->post_content;?>
        </div>
    </section>
<?php get_footer(); ?>