<div class="content-container">
	
	<!--<div class="wp-top-photo-container">
		<img class="col-md-12 views-top-photo" id="lab-top-photo" src="support/images/bg-emc-4.jpg">
		<ul class="top-photo-overlay-container">
			<li class="top-photo-logo"><img src="support/images/emc-birmingham-logo-iso-white.png" alt="emc logo" style="height: 90px;"></li>
			<li class="top-photo-text iso-text">An ISO 9001:2008 Company</li>
			<li class="top-photo-text welcome-text">WELCOME TO</li>
			<li class="top-photo-text enviro-text">Enviro Managament Corp.</li>
			<li class="top-photo-text leader-text">The regional leader in environmental & safety consulting since 1989.</li>
		</ul>
	</div>-->












	<div class="blog-container">
		<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="blog-post">
			<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
			<?php if ( has_post_thumbnail() ) {?>
			<div class="row">
				<div class="col-md-4">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>
				<div class="col-md-6">
					<?php the_excerpt(); ?>
				</div>
			</div>
			<?php } else { ?>
			<?php the_excerpt(); ?>
			<?php } ?>
			<a href="<?php comments_link(); ?>"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></a>
		</div><!-- /.blog-post -->
	</div>
</div>