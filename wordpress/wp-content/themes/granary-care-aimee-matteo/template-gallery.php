<?php
/*
Template Name: Gallery
*/
get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- CONTENT AREA -->
<div class="content">

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $categorySlug; ?>" >
    <div class="row">
        <div class="large-10 medium-12 small-centered columns">
            <!-- :before -->
            <h2><?php echo get_field('banner_message');?></h2>
            <!-- :after -->
        </div>
    </div>
</div>


    <div class="row instafeed">

      <div class="large-10 medium-12 small-centered columns">

        <?php the_content();?>

        <div id="instafeed"></div>
  
      </div>

    </div>


</div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>