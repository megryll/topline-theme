<?php
/*
 Template Name: Project Gallery Template

*/
?> 

<?php get_header(); ?>

	<section class="banner">
		<div class="banner-content">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</section>

	<div id="content" style="padding: 30px;">
		<section id="gallery">
			<?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '80' ); } ?>
		</section>	
	</div>


<?php get_footer(); ?> 
