<?php
	get_header();
?>

	<div class="main-container">
		<!-- Slider -->
		<?php
			$slider_id	= get_option("slider");
			if ($slider_id) {
				echo do_shortcode('[smartslider3 slider="' . $slider_id . '"]');
			}
		?>
		<!-- End Slider -->

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

		<!-- Content -->
		<?php
			the_content();
		?>
		<!-- The Content -->

		<!-- Instagram -->
		<?php if (get_option("instagram_feed")) { ?>
			<div class="instagram">
				<h2 class="headline">Suivez nous sur Instagram!</h2>
				<?php
					echo do_shortcode("[instagram-feed num=9 cols=3]");
				?>
			</div>
		<?php } ?>
		<!-- End Instagram -->

		<!-- Newsletter -->
		<?php
			get_template_part("template-parts/content", "newsletter");
		?>
		<!-- End Newsletter -->
	</div>

<?php
	get_footer();
?>
