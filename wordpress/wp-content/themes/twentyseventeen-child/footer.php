<?php
/**
 * The template for displaying the footer child theme
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
                <?php if ( has_nav_menu( 'social' ) ) : ?>
                    <div class="footer-social-media">
                        <p class="social-text">Connect Socially with Kelcher</p>
                        <nav class="social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'social',
                                    'menu_class'     => 'social-links-menu',
                                    'depth'          => 1,
                                    'link_before'    => '<span class="screen-reader-text">',
                                    'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
                                ) );
                            ?>
                        </nav><!-- .social-navigation -->
                    </div><!--social-link-wrapper--> 
				<?php endif; ?> 
                
                <br>
                
				<?php if ( has_nav_menu( 'secondary' ) ) : ?>
                    <div class="navigation-bottom">
                        <div class="wrap">
                            <?php get_template_part( 'template-parts/navigation/navigation', 'secondary' ); ?>
                            <p class="copyright">&copy; 2017 Kelcher Promotions</p>
                        </div><!-- .wrap -->
                    </div><!-- .navigation-bottom -->
                <?php endif;

				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
