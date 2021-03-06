<?php
/*
Template Name: Service Page
*/
get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $image = get_field('image');
    $extraInfo = get_field('extra_info');
    $buttonLink = get_field('button_link');
    $buttonLabel = get_field('button_label');
    $buttonLink2 = get_field('second_button_link');
    $buttonLabel2 = get_field('second_button_label');
    $bookingForm = get_field('booking_form');

    
    // showMeTheGoods($bookingForm);
  
?>

<div class="content">

<!-- BANNER STATEMENT -->
<div class="full-width content-area banner-statement <?php echo $categorySlug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field('banner_message'); ?></h2>
        </div>
    </div>
</div>

<!-- IMAGE -->
    <?php 

    $image = get_field('image');

    if( !empty($image) ):

    ?>

      <div class="row image-container">
        <div class="large-10 medium-12 small-centered  columns">
            <img src="<?php echo $image['url']; ?>">
        </div>
      </div>

    <?php endif; ?>




<!-- HEADING AND SUMMARY PARAGRAPHS -->
  <div class="full-width content-area page-summary3">
    <div class="row">
      <div class="large-10 medium-12 small-centered columns">      
        	<h2><?php echo get_the_title(); ?></h2>
      </div>
      <div class="large-8 medium-10 small-centered columns">

            <?php if( !empty($extraInfo) ):?>

              <!-- FOR AGES INFO BOX -->
              <div class="full-width content-area">
                <div class="row">
                  <div class="large-12 medium-12 small-12 columns">
                    <div class="extra-info-box">
                      <?php echo $extraInfo; ?>
                    </div>  
                  </div>
                </div>
              </div>

            <?php endif; ?>

        <?php the_content();?>
      </div>

      	


    </div>
  </div>

    <?php if( is_page('tipple-topples-creche' )): ?>



    <?php endif; ?>

<!-- ACTION BUTTON -->

    <div class="full-width content-area action-area <?php echo $categorySlug; ?>">
      <div class="row">
        <div class="buttons-container">

          <?php if( is_page('active-holiday-camps' )): ?>
          
          <a class="large round button main-button" href="<?php echo $bookingForm['url']; ?>"><?php echo $buttonLabel; ?></a>

          <?php else: ?>

          <a class="large round button main-button" href="<?php echo $buttonLink; ?>"><?php echo $buttonLabel; ?></a>

          <?php endif; ?>

        </div>
      </div>
    </div>


				<!--      ACTIVE HOLIDAY CAMPS ONLY      -->


<?php if( is_page('active-holiday-camps' )): ?>

<!-- ACTIVITIES PANELS -->
  <div class="row">
    <div class="large-10 medium-12 small-centered columns">
  	   <h2><?php echo get_field('activities_section_title'); ?></h2>
    </div>

    <div class="large-10 medium-12 small-centered columns">


        <?php if( have_rows('activities') ): ?>

          <?php 

            $currentRow = 1; 
            $totalRows = count(get_field('activities'));


            while( have_rows('activities') ): the_row();

            // Vars
            $image      = get_sub_field('panel_image');
            $panelTitle = get_sub_field('panel_title');
            $blurb      = get_sub_field('blurb');
            $createdBy  = get_sub_field('created_by');

            
            $classes = '';
            if ($currentRow == $totalRows) $classes .= 'last ';
            if ($currentRow%2 == 1) $classes .= 'odd ';
            if ($currentRow%2 == 0) $classes .= 'even '; 
                
          ?>

              <div class="large-6 medium-6 columns activity-business-panel <?=$classes?>">
                  <div class="button-image" >
                    <img src="<?php echo $image['url']; ?>" title="<?php echo $createdBy; ?>">
                  </div>
                  <div class="business-panel-description">
                  	<h3><?php echo $panelTitle; ?></h3>
                    <?php echo $blurb; ?>
                  </div>
              </div>


         <?php $currentRow++; endwhile; ?>

        <?php endif; ?>
              

      </div>
  </div>




<!-- SECOND SECTION: "AND MUCH MORE" PARAGRAPH -->
  <div class="row last-blurb">
    <div class="large-10 medium-10 small-centered columns">      
	    <?php echo get_field('second_section'); ?>   
    </div>
  </div>

<div class="full-width content-area action-area <?php echo $categorySlug; ?>">
  <div class="row">
    <div class="buttons-container">
      <?php if( is_page('active-holiday-camps' )): ?>        
       <a class="large round button main-button" href="<?php echo $bookingForm['url']; ?>"><?php echo $buttonLabel; ?></a> 
      <?php else: ?>
        <a class="large round button main-button" href="<?php echo $buttonLink; ?>"><?php echo $buttonLabel; ?></a>
      <?php endif; ?>
      <a class="large round button firstbutton" href="<?php echo $buttonLink2; ?>"><?php echo $buttonLabel2; ?></a>
    </div>
  </div>
</div>

<?php endif; ?>



<?php 
$accreditations = get_field('accreditations');

if( !empty($accreditations) ):

?>
<!-- ACCREDITATIONS -->
<hr>

<div class="full-width content-area accreditations-container">
  <div class="row">

    
    <?php if( have_rows('accreditations') ): ?>

    <?php while( have_rows('accreditations') ): the_row();

      $logo = get_sub_field('logo');
      $logoLink = get_sub_field('logo_link');

    ?>

      <div class="large-4 medium-6 small-6 logos columns">
        <a href="<?php echo $logoLink; ?>"><img src="<?php echo $logo['url']; ?>"></a>
      </div>
    

    <?php endwhile; ?>

  <?php endif; ?>

  </div>
</div>

<?php endif; ?>



</div>












<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>