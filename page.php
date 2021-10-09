<?php
	get_header();
?>

	<div class="main-container">
		<div class="content-container">
			<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						the_content();
					}
				}
			?>
		</div>
	</div>

<?php
	get_footer();
?>
