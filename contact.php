<?php
/*
 Template Name: Contact Template

*/ 
?> 

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post();?>

	<section class="banner">
		<div class="banner-content">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</section>

	<div id="content">
		<div id="two-spacer">&nbsp</div>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>	
	</div>

	<section>
		<div class="contact-area">
			<div class="contact-icon">
				<a href="tel:+12504780500"><img src="/wp-content/themes/topline/library/images/phone-icon.png">
				<h4>(250) 478-0500</h4></a>
			</div>
			<div class="contact-icon">
				<a href="mailto:email@topline.com"><img src="/wp-content/themes/topline/library/images/email-icon.png">
				<h4>email@topline.ca</h4></a>
			</div>
			<div class="contact-icon">
				<a href="https://maps.google.com/?q=58250 725 Industrial Way, Victoria, B.C."><img src="/wp-content/themes/topline/library/images/location-icon.png">
				<h4>725 Industrial Way<br> Victoria, B.C</h4></a>
			</div>
		</div>
	</section>

<?php get_footer(); ?> 
