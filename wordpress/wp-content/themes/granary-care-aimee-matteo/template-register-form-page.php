<?php
/*
Template Name: Register forms
*/
get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $image       = get_field('image');
    $formHeading = get_field('form_heading');
    $mainButtonLink = get_field('main_button_link');
    $mainButtonLabel= get_field('main_button_label');
    $main_blurb = get_field('main_blurb');

?>

<div class="content">

<!-- BANNER STATEMENT -->
<div class="full-width content-area banner-statement <?php echo $categorySlug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 columns">
            <h2><?php echo get_field('banner_message'); ?></h2>
        </div>
    </div>
</div>

<!-- HEADING AND SUMMARY PARAGRAPHS -->
  <div class="row">
    <div class="large-12 medium-12 columns">      
        <h2><?php echo get_the_title(); ?></h2>
        <?php echo $main_blurb;?> 
    </div>
  </div>

<!-- ACTION BUTTON -->
  <div class="full-width content-area action-area <?php echo $categorySlug; ?>">
      <div class="row">
        <div class="buttons-container">
          <a class="large round button firstbutton" href="<?php echo $mainButtonLink; ?>"><?php echo $mainButtonLabel; ?></a>
        </div>
      </div>
    </div>

</div>



<!-- FORM -->

<div class="form-container">
  <div class="row">
    <div class="large-8 medium-8 small-11 small-centered columns">
      <h2><?php echo $formHeading ?></h2>
        <?php the_content();?> 
    </div>
  </div>
</div>







<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>