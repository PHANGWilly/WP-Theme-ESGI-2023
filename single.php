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
                    <?= get_the_author_meta('display_name', $post->post_author);?>
                </span>
            </div>
            <span class="circle"></span>
            <div class="post-date">
                <?= wp_date('j F Y', strtotime($post->post_date));?>
            </div>
        </div>
        <div class="post-thumbnail">
		    <?= get_the_post_thumbnail() ?>
        </div>
        <br>
        <div class="post-content">
            <?php the_content() ?>
        </div>
        <div class="sharable">
            <div class="sharable-container">
                <span class="sharable-title">Partager :</span>
                <ul class="sharable-list">
                    <li class="sharable-item">
                        <a href="#" class="sharable-link">
                            <?= getIcon('twitter'); ?>
                        </a>
                    </li>
                    <li class="sharable-item">
                        <a href="#" class="sharable-link">
                            <?= getIcon('facebook'); ?>
                        </a>
                    </li>
                    <li class="sharable-item">
                        <a href="#" class="sharable-link">
                            <?= getIcon('google'); ?>
                        </a>
                    </li>
                    <li class="sharable-item">
                        <a href="#" class="sharable-link">
                            <?= getIcon('linkedin'); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<?php get_footer(); ?>