<?php
/*
 Template Name: Low Slope Template

*/
?> 

<?php get_header(); ?>

					


			<?php
				$mypages = get_pages( array( 'cat'=> 'Low Slope', 'sort_order' => 'desc' ) );

				foreach( $mypages as $page ) {		?>

					<?php endwhile; endif; ?>	
		
				<?php
				}
			?>



			


<?php get_footer(); ?> 


	