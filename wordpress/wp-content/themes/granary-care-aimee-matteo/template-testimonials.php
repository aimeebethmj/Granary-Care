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

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $slug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field(banner_message);?></h2>
        </div>
    </div>
</div>

<!-- INTRO PARAGRAPH IN SPEECH BUBBLE -->
<div class="full-width content-area">
	<div class="row">
		<div class="large-12 medium-12 columns">
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

  ?>


	<div class="row">
		<div class="large-9 medium-9 small-10 small-centered columns testimonial">
			<h4><i><q><?php echo get_sub_field('testimonial') ;?></i></q></h4>
			<p><?php echo get_sub_field('name') ;?></p>
		</div>
	</div>


  <?php endwhile; ?>

</div>

<?php endif; ?>


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>