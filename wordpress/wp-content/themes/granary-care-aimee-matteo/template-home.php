<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<!-- CONTENT AREA -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<!-- SLIDER -->
  <div class="full-width content-area slider-container">
    <div class="row">
      <div class="large-12 columns">
        
        <div class="slider">

     	<?php if( have_rows('home_carousel') ): ?>

		<?php while( have_rows('home_carousel') ): the_row(); 

		

		// vars
		$image = get_sub_field('carousel_image');
		$summary = get_sub_field('carousel_summary');
		$link = get_sub_field('carousel_link');

		?>
          <div>
            <a href="<?php echo $link; ?>"><img src="<?php echo $image['url']; ?>"></a>
            <div class="summary">           	
          		<?php echo $summary; ?>
          		<!-- <a class="small radius button" href="<?php echo $link; ?>">Find out more</a> -->
          	</div>
          	
          </div>
          

		
		<?php endwhile; ?>

		<?php endif; ?>

      </div>
    </div>
  </div>


<!-- TESTIMONIAL -->
<div class="full-width content-area testimonial">
  <div class="row">
    <div class="large-12 columns">
      <a href="<?php echo site_url(); ?>/testimonials">
      	<h4><i><q><?php echo get_field('home_testimonial');?></i></q></h4>
      </a>
    </div>
  </div>
</div>


<!-- BUSINESS PANELS -->
<div class="row">

	<?php if( have_rows('home_business_panels') ): ?>

	<?php while( have_rows('home_business_panels') ): the_row(); 

		

		// vars
		$image = get_sub_field('home_business_panel_image');
		$title = get_sub_field('home_business_panel_title');
		$summary = get_sub_field('home_business_panel_summary');
		$buttonlink = get_sub_field('home_business_panel_buttonlink');
    $buttonlabel = get_sub_field('home_business_panel_buttonlabel');

		// echo '<pre>';
		// // print_r(get_post());
		// print_r($link);
		// echo '</pre>';
	?>

		<div class="large-4 columns business-panel">
	      	<div class="business-panel-image">
	        	<img src="<?php echo $image['url']; ?>"/>
	      	</div>
	      	<div class="business-panel-title">
	        	<h4><?php echo $title; ?></h4>
	      	</div>
				<?php echo $summary; ?>
	      	<a class="small radius button" href="<?php echo $buttonlink; ?>"><?php echo $buttonlabel; ?></a>
	    </div>


	<?php endwhile; ?>


<?php endif; ?>


</div>


<!-- ABOUT BLURB -->

<div class="full-width content-area homepage-blurbs" id="homepage-about-blurb">
  <div class="row">
    <div class="large-12 columns">
    	<?php the_content(); ?>
      <a class="radius button" href="<?php echo site_url(); ?>/about">More About Granary Care</a>
    </div>
  </div>
</div>

<!-- SOCIAL RESPONSIBILITY BLURB -->

<div class="full-width content-area homepage-blurbs" id="homepage-social-blurb">
  <div class="row">
    <div class="large-12 columns">
    	<?php echo get_field('home_social_responsibility');
        	?>
      <a class="radius button" href="<?php echo site_url(); ?>/social-responsibility">Learn More</a>
    </div>
  </div>
</div>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>




<?php get_footer(); ?>