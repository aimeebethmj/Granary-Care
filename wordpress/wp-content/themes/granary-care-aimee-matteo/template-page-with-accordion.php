<?php
/*
Template Name: Accordion page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)

    // echo '<pre>';
    // // print_r(get_the_category());
    // print_r($category);
    // echo '</pre>';

?>

<!-- CONTENT AREA -->

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $slug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field('banner_message');?></h2>
        </div>
    </div>
</div>

<!-- NANNY TYPE TABS -->
<div class="full-width content-area page-summary3">
  <div class="row">
    <div class="large-12 medium12 columns">
      <h2><?php echo get_the_title(); ?></h2>
      <?php the_content();?>
    </div>
  </div>
</div>


<!-- NANNIES TABS -->
<div class="full-width content-area page-summary1">
  <div class="row">
    <div class="large-12 medium12 columns">      

      <ul class="tabs vertical" data-tab role="tablist">

        <?php if( have_rows('accordion') ): ?>

          <?php 

            $currentRowIndex = 1;

            while( have_rows('accordion') ): the_row();

            // Vars
            $title = get_sub_field('title');
            $explanation = get_sub_field('explanation');

          ?>

        <li class="tab-title <?php if($currentRowIndex==1){echo 'active';}?>" role="presentational" >
          <a href="#panel2-<?php echo $currentRowIndex; ?>" role="tab" tabindex="0" aria-selected="<?php if($currentRowIndex==1){echo 'true';} else{echo 'false';}?>" controls="panel2-<?php echo $currentRowIndex; ?>"><?php echo $title; ?></a>
        </li>

        <?php
            $currentRowIndex++;
            endwhile;
        ?>

        <?php endif; ?>

      </ul>

<!-- TAB DESCRIPTIONS -->
      <div class="tabs-content" id="tab-descriptions">

        <?php if( have_rows('accordion') ): ?>

          <?php 

            $currentRowIndex = 1;

            while( have_rows('accordion') ): the_row();

            // Vars
            $title = get_sub_field('title');
            $explanation = get_sub_field('explanation');

          ?>

        <section role="tabpanel" aria-hidden="false" class="content <?php if ($currentRowIndex==1) { echo 'active'; } ?>" id="panel2-<?php echo $currentRowIndex; ?>">
            <?php echo $explanation; ?>
        </section>

        <?php
            $currentRowIndex++;
            endwhile;
        ?>

        <?php endif; ?>

      </div>

    </div>
  </div>
</div>

<!-- ACTION BUTTONS -->
<div class="full-width content-area action-area">
  <div class="row">
    <div class="large-12 medium-12 columns buttons-container">
      <a class="large success round button" href="<?php echo get_field('action_button_1'); ?>"><?php echo get_field('action_button_1_label'); ?></a><a class="large success round button" href="<?php get_field('action_button_2'); ?>"><?php echo get_field('action_button_2_label'); ?></a>
    </div>
  </div>
</div>





<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>