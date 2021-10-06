<?php
	get_header();
?>

	<div class="main-container archive">
		<div class="archive-container grid-layout _3-grid">
			<!-- Content -->
			<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						get_template_part("template-parts/content", "archive");
					}
				}
			?>
			<!-- End Content -->
		</div>

		<?php

		the_posts_pagination();

		?>

		<?php

			get_template_part("template-parts/content", "newsletter");

		?>
	</div>
<?php
	get_footer();
?>
