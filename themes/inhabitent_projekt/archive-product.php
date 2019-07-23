<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">

			<h1 class="page-title">Shop Stuff</h1>
				<ul class="product-type-list">
				<li><p><a href="http://localhost/wptest/product-type/do" target="_blank" >Do</a></p></li>
				<li><p><a href="http://localhost/wptest/product-type/Eat" target="_blank">Eat</a></p></li>
				<li><p><a href="http://localhost/wptest/product-type/Sleep" target="_blank">Sleep</a></p></li>
				<li><p><a href="http://localhost/wptest/product-type/Wear" target="_blank">Wear</a></p></li>	
				</ul>
			
			<!-- get terms - wordpress - foreach loop -->

			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php 
				$the_query = new WP_Query( array(
					'post_type' => 'product',
					'posts_per_page' => 16,
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
