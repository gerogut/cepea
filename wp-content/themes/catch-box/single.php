<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */

get_header(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<nav id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Navegación de posts', 'catchbox' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Anterior', 'catchbox' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Siguiente <span class="meta-nav">&rarr;</span>', 'catchbox' ) ); ?></span>
					</nav><!-- #nav-single -->

					<?php get_template_part( 'content', 'single' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
        
<?php get_sidebar(); ?>
<?php get_footer(); ?>