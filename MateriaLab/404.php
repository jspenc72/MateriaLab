<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<img class="attachment-post-thumbnail size-post-thumbnail wp-post-image" src="<?php echo get_template_directory_uri(); ?>/img/404.jpg" />
				</a>
				<h1 class="page-title">Oops! You have come to the wrong link</h1>
				<p><a class="btn btn-default" href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a></p>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
