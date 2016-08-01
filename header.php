<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<link href="https://fonts.googleapis.com/css?family=Pridi" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
    
		<script type='text/javascript' data-cfasync='false' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='6a085a3059b8c2043379bc94033ecccc' async='async'></script>

    
	</head>
	<body <?php body_class(); ?>>
	
		<!-- beta testing message -->
		<div style="padding:10px;background:#333;color:white;font-size:14px;">This theme is still in beta version. You can download the zip file <a href="#">here</a>. After testing please let me know the bugs you've found at <a href="mailto:luca@reset-lab.it?subject=MateriaLab Beta Test" title="">luca@reset-lab.it</a></div>
		
		
		<!-- header -->
			<header class="header clear">

					<!-- logo -->
					<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
					    <div class='logo'>
					        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
					    </div>
					<?php else : ?>
					    <div class="logo">
					    	<a href="<?php echo home_url(); ?>">
					    		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
					    	</a>
					    </div>
					<?php endif; ?>
					<!-- /logo -->
					
					<?php if ( get_theme_mod( 'themeslug_header_title' ) ) : ?>
					    <h1 class="title"><?php echo get_theme_mod( 'themeslug_header_title'); ?></h1>
					<?php else : ?>
					    <h1 class="title">Hello. We are MateriaLab.</h1>
					<?php endif; ?>
					
					<?php if ( get_theme_mod( 'themeslug_header_subtitle' ) ) : ?>
					    <h2><?php echo get_theme_mod( 'themeslug_header_subtitle'); ?></h2>
					<?php else : ?>
					    <h2>We are an app development company based in New York</h2>
					<?php endif; ?>
					
				
					<div class="social_icon">
						<ul>
							<li><a target="_blank" href="<?php echo get_theme_mod( 'themeslug_twitter_icon'); ?>"><i class="shareaholic-service-icon service-twitter" ng-style="config.customColorsEnabled ? config.customColors : {}"></i></a></li>
							<li><a target="_blank" href="<?php echo get_theme_mod( 'themeslug_facebook_icon'); ?>"><i class="shareaholic-service-icon service-facebook" ng-style="config.customColorsEnabled ? config.customColors : {}"></i></a></li>
							<li><a target="_blank" href="<?php echo get_theme_mod( 'themeslug_gplus_icon'); ?>"><i class="shareaholic-service-icon service-google_plus" ng-style="config.customColorsEnabled ? config.customColors : {}"></i></a></li>
							<li><a target="_blank" href="<?php echo get_theme_mod( 'themeslug_linkedin_icon'); ?>"><i class="shareaholic-service-icon service-linkedin" ng-style="config.customColorsEnabled ? config.customColors : {}"></i></a></li>
						</ul>
					</div>

					<!-- nav -->
					<a class="nav-button"></a>					
					<nav class="nav">
						<h2>Menu</h2>
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
			
			<!-- wrapper -->
			<div class="wrapper">
