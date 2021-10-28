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
<body>
	<div class="header-container">
		<?php
			if (get_option("announcement")) {
				$announcement	= get_option("announcement");
		?>

		<div class="announcement"><?php echo $announcement ?></div>

		<?php
			}
		?>
		<header class="nav">
			<!-- Logo -->
			<?php
				if (function_exists("the_custom_logo")) {
					$custom_logo_id	= get_theme_mod("custom_logo");
					$logo			= wp_get_attachment_image_src($custom_logo_id, "full");
				}
			?>
			<a href="<?php echo get_home_url(); ?>">
				<img class="logo" src="<?php echo $logo[0] ?>" alt="logo" />
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
		</header>
		<div class="burger-container">
			<div class="burger-menu"></div>
		</div>
	</div>