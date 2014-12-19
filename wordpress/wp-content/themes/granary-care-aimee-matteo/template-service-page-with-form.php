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


    // echo '<pre>';
    // // print_r(get_the_category());
    // print_r($category);
    // echo '</pre>';

?>

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
<div class="full-width content-area page-summary3">
  <div class="row">
    <div class="large-12 medium-12 columns">      
        <h2><?php echo get_the_title(); ?></h2>
        <?php the_content();?> 
    </div>
  </div>
</div>

<!-- FORM -->

<form class="form-container" enctype="multipart/form-data">
  <div class="row">
    <div class="small-8 small-centered columns">

      <div class="row">
        <div class="small-3 columns">
          <label for="firstName" class="inline">First Name</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="firstName" placeholder="First name" name="firstName">
        </div>
      </div>

        
      <div class="row">
        <div class="small-3 columns">
          <label for="lastName" class="inline">Last name</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="lastName" placeholder="" name="lastName">
        </div>
      </div>

      <div class="row">
        <div class="small-3 columns">
          <label for="email" class="inline">Email</label>
        </div>
        <div class="small-9 columns">
          <input type="email" id="email" placeholder="youremail@example.com" name="email">
        </div>
      </div>

      <div class="row">
        <div class="small-3 columns">
          <label for="number" class="inline">Contact Number</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="number" placeholder="" name="number">
        </div>
      </div>


      <div class="row">
        <div class="small-3 columns">
          <label for="position" class="inline">Position Applying For</label>
        </div>
        <div class="small-9 columns">
            <select>
              <option id="position" name="position" value="husker">Husker</option>
              <option id="position" name="position" value="starbuck">Starbuck</option>
              <option id="position" name="position" value="hotdog">Hot Dog</option>
              <option id="position" name="position" value="apollo">Apollo</option>
            </select>
        </div>
      </div>

      <div class="row">
        <div class="small-3 columns">
          <label for="renumeration" class="inline">Renumeration</label>
        </div>
        <div class="small-9 columns">
            <select>
              <option value="husker" id="renumeration" name="renumeration">Paid employment only</option>
              <option value="starbuck" id="renumeration" name="renumeration">Voluntary role only</option>
              <option value="hotdog" id="renumeration" name="renumeration">Paid and voluntary</option>
            </select>
        </div>
      </div>

      <div class="row">
        <div class="small-3 columns">
          <label for="transportation" class="inline">Driver</label>
        </div>
        <div class="small-9 columns">
            <input type="radio" name="transportation" value="Driver" id="Driver"><label for="Driver" class="inline">Driver</label>
            <input type="radio" name="transportation" value="Non-Driver" id="nonDriver"><label for="nonDriver" class="inline">Non-Driver</label>
        </div>
      </div>

      <div class="row">
        <div class="small-3 columns">
            <label for="moreInfo" class="inline">Additional Information</label>
        </div>
        <div class="small-9 columns">
            <textarea id="moreInfo" placeholder="" name="moreInfo"></textarea>
        </div>
      </div>

    <div class="row">
        <div class="small-3 columns">
            <label id="uploadCV">Upload your CV</label>
        </div> 
        <div class="small-9 columns"> 
            <input type="file" id="uploadCV" name="uploadCV"/>
        </div> 
    </div>

    <div class="row">
        <div class="small-3 columns">
            <label id="uploadCerts">Additional certificates</label>
        </div> 
        <div class="small-9 columns"> 
            <input type="file" id="uploadCerts" name="uploadCerts"/>
        </div> 
    </div>

    <div class="row">
        <div class="large-12 columns action-area">
            <div class="buttons-container">
                <button class="large success round button" type="submit">Send your application!</button>
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