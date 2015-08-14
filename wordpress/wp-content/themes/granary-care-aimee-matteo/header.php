<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="viewport" content="width=device-width, minimal-ui">
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
			echo wp_title( ' | ', 'false', 'right' ); 
		} ?></title>
		
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/normalize.css" />
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/foundation.css" />
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/font-awesome/css/font-awesome.min.css"> <!-- import icon font  -->
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/js/slick/slick.css"/> <!-- slick slider -->

		<!-- our styles rules, after all the other styles! -->
		<link href='//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/typography.css" />
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/colours.css?12052015" />
		<link rel="stylesheet" href="<?php echo get_active_theme_directory(); ?>/css/aimee.css?11042015" />


		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		
		<?php wp_head(); ?>

	</head>

	<body <?php body_class();?> >

	<?php 

	// a GLOBAL variable is accessible from other templates
	// this way we can get the slug once here in the header
	// and then re-use it in other templates (which all include the header)
	global $categorySlug;
	$categorySlug = getCategorySlug();

	?>


		<!-- HEADER AREA -->
		<header>

			<!-- NAVIGATION AREA -->
			<div class="full-width navigation-area <?php echo $categorySlug; ?>">
				<!-- logo + phone + account buttons -->
				<?php if( is_front_page()): ?>

					<div class="row">

						<div class="large-12 columns top-section">
							<!-- <a href="<?php echo site_url(); ?>"><img src=""></a> -->
							<div class="large-12 medium-12 small-12 columns logo-small hide-for-large-up hide-for-medium-up">
								<!-- new logo -->
								<a href="<?php echo site_url(); ?>" id="logo-small-link"></a>
							</div>
							<p class="call-us-today hide-for-small">Call us today! <a href="tel:<?php echo ot_get_option( 'telephone_number' ); ?>"><?php echo ot_get_option( 'telephone_number' ); ?></a></p>
							<p class="call-us-today show-for-small-only"><a href="tel:<?php echo ot_get_option( 'telephone_number' ); ?>"><?php echo ot_get_option( 'telephone_number' ); ?></a></p>
				

						</div>
					</div>
				<?php else : ?>

					<div class="row">
						<div class="large-12 columns top-section">
							<div class="large-4 medium-4 small-12 columns logo-small">
								<!-- new logo -->
								<a href="<?php echo site_url(); ?>" id="logo-small-link"></a>
							</div>
							<div class="large-4 medium-5 small-12  columns ">						
								<p class="call-us-today hide-for-small">Call us today! <a href="tel:<?php echo ot_get_option( 'telephone_number' ); ?>"><?php echo ot_get_option( 'telephone_number' ); ?></a></p>
								<p class="call-us-today show-for-small-only"><i class="fa fa-phone fa-2x"></i><a href="tel:<?php echo ot_get_option( 'telephone_number' ); ?>"><?php echo ot_get_option( 'telephone_number' ); ?></a></p>

							</div>
							<div class="medium-4 hide-for-medium columns ">
								<!-- register buttons -->
							</div>
						</div>
					</div>
				<?php endif; ?>

				<!-- nav -->
				<div class="row">
					<div class="large-12 nav-wrap columns">

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
								<ul class="top-level">
									<li class="has-dropdown"><a href="<?php echo site_url(); ?>/about">About</a>
										<ul class="dropdown">
											<li><a href="<?php echo site_url(); ?>/team">Team</a></li>
											<li><a href="<?php echo site_url(); ?>/testimonials">Testimonials</a></li>
											<li><a href="<?php echo site_url(); ?>/social-responsibility">Social Responsibility</a></li>
										</ul>
									</li>

									<li class="has-dropdown"><a href="<?php echo site_url(); ?>/granary-kids">Kids Clubs</a>
										<ul class="dropdown">
											<li class="has-dropdown"><a href="<?php echo site_url(); ?>/breakfast-and-after-school-clubs">Breakfast and After School Clubs</a>
												<ul class="dropdown">
													<?php
														// get all the pages using the school club template
														$schools = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'meta_key' => '_wp_page_template', 'meta_value' => 'template-school-club-page.php', 'posts_per_page' => 200 ) );

														foreach($schools as $school) // for each school within schools
														{
															
															$school_URL = get_page_link($school->ID);
															$school_name = $school->post_title;
															// showMeTheGoods($school_name);
															echo '<li><a href="' . $school_URL . '">' . $school_name . '</a></li>';
														}	
													?>
												</ul>
											</li>
											<!-- <li><a href="<?php echo site_url(); ?>/tipple-topples-creche">Tipple Topples Creche</a></li> -->
											<li><a href="<?php echo site_url(); ?>/active-holiday-camps">Active Holiday Camps</a></li>
											<li><a href="<?php echo site_url(); ?>/work-with-granary-kids">Work with Granary Kids</a></li>        
											<!-- <li><a href="<?php echo site_url(); ?>/book-a-place">Book a place</a></li> -->											
											<li><a href="<?php echo site_url(); ?>/granary-kids-useful-info">Useful info</a></li>
										</ul>
									</li>

									<li class="has-dropdown"><a href="<?php echo site_url(); ?>/nanny-agency">Nanny Agency</a>
										<ul class="dropdown">
											<li class="has-dropdown"><a href="<?php echo site_url(); ?>/families">Families</a>
												<ul class="dropdown">
													<!-- <li><a href="<?php echo site_url(); ?>/meet-our-nannies">Meet Our Nannies</a></li> -->
													<li><a href="<?php echo site_url(); ?>/babysitting">Babysitting</a></li>
													<li><a href="<?php echo site_url(); ?>/types-of-carers">Types of Carers</a></li>
													<li><a href="<?php echo site_url(); ?>/agency-services-for-families">Agency Services</a></li>
													<li><a href="<?php echo site_url(); ?>/nanny-agency/families/family-register/">Register</a></li>
												</ul>
											</li>  
											<li class="has-dropdown"><a href="<?php echo site_url(); ?>/nannies">Nannies</a>
												<ul class="dropdown">
													<!-- <li><a href="<?php echo site_url(); ?>/job-search">Job Search</a></li> -->
													<li><a href="<?php echo site_url(); ?>/nanny-agency/nannies/nanny-registration-form/">Register</a></li>
												</ul>
											</li>  
											<li><a href="<?php echo site_url(); ?>/nanny-agency-useful-info">Useful Info</a></li>
										</ul>
									</li>

									<li><a href="<?php echo site_url(); ?>/mother-and-baby">Mother &amp; Baby</a>
										<!-- <ul class="dropdown">
											<li><a href="<?php echo site_url(); ?>/mother-and-baby-services">Mother &amp; Baby Services</a></li>
											<li><a href="<?php echo site_url(); ?>/referral-process">Referral Process</a></li>
											<li><a href="<?php echo site_url(); ?>/facilities">Facilities</a></li>
											<li><a href="<?php echo site_url(); ?>/documents">Documents</a></li>
											<li><a href="<?php echo site_url(); ?>/work-with-mother-and-baby">Work with Mother &amp; Baby</a></li>
										</ul> -->
									</li>

									<!-- <li><a href="<?php echo site_url(); ?>/social-responsibility">Social Responsibility</a></li> -->

									<li class="has-dropdown"><a>Work with Us</a>
										<ul class="dropdown">
											<li><a href="<?php echo site_url(); ?>/work-with-granary-kids">Granary Kids</a></li>
											<li><a href="<?php echo site_url(); ?>/nannies">Granary Nanny Agency</a></li>
											<!-- <li><a href="<?php echo site_url(); ?>/work-with-mother-and-baby">Granary Mother &amp; Baby</a></li> -->
										</ul>
									</li>

									<li><a href="<?php echo site_url(); ?>/contact-us">Contact Us</a></li>
								  
								</ul>		              
							</section>
						</nav>
					</div>
				</div>
			</div>
			
			
		<?php if( is_front_page()): ?>
			<!-- GIANT LOGO (only certain pages) -->
			<div class="logo-giant hide-for-small"></div>
		<?php endif; ?>

		</header>