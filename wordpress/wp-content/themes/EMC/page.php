<!-- page.php - Displays any single page. This does not include posts, but rather individual static pages you've created in the WordPress Admin. -->

<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">
			<!-- The Loop - ESSENTIAL TO WORDPRESS - All of your content is generated through a loop - Pulls from content.php-->
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'consulting', get_post_format() );
				endwhile; endif; 
			?>
		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>