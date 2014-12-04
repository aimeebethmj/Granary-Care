<?php
/*
Template Name: Meet Our Nannies Page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)


?>

<!-- BANNER STATEMENT -->
<div class="full-width content-area banner-statement <?php echo $slug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field(banner_message);?></h2>
        </div>
    </div>
</div>


<!-- STAFF PROFILES GRANARY CARE -->
<div class="full-width content-area page-summary1">
  <div class="row">
    <div class="large-12 columns">
   		<h2><?php echo get_the_title(); ?></h2>
      	<?php the_content(); ?>   
    </div>
  </div>
</div>


<!-- NANNY PROFILES -->
<?php if( have_rows('nanny_profiles') ): ?>

		  <?php while( have_rows('nanny_profiles') ): the_row();

		// Vars
		  	$image = get_sub_field('profile_picture');
		    $name = get_sub_field('name');
		    $nannytype = get_sub_field('type_of_nanny');
		    $location = get_sub_field('location');
		    $aboutnanny = get_sub_field('blurb_about_nanny');
		    $buttonlink = get_sub_field('button_link');
		    $buttonlabel = get_sub_field('button_label');

		  ?>

<div class="full-width content-area ">
      <div class="row nanny-profiles-container">
      	<div class="large-8 medium-8 columns nanny-profile-info">
	        <h4><?php echo $name; ?></h4>
	        <h5><?php echo $nannytype; ?></h5>
	        <h5><?php echo $location; ?></h5>
	        <p><?php echo $aboutnanny; ?></p>
			<a class="round button" href="<?php echo $buttonlink; ?>"><?php echo $buttonlabel; ?></a>
        </div>

        <div class="large-4 medium-4 columns nanny-profile-images">
          <img src="<?php echo $image['url']; ?>"/>      
        </div>
      </div>
</div>
<hr>

<?php endwhile; ?>

		<?php endif; ?>

<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large success round button" href="<?php echo get_field(action_button_1); ?>"><?php echo get_field(action_button_1_label); ?></a><a class="large success round button" href="<?php get_field(action_button_2); ?>"><?php echo get_field(action_button_2_label); ?></a>
    </div>
  </div>
</div>


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>