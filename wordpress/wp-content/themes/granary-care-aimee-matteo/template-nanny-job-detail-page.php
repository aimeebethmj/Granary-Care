<?php
/*
Template Name: Nanny Job Detail Page
*/
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); 

?>

<div class="content">
	<div class="row">
  		<div class="large-10 medium-12 small-centered columns">

<?php

/*
*  get all custom fields and dump for testing
*/

$fields = get_fields();
// var_dump( $fields ); 

if( $fields )
{	
	// for each object inside $fields we define the content as $value and its key as $field_name
	foreach( $fields as $field_name => $value )
	{
		// get_field_object( $field_name, $post_id, $options )
		// - $value has already been loaded for us, no point to load it again in the get_field_object function
		$field = get_field_object($field_name, false, array('load_value' => false));		
		// showMeTheGoods($field);
	?>	
		<div class="row">
			<div class="large-6 medium-6 small-12 columns">
				<?php echo $field['label']; ?>
			</div>
			<div class="large-6 medium-6 small-12 columns">
				<?php echo $value; ?>
			</div>
		</div>
	<?php

	}
}

?>


</div>
</div>
</div>


<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>