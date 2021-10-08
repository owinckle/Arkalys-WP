<?php
	get_header();
?>

	<div class="main-container woocommerce">
		<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					echo get_template_part("template-parts/content", "single-product");
				}
			}
		?>
	</div>

<?php
	get_footer();
?>
