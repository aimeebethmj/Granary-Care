<?php
/*
Template Name: Text boxes page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

 	$categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)


?>

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $slug; ?>" >
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
    </div>
  </div>
</div>


		<?php if( have_rows('text_box') ): ?>

  <?php while( have_rows('text_box') ): the_row();

    // Vars
    $panelTitle = get_sub_field('panel_title');
    $blurb = get_sub_field('blurb');
    $webLink = get_sub_field('web_link');

  ?>
<div class="full-width content-area page-summary3 social-panel-container">
	<div class="row">
  		<div class="large-12 medium-12 columns ">
          <div class="social-panel-description">
          	<a href="<?php echo $webLink; ?>"></a><h3><?php echo $panelTitle; ?></h3></a>
            <?php echo $blurb; ?>
          </div>
        </div>
    </div>
</div>

 <?php endwhile; ?>

<?php endif; ?>
		





<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>