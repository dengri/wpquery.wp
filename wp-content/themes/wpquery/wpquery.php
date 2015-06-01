<?php
/*
 
	Template Name: WP_Query Template

 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>


			<?php

				//wp_reset_postdata();

				$args = array(
								'post_type' = 'post',
								'posts_per_page' = 1
				);
			
				$the_query = new WP_Query( $args );
			
				//wp_reset_postdata();

			?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>