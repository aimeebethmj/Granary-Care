<?php
/*
Template Name: Nanny Jobs Page
*/
get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); 

?>

<div class="content">

<div class="row">
	<div class="large-12 medium-12 small-centered columns">

<div class="large-10 medium-10 small-centered columns">
	<h1><?php echo get_the_title(); ?></h1>
	<?php the_content();?>
</div>

	<!-- <div class="large-8 medium-10 small-centered columns">
    	<?php the_content();?>
  	</div> -->

<?php 

// get all the pages using the nanny job detail template
$pages = get_posts( array( 'post_type' => 'page', 'meta_key' => '_wp_page_template', 'meta_value' => 'template-nanny-job-detail-page.php' ) );

$pagesLength = count($pages);
$pagesCount = 0;

foreach($pages as $page) // for each page within pages
{
	// showMeTheGoods($page);

	

	// get the custom fields for the current page
	$fields = get_fields($page->ID);

	if ($pagesCount == 0)
	{
		// spit out the thead and beginning of tbody
		?>
		<style>

		/* 801 break: large images for tablets full-wdith */
        @media (max-width:801px)
        {

		<?php

		$fieldCount = 1;		
		// loop through all the fields
		foreach( $fields as $field_name => $value )
		{

			$field = get_field_object($field_name, $page->ID, array('load_value' => false));		

			if ($field['required'] == 1)
			{
		?>		
				td:nth-of-type(<?php echo $fieldCount; ?>):before { content: "<?php echo $field['label']; ?>"; }
		
		<?php
				$fieldCount ++;

			}
		}			
		
		?>

		}
		</style>
		<table>
			<thead>
			<tr>

				<?php
				// loop through all the fields and display label as table heading
				foreach( $fields as $field_name => $value )
				{
					// get_field_object( $field_name, $post_id, $options )
					// - $value has already been loaded for us, no point to load it again in the get_field_object function
					$field = get_field_object($field_name, $page->ID, array('load_value' => false));		

					// showMeTheGoods($field);

					// only display fields that are required
					if ($field['required'] == 1)
					{

				?>



				<th><?php echo $field['label']; ?></th>
				
				<?php }} ?>

			</tr>
			</thead>
			<tbody>
		<?php
	}	


	// make a table row for the page content
	?>
		

			<tr onclick="document.location = '<?php echo get_page_link($page->ID); ?>';">

				

				<?php
				// loop through all the fields and display value as table body values
				foreach( $fields as $field_name => $value )
				{	
					// define $field again???
					$field = get_field_object($field_name, $page->ID, array('load_value' => false));


					if ($field['required'] == 1)
					{
				?>
				<td>
					<!-- <a href="<?php echo get_page_link($page->ID); ?>"> -->
						<?php echo $value; ?>
					<!-- </a> -->
				</td>

				<?php }} ?>
				
			</tr>
		
	<?php

	
	// increment the count as we loop through pages
	$pagesCount ++; 
	

	if ($pagesCount == $pagesLength)
	{
		// close tbody and table
		?>
			</tbody>
		</table>
		<?php
	}	
}

?>




<?php  endwhile; endif; ?>

</div>
</div>

</div>


<?php get_footer(); ?>