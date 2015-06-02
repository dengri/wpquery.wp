<?php
/*
 
	Template Name: WP_Query Template

 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			<?php

				//wp_reset_postdata();

				$args = array(	'post_type' => 'project'  );

				$the_query = new WP_Query( $args );
				
			?>

			<?php while ($the_query->have_posts()):
					
					$the_query->the_post();
					get_template_part('content', 'page');

				  endwhile;

			?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>