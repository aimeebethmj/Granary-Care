<?php
/*
Template Name: Service Page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)
    $image = get_field('image');
    $extraInfo = get_field('extra_info');
    $buttonLink = get_field('button_link');
    $buttonLabel = get_field('button_label');

    // echo '<pre>';
    // // print_r(get_the_category());
    // print_r($category);
    // echo '</pre>';

?>

<!-- BANNER STATEMENT -->
<div class="full-width content-area banner-statement <?php echo $slug; ?>" >
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

<?php 
if( !empty($extraInfo) ):
?>

<!-- FOR AGES INFO BOX -->
<div class="full-width content-area">
  <div class="row">
    <div class="large-12 medium-12 small-12 columns">
    	<div class="extra-info-box">
    		<?php echo $extraInfo; ?>
    	</div>  
    </div>
  </div>
</div>

<?php endif; ?>


<!-- HEADING AND SUMMARY PARAGRAPHS -->
<div class="full-width content-area page-summary3">
  <div class="row">
    <div class="large-12 medium-12 columns">      
      	<h2><?php echo get_the_title(); ?></h2>
	    <?php the_content();?> 
    </div>

    <?php if( is_page('tipple-topples-creche' )): ?>
    	<div class="service-buttons-container">
			<a class="large success round button" href="<?php echo $buttonLink; ?>"><?php echo $buttonLabel; ?></a>
		</div>
	<?php endif; ?>

  </div>
</div>




				<!--      ACTIVE HOLIDAY CAMPS ONLY      -->


<?php if( is_page('active-holiday-camps' )): ?>

<!-- ACTIVITIES PANELS -->
<div class="full-width content-area page-summary1">
  <div class="row">
  	<h2><?php echo get_field('activities_section_title'); ?></h2>

<?php if( have_rows('activities') ): ?>

  <?php while( have_rows('activities') ): the_row();

    // Vars
    $image = get_sub_field('panel_image');
    $panelTitle = get_sub_field('panel_title');
    $blurb = get_sub_field('blurb');

  ?>

  	<div class="large-4 medium-4 columns activity-business-panel">
          <div class="button-image">
            <img src="<?php echo $image['url']; ?>">
            
          </div>
          <div class="business-panel-description">
          	<h3><?php echo $panelTitle; ?></h3>
            <?php echo $blurb; ?>
          </div>
        </div>

 <?php endwhile; ?>

<?php endif; ?>

  </div>
</div>




<!-- SECOND SECTION: "AND MUCH MORE" PARAGRAPH -->
<div class="full-width content-area page-summary3">
  <div class="row">
    <div class="large-12 medium-12 columns">      
	    <?php echo get_field('second_section'); ?>   
    </div>
    <div class="service-buttons-container">
    	<a class="large success round button" href="<?php echo $buttonLink; ?>"><?php echo $buttonLabel; ?></a>
    </div>
  </div>
</div>

<?php endif; ?>

<hr>

<?php 
$accreditations = get_field('accreditations');

if( !empty($accreditations) ):

?>
<!-- ACCREDITATIONS -->
<div class="full-width content-area accreditations-container">
  <div class="row">

    
    <?php if( have_rows('accreditations') ): ?>

    <?php while( have_rows('accreditations') ): the_row();

      $logo = get_sub_field('logo');
      $logoLink = get_sub_field('logo_link');

    ?>

      <div class="large-4 medium-4 small-4 columns">
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