<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

function inhabitent_tax_product_type() {

	$labels = array(
		'name'                       => _x( 'Products_Type', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Product_Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Product_Type', 'text_domain' ),
		'all_items'                  => __( 'All Product_Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Product_Type', 'text_domain' ),
		'add_new_item'               => __( 'Add New Product_Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Product_Type', 'text_domain' ),
		'update_item'                => __( 'Update Product_Type', 'text_domain' ),
		'view_item'                  => __( 'View Product_Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Product_Types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Product_Types', 'text_domain' ),
		'search_items'               => __( 'Search Product_Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No products', 'text_domain' ),
		'items_list'                 => __( 'Products list', 'text_domain' ),
		'items_list_navigation'      => __( 'Products list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'product-type', array( 'product' ), $args );

}
add_action( 'init', 'inhabitent_tax_product_type');