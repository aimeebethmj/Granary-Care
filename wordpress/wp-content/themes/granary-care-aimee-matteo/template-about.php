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
<!-- <div class="full-width content-area main-image-section">
	<div class="row">
	    <div class="large-12 columns main-page-image">
	    	<a href="<?php echo site_url(); ?>/team">
	        	<img src="<?php echo $large_image_url; ?>" alt="<?php echo $large_image_alt; ?>"/>
	        </a>
	    </div>
	</div>
</div> -->

<div class="content">

<!-- COMPANY SUMMARY -->
<div class="full-width content-area">
    <div class="row">
        <div class="large-10 medium-10 small-centered columns">
        	<h1><?php echo get_the_title(); ?></h1>
        </div>
        <div class="large-8 medium-8 small-centered columns">
            <?php the_content();?>
        
            <a class="general-link" href="<?php echo site_url(); ?>/team">Meet our team!</a>
        </div>
    </div>
</div>

</div>

<div class="full-width content-area social-blurb">
    <div class="row">
        <div class="content">
            <div class="large-10 medium-10 small-centered columns">
            	<?php echo get_field('about_social_responsibility_blurb');
            	?>
            	<a class="general-link" href="<?php echo site_url(); ?>/social-responsibility">Read more about it here</a>
            </div>
            <div class="large-10 small-centered columns heart-mark"></div>
        </div>
    </div>
</div>




<?php endwhile; // End the loop ?>	


<?php get_footer(); ?>