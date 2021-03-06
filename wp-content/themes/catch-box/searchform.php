<?php
/**
 * The template for displaying search forms in Catch Box
 *
 * @package Catch Themes
 * @subpackage Catch_Box
 * @since Catch Box 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( 'Buscar', 'catchbox' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Buscar', 'catchbox' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Buscar', 'catchbox' ); ?>" />
		<?php do_action( 'catchbox_startgenerator_open' ); ?>
		<?php do_action( 'catchbox_startgenerator_close' ); ?>
	</form>


