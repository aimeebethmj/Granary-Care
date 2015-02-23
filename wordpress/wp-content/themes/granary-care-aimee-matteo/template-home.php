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
      <div class="large-6 end columns" id="business-blurbs">

        <?php the_content(); ?>

        <a href="<?php echo site_url(); ?>/about">More about us...</a>

        <div class="heart-mark"></div>

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
      $cssClass = get_sub_field('css_class');

    	// echo '<pre>';
    	// // print_r(get_post());
    	// print_r($link);
    	// echo '</pre>';
    ?>

    <div class="row">
          <div class="large-4 columns">
            	<a href="<?php echo $buttonlink; ?>"><h2><?php echo $title; ?></h2></a>
          </div>
          <div class="large-6 end columns <?php echo $cssClass; ?>" id="business-blurbs">
    			  <?php echo $summary; ?>
          	<a href="<?php echo $buttonlink; ?>"><?php echo $buttonlabel; ?></a>
            <hr/>
          </div>
    </div>

    <?php endwhile; ?>


    <?php endif; ?>

    </div>



<!-- TESTIMONIAL -->
    <div class="row testimonial-large">
      <div class="large-10 small-centered columns">
        <a href="<?php echo site_url(); ?>/testimonials">
          <h3><i><q><?php echo get_field('testimonial');?></i></q></h3>
        </a>
      </div>
    </div>


<!-- SOCIAL RESPONSIBILITY BLURB -->
    <div class="full-width content-area social-blurb">
      <div class="row">
        <div class="large-10 small-centered columns">
        	<?php echo get_field('home_social_responsibility');
            	?>
          <a href="<?php echo site_url(); ?>/social-responsibility ?>">Learn more about this...</a>
        </div>
        <div class="large-10 small-centered columns heart-mark">
        </div>
      </div>
    </div>


</div>







<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>




<?php get_footer(); ?>