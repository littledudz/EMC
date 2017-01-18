<div class="blog-post-single">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	<div class="blog-thumbnail"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>
 	<div class="blog-single-content"><?php the_content(); ?></div>
</div><!-- /.blog-post -->