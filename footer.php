			<!-- footer -->
			<footer class="footer" role="contentinfo">
					<div class="footer-question">
						<h5>What would you like to do?</h5>
					</div>
					<div class="footer-menu">
						<?php wp_nav_menu(array(
							'menu' => 'FooterMenu'
						)) ?>
					</div>

					<div class="footer-logo">
						<a href="<?php echo home_url(); ?>">
							<img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/WWlogo_tranparent.png" alt="Logo">
						</a>
						<a href="<?php echo home_url(); ?>">
							<img class="logo-text" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
						</a>
					</div>
					<div class="contact-info">
						<div>t. 02 8383 3333</div>
						<div>f. 02 8383 3383</div>
						<div>e. info@wentworthpartners.com.au</div>
					</div>
					<div class="head-office-address">
						<h6><strong>Head Office</strong></h6>
						<h6>31 Belmore Road Randwick NSW 2031</h6>
					</div>
					<div class="copyright">
						<h6>Wentworth Partners Management ABN 82 627 821 489</h6>
						<h6>Trading at Wentworth Partners</h6>
					</div>
			</footer>
				<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

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
