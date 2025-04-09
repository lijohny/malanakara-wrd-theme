<?php
/*
*
* Template Name: story page
*
*/
get_header();
?>

<!-- Blog Story Page Start -->
<div class="bg-white text-gray-800 font-sans">
  <!-- Hero Image -->
  <div class="w-full">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/story-hero.jpg" alt="Blog Post" class="w-full h-64 object-cover" />
  </div>

  <!-- Content Container -->
  <div class="max-w-3xl mx-auto px-4 py-8">
    <!-- Title -->
    <h1 class="text-4xl font-bold mb-2"><?php the_title(); ?></h1>

    <!-- Meta Info -->
    <div class="text-sm text-gray-500 mb-4">
      <span><?php echo get_the_date(); ?></span> |
      <span class="underline">Uncategorized</span> |
      <span>Comments (<?php echo get_comments_number(); ?>)</span>
    </div>

    <!-- Post Content -->
    <?php while (have_posts()) : the_post(); ?>
      <div class="prose prose-sm max-w-none">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>

    <!-- Sample Extra Content (Remove or Customize as Needed) -->
    <h2 class="text-2xl font-semibold mt-6 mb-2">Why Regular Meals Matter</h2>
    <p class="mb-4">Consistent eating patterns help regulate hormones, digestion, and metabolism. Irregular meals can lead to:</p>

    <ol class="list-decimal ml-6 mb-6 space-y-1">
      <li>Insulin resistance</li>
      <li>Disrupted circadian rhythm</li>
      <li>Increased inflammation</li>
    </ol>

    <ul class="list-disc ml-6 mb-6 space-y-1">
      <li>Try to keep your meal times consistent, even on off days.</li>
      <li>Avoid high-sugar snacks during night shifts.</li>
      <li>Stay hydrated and take short breaks if possible.</li>
    </ul>

    <div class="overflow-x-auto mb-8">
      <table class="w-full border border-gray-300 text-left text-sm">
        <thead class="bg-[#658161]">
          <tr>
            <th class="border p-2">Time</th>
            <th class="border p-2">Meal</th>
            <th class="border p-2">Notes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border p-2">7:00 AM</td>
            <td class="border p-2">Breakfast</td>
            <td class="border p-2">Light & protein-rich</td>
          </tr>
          <tr>
            <td class="border p-2">12:30 PM</td>
            <td class="border p-2">Lunch</td>
            <td class="border p-2">Balanced meal</td>
          </tr>
          <tr>
            <td class="border p-2">8:00 PM</td>
            <td class="border p-2">Dinner</td>
            <td class="border p-2">Avoid high fat/sugar</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h6 class="text-sm font-semibold mb-1 text-gray-600">Written by: <span class="font-normal"><?php the_author(); ?></span></h6>
  </div>
</div>
<!-- Blog Story Page End -->

<?php get_footer(); ?>
