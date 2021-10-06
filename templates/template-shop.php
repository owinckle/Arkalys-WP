<?php
	
	/*
	* Template Name: Shop
	*/

	get_header();
?>
	<div class="main-container woocommerce shop">
		<div class="grid-layout _4-grid">
			<?php
				$args	= array(
					"post_type"			=> "product",
					"posts_per_page"	=> -1
				);

				$loop	= new WP_Query($args);

				while ($loop->have_posts()) : $loop->the_post();
					get_template_part("template-parts/content", "shop");
				endwhile;

				wp_reset_query();
			?>
		</div>
	</div>

<?php
	get_footer();
?>
