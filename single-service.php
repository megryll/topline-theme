<?php
/*
 Template Name: Single Service Template

*/
?> 

<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post();?>

		<section class="banner">
			<div class="banner-content">
				<div class="green-btn" style="margin: 30px;" data-text="Get a Free Quote">Get a Free Quote</div>
			</div>
		</section>




		<div id="content">
			<div id="one-spacer">&nbsp</div>

			<div id="service-information">
				<div id="image-container">
					<?php echo get_custom_field('product_image'); ?>
				</div>
				<div id="main-description">	
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>	
				</div>
				<div id="meta-content">
					<div id="one-spacer">&nbsp</div>
					<div id="warranty-information">

						<h3>Warranty Information</h3>
						<p><?php echo get_custom_field('warranty_information'); ?></p>
					</div>
					<div id="supplier-logos">
						<h3>Suppliers</h3>
						<?php echo get_custom_field('supplier_logo'); ?>
					</div>
				</div>
			</div>
		</div>



			<?php endwhile; endif; ?>	
			

<?php get_footer(); ?> 