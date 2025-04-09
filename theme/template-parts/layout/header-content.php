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
	.menu-lister ul {
		display: flex;
		justify-content: space-around;
		list-style-type: none;
		gap: 1rem;
	}

	/* Base styles for navbar */
	#masthead {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		background-color: white; /* Make it transparent initially */
		transition: all 0.3s ease-in-out;
		z-index: 1000;
	}

	/* Shadow and background blur effect when scrolled */
	.nav-shadow {
		box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
		background-color: #00000082 !important;
		backdrop-filter: blur(10px); /* Apply blur */
	}

	/* Logo visibility */
	.white-logo {
		display: none; /* Initially hidden */
	}

	.nav-shadow .white-logo {
		display: block; /* Show white logo when scrolled */
	}

	.nav-shadow .default-logo {
		display: none; /* Hide default logo when scrolled */
	}
	#menu-header-menu li a{
		color: black !important;
	}
	.nav-shadow #menu-header-menu li a{
		color: white !important;
	}
</style>

<header id="masthead" class="transition-all duration-300">
	<div class="flex justify-between items-center w-full text-white">
		<div class="container mx-auto px-24 py-2 flex items-center gap-14">
			<div>
				<!-- Default Logo (Visible at top, hidden when scrolled) -->
				<a href="<?php echo esc_url(home_url('/')); ?>" class="default-logo">
					<img class="w-[300px]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/stmarrys-logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
				</a>

				<!-- White Logo (Hidden at top, shown when scrolled) -->
				<a href="<?php echo esc_url(home_url('/')); ?>" class="white-logo">
					<img class="w-[200px]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/stmarrys-logowhite.png'); ?>" alt="<?php bloginfo('name'); ?>">
				</a>
			</div>

			<div>
				<?php
					wp_nav_menu([
						'menu' => 'header-menu', // Use slug or ID
						'container'     => false, // This removes the <nav> wrapper
						'menu_class'    => 'flex gap-4', // Your desired <ul> class
					]);
				?>
			</div>


		</div>
	</div>
</header>

<script>
	document.addEventListener("DOMContentLoaded", function () {
		let navbar = document.getElementById("masthead");

		window.addEventListener("scroll", function () {
			let currentScroll = window.scrollY;

			if (currentScroll > 50) {
				navbar.classList.add("nav-shadow"); // Add blur effect
			} else {
				navbar.classList.remove("nav-shadow"); // Remove blur effect
			}
		});
	});
</script>
