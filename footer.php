<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HMNA
 */

?>

			</div><!-- #content -->
		</div><!-- #main-page -->
	</div><!-- #main-content-area -->





<div class="footer-area full">
	<div class="main-page inner">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://humana.org.mx/', 'hj-hmna' ) ); ?>"><?php printf( esc_html__( '%s', 'hj-hmna' ), 'Humana' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
