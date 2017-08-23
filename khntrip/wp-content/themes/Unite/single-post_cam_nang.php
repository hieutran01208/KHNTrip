<?php get_template_part('header'); ?>
<div class="bg-white">
    <div class="container pt20 single-cam-nang">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <article role="article" id="post_<?php the_ID() ?>" <?php post_class() ?>>
                <div class="cam-nang-thumb">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="p_rl20">
                    <h1>Du Lịch <?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>

            </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php  get_template_part('footer'); ?>