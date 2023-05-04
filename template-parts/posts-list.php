<?php 
    $args = array(
        "post_type" => 'post',
        "orderby" => 'date',
        "order" => 'desc',
        "numberposts" => 6,
    );

    $posts = get_posts($args);
?>

<section class="posts-list">
    <ul>
        <?php 
            foreach ($posts as $post):?>
                <li>
                    <a href="<?= get_permalink( $post->ID);?>">
                        <span class="post-title">
                            <?= $post->post_title ;?>
                        </span>
                        <time class="post-date">
                            <?= wp_date('j F Y', strtotime($post->post_date));?>
                        </time>
                    </a>
                </li>
                <?php
            endforeach;
        ?>
    </ul>
</section>