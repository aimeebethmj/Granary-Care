<?php
/*
Template Name: Contact Page
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




<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $slug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field('banner_message');?></h2>
        </div>
    </div>
</div>

<!-- CONTENT -->
<div class="row">
    <div class="large-10 medium-10 small-centered columns">      
        <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="large-8 medium-8 small-centered columns">
        <?php the_content();?>
        
    </div>
  </div>


 <div class="row">
 	<div class="large-12 medium-12 columns">


 		<?php if( have_rows('business_emails') ): ?>

  		<?php while( have_rows('business_emails') ): the_row();

	    // Vars
	    // $image = get_sub_field('business_panel_image');
	    $emailHandle = get_sub_field('email');
	    $cssClass = get_sub_field('css_class');

	    ?>

	 		<div class="large-7 medium-7 small-centered columns email-container <?php echo $cssClass ?>">
	 			<a href="mailto:<?php echo $emailHandle ?>@granarycare.com"><h3><b><?php echo $emailHandle ?></b>@granarycare.com</h3></a>
	 		</div>

 		<?php endwhile; ?>

		<?php endif; ?>


 	</div>
 </div>

 <!-- FORM -->

 <?php 

 $formHeading = get_field('form_heading');

 ?>

<form class="form-container contact" enctype="multipart/form-data">
  <div class="row">
    <div class="small-6 small-centered columns">
    	<h2><?php echo $formHeading ?></h2>

      <div class="row">
          <label>Name
          	<input type="text" id="Name" placeholder="Your name" name="Name">
          </label>
      </div>

      <div class="row">
          <label for="email" class="inline">Email
          	<input type="email" id="email" placeholder="youremail@example.com" name="email">
          </label>
      </div>


      <div class="row">
          <label for="position" class="inline">Which area do you want to know about?
            <select>
              <option id="business-area" name="business-area" value="Kids Clubs">Kids Clubs</option>
              <option id="business-area" name="business-area" value="Nanny Agency">Nanny Agency</option>
              <option id="business-area" name="business-area" value="Mother &amp; Baby">Mother &amp; Baby</option>
            </select>
          </label>
      </div>

      <div class="row">
            <label for="moreInfo" class="inline">Your Message
            	<textarea id="moreInfo" placeholder="" name="moreInfo" style="height: 10rem"></textarea>
            </label>
      </div>

<!-- BUTTON SEND -->
    <div class="row">
        <div class="large-12 columns action-area <?php echo $slug; ?>">
            <div class="buttons-container">
                <button class="large round button main-button" type="submit">Send</button>
            </div>
        </div>
    </div>


 	</div>
  </div>
</form>









<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>