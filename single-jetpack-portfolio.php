<?php
/**
 *
 *
 * @package Elements Development
 */
 get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();


				get_template_part( 'template-parts/content', 'portfolio' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar( 'footer' );
get_footer();
