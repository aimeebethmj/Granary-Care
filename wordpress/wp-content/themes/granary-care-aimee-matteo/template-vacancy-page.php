<?php
/*
Template Name: Vacancy Page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)
    $mainButtonLink = get_field('main_action_button');
  	$mainButtonLabel = get_field('main_action_button_label');
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




<!-- MAIN CONTENT -->
<div class="row">
  <div class="large-12 medium-12 small-centered columns">
    <h1><?php echo get_the_title(); ?></h1>
  </div>
  <div class="large-8 medium-10 small-centered columns">
    <?php the_content();?>
  </div>
</div>

<!--  ACTION BUTTON  -->
<div class="full-width content-area action-area <?php echo $slug; ?>">
  <div class="row">
    <div class="buttons-container">
      <a class="large round button firstbutton" href="<?php echo $mainButtonLink; ?>"><?php echo $mainButtonLabel; ?></a>
    </div>
  </div>
</div>


<!-- VACANCY FIELDS -->

<?php 
$vacancyPanels = get_field('vacancy_panels');

if( !empty($vacancyPanels) ): 

if( have_rows('vacancy_panels') ): 

while( have_rows('vacancy_panels') ): the_row();

    // Vars
    // $image = get_sub_field('business_panel_image');
    $jobTitle = get_sub_field('job_title');
   	$positionType = get_sub_field('position_type');
    $descriptionTitle = get_sub_field('description_title');
    $description = get_sub_field('description');
    $applyButton = get_sub_field('application_form_button');
    $experienceTitle = get_sub_field('experience_title');
    $experienceRequired = get_sub_field('experience_required');
    
?>



<div class="row vacancy-container">
	<hr>
	<div class="large-8 medium-10 small-centered columns">
		<h3><b><?php echo $jobTitle; ?></b></h3>
		<h3><?php echo $positionType; ?></h3>
		<h3><?php echo $descriptionTitle; ?></h3>
		<?php echo $description; ?>
		<h3><?php echo $experienceTitle; ?></h3>
		<?php echo $experienceRequired; ?>
		<div class="buttons-container">
			<a class="large round button secondbutton" href=""><?php echo $applyButton; ?></a>
		</div>
	</div>
</div>

	

<?php endwhile; ?>

<?php endif; ?>

<?php endif; ?>



</div>
















<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>