<?php get_header(); ?>

			


<section class="banner">
		<div class="banner-content">
			<h1 class="page-title"><?php single_cat_title(); ?></h1>
		</div>
	</section>

	<div id="content">
							
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

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

		</article>
		<hr>

		<?php endwhile; ?>

				<?php bones_page_navi(); ?>

		<?php else : ?>

				<article id="post-not-found" class="hentry cf">
					<header class="article-header">
						<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
					</footer>
				</article>

		<?php endif; ?>

</div>


<?php get_footer(); ?>
