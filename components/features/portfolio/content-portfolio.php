<?php
/**
 * The template used for displaying projects on index view
 *
 * @package Crisaba_Business
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
	<?php if ( '' != get_the_post_thumbnail() ) : ?>
		<div class="portfolio-thumbnail card-image">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( array(400, 400)); ?>
			</a>
		</div>
	<?php endif; ?>

	<header class="portfolio-entry-header card-header">
		<?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?>


	</header>
	<div class="card-copy">
		<?php the_excerpt(); ?>
		<div class="card-meta">
			<?php /* echo get_the_term_list( get_the_ID(), 'jetpack-portfolio-type', '<span class="portfolio-entry-meta">', esc_html_x(', ', 'Used between list items, there is a space after the comma.', 'crisabaportfolio' ), '</span>' ); */ ?>
		</div>
	</div>

</article>
