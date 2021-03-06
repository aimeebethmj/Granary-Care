<?php
/*
Template Name: Meet Our Nannies Page
*/
get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="content">

<!-- BANNER STATEMENT -->
<div class="full-width content-area banner-statement <?php echo $categorySlug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field('banner_message');?></h2>
        </div>
    </div>
</div>


<!-- STAFF PROFILES GRANARY CARE -->
<div class="full-width content-area page-summary1">
  <div class="row">
    <div class="large-10 medium-12 small-centered columns">
   		<h1><?php echo get_the_title(); ?></h1>   
    </div>
    <div class="large-8 medium-10 small-centered columns">
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

      <div class="row profiles-container">
      	<div class="large-10 medium-12 small-centered columns">

          <div class="large-4 medium-12 columns nanny-profile-images">
            <img src="<?php echo $image['url']; ?>"/>      
          </div>

          <div class="large-6 medium-12 end columns profile-info business-blurbs">
  	        <h4><?php echo $name; ?></h4>
  	        <h5><?php echo $nannytype; ?></h5>
  	        <h5><?php echo $location; ?></h5>
  	        <p><?php echo $aboutnanny; ?></p>
  			     <!-- <a class="round button" href="<?php echo $buttonlink; ?>"><?php echo $buttonlabel; ?></a> -->
          </div>

        </div>
      </div>

<?php endwhile; ?>

		<?php endif; ?>

<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area <?php echo $categorySlug; ?>">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large round button firstbutton" href="<?php echo get_field('action_button_1'); ?>"><?php echo get_field('action_button_1_label'); ?></a>
      <a class="large round button secondbutton" href="<?php get_field('action_button_2'); ?>"><?php echo get_field('action_button_2_label'); ?></a>
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