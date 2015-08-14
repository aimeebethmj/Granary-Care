<?php
/*
Template Name: Contact Page
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

<!-- CONTENT -->
<div class="row">
    <div class="large-10 medium-12 small-centered columns">      
        <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="large-8 medium-10 small-centered columns">
        <?php echo get_field('main_blurb');?>
        
    </div>
  </div>


 <div class="row">
 	<div class="large-12 medium-12 columns">


 		<?php if( have_rows('business_emails') ): ?>

  		<?php while( have_rows('business_emails') ): the_row();

	    // Vars
	    // $image = get_sub_field('business_panel_image');
	    $emailHandle = get_sub_field('email');
	    $cssClass = get_sub_field('css_class');

	    ?>



	 		<div class="large-6 medium-8 small-11 small-centered columns email-container <?php echo $cssClass ?>">
	 			<a href="mailto:<?php echo $emailHandle ?>@granarycare.com"><h3><b><?php echo $emailHandle ?></b><br>@granarycare.com</h3></a>
	 		</div>
<!-- 
      } else {

      <div class="large-7 medium-7 small-centered columns email-container <?php echo $cssClass ?>">
        <a href="mailto:<?php echo $emailHandle ?>@granarycare.com"><h3><b><?php echo $emailHandle ?></b><br>@granarycare.com</h3></a>
      </div>
 -->


 		<?php endwhile; ?>

		<?php endif; ?>


 	</div>
 </div>

 
</div>

 <!-- FORM -->

 <?php 

 $formHeading = get_field('form_heading');

 ?>

<!-- <form class="" enctype="multipart/form-data"> -->
<div class="form-container contact">
  <div class="row">
    <div class="large-6 medium-6 small-11 small-centered columns">
    	<h2><?php echo $formHeading ?></h2>

      <?php the_content(); ?>

 	  </div>
  </div>
</div>









<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>