<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mplsagc
 */

?>

</div><!-- /#content -->
<?php include get_template_directory() . '/partial/keep-update.php'; ?>
<footer id="colophon" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="site-info">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="brand">1motivo</a>
					<p>
						<a href="#">Politica de Privacidade</a> / <a href="#">Termos de uso</a><br>
						Licença Creative Commons Atribuição 3.0 . (É obrigatório citar link com a fonte).
					</p>
				</div><!-- .site-info -->
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>