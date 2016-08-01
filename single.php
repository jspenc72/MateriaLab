<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
			<?php else: ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<img class="attachment-post-thumbnail size-post-thumbnail wp-post-image" src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" />
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			
			<div class="wrapper">
			
				<!-- share buttons -->
				<div class='shareaholic-canvas' data-app='share_buttons' data-app-id='25366245'></div>
				<!-- post title -->
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<!-- /post title -->
	
				<!-- post details -->
				<div class="post-details">
					<span class="date"><?php the_time('j F Y'); ?></span>
					<span class="cat"><?php the_category(', '); ?></span>
				</div>
				<!-- /post details -->
	
				<?php the_content();?>
	
				<!-- share buttons -->
				<div class='shareaholic-canvas' data-app='share_buttons' data-app-id='25366245'></div>
				
			</div>
			<div class="meta">
						<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end 
						?>
			
						<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas 
						?></p>
			
						<p class="author"><?php _e( 'This post was written by: ', 'html5blank' );?><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></p>
				</div>
	
			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
