<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package St-Mary's
 */

?>
<style>
	.menu-lister ul{
		display: flex;
		justify-content: space-around;
		list-style-type: none;
		gap: 1rem;
	}
</style>
<header id="masthead">

	<div class="flex justify-between items-center w-full px-4 py-2 text-black">
		<div>
			<?php
			if ( is_front_page() ) :
				?>
				<h1><?php bloginfo( 'name' ); ?></h1>
				<?php
			else :
				?>
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;

			$stmarys_description = get_bloginfo( 'description', 'display' );
			if ( $stmarys_description || is_customize_preview() ) :
				?>
				<p><?php echo $stmarys_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="flex justify-around gap-5 items-center" aria-label="<?php esc_attr_e( 'Main Navigation', 'st-marys' ); ?>">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'menu-lister', // This applies to <ul> automatically
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>', 
					)
					
					
				);
			?>
		</nav>
	</div>

</header>
