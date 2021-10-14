<?php
	/*
	* Template Name: Points de vente
	*/
	get_header();
?>

	<div class="main-container">
		<div class="tables-container grid-layout _4-grid">
			<div>
				<h2 class="headline">En Bretagne</h2>
				<?php
					echo do_shortcode("[table id=1 /]");
				?>
			</div>

			<div>
				<h2 class="headline">Ailleurs en France</h2>
				<?php
					echo do_shortcode("[table id=1 /]");
				?>
			</div>

			<div>
				<h2 class="headline">Boutiques en ligne</h2>
				<?php
					echo do_shortcode("[table id=1 /]");
				?>
			</div>

			<div>
				<h2 class="headline">En Europe</h2>
				<?php
					echo do_shortcode("[table id=1 /]");
				?>
			</div>
		</div>
	</div>

<?php
	get_footer();
?>
