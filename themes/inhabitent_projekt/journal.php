<?php
/**
 * Template Name: journal
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'journal' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class= "contact">
	<h3>contact info</h3>
				<p><i class="fas fa-envelope"></i><a href = "mailto:info@inhabitent.com"> info@inhabitent.com </a></p>
				<p><i class="fas fa-phone-alt"></i><a href = "tel: 778-456-7891"> 778-456-7891 </a></p>
				<p><i class="fas fa-map-marker-alt"></i><a href = "https://www.google.ca/maps/place/1490+W+Broadway,+Vancouver,+BC+V6H+4E8/@49.2634483,-123.1403569,17z/data=!3m1!4b1!4m5!3m4!1s0x548673c79e1ac457:0x3aea6428fa30dc6a!8m2!3d49.2634483!4d-123.1381682"> 1490 W Broadway
				Vancouver, BC V6H 1H5 </a></p>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
