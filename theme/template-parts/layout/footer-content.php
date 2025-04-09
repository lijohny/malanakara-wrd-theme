<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package St-Mary's
 */

?>
<style>
	.map iframe{
		/* filter: invert(0.9) hue-rotate(40deg) contrast(1) saturate(0.8); */
	}
</style>

<footer id="colophon">

	<div class="bg-[#d4e2d2] rounded-t-4xl p-12 shadow-cyan-300 gap-14 flex justify-between items-start">
		<div>
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img class="w-[300px] bg-[#658161] logo-shadow-cstm px-5 py-2 rounded-lg" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/stmarrys-logowhite.png'); ?>" alt="<?php bloginfo('name'); ?>">
			</a>
			<div class="mt-8">
				<h3>
				St Mary's Malankara Syriac Catholic
				Church Kallamam,
				Veeranakavu, trivandrum Kerala 695572
				</h3>
				<h4 class="flex items-center gap-2 text-gray-800 my-4">
					<!-- Email Icon -->
					<svg class="w-6 h-6 text-[#DB4437]" fill="currentColor" viewBox="0 0 24 24">
						<path d="M12 12.713l11.985-8.486A1 1 0 0 0 23 3H1a1 1 0 0 0-.985 1.227L12 12.713zm11.985-7.05L12 14.288 0 5.663V19a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V5.663z"/>
					</svg>
					<a href="mailto:kallamamst.marysmalankaracath@gmail.com" class="hover:text-[#1877F2] text-[#658161] transition-colors">
						kallamamst.marysmalankaracath@gmail.com
					</a>
				</h4>

				<h4 class="flex items-center gap-2 text-gray-800 my-4">
					<!-- Phone Icon -->
					<svg class="w-6 h-6 text-[#34A853]" fill="currentColor" viewBox="0 0 24 24">
						<path d="M6.62 10.79a15.72 15.72 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1-.27 11.72 11.72 0 0 0 3.7.6 1 1 0 0 1 1 1v3.68a1 1 0 0 1-1 1A19.75 19.75 0 0 1 2 4.27a1 1 0 0 1 1-1H6.7a1 1 0 0 1 1 1 11.72 11.72 0 0 0 .6 3.7 1 1 0 0 1-.27 1z"/>
					</svg>
					<a href="tel:04844851114" class="hover:text-[#1877F2] text-[#658161] transition-colors">
						0484 485 1114
					</a>
				</h4>


				<div class="flex items-center gap-4 mt-4">
					<!-- Facebook -->
					<a href="#" class="text-[#1877F2] hover:scale-110 transition transform duration-300">
						<svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
							<path d="M22 12.08C22 6.48 17.52 2 12 2S2 6.48 2 12.08c0 5.03 3.66 9.2 8.44 9.92v-7.03H7.89v-2.89h2.55V9.41c0-2.51 1.49-3.89 3.78-3.89 1.1 0 2.26.2 2.26.2v2.48h-1.27c-1.25 0-1.64.78-1.64 1.58v1.89h2.79l-.45 2.89h-2.34V22c4.78-.72 8.44-4.89 8.44-9.92z"/>
						</svg>
					</a>

					<!-- Instagram -->
					<a href="#" class="text-[#E4405F] hover:scale-110 transition transform duration-300">
						<svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
							<path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5a4.25 4.25 0 0 0 4.25-4.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5zM12 7.25a4.75 4.75 0 1 1 0 9.5 4.75 4.75 0 0 1 0-9.5zm0 1.5a3.25 3.25 0 1 0 0 6.5 3.25 3.25 0 0 0 0-6.5zM17 5.5a.75.75 0 1 1 0 1.5.75.75 0 0 1 0-1.5z"/>
						</svg>
					</a>

					<!-- X (Twitter) -->
					<a href="#" class="text-[#000000] hover:scale-110 transition transform duration-300">
						<svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
							<path d="M18.94 2h3.06l-7.07 8.16L24 22h-7.6l-4.79-6.99L5.6 22H2.42l7.64-8.83L0 2h7.86l4.32 6.45L18.94 2zm-1.27 18h2.23L7.8 4h-2.3L17.67 20z"/>
						</svg>
					</a>

					<!-- Google
					<a href="#" class="text-[#DB4437] hover:scale-110 transition transform duration-300">
						<svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
							<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.05 0 9.21-3.67 9.91-8.5H12v3.5h5.5a5.5 5.5 0 1 1-5.5-7.5c1.3 0 2.5.45 3.47 1.2l2.56-2.56C15.83 5.03 14.03 4 12 4a10 10 0 1 0 10 10c0-.68-.07-1.34-.2-2H12V9h9.8A10.03 10.03 0 0 0 12 2z"/>
						</svg>
					</a>

					<a href="#" class="text-[#000000] hover:scale-110 transition transform duration-300">
						<svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
							<path d="M12 0C5.37 0 0 5.37 0 12s5.37 12 12 12 12-5.37 12-12S18.63 0 12 0zm.28 19.96c-2.22 0-4.3-.67-5.9-1.94 1.39.2 3.1-.07 4.22-.73 1.56-.9 2.35-2.7 1.9-4.66-.43-1.85-2-3.13-4.14-3.3.37-1.32 1.61-2.02 2.82-2.26 1.8-.36 3.65.16 4.7 1.34 1.36 1.54 1.67 3.66.9 5.5-.68 1.63-2.13 2.76-3.95 3.07.13.42.4.78.78.99.8.47 2.3.32 2.7-.45-.05.58-.46 1.18-.93 1.47-.58.35-1.47.54-2.2.54z"/>
						</svg>
					</a> -->
				</div>

			</div>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.6659943514805!2d77.1141059!3d8.531770800000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05b5ba20d99563%3A0xaf667bcabfc97881!2sSt%20Mary&#39;s%20Malankara%20Syriac%20Catholic%20Church%20Kallamam!5e0!3m2!1sen!2sin!4v1741466644596!5m2!1sen!2sin" 
			class="rounded-3xl"	width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>

</footer>