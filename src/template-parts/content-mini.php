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
<article id="post-<?php the_ID(); ?>" <?php post_class('post-mini'); ?>>
	<a href="<?php echo esc_url( get_permalink() ); ?>" class="cover" style="background-image: url('<?php echo $cover_post; ?>');">
		<span><i class="ion ion-eye"></i>	<?php echo custom_number_format(intval(get_post_meta(get_the_ID(), 'post_views_count', true))); ?></span>
	</a>
	<header class="entry-header">
		<a href="<?php echo $catUrl; ?>" class="cat"><?php echo $catName; ?></a>
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
