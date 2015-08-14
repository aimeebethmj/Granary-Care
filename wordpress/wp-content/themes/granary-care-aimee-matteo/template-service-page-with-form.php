<?php
/*
Template Name: Page with form
*/
get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $image = get_field('image');
    $mainButtonLink = get_field('main_action_button');
    $mainButtonLabel = get_field('main_action_button_label');
    $formHeading = get_field('form_heading');
    $main_blurb = get_field('main_blurb');

?>

<div class="content">

<!-- BANNER STATEMENT -->
<div class="full-width content-area banner-statement <?php echo $categorySlug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field('banner_message'); ?></h2>
        </div>
    </div>
</div>

<!-- IMAGE -->
<div class="full-width content-area image-background">
  <div class="row">
    <div class="large-12 medium-12 small-12 columns">
      <div class="image-container">
        <img src="<?php echo $image['url']; ?>">
      </div>
    </div>
  </div>
</div>

<!-- HEADING AND SUMMARY PARAGRAPHS -->
  <div class="row">
    <div class="large-12 medium-12 columns">      
        <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="large-8 medium-10 small-centered columns">
        <?php echo $main_blurb;?>
        <div class="heart-mark-yellow"></div>
    </div>
  </div>

<!--  ACTION BUTTON -->
    <div class="row">
        <div class="large-12 columns action-area <?php echo $categorySlug; ?>">
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