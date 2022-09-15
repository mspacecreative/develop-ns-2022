		</div>
		<!-- /wrapper -->
		
		<!-- footer -->
		<footer class="footer" role="contentinfo">

			<div class="innerContainer">
				<div class="row">
					<!-- logo -->
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="logo"><a href="<?php echo esc_url( home_url() ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/branding/logo.svg" alt="Develop Nova Scotia" class="logo-img">
							</a>
						</div>
					</div>
					<!-- /logo -->
					<!-- copyright -->
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p class="copyright">&copy; 2020-<?php echo esc_html( date( 'Y' ) ); ?> <?php echo _e( 'Develop Nova Scotia. All rights reserved.' ); ?> <a href="https://developns.ca/privacy-policy/" target="_blank"><?php echo _e('Privacy Policy &raquo;'); ?></a>.</p>
					</div>
					<!-- /copyright -->
				</div>
			</div>
			
		</footer>
		<!-- /footer -->

		<?php echo do_shortcode('[modal]');
		
		wp_footer(); ?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36691022-5"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'UA-36691022-5');
		</script>

	</body>
</html>
