<?php
/*
Template Name: Business Area Home Page
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

<!-- CONTENT AREA -->
<div class="content">

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $slug; ?>" >
    <div class="row">
        <div class="large-10 medium-12 small-centered columns">
            <!-- :before -->
            <h2><?php echo get_field('banner_message');?></h2>
            <!-- :after -->
        </div>
    </div>
</div>

</div>


<!-- IMAGE -->

<?php 

  $image = get_field('image');
  $mainImage = get_field('main_image');
  $mainButtonLink = get_field('main_action_button');
  $mainButtonLabel = get_field('main_action_button_label');
  $secondButtonLink = get_field('second_action_button');
  $secondButtonLabel = get_field('second_action_button_label');


/*if(is_page('granary-kids') ):*/ 

// if( !empty($image) ):

?>

 <!--  <div class="row">
    <div class="large-12 medium-12 small-12 columns">
      <div class="image-container">
        <img src="<?php echo $image['url']; ?>">
      </div>
    </div>
  </div>


<?php //if(is_page(array('mother-and-baby','nanny-agency') ) ): 

?> -->

<div class="full-width content-area image-banner-area">
  <div class="row">
    <div class="large-8 medium-8 small-centered columns">
      <div class="large-5 medium-5 columns">
        <img src="<?php echo $image['url']; ?>">
      </div>
      <div class="large-7 medium-7 hide-for-small columns">
        <h2><?php echo get_field('image_banner_message') ?></h2>
      </div>
    </div>
  </div>
</div>




<div class="content">


<!-- MAIN CONTENT -->
<div class="row">
  <div class="large-10 medium-12 small-centered columns">

          <?php 
          if( !empty($mainImage) ):
          ?>
                <div class="image-container mainimage">
                  <img src="<?php echo $mainImage['url']; ?>">
                </div>

          <?php endif; ?>

    <h1><?php echo get_the_title(); ?></h1>
  </div>
  <div class="large-8 medium-10 small-centered columns">
    <?php the_content();?>
  </div>
</div>

<!-- ACTION BUTTON -->

  <?php if( is_page ('nanny-agency') ): ?>

    <div class="full-width content-area action-area <?php echo $slug; ?>">
      <div class="row">
        <div class="buttons-container">
          <a class="large round button firstbutton" href="<?php echo $mainButtonLink; ?>"><?php echo $mainButtonLabel; ?></a>
        </div>
      </div>
    </div>

  <?php endif; ?>

    <?php if( is_page ('mother-and-baby' ) ): ?>

      
        <div class="full-width content-area action-area <?php echo $slug; ?>">
          <div class="row">
            <div class="buttons-container">
              <a class="large round button firstbutton" href="<?php echo $mainButtonLink; ?>"><?php echo $mainButtonLabel; ?></a>

              <?php if( !empty( $secondButtonLabel ) ): ?>
              <a class="large round button secondbutton" href="<?php echo $secondButtonLink; ?>"><?php echo $secondButtonLabel; ?></a>
              <?php endif; ?>

            </div>
          </div>
        </div>
      

  <?php endif; ?>




<!-- BUSINESS AREAS PANELS GRANARY KIDS PAGE -->


<?php 
$businessPanels = get_field('business_panels');

if( !empty($businessPanels) ): 

?>

  <div class="business-panel">

<?php if( have_rows('business_panels') ): ?>

  <?php while( have_rows('business_panels') ): the_row();

    // Vars
    // $image = get_sub_field('business_panel_image');
    $title = get_sub_field('panel_title');
    $buttonlink = get_sub_field('button_link');
    $buttonlabel = get_sub_field('button_label');
    $blurb = get_sub_field('blurb');
    $cssClass = get_sub_field('css_class');
    $second_section = get_field('second_section');


    if( in_category( 'granarykids' ) ): ?>

    <div class="row">
      <div class="large-8 medium-10 small-centered columns">
          <ul class="image-bullet">
            <li>
              <a href="<?php echo $buttonlink; ?>"><h3><?php echo $title; ?></h3></a>
            </li>
          </ul>
      </div>
    </div>


    <?php elseif( in_category( 'nannyagency' ) ): ?>

      <div class="row">
        <div class="large-4 columns">
            <a href="<?php echo $buttonlink; ?>"><h2><?php echo $title; ?></h2></a>
        </div>
        <div class="large-6 end columns <?php echo $cssClass; ?> business-blurbs">
          <?php echo $blurb; ?>
          <a href="<?php echo $buttonlink; ?>"><?php echo $buttonlabel; ?></a>
          <hr/>
        </div>
      </div>


    <?php endif; ?>

  <?php endwhile; ?>

<?php endif; ?>

    </div>

<?php endif; ?>

  <?php if( is_page ('granary-kids') ): ?>

    <div class="full-width content-area action-area <?php echo $slug; ?>">
      <div class="row">
        <div class="buttons-container">
          <a class="large round button main-button" href="<?php echo $mainButtonLink; ?>"><?php echo $mainButtonLabel; ?></a>
        </div>
      </div>
    </div>

  <?php endif; ?>

<!-- SECOND SUMMARY SECTION MOTHER AND BABY ONLY -->
<!-- 
<?php if(is_page('mother-and-baby')): ?>

  <?php if( !empty( $second_section ) ): ?>
  <div class="full-width content-area">
    <div class="row">
      <div class="large-8 medium-8 small-centered columns">
        <?php echo get_field('second_section');?>
      </div>
    </div>
  </div>
  <?php endif; ?>

<?php endif; ?>
 -->

<!--  ACTION BUTTONS/TESTIMONIALS-  NANNY AGENCY AND MOTHER AND BABY ONLY -->
<?php

  $buttonLink1 = get_field('action_button_1');
  $buttonLabel1 = get_field('action_button_1_label');
  $buttonLink2 = get_field('action_button_2');
  $buttonLabel2 = get_field('action_button_2_label');
  $testimonial = get_field('testimonial');
  

  if(is_page( array( 'nanny-agency', 'mother-and-baby' ) )):
?>

<!-- ACTION BUTTONS -->
<?php if( !empty( $secondButtonLabel ) ): ?>
<div class="full-width content-area action-area <?php echo $slug; ?>">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large round button firstbutton" href="<?php echo $buttonLink1; ?>"><?php echo $buttonLabel1; ?></a>
      <a class="large round button secondbutton" href="<?php echo $buttonLink2; ?>"><?php echo $buttonLabel2; ?></a>
    </div>
  </div>
</div>
<?php endif; ?>

<?php endif; ?>

<?php if( !empty( $testimonial ) ): ?>
<!-- TESTIMONIAL -->
<div class="full-width content-area testimonial-large">
  <div class="row">
    <div class="large-10 medium-10 small-centered columns">
      <a href="<?php echo site_url(); ?>/testimonials">
        <h3><i><q><?php echo $testimonial; ?></i></q></h3>
      </a>
    </div>
  </div>
</div>
<?php endif; ?>


<?php 
$accreditations = get_field('accreditations');

if( !empty($accreditations) ): 

?>

<!-- ACCREDITATIONS- NANNY AGENCY ONLY-->
<div class="full-width content-area accreditations-container">
  <div class="row">
    <div class="large-10 medium-10 small-centered columns">

    

    <?php if( have_rows('accreditations') ): ?>

    <?php while( have_rows('accreditations') ): the_row();

      $logo = get_sub_field('logo');
      $logoLink = get_sub_field('logo_link');

      if(is_page( 'nanny-agency')): ?>

      <div class="large-3 medium-6 small-6 logos columns">
        <img src="<?php echo $logo['url']; ?>">
      </div>

    <?php else: ?>

      <div class="large-3 medium-6 small-6 logos columns">
        <a href="<?php echo $logoLink; ?>"><img src="<?php echo $logo['url']; ?>"></a>
      </div>
      
      <?php endif; ?>

    <?php endwhile; ?>

  <?php endif; ?>


    </div>
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