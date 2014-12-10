<?php
/*
Template Name: Business Area Home Page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)

    // echo '<pre>';
    // // print_r(get_the_category());
    // print_r($category);
    // echo '</pre>';

?>

<!-- CONTENT AREA -->

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $slug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field('banner_message');?></h2>
        </div>
    </div>
</div>


<!-- IMAGE -->
<?php 

$image = get_field('image');

if( !empty($image) ):

?>


<div class="full-width content-area image-background">
  <div class="row">
    <div class="large-12 medium-12 small-12 columns">
      <div class="image-container">
        <img src="<?php echo $image['url']; ?>">
      </div>
    </div>
  </div>
</div>

<?php endif; ?>



<!-- SIDEBAR AND MAIN CONTENT -->
<div class="row page-sidenav-content">
  <div class="large-9 medium-9 push-3 columns">
    <h2><?php echo get_the_title(); ?></h2>
    <?php the_content();?>
  </div>


  <div class="large-3 medium-3 pull-9 columns">
    <ul class="side-nav">

    	<?php if( have_rows('side_navigation') ): ?>

		  <?php while( have_rows('side_navigation') ): the_row();

		    // Vars
		    $tabLink = get_sub_field('tab_link');
		    $tabLabel = get_sub_field('tab_label');

		  ?>

		      <li><a href="<?php echo $tabLink; ?>"><?php echo $tabLabel; ?></a></li>

		  <?php endwhile; ?>

		<?php endif; ?>

    </ul>
  </div>
</div>



<!-- BUSINESS AREAS PANELS GRANARY KIDS PAGE -->


<?php 
$businessPanels = get_field('business_panels');

if( !empty($businessPanels) ): 

?>

<div class="full-width content-area page-summary2">
  <div class="row">

<?php if( have_rows('business_panels') ): ?>

  <?php while( have_rows('business_panels') ): the_row();

    // Vars
    $image = get_sub_field('business_panel_image');
    $paneltitle = get_sub_field('panel_title');
    $buttonlink = get_sub_field('button_link');
    $buttonlabel = get_sub_field('button_label');
    $blurb = get_sub_field('blurb');


    if( in_category( 'granarykids' ) ):
  ?>

      <div class="large-4 columns business-panel">
          <div class="business-panel-image">
            <img src="<?php echo $image['url']; ?>"/>
          </div>
          <div class="business-panel-title">
            <h4><?php echo $paneltitle; ?></h4>
          </div>
          <a class="small radius button" href="<?php echo $buttonlink; ?>"><?php echo $buttonlabel; ?></a>
      </div>

    <?php elseif( in_category( 'nannyagency' ) ): ?>

      <!-- FOCUSSED INFO BUTTONS NANNY AGENCY PAGE -->
    
        <div class="large-4 medium-4 columns nanny-business-panel">
          <div class="nanny-button-image">

            <img src="<?php echo $image['url']; ?>">
            <h3><?php echo $paneltitle; ?></h3>
          </div>
          <div class="business-panel-description">

            <?php echo $blurb; ?>
          </div>
          <a class="small round button" href="<?php echo $buttonlink; ?>"><?php echo $buttonlabel; ?></a>
        </div>

    <?php endif; ?>

  <?php endwhile; ?>

<?php endif; ?>

    </div>
</div>

<?php endif; ?>

<!-- SECOND SUMMARY SECTION MOTHER AND BABY ONLY -->

<?php if(is_page('mother-and-baby')): 

?>
<div class="full-width content-area page-summary1">
  <div class="row">
    <div class="large-12 medium-12 columns">
      <?php echo get_field('second_section');?>
    </div>
  </div>
</div>

<?php endif; ?>


<!--  ACTION BUTTONS/TESTIMONIALS-  NANNY AGENCY AND MOTHER AND BABY ONLY -->
<?php

  $buttonLink1 = get_field('action_button_1');
  $buttonLabel1 = get_field('action_button_1_label');
  $buttonLink2 = get_field('action_button_2');
  $buttonLabel2 = get_field('action_button_2_label');

  if(is_page( array( 'nanny-agency', 'mother-and-baby' ) )):
?>

<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large success round button" href="<?php echo $buttonLink1; ?>"><?php echo $buttonLabel1; ?></a><a class="large success round button" href="<?php echo $buttonLink2; ?>"><?php echo $buttonLabel2; ?></a>
    </div>
  </div>
</div>

<?php endif; ?>


<!-- TESTIMONIAL -->
<div class="full-width content-area testimonial-large">
  <div class="row">
    <div class="large-12 columns">
      <a href="#"><h4><i><q><?php echo get_field('testimonial');?></i></q></h4></a>
    </div>
  </div>
</div>


<?php 
$accreditations = get_field('accreditations');

if( !empty($accreditations) ): 
  
?>

<!-- ACCREDITATIONS- NANNY AGENCY ONLY-->
<div class="full-width content-area accreditations-container">
  <div class="row">

    
    <?php if( have_rows('accreditations') ): ?>

    <?php while( have_rows('accreditations') ): the_row();

      $logo = get_sub_field('logo');
      $logoLink = get_sub_field('logo_link');

    ?>

      <div class="large-3 medium-3 small-3 columns">
        <a href="<?php echo $logoLink; ?>"><img src="<?php echo $logo['url']; ?>"></a>
      </div>
    

    <?php endwhile; ?>

  <?php endif; ?>

  </div>
</div>

<?php endif; ?>


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>