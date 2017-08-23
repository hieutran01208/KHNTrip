<?php
/**
 * Template Name: blog-page
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
    <div>
        <div id="content" role="main">
            <?php get_template_part('content-blog', 'Home'); ?>
        </div>
    </div>

<?php  get_template_part('footer'); ?>