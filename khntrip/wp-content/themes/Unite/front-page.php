<?php

    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {

 get_header(); ?>

	<div id="primary" class="content-area ">
		<main id="main" class="site-main" role="main">
            <?php get_template_part('content-home', 'Home'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();
}
?>