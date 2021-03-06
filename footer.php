	<footer class="grid-layout _3-grid">
		<?php
			if (function_exists("the_custom_logo")) {
				$custom_logo_id	= get_theme_mod("custom_logo");
				$logo			= wp_get_attachment_image_src($custom_logo_id, "full");
			}
		?>
		<div>
			<a href="<?php echo get_home_url(); ?>">
				<img class="logo" src="<?php echo $logo[0] ?>" alt="logo" />
			</a>
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
			<p class="copyright">Tantinotte.bio © Tous droits réservés</p>
		</div>
		<?php
			wp_nav_menu(
				array(
					"menu" => "footer_left",
					"container" => "",
					"theme_location" => "footer_left",
					"items_wrap" => '<ul>%3$s</ul>'
				)
			);
			wp_nav_menu(
				array(
					"menu" => "footer_right",
					"container" => "",
					"theme_location" => "footer_right",
					"items_wrap" => '<ul>%3$s</ul>'
				)
			);
		?>
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

		$(".mobile-menu-btn-container").click(function() {
			$(".mobile-menu").toggleClass("show");
			$(".mobile-menu-btn-container").toggleClass("active");
		});
	</script>
	<?php
		wp_footer();
	?>
</body>
</html>