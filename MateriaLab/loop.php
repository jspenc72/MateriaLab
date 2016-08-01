

<?php $postnum = 0; if (have_posts()): while (have_posts()) : the_post(); ?> 

	<?php $postnum++; // Increment counter
	if ($postnum == 3){ ?>
	  <div class="sidebar-widget">
	  	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-posts')) ?>
	  </div>
	<?php } ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-xs-12 col-sm-12 col-md-6 col-lg-6' ); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : ?>
			<a class="thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(700)); ?>
			</a>
		
		<?php else: ?>
			<a class="thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/img/placeholder.jpg" />
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		<div class="wrapper">
		
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
		
				<?php html5wp_excerpt('html5wp_index');	?>
		
				
		</div>
		<footer>
			<div class="social_share_icon">
				<span>Share on: </span>
				<div class='shareaholic-canvas' data-app='share_buttons' data-app-id='25366245'></div>
			</div>
			
		</footer>
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
