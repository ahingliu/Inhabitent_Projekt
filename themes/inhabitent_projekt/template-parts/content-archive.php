<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header-a">
		
	<?php the_title( sprintf( '<h2 class="entry-title-a"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		
		<p class="comments-a">
		<?php if ( 'post' === get_post_type() ) : ?>
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		<?php endif; ?>
		</p>
	</header><!-- .entry-header -->

	<div class="entry-content-a">
		<?php the_excerpt(); ?>

		
	</div><!-- .entry-content -->
</article><!-- #post-## -->
