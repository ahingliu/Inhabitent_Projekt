<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_login_logo_one() { 
	?> 
	<style type="text/css"> 
	body.login div#login h1 a {
	height: 30px;
	width: 300px;
	padding-bottom: 30px;
	background: url(http://localhost/wptest/wp-content/themes/inhabitent_projekt/resources/images/logos/inhabitent-logo-text-dark.svg) no-repeat center center/contain;   
	} 
	</style>
	 <?php 
	} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );


	add_filter( 'login_headerurl', 'custom_loginlogo_url' );

	function custom_loginlogo_url($url) {

	 return 'https://localhost/wptest';

}
