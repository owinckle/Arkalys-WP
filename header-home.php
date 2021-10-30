<!DOCTYPE html>
<html>
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Arkalys">
	<link rel="shortcut icon" href="wp-content/themes/ArkalysWP/assets/images/logo.png">
	<script src="https://kit.fontawesome.com/ce3d0f4b27.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<?php
		wp_head();
	?>
</head>
<body class="home-body">
	<?php

		wp_nav_menu(
			array(
				"menu" => "mobile",
				"container" => "",
				"theme_location" => "mobile",
				"items_wrap" => '<ul class="mobile-menu">%3$s</ul>'
			)
		);

	?>
	<div class="header-container">
		<?php
			if (get_option("announcement")) {
				$announcement	= get_option("announcement");
		?>

		<div class="announcement"><?php echo $announcement ?></div>

		<?php
			}
		?>
		<header class="nav home-nav">
			<!-- Logo -->
			<a href="<?php echo get_home_url(); ?>">
				<img class="logo" src="https://tantinotte-670ead.ingress-bonde.easywp.com/wp-content/uploads/2021/10/6f384b472fcff3b4da6fc31b40a82d78.png" alt="logo" />
			</a>
			<!-- End Logo -->

			<!-- Primary Menu -->
			<?php

				wp_nav_menu(
					array(
						"menu" => "primary",
						"container" => "",
						"theme_location" => "primary",
						"items_wrap" => '<ul>%3$s</ul>'
					)
				);

			?>
			<!-- End Primary Menu -->

			<!-- Mobile Menu -->
			<div class="mobile-menu-btn-container">
				<div class="mobile-menu-btn"></div>
				<div class="mobile-menu-btn"></div>
				<div class="mobile-menu-btn"></div>
			</div>
			<!-- End Mobile Menu -->
		</header>
	</div>