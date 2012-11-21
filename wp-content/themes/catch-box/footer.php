<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>
           <?php if ( has_nav_menu( 'footer', 'catchbox' ) ) { ?>
                <nav id="access-footer" role="navigation">
                	<h3 class="assistive-text"><?php _e( 'Footer menu', 'catchbox' ); ?></h3>
                    <?php wp_nav_menu( array( 'theme_location'  => 'footer', 'depth' => 1 ) );  ?>
                </nav>
            <?php } ?>
			<div id="site-generator" class="clearfix">
            	<div class="copyright">
                	<?php esc_attr_e('Copyright &copy;', 'catchbox'); ?> <?php _e(date('Y')); ?>
                    <a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
						<?php bloginfo('name'); ?>
            		</a>
                    <?php esc_attr_e('. Todos los derechos reservados.', 'catchbox'); ?>
                </div>
          	</div> <!-- #site-generator -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>