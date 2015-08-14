<?php
/*
Template Name: Service Page with map
*/
get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	
	$action1buttonlink = get_sub_field('action_button_1');
	$action1buttonlabel = get_sub_field('action_button_1_label');

?>

<div class="content">

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $categorySlug; ?>" >
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<h2><?php echo get_field('banner_message');?></h2>
		</div>
	</div>
</div>

<!-- SIDEBAR AND MAIN CONTENT -->
  <div class="row">
	<div class="large-10 medium-12 small-centered columns">
	  <div id="map_canvas"></div>
	</div>
  </div>

	  <!-- HEADING AND SUMMARY PARAGRAPHS -->

<div class="row">
  <div class="large-10 medium-12 small-centered columns">
	<h2><?php echo get_the_title(); ?></h2>
  </div>
  <div class="large-8 medium-10 small-centered columns">
	<?php the_content();?>
  </div>
</div>

<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area <?php echo $categorySlug; ?>">
  <div class="row">
	<div class="large-12 medium-12 columns buttons-container">
	  <a class="large round button main-button" href="<?php echo get_field('action_button_1'); ?>"><?php echo get_field('action_button_1_label'); ?></a>
	</div>
  </div>
</div>

<!-- CLUBS INFO -->
	 
  <div class="row">
<!--     <div class="large-12 medium-12 columns">
	  <h2><?php echo get_field('clubs_title'); ?></h2>
	</div> -->
  </div>

	<div class="business-panel">
	  <div class="row">

		<script type="text/javascript">
			var clubs = [] // this creates a new array, before the loop (within the loop we'll populate that array)
		</script>

		
		<?php
			// get all the pages using the school club template
			$schools = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'meta_key' => '_wp_page_template', 'meta_value' => 'template-school-club-page.php', 'posts_per_page' => 200 ) );

			foreach($schools as $count => $school) // for each school within schools
			{
				
				$school_name = $school->post_title;
				$school_URL = get_page_link($school->ID);

				// get the custom fields for the current school
				$fields = get_fields($school->ID);

				$location = $fields['location'];
				$latitude = $fields['latitude'];
				$longitude = $fields['longitude'];

				$sessions = '';
				foreach($fields['sessions'] as $session)
				{
					$sessions .= $session['type_of_club'] . '<br>';
				}
				
				// showMeTheGoods($count % 3);

				$classes = ['yellow', 'lightblue', 'orange'];
				$cssClass = $classes[$count % 3];

				$button_labels = ['More about this club', 'Visit club page'];
				$club_button_label = $button_labels[ array_rand($button_labels) ];
				
		?>

			<div class="large-4 columns">
				<a href="<?php echo $school_URL; ?>"><h2><?php echo $school_name; ?></h2></a>
			</div>
			<div class="large-6 end columns <?php echo $cssClass; ?> business-blurbs">
				<p><b>Location:</b></p>          
				<p><?php echo $location; ?></p>
				<p><b>Sessions:</b></p>
				<p><?php echo $sessions ?></p>
				<a href="<?php echo $school_URL; ?>"><?php echo $club_button_label; ?></a>
				<hr/>
			</div>

			<script type="text/javascript">

				// output some data about the club for Google Maps
				// club is a JS object
				var club = 
				{
					lat: <?php echo $latitude; ?>,
					lng: <?php echo $longitude; ?>,
					url: '<?php echo $school_URL; ?>',
					name: '<?php echo $school_name; ?>'
				}

				clubs.push(club) // this will add the club object to our clubs array

			</script>

		<?php } // end foreach	?>

	  </div>    
	</div>

<!-- ACTION BUTTONS -->
<?php 

$action2buttonlink = get_field('action_button_2');
$action2buttonlabel = get_field('action_button_2_label');

if( !empty($action2buttonlabel) ):

?>

<div class="full-width content-area action-area <?php echo $categorySlug; ?>">
  <div class="row">
	<div class="large-12 medium-12 columns buttons-container">
	  <a class="large round button firstbutton" href="<?php echo $action2buttonlink; ?>"><?php echo $action2buttonlabel; ?></a>
	</div>
  </div>
</div>

<?php endif; ?>


<?php 
$accreditations = get_field('accreditations');

if( !empty($accreditations) ): 

?>

<!-- ACCREDITATIONS- NANNY AGENCY ONLY-->
<div class="full-width content-area accreditations-container">
  <div class="row">
	<div class="large-10 medium-10 small-centered columns">

	
	<?php if( have_rows('accreditations') ): ?>

	<?php while( have_rows('accreditations') ): the_row();

	  $logo = get_sub_field('logo');
	  $logoLink = get_sub_field('logo_link');

	?>

	  <div class="large-3 medium-6 small-6 logos columns">
		<a href="<?php echo $logoLink; ?>"><img src="<?php echo $logo['url']; ?>"></a>
	  </div>
	

	<?php endwhile; ?>

  <?php endif; ?>

	</div>
  </div>
</div>

<?php endif; ?>



<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>

  function initialize() 
  {
	var mapCanvas = document.getElementById('map_canvas');

	var mapOptions = 
	{    
		center: new google.maps.LatLng(51.535183, -0.448138),
		zoom: 10,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(mapCanvas, mapOptions);

	// for each club in the clubs array...
	// for (var i = 0; i < clubs.length; i++) 
	clubs.forEach(function(club)
	{
		// club = clubs[i]
		// console.log(club) 

		var latLng = new google.maps.LatLng(club.lat, club.lng);
	
		var marker = new google.maps.Marker(
		{
			position: latLng,
			map: map,
			title: club.name
		});

		var contentString = '<div class="map-info-window">'+
		  '<a href="' + club.url + '">' + club.name + '</a>' +
		  '</div>';

		// console.log(contentString)  

		var infoWindow = new google.maps.InfoWindow(
		{
			content: contentString
		});

		google.maps.event.addListener(marker, 'click', function() 
		{
			infoWindow.open(map, marker);
		});
	})
  }
  google.maps.event.addDomListener(window, 'load', initialize);

</script>

<script>
	
	$('div.schoolclubsinfo').on('click', function() 
	{
		$(this).toggleClass('show-description');
	});

</script>





</div>









<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>