<?php 

/*
Template Name: Event Espresso Venue Events
*/

get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;
// showMeTheGoods($categorySlug);

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="content">

	<!-- BANNER STATEMENT -->

	<div class="full-width content-area banner-statement <?php echo $categorySlug; ?>" >
		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				<!-- <h2><?php echo get_field('banner_message');?></h2> -->
				Banner message here?
			</div>
		</div>
	</div>

	<!-- MAIN CONTENT -->
	<div class="row">
		<div class="large-10 medium-10 small-centered columns">
			<h1><?php echo get_the_title(); ?></h1>
		</div>
		<div class="large-8 medium-8 small-centered columns">
			<?php 

				the_content();

				$venueId = get_field('venue_id');

				// EVENTS list
				$shortcode = '[ESPRESSO_VENUE_EVENTS id="'. $venueId . '" show_expired=false order_by=date(start_date) ]';
				// this shortcode uses event_list_display.php from uploads/espressoo/templates 
				echo do_shortcode($shortcode);

				// VENUE info
				$shortcode = '[ESPRESSO_VENUE id="'. $venueId . '" show_map_image=false show_google_map_link=false]';
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