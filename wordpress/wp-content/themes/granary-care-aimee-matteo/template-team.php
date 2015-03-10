<?php
/*
Template Name: Team Page
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)

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


<!-- STAFF PROFILES GRANARY CARE -->

  <div class="row">
    <div class="large-10 medium-10 small-centered columns">
      <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="large-8 medium-8 small-centered columns">
      <?php the_content(); ?>   
    </div>
  </div>

 




  <?php if( have_rows('team_profiles') ): ?>

  <?php while( have_rows('team_profiles') ): the_row(); 

  // Vars
    $image = get_sub_field('team_staff_profile_picture');
    $staffname = get_sub_field('name_of_staff_member');
    $jobtitle = get_sub_field('job_title');
    $jobroleinfo = get_sub_field('job_role_info');
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
        <div class="large-10 medium-10 small-centered columns">
          <div class="large-4 medium-4 small-12 columns">
            <img class="staff-profile-images" src="<?php echo $image['url']; ?>"/>      
          </div>
          <div class="large-7 medium-7 small-12 columns staffinfo">
            <h3><?php echo $staffname; ?></h3>
            <h4><?php echo $jobtitle; ?></h4>
            <p><?php echo $jobroleinfo; ?></p>
            <p><?php echo $aboutstaff; ?></p>
            <a href="mailto:<?php echo $email ?>"><?php echo $email; ?></a><br />
            <a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin fa-2x"></i></a>
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