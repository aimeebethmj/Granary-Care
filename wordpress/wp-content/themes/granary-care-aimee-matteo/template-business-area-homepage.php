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
            <h2><?php echo get_field(business_area_homepage_banner_message);?></h2>
        </div>
    </div>
</div>



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

<!-- BUSINESS AREAS PANEL -->


<div class="full-width content-area page-summary2">
  <div class="row">

<?php if( have_rows('business_panels') ): ?>

  <?php while( have_rows('business_panels') ): the_row();

    // Vars
    $image = get_sub_field('business_panel_image');
    $paneltitle = get_sub_field('panel_title');
    $buttonlink = get_sub_field('button_link');
    $buttonlabel = get_sub_field('button_label');

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

  <?php endwhile; ?>

<?php endif; ?>

    </div>
</div>


<!-- TESTIMONIAL -->
<div class="full-width content-area testimonial-large">
  <div class="row">
    <div class="large-12 columns">
      <a href="#"><h4><i><q><?php echo get_field(business_area_homepage_testimonial);?></i></q></h4></a>
    </div>
  </div>
</div>







<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>