<script>
    new WOW().init();
</script>

<div class="box-tour-trongngoainuoc container wow fadeInUp" data-wow-duration="2s">
    <h2>Tour Trong Nước</h2>
    <?php
    $tour_trong_nuoc = new WP_Query(
        array(
            'post_type' => 'tour_page',
            'posts_per_page' => 4,
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
                <div class="col-sm-3 " >
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

<div class="box-tour-trongngoainuoc container wow fadeInDown" data-wow-duration="2s">
    <h2>Tour ngoài Nước</h2>
    <?php
    $tour_ngoai_nuoc = new WP_Query(
        array(
            'post_type' => 'tour_page',
            'posts_per_page' => 4,
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
    <?php   $link = get_site_url() . "/tour-trong-ngoai-nuoc?Type=tour-trong-nuoc"; ?>
    <div class="col-sm-12 xemthem">
        <a href="<?php echo $link ?>">Xem Thêm <p class="	glyphicon glyphicon-chevron-right"></p></a>
    </div>
</div>

<div class="container bg-white wrap-box-thuexe">
    <h2>Thuê xe đưa đón sân bay</h2>
    <?php
    $tour_trong_nuoc = new WP_Query(
        array(
            'post_type' => 'thue_xe',
//            'posts_per_page' => 8,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'category_xe',
                    'field' => 'slug',
                    'terms' => 'thue-xe-dua-don-san-bay'
                )
            ),
        )
    )
    ?>

    <?php
    if ($tour_trong_nuoc->have_posts()): ?>
        <?php while ($tour_trong_nuoc->have_posts()) : $tour_trong_nuoc->the_post(); ?>
            <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
                <div class="col-sm-3 ">
                    <div class="box-thuexe bg-cyan">
                        <a href="<?php the_permalink(); ?>">
                            <p><?php the_field('diem_khoi_hanh')  ?> ⇀ <?php the_field('diem_den')  ?></p>
                            <p class="giatu">Giá Từ: <span class="tien"><?php tien(get_field('gia_xe_4_cho')) ?>đ</p></span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="container bg-white wrap-box-thuexe">
    <h2>Thuê xe du lịch</h2>
    <?php
    $tour_trong_nuoc = new WP_Query(
        array(
            'post_type' => 'thue_xe',
//            'posts_per_page' => 8,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'category_xe',
                    'field' => 'slug',
                    'terms' => 'thue-xe-du-lich'
                )
            ),
        )
    )
    ?>

    <?php
    if ($tour_trong_nuoc->have_posts()): ?>
        <?php while ($tour_trong_nuoc->have_posts()) : $tour_trong_nuoc->the_post(); ?>
            <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
                <div class="col-sm-3 ">
                    <div class="box-thuexe bg-cyan">
                        <a href="<?php the_permalink(); ?>">
                            <p><?php the_field('diem_khoi_hanh')  ?> ⇀ <?php the_field('diem_den')  ?></p>
                            <p class="giatu">Giá Từ: <span class="tien"><?php tien(get_field('gia_xe_4_cho')) ?>đ</p></span>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="box-tour-trongngoainuoc container">
    <h2>Tham Quan Trong Nước</h2>
    <?php
    $tour_trong_nuoc = new WP_Query(
        array(
            'post_type' => 'tham_quan',
            'posts_per_page' => 8,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'tham_quan',
                    'field' => 'slug',
                    'terms' => 'tham-quan-trong-nuoc'
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
    <!--    --><?php //  $link = get_site_url() . "/tour-trong-ngoai-nuoc?Type=tham-quan-trong-nuoc"; ?>
    <!--    <div class="col-sm-12 xemthem">-->
    <!--        <a href="--><?php //echo $link ?><!--">Xem Thêm <p class="	glyphicon glyphicon-chevron-right"></p></a>-->
    <!--    </div>-->
</div>

<div class="box-tour-trongngoainuoc container">
    <h2>Tham Quan Ngoài Nước</h2>
    <?php
    $tour_trong_nuoc = new WP_Query(
        array(
            'post_type' => 'tham_quan',
            'posts_per_page' => 8,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'tham_quan',
                    'field' => 'slug',
                    'terms' => 'tham-quan-ngoai-nuoc'
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
    <!--    --><?php //  $link = get_site_url() . "/tour-trong-ngoai-nuoc?Type=tham-quan-trong-nuoc"; ?>
    <!--    <div class="col-sm-12 xemthem">-->
    <!--        <a href="--><?php //echo $link ?><!--">Xem Thêm <p class="	glyphicon glyphicon-chevron-right"></p></a>-->
    <!--    </div>-->
</div>