<!-- sidebar.php - This file contains the primary and secondary areas for sidebar widgets. You can add widgets to these areas via the WordPress Admin and shouldn't need to edit this file. -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	<div class="sidebar-module sidebar-module-inset">
		<h4>About</h4>
		<p><?php the_author_meta( 'description' ); ?> </p>
	</div>
	<div class="sidebar-module">
		<h4>Archives</h4>
		<ol class="list-unstyled">
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ol>
	</div>
	<div class="sidebar-module">
		<h4>Elsewhere</h4>
		<ol class="list-unstyled">
			<li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
			<li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
			<li><a href="<?php echo get_option('facebook'); ?>">Facebook</a></li>
		</ol>
	</div>
</div><!-- /.blog-sidebar -->