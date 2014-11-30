<?php
/*
Template Name: About Page
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); /* Start loop */ ?>

	<?php 
		$large_image = get_field('about_large_image'); // this is a data object
		$large_image_url = $large_image['url']; // this is just the URL for that image data object
		$large_image_alt = $large_image['alt'];

		// echo '<pre>';
		// // print_r(get_post());
		// print_r($large_image);
		// echo '</pre>';
	?>




<!-- MAIN IMAGE -->
<div class="full-width content-area main-image-section">
	<div class="row">
	    <div class="large-12 columns main-page-image">
	    	<a href="<?php echo site_url(); ?>/team">
	        	<img src="<?php echo $large_image_url; ?>" alt="<?php echo $large_image_alt; ?>"/>
	        </a>
	    </div>
	</div>
</div>

<!-- COMPANY SUMMARY -->
<div class="full-width content-area page-summary1">
    <div class="row">
        <div class="large-10 large-centered columns">
        	<?php the_content(); ?>
        </div>
    </div>
</div>

<div class="full-width content-area page-summary2">
    <div class="row">
        <div class="large-10 large-centered columns">
        	<?php echo get_field(about_page_summary_1);
        	?>
        </div>
    </div>
</div>

<div class="full-width content-area page-summary3">
    <div class="row">
        <div class="large-10 large-centered columns">
        	<?php echo get_field(about_page_summary_2);
        	?>
        </div>
    </div>
</div>

<div class="full-width content-area page-summary2">
    <div class="row">
        <div class="large-10 large-centered columns">
        	<?php echo get_field(about_social_responsibility_blurb);
        	?>
        	<a class="small radius button" href="<?php echo site_url(); ?>/social-responsibility">Read more about it here</a>
        </div>
    </div>
</div>



<?php endwhile; // End the loop ?>	


<?php get_footer(); ?>