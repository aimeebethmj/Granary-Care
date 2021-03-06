<?php
/*
Template Name: Image page
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


<!-- SUMMARY -->


  <div class="row">
    <div class="large-10 medium-12 small-centered columns">
      <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="large-8 medium-10 small-centered columns">
      <?php the_content();?>
    </div>
  </div>

<!--  ACTION BUTTONS -->

  <div class="full-width content-area action-area <?php echo $categorySlug; ?>">
    <div class="row">
      <div class="buttons-container">
      <a class="large round button firstbutton" href="<?php echo get_field('action_button_1'); ?>"><?php echo get_field('action_button_1_label'); ?></a>
      </div>
    </div>
  </div>


<!-- FACILITIES PANELS -->

  <div class="row">
    <div class="large-10 medium-12 small-centered columns">
      <h2><?php echo get_field('image_section_title'); ?></h2>
    </div>
  </div>
<?php if( have_rows('image_section') ): ?>

  <?php while( have_rows('image_section') ): the_row();

    // Vars
    $image = get_sub_field('panel_image');
    $panelTitle = get_sub_field('panel_title');
    $blurb = get_sub_field('blurb');

  ?>
  <div class="row profiles-container">
    <div class="large-10 medium-12 small-centered columns">
      <div class="large-4 medium-12 columns">
            <div class="large-button-image">
              <img src="<?php echo $image['url']; ?>">   
            </div>
      </div>
      <div class="large-6 medium-12 columns profile-info business-blurbs">
              <h3><?php echo $panelTitle; ?></h3>
              <?php echo $blurb; ?>
      </div>
    </div>
  </div>

 <?php endwhile; ?>

<?php endif; ?>



<?php 

$secondSection = get_field('second_section');
$secondButtonLink = get_field('section_section_button');
$secondButtonLabel = get_field('second_section_button_label');

if( !empty( $secondSection ) ): ?>

  <div class="row last-blurb">
    <div class="large-8 medium-10 small-centered columns">
      <?php echo $secondSection;?>
    </div>
  </div>

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