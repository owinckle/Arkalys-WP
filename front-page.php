<?php
	get_header();
?>

	<div class="main-container home-container">
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

		<!-- Testimonials -->
		<?php if (get_option("testimonials")) { ?>
			<div class="main-container testimonials">
				<?php

					if (get_option("testimonials_headline")) {
						echo '<h2 class="headline">' . get_option("testimonials_headline") . '</h2>';
					}

					echo do_shortcode("[site_reviews display='3']");
				?>
				<a href="<?php echo get_post_type_archive_link('post'); ?>">
					<div class="cta-testimonials">Tous les avis</div>
				</a>
			</div>
		<?php } ?>
		<!-- End Testimonials -->

		<!-- Blog -->
		<?php if (get_option("blog_display")) { ?>
			<div class="main-container archive">
				<?php

					if (get_option("blog_headline")) {
						echo '<h2 class="headline">' . get_option("blog_headline") . '</h2>';
					}

				?>
				<div class="archive-container grid-layout _3-grid">
					<?php
							$args	= array(
								"post_type"			=> "post",
								"posts_per_page"	=> 3
							);

							$loop	= new WP_Query($args);

							while ($loop->have_posts()) : $loop->the_post();
								get_template_part("template-parts/content", "archive");
							endwhile;

							wp_reset_query();
						?>
				</div>
				<a href="<?php echo get_post_type_archive_link('post'); ?>">
					<div class="cta-articles">Voir tous les articles</div>
				</a>
			</div>
		<?php } ?>
		<!-- End Blog -->

		<!-- Instagram -->
		<?php if (get_option("instagram_feed")) { ?>
			<div class="instagram">
				<?php if (get_option("instagram_url")) { ?>
					<a href="<?php echo get_option('instagram_url'); ?>" target="_blank">
						<h2 class="headline"><?php echo get_option("instagram_headline"); ?></h2>
					</a>
				<?php } else { ?>
					<h2 class="headline"><?php echo get_option("instagram_headline"); ?></h2>
				<?php
					}
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
