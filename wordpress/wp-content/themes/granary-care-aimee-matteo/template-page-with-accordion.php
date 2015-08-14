<?php
/*
Template Name: Accordion page
*/
get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- CONTENT AREA -->
<div class="content">

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $categorySlug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field('banner_message');?></h2>
        </div>
    </div>
</div>

<!-- NANNY TYPE TABS -->
  <div class="row">
    <div class="large-12 medium-12 columns">      
        <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="large-8 medium-10 small-centered columns">
        <?php the_content();?>
        <div class="heart-mark-yellow"></div>
    </div>
  </div>




<!-- NEW ACCORDION -->
  <div class="row accordion-container">
    <div class="large-8 medium-10 small-centered columns">
      <dl class="accordion" data-accordion>

        <?php if( have_rows('accordion') ): ?>

          <?php 

            $currentRowIndex = 1;
            $letter = 'a';

            while( have_rows('accordion') ): the_row();

            // Vars
            $title = get_sub_field('title');
            $explanation = get_sub_field('explanation');
            
            


          ?>
<!-- <?php if($currentRowIndex==1){echo 'active';}?> -->
        <dd class="accordion-navigation ">
          <a href="#panel<?php echo $currentRowIndex; ?>"><?php echo $title ?></a>
          <div id="panel<?php echo $currentRowIndex; ?>" class="content <?php if ($currentRowIndex==1) { echo 'active'; } ?>">
            <?php echo $explanation; ?>
          </div>
        </dd>

        <?php
            $currentRowIndex++;
            // $letter++;
            
            endwhile;
        ?>

        <?php endif; ?>


<!--         <li class="accordion-navigation">
          <a href="#panel2a">Accordion 2</a>
          <div id="panel2a" class="content">
            Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
        </li>
        <li class="accordion-navigation">
          <a href="#panel3a">Accordion 3</a>
          <div id="panel3a" class="content">
            Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
        </li> -->
      </dl>
    </div>
  </div>


<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area <?php echo $categorySlug; ?>">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large round button firstbutton" href="<?php echo get_field('action_button_1'); ?>"><?php echo get_field('action_button_1_label'); ?></a>
      <a class="large round button secondbutton" href="<?php echo get_field('action_button_2'); ?>"><?php echo get_field('action_button_2_label'); ?></a>
    </div>
  </div>
</div>



</div>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>