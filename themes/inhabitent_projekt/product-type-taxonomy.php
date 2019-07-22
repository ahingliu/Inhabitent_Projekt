<?php
/**
 * Template Name: taxonomy template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">

			
			<!-- get terms - wordpress - foreach loop -->

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php 
				$the_query = new WP_Query( array(
					'post_type' => 'product',
					'posts_per_page' => 4,
				)); 
				?>
				<div class="product-grid container">
				<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'product' ); ?>

				<?php endwhile; ?>
				
				</div>
				<?php else : ?>
				<p><?php get_template_part( 'template-parts/content', 'none' ); ?></p>
				<?php endif; ?> 
			

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


