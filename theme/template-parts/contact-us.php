<?php
/*
*
* Template Name: contact page
*
*/

get_header();
?>

<main id="main" class="overflow-x-hidden">
	<div id="primary">
		<section  class="relative h-[100vh] mt-[90px]">
			
			<!-- Video Background -->
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/properring.png'); ?>"  class="absolute w-[1200px] h-full object-cover aspect-video z-[-1]" >
		

			<!-- Overlay -->
			<div class="absolute top-0 left-0 w-full h-full bg-white opacity-15"></div>

			<div class="container mx-auto px-24 flex justify-center items-center h-full relative z-50 !flex-col text-center">
                <div class="shadow-custom rounded-lg p-10 w-full flex items-center flex-col">
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">We would love to hear from You.</h2>
                    <p class="text-gray-600 text-md mb-6 w-1/2">
                        Count on our round-the-clock support to ensure uninterrupted operations, as our experts stand ready to assist you at any hour of the day.
                    </p>

                    <form class=" max-w-lg flex flex-col items-center w-full" action="#" method="POST">
                        <div class="mb-4 w-full">
                            <input type="text" name="name" placeholder="Your Name"
                                class="w-full border border-gray-300 rounded-md bg-white p-3 focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="mb-4 w-full">
                            <input type="email" name="email" placeholder="Email"
                                class="w-full border border-gray-300 rounded-md bg-white p-3 focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="mb-4 w-full">
                            <input type="tel" name="phone" placeholder="Phone"
                                class="w-full border border-gray-300 rounded-md bg-white p-3 focus:outline-none focus:border-blue-500">
                        </div>

                        <div class="mb-6 w-full">
                            <textarea name="message" rows="4" placeholder="Message"
                                class="w-full border border-gray-300 rounded-md bg-white p-3 focus:outline-none focus:border-blue-500"></textarea>
                        </div>

                        <button type="submit w-full"
                            class="w-full bg-blue-600 text-white py-3 rounded-md font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2">
                            Send Message
                            <span>📩</span>
                        </button>
                    </form>
                </div>
			</div>
		</section>

		<div class="relative">
			<!-- <img class="absolute top-[-40%] w-[1000px]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/properring.png'); ?>" alt="ring image"> -->
			<section class="my-16 z-60 relative">
				<div class="container mx-auto px-24 text-center">
					<!-- Heading -->
					<h2 class="text-4xl font-bold text-gray-900 flex justify-center items-center gap-2">
						Get in Touch 
						<span>🤝</span> 
						<span>📧</span> 
						<span>📞</span>
					</h2>

					<!-- Contact Boxes -->
					<div  class="grid contact-box-container grid-cols-1 md:grid-cols-3 gap-8 mt-10">
						
						<!-- Office Location -->
						<div class="border contact-card border-gray-300 p-8 rounded-lg shadow-lg">
							<div class="flex justify-center">
								<!-- Add your SVG icon here -->
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/church-logo.png'); ?>"  class="w-12 h-12" alt="Location Icon">
							</div>
							<h3 class="text-xl font-semibold text-gray-800 mt-4">OUR CHURCH</h3>
							<p class="text-blue-950 mt-2">
							St Mary's Malankara Syriac Catholic <br>
							Church Kallamam,<br>
							Veeranakavu, trivandrum Kerala 695572
							</p>
						</div>

						<!-- Email -->
						<div class="border contact-card border-gray-300 p-8 rounded-lg shadow-lg">
							<div class="flex justify-center">
								<!-- Add your SVG icon here -->
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gmail-logo.png'); ?>" class="h-12" alt="Mail Icon">
							</div>
							<h3 class="text-xl font-semibold text-gray-800 mt-4">OUR MAIL</h3>
							<p class="text-blue-950 mt-2">kallamamst.marysmalankaracath@gmail.com</p>
						</div>

						<!-- Phone -->
						<div class="border contact-card border-gray-300 p-8 rounded-lg shadow-lg">
							<div class="flex justify-center">
								<!-- Add your SVG icon here -->
								<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/phone-logo.png'); ?>" class="w-12 h-12" alt="Phone Icon">
							</div>
							<h3 class="text-xl font-semibold text-gray-800 mt-4">OUR PHONE</h3>
							<p class="text-blue-950 mt-2">0484 485 1114</p>
						</div>

					</div>
				</div>
			</section>
		</div>
	</div>
</main>


<?php get_footer(); ?>