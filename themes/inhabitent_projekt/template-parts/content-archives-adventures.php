

<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<p>testing</p>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
	<header class="entry-header">
		
		<?php if ( has_post_thumbnail() ) : ?>
  			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        		<?php the_post_thumbnail(); ?>
    		</a>
		<?php endif; ?>
	
		<?php the_title( sprintf( '<div class="shop-box"><h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
		
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		 <?php echo '<div class="price">'; echo CFS()->get( 'price' ); echo '</div>'; ?> 
	</div><!-- .entry-content -->
</article><!-- #post-## -->