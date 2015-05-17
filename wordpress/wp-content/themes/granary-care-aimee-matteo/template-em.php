<?php 

/*
Template Name: Events Manager
*/

get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;

consoleLog('categorySlug ' . $categorySlug);
// consoleLog($_SESSION);

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="content">

	<!-- MAIN CONTENT -->
	<div class="row">
		<?php the_content(); ?>
	</div>

</div>


<?php endwhile; ?>
<?php else: ?>
	<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>