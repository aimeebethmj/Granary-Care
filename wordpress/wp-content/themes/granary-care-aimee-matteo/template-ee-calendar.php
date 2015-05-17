<?php 

/*
Template Name: Event Espresso Calendar
*/

get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;
// showMeTheGoods($categorySlug);

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="content">

	<!-- MAIN CONTENT -->
	<div class="row">
		<div class="large-10 medium-10 small-centered columns">
			<h1><?php echo get_the_title(); ?></h1>
		</div>
		<div class="large-8 medium-8 small-centered columns">
			<?php 

				the_content();

				$categoryId = 'botwell-house';
				// $categoryId = get_field('venue_id');

				$shortcode = '[ESPRESSO_CALENDAR event_category_id="'. $categoryId . '"]';

				// TODO ??? this shortcode uses event_list_display.php from uploads/espressoo/templates 
				echo do_shortcode($shortcode);
 
			?>
		</div>
	</div>

</div>


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>