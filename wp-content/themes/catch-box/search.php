<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */

get_header(); ?>

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Resultados de la búsqueda para: %s', 'catchbox' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php catchbox_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php catchbox_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Sin resultados', 'catchbox' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Disculpe, no hay resultados para su criterio de búsqueda. Por favor intente nuevamente con otras palabras clave.', 'catchbox' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>