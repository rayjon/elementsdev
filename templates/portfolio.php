<?php
/*
 * Template Name: Portfolio Page
 *
 */

 if ( 'posts' == get_option( 'show_on_front' ) ) :

 	get_template_part( 'index' );

 else :

 get_header();?>

<div class="wrap">
 	<div id="primary">
 		<main id="main" class="site-main" role="main">
            <div class="hentry">
            <?php while ( have_posts() ) : the_post(); ?>
 				<?php get_template_part( 'components/features/portfolio/portfolio' ); ?>
 			<?php endwhile; ?>
        </div>
 		</main>
 	</div>
</div><!-- .site-content-wrapper -->
 <?php get_footer(); ?>

 <?php endif; ?>
