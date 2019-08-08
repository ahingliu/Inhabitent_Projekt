<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<div class= "contact">
		<h2>CONTACT INFO</h2>
			<p><i class="fas fa-phone-alt"></i><a href = "tel: 778-456-7891"> 778-456-7891 </a></p>
			<p><i class="fas fa-envelope"></i><a href = "mailto:info@inhabitent.com"> info@inhabitent.com </a></p>
			<p class="w-fix"><i class="fas fa-map-marker-alt"></i><a href = "https://www.google.ca/maps/place/1490+W+Broadway,+Vancouver,+BC+V6H+4E8/@49.2634483,-123.1403569,17z/data=!3m1!4b1!4m5!3m4!1s0x548673c79e1ac457:0x3aea6428fa30dc6a!8m2!3d49.2634483!4d-123.1381682"> 1490 W Broadway 
			<span class="contact-fix" style="padding-left:2rem;">Vancouver, BC V6H 1H5</span></a></p>
	</div>	
<?php dynamic_sidebar( 'sidebar-1' ); ?>

</div><!-- #secondary -->
