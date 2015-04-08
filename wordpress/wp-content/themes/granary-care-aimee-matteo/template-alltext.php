<?php
/*
Template Name: All Text Page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 


 	  $categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)

    $mainbuttonlink = get_field('main_action_button');
    $mainbuttonlabel = get_field('main_action_button_label');
    $firstbuttonlink = get_field('first_section_button');
    $firstbuttonlabel = get_field('first_section_button_label');
    $secondbuttonlink = get_field('section_section_button');
    $secondbuttonlabel = get_field('second_section_button_label');
    $thirdbuttonlink = get_field('third_section_button');
    $thirdbuttonlabel = get_field('third_section_button_label');
    $action1buttonlink = get_field('action_button_1');
    $action1buttonlabel = get_field('action_button_1_label');
    $action2buttonlink = get_field('action_button_2');
    $action2buttonlabel = get_field('action_button_2_label');

    $secondSection = get_field('second_section');
    $thirdSection = get_field('third_section');
    $testimonial = get_field('testimonial');

?>


<div class="content">

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $slug; ?>">
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
    <div class="large-8 medium-10 small-centered columns <?php echo $slug; ?>">
         <?php the_content();?>
        <?php if( !empty($firstbuttonlabel) ): ?>
          <a class="alltext-link" href="<?php echo $firstbuttonlink; ?>"><?php echo $firstbuttonlabel; ?></a>
        <?php endif; ?>
        <hr>
    </div>
  </div>

  <!-- ACTION BUTTONS -->
<?php if( !empty($mainbuttonlabel) ): ?>
<div class="full-width content-area action-area <?php echo $slug; ?>">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large round button firstbutton" href="<?php echo $mainbuttonlink; ?>"><?php echo $mainbuttonlabel; ?></a>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if( !empty( $secondSection ) ): ?>
<div class="full-width content-area page-summary1">
  <div class="row">
    <div class="large-8 medium-10 small-centered columns <?php echo $slug; ?>">
    	<?php echo get_field('second_section');?>
      <?php if( !empty($secondbuttonlabel) ): ?>
        <a class="alltext-link" href="<?php echo get_field('second_section_button'); ?>"><?php echo get_field('second_section_button_label'); ?></a>
      <?php endif; ?>
      <hr/>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if( !empty( $thirdSection ) ): ?>
<div class="full-width content-area page-summary2">
  <div class="row">
    <div class="large-8 medium-10 small-centered columns <?php echo $slug; ?>">
    	<?php echo get_field('third_section');?>
      <?php if( !empty($thirdbuttonlabel) ): ?>
      <a class="alltext-link" href="<?php echo get_field('third_section_button'); ?>"><?php echo get_field('third_section_button_label'); ?></a>
      <?php endif; ?>
      <hr/>
    </div>
  </div>
</div>
<?php endif; ?>


<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area <?php echo $slug; ?>">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large round button firstbutton" href="<?php echo get_field('action_button_1'); ?>"><?php echo get_field('action_button_1_label'); ?></a>
      <a class="large round button secondbutton" href="<?php get_field('action_button_2'); ?>"><?php echo get_field('action_button_2_label'); ?></a>
    </div>
  </div>
</div>


<!-- TESTIMONIAL -->
<?php if( !empty( $testimonial ) ): ?>
    <div class="row testimonial-large">
      <div class="large-10 medium-10 small-centered columns">
        <a href="<?php echo site_url(); ?>/testimonials">
          <h3><i><q><?php echo $testimonial;?></i></q></h3>
        </a>
      </div>
    </div>
<?php endif; ?>

</div>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>