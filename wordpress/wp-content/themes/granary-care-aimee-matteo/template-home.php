<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<!-- CONTENT AREA -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="full-width content-area">

<!-- SLIDER -->

    <div class="row slider-container">
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



<!-- ABOUT BLURB -->

    <div class="row">
      <div class="large-4 columns">
        <h1><?php echo get_field('about_blurb_title')?></h1>
      </div>
      <div class="large-7 columns">
        <?php the_content(); ?>
        <a href="<?php echo site_url(); ?>/about">More About Granary Care</a>
      </div>
    </div>



<!-- BUSINESS PANELS -->
<div class="business-panel">
	<?php if( have_rows('home_business_panels') ): ?>

	<?php while( have_rows('home_business_panels') ): the_row(); 

		

		// vars
		$title = get_sub_field('home_business_panel_title');
		$summary = get_sub_field('home_business_panel_summary');
		$buttonlink = get_sub_field('home_business_panel_buttonlink');
    $buttonlabel = get_sub_field('home_business_panel_buttonlabel');

		// echo '<pre>';
		// // print_r(get_post());
		// print_r($link);
		// echo '</pre>';
	?>

  <div class="row">
	      <div class="large-4 columns">
	        	<h2><?php echo $title; ?></h2>
	      </div>
        <div class="large-7 columns">
				  <?php echo $summary; ?>
	      	<a href="<?php echo $buttonlink; ?>"><?php echo $buttonlabel; ?></a>
          <hr/>
        </div>
  </div>

	<?php endwhile; ?>


<?php endif; ?>

</div>






<!-- SOCIAL RESPONSIBILITY BLURB -->

    <div class="row">
      <div class="large-12 columns">
      	<?php echo get_field('home_social_responsibility');
          	?>
        <a href="<?php echo site_url(); ?>/social-responsibility">Learn More</a>
      </div>
    </div>


<!-- TESTIMONIAL -->
    <div class="row testimonial">
      <div class="large-12 columns">
        <a href="<?php echo site_url(); ?>/testimonials">
          <h4><i><q><?php echo get_field('home_testimonial');?></i></q></h4>
        </a>
      </div>
    </div>

</div>





<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>




<?php get_footer(); ?>