<?php 

/*
Template Name: Event Espresso Event Registration
*/

get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;
// showMeTheGoods($categorySlug);

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="content">

	<!-- MAIN CONTENT -->
	<div class="row">
		<!-- this will call the template in uploads/espresso/templates/registration_page_display.php -->
		<?php the_content(); ?>
	</div>

</div>


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>