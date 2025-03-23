<?php
/*
*
* Template Name: home Page 
*
*/

get_header();
?>
<style>

	.swiper-container {
		visibility: visible !important;
	}

    .hidden-letter {
        opacity: 0;
        display: inline-block;
    }
	.rotate-container {
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.rotate-container img {
		animation: rotateAnimation 100s linear infinite;
	}

	.leftrightcard{
		font-weight: 700;
	}

	@keyframes rotateAnimation {
		0% {
			transform: rotate(0deg);
		}
		100% {
			transform: rotate(360deg);
		}
	}

</style>

<main id="main" class="overflow-x-hidden">
	<div id="primary">
		<section  class="relative h-[100vh] mt-[90px]">
			
			<!-- Video Background -->
			<video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover aspect-video z-[-1]">
				<source src="<?php echo esc_url(get_template_directory_uri() . '/assets/churchvideoplayback.mp4'); ?>" type="video/mp4">
				Your browser does not support the video tag.
			</video>

			<!-- Overlay -->
			<div class="absolute top-0 left-0 w-full h-full bg-black opacity-85"></div>

			<div class="container mx-auto px-24 flex justify-center items-center h-full relative z-50 !flex-col text-center">

				<!-- Heading Animation -->
				<?php $home_banner = get_field('home_banner');

				if ($home_banner): ?>
					<h1 id="animated-heading" class="mb-4 text-6xl text-white w-[70%] opacity-0">
						<?php echo esc_html($home_banner['home_banner_first_heading']); ?>
						<span class="text-xl block mt-2"><?php echo esc_html($home_banner['home_banner_sub_small_heading']); ?></span>
					</h1>
				<?php endif; ?>


				<!-- Paragraph Animation -->
				<p id="animated-paragraph" class="text-white text-xl w-[70%]">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae consectetur obcaecati vel repudiandae dicta  tenetur veniam nemo nihil. Maiores fugiat atque nulla, alias magnam fuga quidem nihil hic eos eius?
				</p>
			</div>
		</section>

		<div class="relative">
			<img class="absolute top-[-10%]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/properring.png'); ?>" alt="ring image">

			<section class="my-[90px] z-10 relative">
				<div class="container mx-auto px-24">
					<div class="grid grid-cols-2 gap-10 items-start">
						<!-- Left Image -->
						<div id="left-item-1">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newdentcareimage.jpg'); ?>"  alt="Nature Image" class="w-full rounded-lg shadow-lg">
						</div>
						<!-- Right Text -->
						<div id="right-item-1" class="text-gray-800">
							<p class="leftrightcard mb-4">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
							</p>
							<p class="leftrightcard mb-4">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
							</p>
							
						</div>
					</div>
				</div>
			</section>

			<section class="my-[90px] z-10 relative">
				<div class="container mx-auto px-24">
					<div class="grid grid-cols-2 gap-10 items-start">
						<!-- Left Text -->
						<div id="left-item-2" class="text-gray-800">
							<p class="mb-4 leftrightcard">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
							</p>
							<p class="mb-4 leftrightcard">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
							</p>
							
						</div>

						<!-- Right Image -->
						<div id="right-item-2">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/dentcareimage.jpg'); ?>"  alt="Nature Image" class="w-full rounded-lg shadow-lg">
						</div>
					</div>
				</div>
			</section>

			<section class="bg-white py-16 z-10 relative">
				<div class="container mx-auto px-24 text-center">

					<div class="flex items-center justify-between space-x-10 text-center py-10">
						<!-- <div class="rotate-container">
							<img class="" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/globe.svg'); ?>" alt="ring image">
						</div> -->

						<div class="rotate-container mr-36">
							<img class="w-[291px] h-[291px] sm:w-[330px] sm:h-[330px] lg:w-[370px] lg:h-[370px] xl:h-[414px] xl:w-[414px] 2xl:w-[446.01px] 2xl:h-[446.01px] 3xl:h-[477px] 3xl:w-[477px] absolute left-[-129px] sm:left-[-129px] lg:left-[-149px] xl:left-[-171px] 3xl:left-[-184px]"
								src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/globe.svg'); ?>" 
								alt="globe">
						</div>


						<div class=" flex flex-col" id="stat1">						
							<h2 class="text-7xl font-bold number" data-value="10">0+</h2>
							<p class="text-gray-500 text-2xl">Year's</p>
						</div>

						<div class="" id="stat2">
							<h2 class="text-7xl font-bold number" data-value="200">0+</h2>
							<p class="text-gray-500 text-2xl">Charity's</p>
						</div>

						<div class="" id="stat3">
							<h2 class="text-7xl font-bold number" data-value="200">0+</h2>
							<p class="text-gray-500 text-2xl">People</p>
						</div>

						<div class="" id="stat4">
							<h2 class="text-7xl font-bold number" data-value="50">0+</h2>
							<p class="text-gray-500 text-2xl">Technologies</p>
						</div>
					</div>

				</div>
			</section>

			<section class="mb-28 mt-28 z-10 relative h-[550px]">
				<div class="container mx-auto px-24 text-center h-full">
					<!-- Heading -->
					<div class="mb-16 text-left flex justify-start items-start">
						<h2 class="text-4xl font-bold text-gray-900 flex justify-center items-center gap-2">Our Backbones <span>💪</span></h2>
					</div>

					<?php if( have_rows('slider_wrapper') ): ?>
						<div class="swiper-container mySwiper h-[450px]">
							<div class="swiper-wrapper h-full">
							<?php while ( have_rows('slider_wrapper') ): the_row(); 
							// Get subfield data from repeater
							$image = get_sub_field('slider_people_image');
							$name = get_sub_field('slider-name');
							$position = get_sub_field('slider_people_position');
							$year = get_sub_field('slider_year');
							?>
									<div class="swiper-slide relative w-64 h-96 rounded-3xl overflow-hidden shadow-lg">
										<!-- Check if the image exists and display it -->
										<?php if( $image ): ?>
											<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>" class="absolute inset-0 w-full h-full object-cover">
										<?php else: ?>
											<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default-image.jpg'); ?>" alt="Default Image" class="absolute inset-0 w-full h-full object-cover">
										<?php endif; ?>
										<div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
										<div class="absolute bottom-4 left-4 text-white">
											<h3 class="text-lg font-semibold"><?php echo esc_html($name); ?></h3>
											<p class="text-sm font-medium"><?php echo esc_html($position); ?></p>
											<p class="text-xs opacity-80"><?php echo esc_html($year); ?> Member</p>
										</div>
									</div>
								<?php endwhile; ?>
							</div>
						</div>
					<?php else: ?>
						<!-- Show a fallback message if no rows exist -->
						<p>No slides available.</p>
					<?php endif; ?>
				</div>
			</section>


			<section class="bg-white my-16 z-10 relative">
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

<script>
	document.addEventListener("DOMContentLoaded", function () {
		var swiper = new Swiper(".mySwiper", {
			slidesPerView: 6,  // FIXED: Set a number instead of "auto"
			spaceBetween: 20,  // Adjusts spacing
			loop: true,  // Enables infinite loop
			autoplay: {
				delay: 1500,  // 3-second interval
				disableOnInteraction: false,  // Keeps autoplay active
			},
			speed: 1200,  // Smooth scrolling speed
			grabCursor: true,  // Changes cursor to grab
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				pagination: {
					el: ".swiper-pagination",
					clickable: true,
				},
				breakpoints: {
					640: { slidesPerView: 1 },
					768: { slidesPerView: 2 },
					1024: { slidesPerView: 3 },
					1280: { slidesPerView: 4.5}
				}
			});
		});
</script>

<!-- GSAP Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // GSAP Animation for Heading
        gsap.fromTo("#animated-heading", 
            { y: 100, opacity: 0 }, 
            { y: 0, opacity: 1, duration: 1.5, ease: "power3.out" }
        );

        // Get the paragraph
        let paragraph = document.querySelector("#animated-paragraph");

        if (!paragraph) return;

        let words = paragraph.innerText.split(" "); // Split paragraph into words
        paragraph.innerHTML = ""; // Clear paragraph text

        // Reconstruct paragraph with span-wrapped words
        words.forEach(word => {
            let wordSpan = document.createElement("span");
            wordSpan.style.display = "inline-block"; // Ensure inline effect
            wordSpan.style.opacity = "0"; // Hide initially
            wordSpan.textContent = word + " "; // Add space between words
            paragraph.appendChild(wordSpan);
        });

        // Animate each word when scrolled into view
        gsap.to("#animated-paragraph span", {
            scrollTrigger: {
                trigger: paragraph,
                start: "top 80%", // Starts animation when 80% visible
                toggleActions: "play none none none"
            },
            opacity: 1,
            y: 0,
            stagger: 0.1, // Stagger each word by 0.1s
            duration: 0.8,
            ease: "power3.out"
        });

		gsap.registerPlugin(ScrollTrigger);

		// Animate Left Items
		gsap.fromTo("#left-item-1", 
			{ x: -300, opacity: 0 }, 
			{ 
				x: 0, 
				opacity: 1, 
				duration: 2, 
				ease: "power3.out",
				scrollTrigger: {
					trigger: "#left-item-1",
					start: "top 80%",
					toggleActions: "play reverse play reverse" 
				}
			}
		);

		// Animate Left Items
		gsap.fromTo("#left-item-2", 
			{ x: -300, opacity: 0 }, 
			{ 
				x: 0, 
				opacity: 1, 
				duration: 2, 
				ease: "power3.out",
				scrollTrigger: {
					trigger: "#left-item-2",
					start: "top 80%",
					toggleActions: "play reverse play reverse" 
				}
			}
		);

		// Animate Right Items
		gsap.fromTo("#right-item-1", 
			{ x: 100, opacity: 0 }, 
			{ 
				x: 0, 
				opacity: 1, 
				duration: 2, 
				ease: "power3.out",
				scrollTrigger: {
					trigger: "#right-item-1",
					start: "top 80%",
					toggleActions: "play reverse play reverse" 
				}
			}
		);

		// Animate Right Items
		gsap.fromTo("#right-item-2", 
			{ x: 100, opacity: 0 }, 
			{ 
				x: 0, 
				opacity: 1, 
				duration: 2, 
				ease: "power3.out",
				scrollTrigger: {
					trigger: "#right-item-2",
					start: "top 80%",
					toggleActions: "play reverse play reverse" 
				}
			}
		);

		gsap.fromTo(".contact-card",
			{ opacity: 0, y: 50 },
			{
				opacity: 1, 
				y: 0,
				duration: 1,
				ease: "power3.out",
				stagger: 0.2, 
				scrollTrigger: {
					trigger: ".contact-box-container",
					start: "top 80%", 
					toggleActions: "play reverse play reverse"

				}
			}
		);

		const stats = document.querySelectorAll(".number");

		stats.forEach((stat, index) => {
			let targetValue = parseInt(stat.dataset.value, 10); // Convert data-value to integer

			gsap.fromTo(stat, 
				{ textContent: 0 }, 
				{ 
					textContent: targetValue, 
					duration: 2, 
					ease: "power1.out",
					delay: index * 0.3,
					scrollTrigger: {
						trigger: stat,
						start: "top 80%",
						toggleActions: "play reverse play reverse" 
					},
					onUpdate: function () {
						stat.innerText = Math.floor(this.targets()[0].textContent) + "+"; // Update text dynamically
					}
				}
			);
		});

    });
</script>



<?php get_footer(); ?>
