<?php
/**
 * The default template for displaying content
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="entry-format"><?php _e( 'Featured', 'catchbox' ); ?></h3>
				</hgroup>
			<?php else : ?>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php endif; ?>

			<?php if ( 'post' == get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php catchbox_posted_on(); ?>
                    <?php if ( comments_open() && ! post_password_required() ) : ?>
                    	<span class="sep"> &mdash; </span>
                        <span class="comments-link">
                         	<?php comments_popup_link(__('Sin Comentarios &darr;', 'catchbox'), __('1 Comentario &darr;', 'catchbox'), __('% Comentarios &darr;', 'catchbox')); ?>
                        </span>
                    <?php endif; ?>
                </div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
        	
		 <?php 
		 	$options = catchbox_get_theme_options();
			$current_content_layout = $options['content_layout'];
			?>
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
        <?php elseif ($current_content_layout=='excerpt'  ) : // Only display Featured Image and Excerpts if checked in Theme Option ?>
            <div class="entry-summary">
                <?php if( has_post_thumbnail() ):?>
               		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'catchbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
						<?php the_post_thumbnail('featured-slider'); ?>
                   	</a>
                <?php endif; ?>
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Leer + <span class="meta-nav">&rarr;</span>', 'catchbox' ) ); ?>
			<?php wp_link_pages( array( 
                'before'		=> '<div class="page-link"><span class="pages">' . __( 'Pages:', 'catchbox' ) . '</span>',
                'after'			=> '</div>',
                'link_before' 	=> '<span>',
                'link_after'   	=> '</span>',
            ) ); 
            ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php $show_sep = false; ?>
			<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'catchbox' ) );
				if ( $categories_list ):
			?>
			<!--<span class="cat-links">
				<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'catchbox' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
				$show_sep = true; ?>
			</span>-->
			<?php endif; // End if categories ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'catchbox' ) );
				if ( $tags_list ):
				if ( $show_sep ) : ?>
			<span class="sep"> | </span>
				<?php endif; // End if $show_sep ?>
			<span class="tag-links">
				<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'catchbox' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
				$show_sep = true; ?>
			</span>
			<?php endif; // End if $tags_list ?>
			<?php endif; // End if 'post' == get_post_type() ?>

			<?php if ( comments_open() ) : ?>
			<?php if ( $show_sep ) : ?>
			<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
			<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Responder', 'catchbox' ) . '</span>', __( '<b>1</b> Respuesta', 'catchbox' ), __( '<b>%</b> Respuestas', 'catchbox' ) ); ?></span>
			<?php endif; // End if comments_open() ?>

			<?php edit_post_link( __( 'Edit', 'catchbox' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- #entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
