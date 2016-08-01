<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a class="thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(700)); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
				
				<div class="wrapper">
				
						<!-- post title -->
						<h1><?php the_title(); ?></h1>
						
						<!-- /post title -->
						
						<?php the_content(); ?>
						
						
		
						<br class="clear">
		
						<?php edit_post_link(); ?>
				</div>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
