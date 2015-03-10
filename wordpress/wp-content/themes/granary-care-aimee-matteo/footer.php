<!-- </section>
<footer class="row">
	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
	<?php do_action('foundationPress_after_footer'); ?>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?> -->

	<!-- FOOTER AREA -->


	<div class="full-width footer-area">
    <div class="row">
      <div class="content">
      <div class="large-10 small-centered columns">
        <h2>We love to meet new people!</h2>
        <h3>Do you have any questions or want to talk about our Kids Clubs, Nanny Agency or Mother &amp; Baby Centre?</h3>
        <h3 class="call-us-today">Call us today! <a href="tel:<?php echo ot_get_option( 'telephone_number' ); ?>"><?php echo ot_get_option( 'telephone_number' ); ?></a></h3>
      </div>
      <div class="large-6 end columns">
        <div class="large-6 medium-6 columns">
          <ul class="footer-nav">
            <li><a href="<?php echo site_url(); ?>/about">About Us</a></li>
            <li><a href="<?php echo site_url(); ?>/granary-kids">Granary Kids</a></li>
            <li><a href="<?php echo site_url(); ?>/nanny-agency">Nanny Agency</a></li>
            <li><a href="<?php echo site_url(); ?>/mother-and-baby-unit">Mother &amp; Baby</a></li>
            
          </ul>
        </div>
        
        <div class="large-6 medium-6 columns">
          <ul class="footer-nav">
            <li><a href="<?php echo site_url(); ?>/social-responsibility">Social Responsibility</a></li>
            <li><a href="<?php echo site_url(); ?>/work-for-us">Work With Us</a></li>
            <li><a href="<?php echo site_url(); ?>/contact-us">Contact Us</a></li>
            <li><a href="<?php echo ot_get_option( 'facebook' ); ?>"><i class="fa fa-facebook-square fa-2x"></i></a></li>
          </ul>        
        </div>
      </div>
    </div>
        <div class="large-12 copyright columns">
          <div>
            &copy; <?php echo ( bloginfo("name") . " " . date("Y") ); ?>
          </div>
      </div>
    </div>
  </div>

    
    <!-- load jQuery -->
    <script src="<?php echo get_active_theme_directory() ; ?>/js/jquery/dist/jquery.min.js"></script>

    <!-- load Foundation and initialise it -->
    <script src="<?php echo get_active_theme_directory() ; ?>/js/foundation/js/foundation.min.js"></script>
    
    <script>

      var foundationOptions = 
      {
        accordion: 
        {
          // specify the class used for accordion panels
          content_class: 'content',
          // specify the class used for active (or open) accordion panels
          active_class: 'active',
          // allow multiple accordion panels to be active at the same time
          multi_expand: false,
          // allow accordion panels to be closed by clicking on their headers
          // setting to false only closes accordion panels when another is opened
          toggleable: true
        }
      }  

      $(document).foundation(foundationOptions);
    </script>
    
    <?php if (is_front_page()) : ?>

    	<!-- load Slick and apply it to .slider -->
	    <script type="text/javascript" src="<?php echo get_active_theme_directory() ; ?>/js/slick/slick.min.js"></script>
	    <script type="text/javascript">
	        $(document).ready(function()
	        {
	          var slickOptions = 
	          {
              arrows: false,
              autoplay: true,
              autoplaySpeed: 8000, 
              speed: 1000, 
              fade: true,
              dots: true   
	          }

	          $('.slider').slick(slickOptions);
	        });
	    </script>

	<?php endif; ?>

</body>
</html>
