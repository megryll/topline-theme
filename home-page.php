<?php
/*
 Template Name: Home Page
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>


					<section class="banner">
						<div class="banner-content">
							<p class="banner-text">Who are you going to use for your next big project?</p>
							<p>For the highest quality workmanship use Top Line, Vancouver Island's roofing and wall system experts.</p>
							<div class="green-btn">Get a Free Quote</div>
						</div>
					</section>

					<div id="content">

					<div class="services">
						<div class="service-block service-block-1">
							<img class="feat-img" src="/Topline/wp-content/uploads/2015/05/roofing-e1432845609572.png"/>
							<div class="service-list">
								<h4>Roofing</h4>
								<ul>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Steep Slope<span></li>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Low Slope<span></li>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Repair & Maintenence<span></li>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Re-Roofing<span></li>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>New Construction<span></li>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Custom Projects<span></li>
								</ul>
							</div>
						</div>
						<div class="service-block service-block-2">
							<img class="feat-img" src="/Topline/wp-content/uploads/2015/05/wallservice-e1432845639143.png"/>
							<div class="service-list">
								<h4>Wall Services</h4>
								<ul>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Composite Panel<span></li>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Preformed Insulated Panel<span></li>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Plate Wall Panels<span></li>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Metal Wall & Roof<span></li>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Fibre Cement<span></li>
									<li><img src="<?php echo get_template_directory_uri(); ?>/library/images/plus.png"><span>Wood Composite<span></li>
								</ul>
							</div>
						</div>
					</div>

					<section>
						<div>
							<h2>Residential</h2>
							<button>Learn More</button>
						</div>
						<div>
							<h2>Commercial</h2>
							<button>Learn More</button>
						</div>
					</section>

					<section>
						<h2>Our Recent Projects</h2>
						<button>View All</button>
						<div>
							<div>
							</div>
							<div>
							</div>
							<div>
							</div>
						</div>
					</section>

					<section>
						<div>
							<div>
							</div>
							<div>
							</div>
							<div>
							</div>
						</div>
					</section>

					<section>
					</section>

					<section>
					</section>

				

			</div>


<?php get_footer(); ?>
