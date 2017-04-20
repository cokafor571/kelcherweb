<?php
/**
 * Displays footer navigation child theme
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 
 	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen-child' ); ?></span></a>
	<?php endif; ?>
 */

?>
<nav id="footer-navigation" class="footer-navigation" role="navigation" aria-label="<?php _e( 'Footer Menu', 'twentyseventeen-child' ); ?>">
	<button class="menu-toggle" aria-controls="footer-menu" aria-expanded="false"><?php echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) ); echo twentyseventeen_get_svg( array( 'icon' => 'close' ) ); _e( 'Menu', 'twentyseventeen-child' ); ?></button>
	<?php wp_nav_menu( array(
		'theme_location' => 'secondary',
		'menu_id'        => 'footer-menu',
	) ); ?>

</nav><!-- #site-navigation -->

