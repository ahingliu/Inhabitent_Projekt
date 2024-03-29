<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<!-- Hero Section -->

		<section class="front-page-hero">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>\resources\images\logos\inhabitent-logo-full.svg">
		</section>
		
		<!-- Shop Section -->

		<section class="product-info container">
			
				<h2>Shop Stuff</h2>

				<!-- Getting the products taxonomy data -->

				<?php
					$terms = get_terms( array (
						'taxonomy' => 'product-type',
						'hide_empty' => 0,
						) 
					);
				if ( ! empty( $terms ) ) :
				?>
					<!-- Displaying the products taxonomy data -->

					<div class="product-type-blocks">
						<?php foreach ( $terms as $term ) :
						?>
							<div class="product-type-block-wrapper">
								<img src="<?php echo get_template_directory_uri() .
									'/resources/images/product-type-icons/' . $term->slug; ?>.svg"
									alt="<?php echo $term->name; ?>"/>
								<p><?php echo $term->description; ?></p>
								<a href="<?php echo get_term_link( $term ); ?>" class="btn">
									<?php echo $term->name; ?> Stuff
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</section>
							
			<section class="product-info container">
			
			<h2>Inhabitent Journal</h2>

			<!-- Getting the journal posts data -->	
			
			<?php
   					$args = array( 'post_type' => 'post', 'order' => 'DESC', 'numberposts' => 3 );
   					$journal_posts = get_posts( $args );
				?>

			<!-- Displaying the journal posts data -->	
			<div class="journal-posts-blocks">
						<?php foreach ( $journal_posts as $post ) : setup_postdata( $post); ?>
							<div class="journal-posts-block-wrapper">
								<div class="journal-image-wrapper">
									<?php the_post_thumbnail('medium_large'); ?>
								</div>
								<div class="journal-content-wrapper">
								<p>
									<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
								</p>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<a href="<?php the_permalink(); ?>"><button class="dark-button">Read Entry</button></a>
							</div>
							</div>
						<?php endforeach; wp_reset_postdata();?>
					</div>
			</section>
			


		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>

