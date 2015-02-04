<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>
		
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/normalize.css" />
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/foundation.css" />
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/font-awesome/css/font-awesome.min.css"> <!-- import icon font  -->
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/js/slick/slick.css"/> <!-- slick slider -->

		<!-- our styles rules, after all the other styles! -->
		<link href='//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/typography.css" />
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/colours.css" />
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/aimee.css" />


		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>


		<!-- HEADER AREA -->
		<header>

			<!-- NAVIGATION AREA -->
			<div class="full-width navigation-area">
				<!-- logo + phone + account buttons -->
				<div class="row">
					<div class="large-12 columns top-section">
						<a href="<?php echo site_url(); ?>"><img src=""></a>
						<p class="call-us-today">Call Us Today! <a href="tel:<?php echo ot_get_option( 'telephone_number' ); ?>"><?php echo ot_get_option( 'telephone_number' ); ?></a></p>
					</div>
				</div>
				<!-- nav -->
				<div class="row">
					<div class="large-12 columns">

						<!-- NAV WRAP -->
						<nav class="top-bar" data-topbar role="navigation" data-options="is_hover: true">
							<ul class="title-area">
								<li class="name"></li>
								<li class="toggle-topbar menu-icon">
									<a href=""><span>Menu</span></a>
								</li>
							</ul>

							<!-- SECTION WRAP -->
							<section class="top-bar-section">
							
								<!-- LEFT NAV SECTION -->
								<ul class="left top-level">
									<li class="has-dropdown"><a href="<?php echo site_url(); ?>/about">About</a>
										<ul class="dropdown">
											<li><a href="<?php echo site_url(); ?>/team">Team</a></li>
											<li><a href="<?php echo site_url(); ?>/testimonials">Testimonials</a></li>
										</ul>
									</li>

									<li class="has-dropdown"><a href="<?php echo site_url(); ?>/granary-kids">Kids Clubs</a>
										<ul class="dropdown">
											<li><a href="<?php echo site_url(); ?>/afterschool-and-breakfast-clubs">After School and Breakfast Clubs</a></li>
											<li><a href="<?php echo site_url(); ?>/tipple-topples-creche">Tipple Topples Creche</a></li>
											<li><a href="<?php echo site_url(); ?>/active-holiday-camps">Active Holiday Camps</a></li>
											<li><a href="<?php echo site_url(); ?>/work-with-granary-kids">Work with Granary Kids</a></li>        
											<li><a href="<?php echo site_url(); ?>/book-a-place">Book a place</a></li>
											<li><a href="<?php echo site_url(); ?>/granary-kids-useful-info">Useful info</a></li>
										</ul>
									</li>

									<li class="has-dropdown"><a href="<?php echo site_url(); ?>/nanny-agency">Nanny Agency</a>
										<ul class="dropdown">
											<li class="has-dropdown"><a href="<?php echo site_url(); ?>/families">Families</a>
												<ul class="dropdown">
													<li><a href="<?php echo site_url(); ?>/meet-our-nannies">Meet Our Nannies</a></li>
													<li><a href="<?php echo site_url(); ?>/babysitting">Babysitting</a></li>
													<li><a href="<?php echo site_url(); ?>/types-of-carers">Types of Carers</a></li>
													<li><a href="<?php echo site_url(); ?>/agency-services-for-families">Agency Services</a></li>
													<li><a href="<?php echo site_url(); ?>/nanny-agency/families/family-register/">Register</a></li>
												</ul>
											</li>  
											<li class="has-dropdown"><a href="<?php echo site_url(); ?>/nannies">Nannies</a>
												<ul class="dropdown">
													<!-- <li><a href="<?php echo site_url(); ?>/job-search">Job Search</a></li> -->
													<li><a href="<?php echo site_url(); ?>/nanny-agency/nannies/nanny-register/">Register</a></li>
												</ul>
											</li>  
											<li><a href="<?php echo site_url(); ?>/nanny-agency-useful-info">Useful Info</a></li>
										</ul>
									</li>

									<li class="has-dropdown"><a href="<?php echo site_url(); ?>/mother-and-baby">Mother and Baby</a>
										<ul class="dropdown">
											<li><a href="<?php echo site_url(); ?>/mother-and-baby-services">Mother and Baby Services</a></li>
											<li><a href="<?php echo site_url(); ?>/referral-process">Referral Process</a></li>
											<li><a href="<?php echo site_url(); ?>/facilities">Facilities</a></li>
											<li><a href="<?php echo site_url(); ?>/documents">Documents</a></li>
											<li><a href="<?php echo site_url(); ?>/work-with-mother-and-baby">Work with Mother and Baby</a></li>
										</ul>
									</li>

									<!-- <li><a href="<?php echo site_url(); ?>/social-responsibility">Social Responsibility</a></li> -->

									<li class="has-dropdown"><a>Work for Us</a>
										<ul class="dropdown">
											<li><a href="<?php echo site_url(); ?>/work-with-granary-kids">Granary Kids</a></li>
											<li><a href="<?php echo site_url(); ?>/nannies">Granary Nanny Agency</a></li>
											<li><a href="<?php echo site_url(); ?>/work-with-mother-and-baby">Mother and Baby</a></li>
										</ul>
									</li>

									<li><a href="<?php echo site_url(); ?>/contact-us">Contact Us</a></li>
								  
								</ul>		              
							</section>
						</nav>
					</div>
				</div>
			</div>


		



		
			<!-- <div class="row">
			  <div class="large-8 medium-8 columns">
				
			  </div>
			  <div class="large-4 medium-4 columns social-buttons">
				<a href="<?php echo ot_get_option( 'twitter' ); ?>"><i class="fa fa-twitter fa-2x"></i></a>
				<a href="<?php echo ot_get_option( 'facebook' ); ?>"><i class="fa fa-facebook-square fa-2x"></i></a>
				<a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
			  </div>
			</div> -->
			
			<!-- GIANT LOGO (only certain pages) -->
			<div class="logo-giant"></div>
		</header>



