<?php
/*
Template Name: School Club Page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)

    /*echo '<pre>';
    print_r(get_the_category());
    print_r($category);
    echo '</pre>';*/

?>


<div class="content">

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $slug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field('banner_message');?></h2>
        </div>
    </div>
</div>


<?php

    	// Vars
    	

    	$school_name = 		get_field('school_name');
		$location = 		get_field('location');
    	$sessions = 		get_field('sessions');
    	$clubActivities =	get_field('activities');
    	$play_leader = 		get_field('play_leader');
    	$club_telephone = 	get_field('club_telephone');
    	$school_telephone = get_field('school_telephone');
    	$ofsted_reg = 		get_field('ofsted_registration_number');
		$actionButtonLabel =	get_field('action_button_label');
		$bookingForm = get_field('booking_form');
		$booking_info = get_field('booking_info');

  	?>

<!-- IMAGE -->
    <?php 

    $image = get_field('image');

    if( !empty($image) ):

    ?>

      <div class="row image-container">
        <div class="large-10 medium-12 small-centered  columns">
            <img src="<?php echo $image['url']; ?>">
        </div>
      </div>

    <?php endif; ?>


<!-- MAIN CONTENT -->
<div class="row">
  <div class="large-10 medium-10 small-centered columns">
    <h1><?php echo get_the_title(); ?></h1>
  </div>
  <div class="large-8 medium-8 small-centered columns">
    <?php the_content();?>
  </div>
</div>

<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area <?php echo $slug; ?>">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large round button firstbutton" href="<?php echo $bookingForm['url']; ?>"><?php echo $actionButtonLabel; ?></a>
    </div>
  </div>
</div>

 <div class="row"> 
  <div class="large-8 medium-8 small-centered columns">
    <?php echo $booking_info;?>
  </div>
</div>

<div class="clubs-panel">
	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-3 medium-12 columns">
				<h2>Location</h2>
			</div>
			<div class="large-7 medium-12 columns business-blurbs">
				<p><b><?php echo $location; ?></b></p>
			</div>
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-3 medium-12 columns">
				<h2>Sessions</h2>
			</div>
			<div class="large-7 medium-12 columns business-blurbs">
			
				
				<?php if( have_rows('sessions') ): ?>

		  		<?php while( have_rows('sessions') ): the_row();

	  		    	$club =				get_sub_field('type_of_club');
					$times = 			get_sub_field('times');
					$price =			get_sub_field('price');

		  		?>
			
				<p><?php echo $club; ?></p>
				<p><b><?php echo $times; ?></b></p>
				<p><b><?php echo $price; ?></b></p>


				<?php endwhile; ?>

				<?php endif; ?>
			</div>
			
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-3 medium-12 columns">
				<h2>What we do here</h2>
			</div>
			<div class="large-7 medium-12 columns business-blurbs">
				<p><?php echo $clubActivities; ?></p>
			</div>
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-3 medium-12 columns">
				<h2>Play Leader</h2>
			</div>
			<div class="large-7 medium-12 columns business-blurbs">
				<p><?php echo $play_leader; ?></p>
			</div>
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-3 medium-12 columns">
				<h2>Club Tel</h2>
			</div>
			<div class="large-7 medium-12 columns business-blurbs">
				<a href="tel:<?php echo $club_telephone; ?>" ><h3><?php echo $club_telephone; ?></h3></a>
			</div>
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-3 medium-12 columns">
				<h2>School Office Tel</h2>
			</div>
			<div class="large-7 medium-12 columns business-blurbs">
				<a href="tel:<?php echo $club_telephone; ?>" ><h3><?php echo $school_telephone; ?></h3></a>
			</div>
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-3 medium-12 columns">
				<h2>Ofsted Reg</h2>
			</div>
			<div class="large-7 medium-12 columns business-blurbs">
				<a href="tel:<?php echo $club_telephone; ?>" ><h3><?php echo $ofsted_reg; ?></h3></a>
			</div>
			<hr>
		</div>
	</div>

</div>

<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area <?php echo $slug; ?>">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large round button firstbutton" href="<?php echo $bookingForm['url']; ?>"><?php echo $actionButtonLabel; ?></a>
    </div>
  </div>
</div>

<!-- TESTIMONIAL -->
<div class="full-width content-area testimonial-large">
  <div class="row">
    <div class="large-10 medium-10 small-centered columns">
      <a href="<?php echo site_url(); ?>/testimonials">
        <h3><i><q><?php echo get_field('testimonial');?></i></q></h3>
      </a>
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