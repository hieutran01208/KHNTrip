<div class="box-tour-trongngoainuoc container">
    <h2>Tour Trong Nước</h2>
    <?php
    $tour_trong_nuoc = new WP_Query(
        array(
            'post_type' => 'tour_page',
            'posts_per_page' => 8,
            'tax_query' => array(
                'relation' => 'AND',
            array(
                'taxonomy' => 'category_tour',
                'field' => 'slug',
                'terms' => 'tour-trong-nuoc'
            )
            ),
        )
    )
    ?>

    <?php
    if ($tour_trong_nuoc->have_posts()): ?>
        <?php while ($tour_trong_nuoc->have_posts()) : $tour_trong_nuoc->the_post(); ?>
            <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
                <div class="col-sm-3">
                    <div class="box-tour">
                        <a href="<?php the_permalink(); ?>">
                            <div class="bg-white">
                                <?php the_post_thumbnail(); ?>
                                <p class="box-tour-title"><?php the_title(); ?></p>
                                <p class="box-tour-gia"><?php  tien(get_field('gia_nguoi_lon')); echo"đ" ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php   $link = get_site_url() . "/tour-trong-ngoai-nuoc?Type=tour-trong-nuoc"; ?>
    <div class="col-sm-12 xemthem">
        <a href="<?php echo $link ?>">Xem Thêm <p class="	glyphicon glyphicon-chevron-right"></p></a>
    </div>
</div>




<div class="box-tour-trongngoainuoc container">
    <h2>Tour ngoài Nước</h2>
    <?php
    $tour_ngoai_nuoc = new WP_Query(
        array(
            'post_type' => 'tour_page',
            'posts_per_page' => 8,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'category_tour',
                    'field' => 'slug',
                    'terms' => 'tour-ngoai-nuoc'
                )
            ),
        )
    )
    ?>

    <?php
    if ($tour_ngoai_nuoc->have_posts()): ?>
        <?php while ($tour_ngoai_nuoc->have_posts()) : $tour_ngoai_nuoc->the_post(); ?>
            <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
                <div class="col-sm-3">
                    <div class="box-tour">
                        <a href="<?php the_permalink(); ?>">
                            <div class="bg-white">
                                <?php the_post_thumbnail(); ?>
                                <p class="box-tour-title"><?php the_title(); ?></p>
                                <p class="box-tour-gia"><?php  tien(get_field('gia_nguoi_lon')); echo"đ" ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php   $link = get_site_url() . "/tour-trong-ngoai-nuoc?Type=tour-ngoai-nuoc"; ?>
    <div class="col-sm-12 xemthem">
        <a href="<?php echo $link ?>">Xem Thêm <p class="	glyphicon glyphicon-chevron-right"></p></a>
    </div>
</div>
