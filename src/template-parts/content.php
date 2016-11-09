<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mplsagc
 */
	$cover_post = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
	$cats = get_the_category( $post->ID );
	$catName = get_cat_name($cats[0]->cat_ID);
	$catUrl = get_term_link($cats[0]->cat_ID);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-full'); ?>>
	<div class="cover" style="background-image: url('<?php echo $cover_post; ?>');">
		<span><i class="ion ion-eye"></i>	<?php echo custom_number_format(intval(get_post_meta(get_the_ID(), 'post_views_count', true))); ?></span>
	</div>
	<header class="entry-header">
		<a href="<?php echo $catUrl; ?>" class="cat"><?php echo $catName; ?></a>
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
		<?php mplsagc_posted_on(); ?>
	</header><!-- .entry-header -->
	<?php include get_template_directory() . '/partial/entry-share.php'; ?>
	<div class="entry-content">
		<?php the_content(); ?>
		<div>
			<?php mplsagc_entry_footer(); ?>
		</div>
	</div><!-- .entry-content -->
	<?php include get_template_directory() . '/partial/entry-share.php'; ?>
	<?php if(false): ?>
	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
<?php
$post = get_previous_post();
if (!empty( $post )): ?>
	<?php get_template_part( 'template-parts/content-mini' ); ?>
<?php endif; ?>
