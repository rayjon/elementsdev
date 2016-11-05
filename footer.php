<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer-wrapper">
			<?php shoreditch_social_menu(); ?>

			<div class="site-info">
				<p><strong>&copy; Elements Development <?php echo date("Y"); ?></strong></p>
			</div><!-- .site-info -->
		</div><!-- .site-footer-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
