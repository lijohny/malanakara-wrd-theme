<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package St-Mary's
 */

?>

<footer id="colophon">
<!-- GSAP Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        gsap.fromTo("#animated-heading", 
            { y: 400, opacity: 0 },  // Start position (100px below, hidden)
            { y: 0, opacity: 1, duration: 1.5, ease: "power3.out" } // Move up smoothly
        );
    });
</script>


</footer>