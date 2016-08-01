<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

		<?php if (have_posts()): the_post(); ?>

				<h1 class="page-title"><?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h1>
	
				<?php if ( get_the_author_meta('description')) : ?>
		
							<?php echo get_avatar(get_the_author_meta('user_email')); ?>
				
							<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>
				
							<?php echo wpautop( get_the_author_meta('description') ); ?>
		
				<?php endif; ?>

				
				<?php get_template_part('loop'); ?>
				
				<?php get_template_part('pagination'); ?>

		<?php endif; ?>
		
		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
