<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package honoka_templates
 */

?>

	</div><!-- #content -->
	</div><!-- .container -->
	<div class="container">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'honoka_templates' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'honoka_templates' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'honoka_templates' ), 'honoka_templates', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- .container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
