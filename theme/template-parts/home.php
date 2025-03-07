<?php
/*
*
* Template Name: home Page 
*
*/

get_header();
?>

<main id="main">
	<section id="primary" class="relative h-[100vh] mt-[90px]">
		
		<!-- Video Background -->
		<video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover aspect-video z-[-1]">
			<source src="<?php echo esc_url(get_template_directory_uri() . '/assets/churchvideoplayback.mp4'); ?>" type="video/mp4">
			Your browser does not support the video tag.
		</video>


		<!-- Overlay -->
		<div class="absolute top-0 left-0 w-full h-full bg-amber-500 opacity-35"></div>
		<div class="container mx-auto px-24 flex justify-center items-center h-full relative">
			<h1 class="mb-4 text-6xl text-white"><?php the_field('home_banner_text'); ?></h1>
		</div>

	</section>


	<section id="primary" class="h-screen">
		<div class="container mx-auto px-24">
			<h1 class="mb-4 text-6xl"><?php the_field('home_banner_text'); ?></h1>
		</div>
	</section>

	</main>
<?php
get_footer();