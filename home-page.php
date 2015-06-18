<?php
/*
 Template Name: Home Page
 
*/
?> 

<?php get_header(); ?>


	<section class="banner">
		<div class="banner-content">
			<p class="banner-text">Who are you going to use for your next big project?</p>
			<p>For the highest quality workmanship use Top Line, Vancouver Island's roofing and wall system experts.</p>
			<div class="green-btn" data-text="Get a Free Quote">Get a Free Quote</div>
		</div>
	</section>


	<div id="services">
		<div class="service-block service-block-1">
			<div class="image-container">&nbsp</div>
			<div class="service-list">
				<h4>Roofing</h4> 
				<ul>
					<li><a href="/steep-slope"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Steep Slope<span></a></li>
					<li><a href="/low-slope"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Low Slope<span></a></li>
					<li><a href="/asphalt"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Asphalt<span></a></li>
					<li><a href="/metal"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Metal<span></a></li>
					<li><a href="/green-roofing"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Green Roofing<span></a></li>
					<li><a href="/fibreglass"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Fibreglass<span></a></li>
				</ul>
			</div>
		</div>
		<div class="service-block service-block-2">
			<div class="image-container">&nbsp</div>
			<div class="service-list">
				<h4>Wall Services</h4>
				<ul>
					<li><a href="/composite-wall-panel"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Composite Panel<span></a></li>
					<li><a href="/preformed-insulated-panels"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Preformed Insulated Panel<span></a></li>
					<li><a href="/fibre-cement"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Fibre Cement<span></a></li>
					<li><a href="/wood-composite"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Wood Composite<span></a></li>
					<li><a href="/natural-products"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Natural Products<span></a></li>
					<li><a href="/standing-seam-bold-form"><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Standing Seam/Bold Form<span></a></li>
				</ul>
			</div>
		</div>
	</div>

	<section id="third-section">
		<div id="residential" class="block">
			<h2>Residential</h2>
			<a href="/residential"><div class="clear-btn" data-text="Learn More">Learn More</div></a>
		</div>
		<div id="commercial" class="block">
			<h2>Commercial</h2>
			<a href="/commercial"><div class="clear-btn" data-text="Learn More">Learn More</div></a>
		</div>
	</section>

	<div id="content">


	<section id="gallery">
		<h3>Our Recent Projects</h3>
		<a href="/project-gallery"><div class="clear-green-btn" data-text="View All">View All</div></a>
		<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '81' ); };?>
		
	</section>

	</div>

	<section>
		<div class="contact-area">
			<div class="contact-icon">
				<a href="tel:+12504780500"><img src="/wp-content/themes/topline/library/images/phone-icon.png">
				<h4>(250) 478-0500</h4></a>
			</div>
			<div class="contact-icon">
				<a href="mailto:email@topline.com" target="_blank"><img src="/wp-content/themes/topline/library/images/email-icon.png">
				<h4>email@topline.ca</h4></a>
			</div>
			<div class="contact-icon">
				<a href="https://maps.google.com/?q=58250 725 Industrial Way, Victoria, B.C." target="_blank"><img src="/wp-content/themes/topline/library/images/location-icon.png">
				<h4>725 Industrial Way<br> Victoria, B.C</h4></a>
			</div>
		</div>
	</section>

	<section>
	</section>

	<section>
	</section>




<?php get_footer(); ?>
