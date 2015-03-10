<?php
/*
Template Name: School Club Page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)

    /*echo '<pre>';
    print_r(get_the_category());
    print_r($category);
    echo '</pre>';*/

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

<!-- IMAGE -->
<!--     <?php 

    $image = get_field('image');

    if( !empty($image) ):

    ?>

      <div class="row">
        <div class="large-10 medium-10 small-centered columns">
          <div class="image-container">
            <img src="<?php echo $image['url']; ?>">
          </div>
        </div>
      </div>

    <?php endif; ?> -->

<?php

    	// Vars
    	
    	$latitude = 		get_field('latitude');
    	$longitude = 		get_field('longitude');
    	$school_name = 		get_field('school_name');
		// $location = 		get_field('location');

  	?>

<!-- Map -->
<div class="row">
	<div class="large-10 medium-10 small-centered club-location-area columns">

		<script type="text/javascript">
	  		var clubs = [] // this creates a new array, before the loop (within the loop we'll populate that array)
	  	</script>

		<div id="map_canvas">
		</div>
		
	</div>
</div>

		    <script type="text/javascript">

		    	// output some data about the club for Google Maps
		    	// club is a JS object
		    	var club = 
		    	{
		    		lat: <?php echo $latitude; ?>,
		    		lng: <?php echo $longitude; ?>,
		    		location: '<?php echo $location; ?>',
		    		name: '<?php echo $school_name; ?>'
		    	}

		    	clubs.push(club) // this will add the club object to our clubs array

		    </script>


<!-- MAIN CONTENT -->
<div class="row">
  <div class="large-10 medium-10 small-centered columns">
    <h1><?php echo get_the_title(); ?></h1>
  </div>
  <div class="large-8 medium-8 small-centered columns">
    <?php the_content();?>
  </div>
</div>


	<?php

    	// Vars
    	
    	
    	$location = 		get_field('location');
    	$sessions = 		get_field('sessions');
    	$clubActivities =	get_field('activities');
    	$play_leader = 		get_field('play_leader');
    	$club_telephone = 	get_field('club_telephone');
    	$latitude = 		get_field('latitude');
    	$longitude = 		get_field('longitude');

  	?>



<div class="clubs-panel">
	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-4 medium-4 columns">
				<h2>Location:</h2>
			</div>
			<div class="large-6 medium-6 columns" id="business-blurbs">
				<p><b><?php echo $location; ?></b></p>
			</div>
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-4 medium-4 columns">
				<h2>Sessions:</h2>
			</div>
			<div class="large-6 medium-6 columns" id="business-blurbs">
			
				
				<?php if( have_rows('sessions') ): ?>

		  		<?php while( have_rows('sessions') ): the_row();

	  		    	$club =				get_sub_field('type_of_club');
					$times = 			get_sub_field('times');
					$price =			get_sub_field('price');

		  		?>
			
				<p><b><?php echo $club; ?></b></p>
				<p><b><?php echo $times; ?></b></p>
				<p><b><?php echo $price; ?></b></p>


				<?php endwhile; ?>

				<?php endif; ?>
			</div>
			
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-4 medium-4 columns">
				<h2>What we do here:</h2>
			</div>
			<div class="large-6 medium-6 columns" id="business-blurbs">
				<p><?php echo $clubActivities; ?></p>
			</div>
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-4 medium-4 columns">
				<h2>Play Leader:</h2>
			</div>
			<div class="large-6 medium-6 columns" id="business-blurbs">
				<p><?php echo $play_leader; ?></p>
			</div>
			<hr>
		</div>
	</div>

	<div class="row">
		<div class="large-8 medium-8 small-centered columns">
			<div class="large-4 medium-4 columns">
				<h2>Club Tel:</h2>
			</div>
			<div class="large-6 medium-6 columns" id="business-blurbs">
				<a href="tel:<?php echo $club_telephone; ?>" ><h3><?php echo $club_telephone; ?></h3></a>
			</div>
			<hr>
		</div>
	</div>
</div>

<?php 

	$actionButtonLink =		get_field('action_button_link');
	$actionButtonLabel =	get_field('action_button_label');

?>
<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area <?php echo $slug; ?>">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large round button firstbutton" href="<?php echo $actionButtonLink; ?>"><?php echo $actionButtonLabel; ?></a>
    </div>
  </div>
</div>

<!-- TESTIMONIAL -->
<div class="full-width content-area testimonial-large">
  <div class="row">
    <div class="large-10 medium-10 small-centered columns">
      <a href="<?php echo site_url(); ?>/testimonials">
        <h3><i><q><?php echo get_field('testimonial');?></i></q></h3>
      </a>
    </div>
  </div>
</div>







<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>

  function initialize() 
  {
    var mapCanvas = document.getElementById('map_canvas');

    var mapOptions = 
    {    
    	center: new google.maps.LatLng(51.535183, -0.448138),
      	zoom: 13,
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
	      '<h4>' + club.name + '</h4> ' +
	      '<p>' + club.location + '</p>' +
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