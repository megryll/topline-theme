<?php
/*
 Template Name: About Us Template

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
		<div id="spacer">&nbsp</div>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>


<?php get_footer(); ?> 
