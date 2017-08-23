<?php
/**
 * Template Name: Show-list-tour
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package unite
 */
?>
<?php get_template_part('header'); ?>
<div class="show-list-tour">
    <div id="content" role="main">
        <?php
        $Typetour = $_GET['Type'];
        $Typetour = $_GET['Type'];
        ?>

        <div class="box-tour-trongngoainuoc container">
            <?php
            if ($Typetour == 'tour-trong-nuoc'){
                echo '<h2>Tour Trong Nước</h2>';
            }
            else if ($Typetour == 'tour-ngoai-nuoc'){
                echo '<h2>Tour Ngoài Nước</h2>';
            }
            ?>
            <?php
            $tour_trong_nuoc = new WP_Query(
                array(
                    'post_type' => 'tour_page',
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'category_tour',
                            'field' => 'slug',
                            'terms' => $Typetour
                        )
                    ),
                )
            )
            ?>

            <?php
            if ($tour_trong_nuoc->have_posts()): ?>
                <?php while ($tour_trong_nuoc->have_posts()) : $tour_trong_nuoc->the_post(); ?>
                    <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
                        <div class="col-sm-12 bg-white box-tour-col12" >
                                    <div class="col-sm-3">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="col-sm-7">
                                        <p class="box-show-list-title"><?php the_title(); ?></p>
                                        <p class="box-show-list-khoihanh">Khởi hành từ <?php  the_field("khoi_hanh") ?></p>
                                        <p class="box-show-list-khoihanh">Ngày khởi hành: Liên hệ</p>
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="box-show-list-gia"><?php  tien(get_field('gia_nguoi_lon')); echo"đ" ?></p>
                                        <a href="<?php the_permalink(); ?>">Đặt Tour <p class="	glyphicon glyphicon-chevron-right"></p></a>
                                    </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php  get_template_part('footer'); ?>
