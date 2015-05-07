<?php 

/*
Template Name: Event Espresso Event Registration
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
		<!-- this will call the template in uploads/espresso/templates/registration_page_display.php -->
		<?php the_content(); ?>
	</div>

</div>


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>