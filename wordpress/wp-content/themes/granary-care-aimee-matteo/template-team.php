<?php
/*
Template Name: Team Page
*/
get_header(); 

// summon the GLOBAL variable (assigned in header.php)
global $categorySlug;

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="content">

<!-- BANNER STATEMENT -->

<div class="full-width content-area banner-statement <?php echo $categorySlug; ?>" >
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <h2><?php echo get_field('banner_message');?></h2>
        </div>
    </div>
</div>


<!-- STAFF PROFILES GRANARY CARE -->

  <div class="row">
    <div class="large-10 medium-12 small-centered columns">
      <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="large-8 medium-10 small-centered columns">
      <?php the_content(); ?>   
    </div>
  </div>

 




  <?php if( have_rows('team_profiles') ): ?>

  <?php while( have_rows('team_profiles') ): the_row(); 

  // Vars
    $image = get_sub_field('team_staff_profile_picture');
    $staffname = get_sub_field('name_of_staff_member');
    $jobtitle = get_sub_field('job_title');
    $aboutstaff = get_sub_field('about_staff_member');
    $email = get_sub_field('email_address');
    $linkedin = get_sub_field('linkedin');

     // echo '<pre>';
    // // print_r(get_post());
    // print_r($linkedin);
    // echo '</pre>'; 

    ?>
    <div class="full-width content-area staff-profiles">
      <div class="row">
        <div class="large-10 medium-12 small-centered columns">
          <div class="large-4 medium-12 small-12 columns">
            <img class="staff-profile-images" src="<?php echo $image['url']; ?>"/>      
          </div>
          <div class="large-7 medium-12 small-12 columns staffinfo">
            <h3><?php echo $staffname; ?></h3>
            <h4><?php echo $jobtitle; ?></h4>
            <p><?php echo $aboutstaff; ?></p>
            <a href="mailto:<?php echo $email ?>"><?php echo $email; ?></a><br />

            <?php 
          if( !empty($linkedin) ):
          ?>
            <a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
          <?php endif;?>
          </div>
        </div>
      </div>
    </div>


  <?php endwhile; ?>

<?php endif; ?>

</div>



<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>