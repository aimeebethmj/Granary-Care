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
					<li><a href="<?php echo site_url(); ?>/mother-and-baby">Mother &amp; Baby</a></li>
					
				</ul>
			</div>
			
			<div class="large-6 medium-6 columns">
				<ul class="footer-nav">
					<li><a href="<?php echo site_url(); ?>/social-responsibility">Social Responsibility</a></li>
					<li><a href="<?php echo site_url(); ?>/work-with-granary-kids">Work With Us</a></li>
					<li><a href="<?php echo site_url(); ?>/contact-us">Contact Us</a></li>
					<li><a href="<?php echo ot_get_option( 'facebook' ); ?>"><i class="fa fa-facebook-square fa-2x"></i></a><a href="<?php echo ot_get_option( 'twitter' ); ?>"><i class="fa fa-twitter fa-2x"></i></a></li>
					<!-- <li></li> -->
				</ul>        
			</div>
		</div>
	</div>
			<div class="large-12 copyright columns">
				<div>
					&copy; <?php echo ( bloginfo("name") . " " . date("Y") ); ?>
				</div>
				<div class="made-by">
					Made with  &hearts;  by <a href="https://twitter.com/aimeebethmj">Aimee</a> and <a href="https://twitter.com/baddeo">Matteo</a>
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

			$(document).ready(function()
			{
				$(document).foundation(foundationOptions)
			})	
			
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

		<?php if( is_page ('gallery') ): ?>

				<script type="text/javascript" src="<?php echo get_active_theme_directory() ; ?>/js/instafeed.min.js"></script>
				<script type="text/javascript">
					var feed = new Instafeed(
					{
						get: 'tagged',
						tagName: '<?php echo get_field('hashtag'); ?>',
						resolution: 'standard_resolution',
						clientId: '	57f8b97797124c49b0db64c605b4134c',
						template: '<a href="{{link}}" target="_blank"><img src="{{image}}"/><p>{{caption}}</p></a>',
						limit: 20,
						after: function() 
						{
							if (this.hasNext()) 
							{
								feed.next()
								// loadButton.setAttribute('disabled', 'disabled');
							}
						},
						sortBy: 'most-recent'
						// sortBy: 'random'
					})
					feed.run()
				</script>

		<?php endif; ?>

</body>
</html>