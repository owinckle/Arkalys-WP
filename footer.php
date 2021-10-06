	<footer class="grid-layout _4-grid">
		<?php
			if (function_exists("the_custom_logo")) {
				$custom_logo_id	= get_theme_mod("custom_logo");
				$logo			= wp_get_attachment_image_src($custom_logo_id, "full");
			}
		?>
		<a href="<?php echo get_home_url(); ?>">
			<img class="logo" src="<?php echo $logo[0] ?>" alt="logo" />
		</a>
		<div class="section-contact">
			<h3>Contact</h3>
			<p>contact@tantinotte.bio</p>
			<p>06 12 34 56 78</p>
		</div>
		<ul>
			<h3>Liens</h3>
			<li>Paiement et livraison</li>
			<li>Conditions générales de vente</li>
			<li>Mentions légales</li>
			<li>Politique de confidentialité</li>
		</ul>
		<div class="section-share">
			<?php
				if (get_option("instagram_url")) {
					echo '<a target="_blank" href="' . get_option("instagram_url") . '"><i class="fab fa-instagram"></i></a>';
				}
				if (get_option("twitter_url")) {
					echo '<a target="_blank" href="' . get_option("twitter_url") . '"><i class="fab fa-twitter"></i></a>';
				}
				if (get_option("facebook_url")) {
					echo '<a target="_blank" href="' . get_option("facebook_url") . '"><i class="fab fa-facebook"></i></a>';
				}
				if (get_option("youtube_url")) {
					echo '<a target="_blank" href="' . get_option("youtube_url") . '"><i class="fab fa-youtube"></i></a>';
				}
			?>
		</div>
	</footer>
	<script type="text/javascript">
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 500) {
				$(".header-container").addClass("scroll");
			} else {
				$(".header-container").removeClass("scroll");
			}
		});
	</script>
	<?php
		wp_footer();
	?>
</body>
</html>