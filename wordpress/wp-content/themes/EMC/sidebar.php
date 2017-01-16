<!-- sidebar.php - This file contains the primary and secondary areas for sidebar widgets. You can add widgets to these areas via the WordPress Admin and shouldn't need to edit this file. -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	<div class="sidebar-module">
		<h4>Recent Posts</h4>
		<?php
			$recent_posts = wp_get_recent_posts();
			foreach( $recent_posts as $recent ) { echo '<div><a href="'  .  get_permalink($recent["ID"]) . '">' . $recent["post_title"].'</a> </div> '; }
			wp_reset_query();
		?>
	</div>
	<div class="sidebar-module">
		<h4>Archives</h4>
		<ol class="list-unstyled">
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ol>
	</div>
	<div class="sidebar-module">
		<h4>Social Media</h4>
		<ol class="list-unstyled">
			<li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
			<li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
			<li><a href="<?php echo get_option('facebook'); ?>">Facebook</a></li>
		</ol>
	</div>
</div><!-- /.blog-sidebar -->