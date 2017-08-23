<div class="cont-cam-nang container">
    <div class="title-cdnb">
        <center><span>Các Điểm Nổi Bật</span></center>
    </div>
    <?php
    $project_item = new WP_Query(
        array(
            'post_type' => 'post_cam_nang',
        )
    )
    ?>
    <?php
    if ($project_item->have_posts()): ?>
        <?php while ($project_item->have_posts()) : $project_item->the_post(); ?>
            <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
                <div class="col-sm-4">
                    <div class="box-cam-nang">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                           <p><?php the_title(); ?></p>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>