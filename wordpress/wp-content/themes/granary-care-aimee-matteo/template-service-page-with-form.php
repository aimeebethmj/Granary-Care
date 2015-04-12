<?php
/*
Template Name: Page with form
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

    $categories = get_the_category(); // returns all categories assigned to a page/post as an Array
    $category = $categories[0]; // let's grab the first category in the Array (the element at index 0)
    $slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)
    $image = get_field('image');
    $mainButtonLink = get_field('main_action_button');
    $mainButtonLabel = get_field('main_action_button_label');
    $formHeading = get_field('form_heading');
    $main_blurb = get_field('main_blurb');


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
            <h2><?php echo get_field('banner_message'); ?></h2>
        </div>
    </div>
</div>

<!-- IMAGE -->
<div class="full-width content-area image-background">
  <div class="row">
    <div class="large-12 medium-12 small-12 columns">
      <div class="image-container">
        <img src="<?php echo $image['url']; ?>">
      </div>
    </div>
  </div>
</div>

<!-- HEADING AND SUMMARY PARAGRAPHS -->
  <div class="row">
    <div class="large-12 medium-12 columns">      
        <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="large-8 medium-10 small-centered columns">
        <?php echo $main_blurb;?>
        <div class="heart-mark-yellow"></div>
    </div>
  </div>

<!--  ACTION BUTTON -->
    <div class="row">
        <div class="large-12 columns action-area <?php echo $slug; ?>">
            <div class="buttons-container">
                <a class="large round button firstbutton" href="<?php echo $mainButtonLink; ?>"><?php echo $mainButtonLabel; ?></a>
            </div>
        </div>
    </div>

</div>

<!-- FORM -->

<div class="form-container">
  <div class="row">
    <div class="large-8 medium-8 small-11 small-centered columns">
      <h2><?php echo $formHeading ?></h2>

      <?php the_content();?>

<!--       <div class="row">
          <label for="firstName" class="inline">First Name
            <input type="text" id="firstName" placeholder="First name" name="firstName">
          </label>
      </div>

        
      <div class="row">
          <label for="lastName" class="inline">Last name
            <input type="text" id="lastName" placeholder="" name="lastName">
          </label>
      </div>

      <div class="row">
          <label for="email" class="inline">Email
            <input type="email" id="email" placeholder="youremail@example.com" name="email">
          </label>
      </div>

      <div class="row">
          <label for="number" class="inline">Contact Number
            <input type="text" id="number" placeholder="" name="number">
          </label>
      </div>


      <div class="row">
          <label for="position" class="inline">Position Applying For
            <select>
              <option id="position" name="position" value="husker">Husker</option>
              <option id="position" name="position" value="starbuck">Starbuck</option>
              <option id="position" name="position" value="hotdog">Hot Dog</option>
              <option id="position" name="position" value="apollo">Apollo</option>
            </select>
          </label>
      </div>

      <div class="row">
          <label for="renumeration" class="inline">Renumeration
            <select>
              <option value="husker" id="renumeration" name="renumeration">Paid employment only</option>
              <option value="starbuck" id="renumeration" name="renumeration">Voluntary role only</option>
              <option value="hotdog" id="renumeration" name="renumeration">Paid and voluntary</option>
            </select>
          </label>
      </div>

      <div class="row">
          <label for="transportation" class="inline">Driver:
            <input type="radio" name="transportation" value="Driver" id="Driver"><label for="Driver" class="inline">Driver</label>
            <input type="radio" name="transportation" value="Non-Driver" id="nonDriver"><label for="nonDriver" class="inline">Non-Driver</label>
          </label>
      </div>

      <div class="row">
            <label for="moreInfo" class="inline">Additional Information
              <textarea id="moreInfo" placeholder="" name="moreInfo"></textarea>
            </label>
      </div>

    <div class="row">
            <label id="uploadCV">Upload your CV
              <input type="file" id="uploadCV" name="uploadCV"/>
            </label>
    </div>

    <div class="row">
            <label id="uploadCerts">Additional certificates
              <input type="file" id="uploadCerts" name="uploadCerts"/>
            </label>
    </div>

    <div class="row">
        <div class="large-12 columns action-area <?php echo $slug; ?>">
            <div class="buttons-container">
                <button class="large round button main-button" type="submit">Send your application!</button>
            </div>
        </div>
    </div> -->

    </div>
  </div>
</div>








<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>