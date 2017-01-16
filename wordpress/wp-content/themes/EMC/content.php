<div class="blog-content-container">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="blog-post">
		<p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
		<?php if ( has_post_thumbnail() ) {?>
			<div class="row">
				<div class="blog-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
				<div class="col-md-12"><?php the_excerpt(); ?></div>
			</div>
		<?php } else { the_excerpt(); } ?>
		<a href="<?php comments_link(); ?>"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></a>
		<?php if (! get_post( 1 ) ) { ?>
			<hr>
		<?php } ?>
	</div><!-- /.blog-post -->
</div>