<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php the_post_thumbnail(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
			
			<?php endwhile; // End of the loop. ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class= "contact">
	<h3>contact info</h3>
				<p><i class="fas fa-envelope"></i><a href = "mailto:info@inhabitent.com"> info@inhabitent.com </a></p>
				<p><i class="fas fa-phone-alt"></i><a href = "tel: 778-456-7891"> 778-456-7891 </a></p>
				<p class="p-icons">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
				</p>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>

