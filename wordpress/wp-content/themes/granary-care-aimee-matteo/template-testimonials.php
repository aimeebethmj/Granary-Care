<?php
/*
Template Name: Testimonials page
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

<!-- INTRO PARAGRAPH IN SPEECH BUBBLE -->
<div class="full-width content-area">
	<div class="row">
		<div class="large-10 medium-12 small-centered columns hide-for-large-up hide-for-medium-up">
				<h2><?php echo get_the_title(); ?></h2>
				<?php the_content();?>
		</div>
		<div class="large-10 medium-12 small-centered columns hide-for-small">
			<div class="bubble">
				<h2><?php echo get_the_title(); ?></h2>
				<?php the_content();?>
			</div>
		</div>
	</div>
</div>


<!-- TESTIMONIALS -->
<?php if( have_rows('testimonials') ): ?>

<div class="full-width content-area testimonial-container">

  <?php while( have_rows('testimonials') ): the_row();

// Vars
      $cssClass = get_sub_field('css_class');


  ?>


	<div class="row">
		<div class="large-8 medium-10 small-12 small-centered columns testimonial <?php echo $cssClass; ?>">
			<h3><q><?php echo get_sub_field('testimonial') ;?></q></h3>
			<p><?php echo get_sub_field('name') ;?></p>
		</div>
	</div>


  <?php endwhile; ?>

</div>

<?php endif; ?>

</div>


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>