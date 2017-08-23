<div class="cont-blog container">
    <?php
    $project_item = new WP_Query(
        array(
            'post_type' => 'blog_page',
        )
    )
    ?>
    <?php
    if ($project_item->have_posts()): ?>
        <?php while ($project_item->have_posts()) : $project_item->the_post(); ?>
            <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
                <div class="col-sm-3">
                    <div class="box-blog">
                        <a href="<?php the_permalink(); ?>">
                            <div class="bg-white">
                                <?php the_post_thumbnail(); ?>
                                <p><?php the_title(); ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>