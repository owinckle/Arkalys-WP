<?php
	get_header();
?>

	<div class="main-container">

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

	<!-- Products -->
		<?php if (get_option("product_gallery")) { ?>
			<div class="main-container woocommerce shop wc-home">
				<h2 class="headline">Et si vous passiez au naturel ?</h2>
				<div class="grid-layout _4-grid">
					<?php
						$args	= array(
							"post_type"			=> "product",
							"posts_per_page"	=> 4
						);

						$loop	= new WP_Query($args);

						while ($loop->have_posts()) : $loop->the_post();
							get_template_part("template-parts/content", "shop");
						endwhile;

						wp_reset_query();
					?>
				</div>
			</div>
		<?php } ?>
		<!-- End Products -->

	</div>
<?php
	get_footer();
?>
