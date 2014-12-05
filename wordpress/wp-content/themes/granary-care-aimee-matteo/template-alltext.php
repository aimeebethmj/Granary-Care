<?php
/*
Template Name: All Text Page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 


 	$firstbuttonlink = get_sub_field('first_section_button');
    $firstbuttonlabel = get_sub_field('first_section_button_label');
    $secondbuttonlink = get_sub_field('section_section_button');
    $secondbuttonlabel = get_sub_field('second_section_button_label');
    $thirdbuttonlink = get_sub_field('third_section_button');
    $thirdbuttonlabel = get_sub_field('third_section_button_label');
    $action1buttonlink = get_sub_field('action_button_1');
    $action1buttonlabel = get_sub_field('action_button_1_label');
    $action2buttonlink = get_sub_field('action_button_2');
    $action2buttonlabel = get_sub_field('action_button_2_label');


?>

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement banner2">
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field(banner_message);?></h2>
        </div>
    </div>
</div>

<!-- SUMMARY -->

<div class="full-width content-area page-summary3">
  <div class="row">
    <div class="large-12 medium-12 columns">
    <h2><?php echo get_the_title(); ?></h2>
         <?php the_content();?>
      <a class="round button" href="<?php echo get_field(first_section_button); ?>"><?php echo get_field(first_section_button_label); ?></a>
    </div>
  </div>
</div>

<div class="full-width content-area page-summary1">
  <div class="row">
    <div class="large-12 medium-12 columns">
    	<?php echo get_field(second_section);?>
      <a class="round button" href="<?php echo get_field(second_section_button); ?>"><?php echo get_field(second_section_button_label); ?></a>
    </div>
  </div>
</div>

<div class="full-width content-area page-summary2">
  <div class="row">
    <div class="large-12 medium-12 columns">
    	<?php echo get_field(third_section);?>
      <a class="round button" href="<?php echo get_field(third_section_button); ?>"><?php echo get_field(third_section_button_label); ?></a>
    </div>
  </div>
</div>


<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large success round button" href="<?php echo get_field(action_button_1); ?>"><?php echo get_field(action_button_1_label); ?></a><a class="large success round button" href="<?php get_field(action_button_2); ?>"><?php echo get_field(action_button_2_label); ?></a>
    </div>
  </div>
</div>

<!-- TESTIMONIAL -->
<div class="full-width content-area testimonial-large">
  <div class="row">
    <div class="large-12 columns">
      <a href="#"><h4><i><q><?php echo get_field(testimonial); ?></i></q></h4></a>
    </div>
  </div>
</div>



<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>