			</div>
			<!-- /wrapper -->
			
			<!-- footer -->
			<footer class="footer">
				<!-- top -->
				<div class="top">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
					<div class="social_icon">
						<ul>
							<li><a target="_blank" href="<?php echo get_theme_mod( 'themeslug_twitter_icon'); ?>"><i class="shareaholic-service-icon service-twitter" ng-style="config.customColorsEnabled ? config.customColors : {}"></i></a></li>
							<li><a target="_blank" href="<?php echo get_theme_mod( 'themeslug_facebook_icon'); ?>"><i class="shareaholic-service-icon service-facebook" ng-style="config.customColorsEnabled ? config.customColors : {}"></i></a></li>
							<li><a target="_blank" href="<?php echo get_theme_mod( 'themeslug_gplus_icon'); ?>"><i class="shareaholic-service-icon service-google_plus" ng-style="config.customColorsEnabled ? config.customColors : {}"></i></a></li>
							<li><a target="_blank" href="<?php echo get_theme_mod( 'themeslug_linkedin_icon'); ?>"><i class="shareaholic-service-icon service-linkedin" ng-style="config.customColorsEnabled ? config.customColors : {}"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- /top -->
				
				<!-- copyright -->
				<div class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright Luca Vercellio <br />Created by 
					<a href="http://www.lucavercellio.com" title="Luca Vercellio">Luca Vercellio</a>
				</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		

		<?php wp_footer(); ?>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		
	</body>
</html>
