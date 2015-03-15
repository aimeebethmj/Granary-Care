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
<div class="content">

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $slug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field('banner_message');?></h2>
        </div>
    </div>
</div>


<!-- SUMMARY -->

<div class="row">
  <div class="large-12 medium-10 columns">
    <h1><?php echo get_the_title(); ?></h1>
  </div>
  <div class="large-8 medium-10 small-centered columns">
    <?php the_content();?>
  </div>
</div>

<div class="row">
    <div class="large-10 medium-10 small-centered columns">
  <div class="heart-mark-yellow"></div>

    		<?php if( have_rows('text_box') ): ?>

      <?php while( have_rows('text_box') ): the_row();

        // Vars
        $panelTitle = get_sub_field('panel_title');
        $blurb = get_sub_field('blurb');
        $webLink = get_sub_field('web_link');
        $image = get_sub_field('image');

      ?>

    <!-- SOCIAL RESPONSIBILITY PAGE -->

      <?php if( is_page('social-responsibility' )): ?>

    	<div class="row social-panel-container">
        <hr>
      		<div class="large-4 medium-12 small-12 columns">
              <div class="social-panel-description">
              	<a href="<?php echo $webLink; ?>"><h2><?php echo $panelTitle; ?></h2></a>
              </div>
          </div>
          <div class="large-6 medium-12 end small-12 columns" id="business-blurbs">
              <?php echo $blurb; ?>
          </div>
      </div>

    <!--  GRANARY KIDS USEFUL INFO -->

    <?php elseif( is_page('granary-kids-useful-info' )): ?>


    	<div class="row social-panel-container">
        <hr>
      		<div class="large-4 medium-12 columns">
          			<a href="<?php echo $webLink; ?>"><img src="<?php echo $image['url']; ?>"/></a>
          </div>
          <div class="large-6 medium-12 end columns" id="business-blurbs">
    	        <div class="social-panel-description">
    	          	<a href="<?php echo $webLink; ?>"><h2><?php echo $panelTitle; ?></h2></a>
    	            <?php echo $blurb; ?>
    	        </div>
          </div>
      </div>

    <?php endif; ?>

     <?php endwhile; ?>

    <?php endif; ?>

    </div>
</div>

</div>



<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>