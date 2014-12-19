<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); /* Start loop */ ?>



<!-- COMPANY SUMMARY -->
<div class="full-width content-area page-summary1">
    <div class="row">
        <div class="large-10 large-centered columns">
        	<?php the_content(); ?>
        </div>
    </div>
</div>



















<?php endwhile; // End the loop ?>	


<?php get_footer(); ?>