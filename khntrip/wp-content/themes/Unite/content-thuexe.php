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