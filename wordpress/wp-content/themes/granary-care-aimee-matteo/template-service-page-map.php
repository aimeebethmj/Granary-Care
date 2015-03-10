<?php
/*
Template Name: Service Page with map
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)
    
    $action1buttonlink = get_sub_field('action_button_1');
    $action1buttonlabel = get_sub_field('action_button_1_label');
    // echo '<pre>';
    // // print_r(get_the_category());
    // print_r($category);
    // echo '</pre>';

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

<!-- SIDEBAR AND MAIN CONTENT -->
  <div class="row">
    <div class="large-10 medium-10 small-centered columns">
      <div id="map_canvas"></div>
    </div>
  </div>

      <!-- HEADING AND SUMMARY PARAGRAPHS -->

<div class="row">
  <div class="large-10 medium-10 small-centered columns">
    <h2><?php echo get_the_title(); ?></h2>
  </div>
  <div class="large-8 medium-8 small-centered columns">
    <?php the_content();?>
  </div>
</div>

<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area <?php echo $slug; ?>">
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

	  	<?php if( have_rows('clubs') ): ?>

		  	<?php while( have_rows('clubs') ): the_row();

		    	// Vars
		    	$image = 			get_sub_field('image');
		    	$school_name = 		get_sub_field('school_name');
		    	$location = 		get_sub_field('location');
		    	$sessions = 		get_sub_field('sessions');
		    	$opening_times = 	get_sub_field('opening_times');
		    	$play_leader = 		get_sub_field('play_leader');
		    	$club_telephone = 	get_sub_field('club_telephone');
		    	$latitude = 		get_sub_field('latitude');
		    	$longitude = 		get_sub_field('longitude');
		    	$schoolLink =		get_sub_field('school_page_link');
		    	$club_button_label= get_sub_field('club_button_label');
		    	$cssClass = 		get_sub_field('css_class');
		    	
	    		$action2buttonlink = get_field('action_button_2');
	    		$action2buttonlabel = get_field('action_button_2_label');



		  	?>

<!-- 		     <div class="large-5 medium-5 columns schoolclubsinfo">
		      	<img src="<?php echo $image['url']; ?>">
		        <h3><?php echo $school_name; ?></h3>
		        <p><b>Location:</b></p>          
		        <p><?php echo $location; ?></p>
		        <p><b>Sessions:</b></p>
		        <p>Breakfast and Afterschool club</p>
		        <p><b>Opening times:</b></p>
		        <p>8:00 - 8:50</p>
		        <p>3:25 - 6:00</p>
		        <p><b>Play Leader:</b></p>
		        <p><?php echo $play_leader; ?></p>
		        <p><b>Club Tel:</b></p>
		        <p><a href="tel:<?php echo $club_telephone; ?>"><?php echo $club_telephone; ?></a></p>
		        <a class="small radius button" href="#">Book a place</a><a class="small radius button" href="#">Register</a>
		    </div> -->

		    <div class="large-4 columns">
		    	<a href="<?php echo $schoolLink; ?>"><h2><?php echo $school_name; ?></h2></a>
		    </div>
		    <div class="large-6 end columns <?php echo $cssClass; ?>" id="business-blurbs">
		    	<p><b>Location:</b></p>          
		        <p><?php echo $location; ?></p>
		        <p><b>Sessions:</b></p>
		        <p><?php echo $sessions ?></p>
		        <a href="<?php echo $schoolLink; ?>"><?php echo $club_button_label; ?></a>
		        <hr/>
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

		  	<?php endwhile; ?>

		<?php endif; ?>

	  </div>    
	</div>

<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area <?php echo $slug; ?>">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large round button firstbutton" href="<?php echo $action2buttonlink; ?>"><?php echo $action2buttonlabel; ?></a>
    </div>
  </div>
</div>


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

      <div class="large-3 medium-3 small-6 logos columns">
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
      	zoom: 9,
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