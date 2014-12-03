<?php
/*
Template Name: Business Area Home Page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $bannerbackground = get_field('banner_background_image'); // get_field(), not get_sub_field() !!!1


    // ChromePhp::log($bannerbackground);

?>

<!-- CONTENT AREA -->

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php get_category_by_slug( $slug ); ?>" style="background-image:url('<?php echo $bannerbackground['url']; ?>');">
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field(business_area_homepage_banner_message);?></h2>
        </div>
    </div>
</div>



<!-- SIDEBAR AND MAIN CONTENT -->
<div class="row page-sidenav-content">
  <div class="large-9 medium-9 push-3 columns">
    <h2><?php echo get_the_title(); ?></h2>
    <?php the_content();?>
    <!-- <p class="about-paragraphs">We're proud to say we are experts at delievering <b>great out-of-school provision</b> to primary age children.</p>
    <p class="about-paragraphs">Your child's <b>happiness, wellbeing and safety</b> are paramount which is why we make sure our staff are fully vetted, trained and understand safeguarding requirements that are vital when caring for children.</p>
    <p class="about-paragraphs">With an emphasis on free-play, we encourage children to <b>learn through recreational activities</b> in a fun and stimulating environment.</p>
    <p class="about-paragraphs">We understand that <b>every child is different</b>, making sure to recognise their individual personalities through a variety of age-specific activities.</p>
    <p class="about-paragraphs">Read more about our services by clicking on the buttons below:</p> -->
    
  </div>

  <div class="large-3 medium-3 pull-9 columns">
    <ul class="side-nav">

    	<?php if( have_rows('side_navigation') ): ?>

		  <?php while( have_rows('side_navigation') ): the_row();

		// Vars
		    $tablink = get_sub_field('tab_link');
		    $tablabel = get_sub_field('tab_label');

		  ?>

		      <li><a href="<?php echo $tablink; ?>"><?php echo $tablabel; ?></a></li>


		<!--       <li><a href="<?php echo site_url(); ?>/afterschool-and-breakfast-clubs">Afterschool and Breakfast Clubs</a></li>
		      <li><a href="<?php echo site_url(); ?>/tipple-topples-creche">Tipples Topples Creche</a></li>
		      <li><a href="<?php echo site_url(); ?>/active-holiday-camps">Active Holiday Camps</a></li>
		      <li><a href="<?php echo site_url(); ?>/work-for-granary-kids">Working with Granary Care</a></li>
		      <li><a href="<?php echo site_url(); ?>/book-a-place">Book a place</a></li>
		      <li><a href="<?php echo site_url(); ?>/granary-kids-useful-info">Useful Info</a></li>
		      <li><a href="<?php echo site_url(); ?>/testimonials">Testimonials</a></li> -->

		  <?php endwhile; ?>

		<?php endif; ?>

    </ul>
  </div>
</div>

<!-- BUSINESS AREAS PANEL -->


<div class="full-width content-area page-summary2">
  <div class="row">

<?php if( have_rows('business_panels') ): ?>

  <?php while( have_rows('business_panels') ): the_row();

// Vars
    $image = get_sub_field('business_panel_image');
    $paneltitle = get_sub_field('panel_title');
    $buttonlink = get_sub_field('button_link');
    $buttonlabel = get_sub_field('button_label');

  ?>

      <div class="large-4 columns business-panel">
          <div class="business-panel-image">
            <img src="<?php echo $image['url']; ?>"/>
          </div>
          <div class="business-panel-title">
            <h4><?php echo $paneltitle; ?></h4>
          </div>
          <a class="small radius button" href="<?php echo $buttonlink; ?>"><?php echo $buttonlabel; ?></a>
      </div>

  <?php endwhile; ?>

<?php endif; ?>

    </div>
</div>


<!-- TESTIMONIAL -->
<div class="full-width content-area testimonial-large">
  <div class="row">
    <div class="large-12 columns">
      <a href="#"><h4><i><q><?php echo get_field(business_area_homepage_testimonial);?></i></q></h4></a>
    </div>
  </div>
</div>







<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>