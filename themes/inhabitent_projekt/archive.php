<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area-a">
		<main id="main" class="site-main" role="main">
		<?php the_archive_title( '<h1 class="page-title-a">', '</h1>' );?>
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content-archive' ); ?>
				<div class="journal-button"><a href="<?php the_permalink(); ?>"><button class="dark-button">Read More →</button></a></div>	

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_sidebar(); ?>	
<?php get_footer(); ?>