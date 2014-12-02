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
        <div class="large-4 medium-4 columns">
          <ul class="footer-nav">
            <li><a href="<?php echo site_url(); ?>">Home</a></li>
            <li><a href="<?php echo site_url(); ?>/about">About Granary Care</a></li>
            <li><a href="<?php echo site_url(); ?>/granary-kids">Granary Kids</a></li>
            <li><a href="<?php echo site_url(); ?>/nanny-agency">Nanny Agency</a></li>
            <li><a href="<?php echo site_url(); ?>/mother-and-baby-unit">Mother and Baby Unit</a></li>
            <li><a href="<?php echo site_url(); ?>/social-responsibility">Social Responsibility</a></li>
            <li><a href="<?php echo site_url(); ?>/work-for-us">Work For Us</a></li>
            <li><a href="<?php echo site_url(); ?>/contact-us">Contact Us</a></li>
          </ul>
        </div>
        <div class="large-5 medium-5 columns">
          <p class="call-us-today">Call Us Today! <a href="tel:02084233391">020 8423 3391</a></p>
        </div>
        <div class="large-3 medium-3 columns social-buttons">
            <a href="<?php echo ot_get_option( 'twitter' ); ?>"><i class="fa fa-twitter fa-2x"></i></a>
            <a href="<?php echo ot_get_option( 'facebook' ); ?>"><i class="fa fa-facebook-square fa-2x"></i></a>
            <a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
        </div>
    </div>
      <div class="row">
        <div class="large-12 columns">
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
      $(document).foundation();
    </script>
    
    <?php if (is_front_page()) : ?>

    	<!-- load Slick and apply it to .slider -->
	    <script type="text/javascript" src="<?php echo get_active_theme_directory() ; ?>/js/slick/slick.min.js"></script>
	    <script type="text/javascript">
	        $(document).ready(function()
	        {
	          var slickOptions = 
	          {

	          }

	          $('.slider').slick(slickOptions);
	        });
	    </script>

	<?php endif; ?>

</body>
</html>
