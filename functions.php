<?php

/*
* Initialize ArkalysWP
*/
function ark_setup() {
	// Add dynamic title tag support
	add_theme_support("title-tag");
	add_theme_support("custom-logo");
	add_theme_support("woocommerce");
	add_theme_support("wc-product-gallery-zoom");
    add_theme_support("wc-product-gallery-lightbox");
    add_theme_support("wc-product-gallery-slider");

	// Register menus
	$locations	= array(
		"primary" => "Default Menu",
		// "footer" => "Footer Menu",
		"mobile" => "Mobile Menu"
	);

	register_nav_menus($locations);
}

add_action("after_setup_theme", "ark_setup");
add_filter('run_wptexturize', '__return_false');

/*
* Register the styles
*/
function ark_register_style() {
	// Register styles
	$version	= wp_get_theme()->get("Version");
	wp_enqueue_style("arkalys-style", get_template_directory_uri() . "/style.css", array(), $version, "all");
}

add_action("wp_enqueue_scripts", "ark_register_style");

/*
* Create the theme settings.
*/
function ark_settings() {
	?>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
			input {
				font-family: "Exo", sans-serif !important;
			}
			:root {
				--brand: #ea1646;
				--primary: #12141d;
				--secondary: #20222e;
				--third: #636488;
				--sub: #b6b6bd;

				/* Colors */
				--danger: #ff4b54;
				--warning: #ff8f00;
				--success: #33d69f;

				/* Utils */
				--simple-boxshadow: 0 28px 10px -5px rgb(0 0 0 / 30%);
			}
			body::-webkit-scrollbar-thumb {
				background-color: var(--brand);
			}

			body::-webkit-scrollbar-track {
				background-color: #444;
			}

			body::-webkit-scrollbar {
				width: 9px;
			}
			#wpcontent {
				background: #12141d;
			}
			h1 {
				color: var(--brand);
			}
			h2 {
				color: #fff;
				margin-bottom: 0px;
				height: fit-content;
				background: var(--secondary);
				padding: 30px;
				padding-left: 15px;
			}
			.form-table th {
				color: rgba(255, 255, 255, .4);
			}
			input[type="text"], input[type="number"], select {
				height: 20px !important;
				padding: 10px !important;
				margin-left: -10px;
				background-color: var(--primary) !important;
				color: #fff !important;
				letter-spacing: 1px !important;
				border: none !important;
			}
			select {
				padding: 0px !important;
				width: 45px;
				text-align: center;
				background: var(--primary) !important;
			}
			input:focus, select:focus {
				border-color: var(--brand) !important;
				box-shadow: 0 0 0 1px var(--brand) !important;
			}
			.form-table th {
				padding-left: 15px;
			}
			.form-table {
				height: fit-content;
				background: var(--secondary);
				padding: 30px;
				box-shadow: var(--simple-boxshadow);
				margin-top: 0px;
			}
			.notice-error {
				background: var(--brand);
				border: none;
				color: #fff;
				box-shadow: 0 0 10px 0px rgb(0 0 0 / 30%);
			}
			.notice-success {
				background: var(--success);
				border: none;
				color: #fff;
				box-shadow: 0 0 10px 0px rgb(0 0 0 / 30%);
			}
			a {
				color: #fff !important;
			}
			input[type="submit"] {
				cursor: pointer;
				height: 3rem;
				border-radius: 3px !important;
				border-style: solid !important;
				overflow: hidden;
				position: relative;
				border-width: 0 !important;
				outline: 0;
				white-space: nowrap !important;
				border-color: transparent !important;
				color: #fff !important;
				padding: 0 30px !important;
				background: var(--brand) !important;
				background-image: linear-gradient(135deg, #fff 50%, transparent 51%) !important;
				background-size: 100px 100px !important;
				background-position: -50px -50px !important;
				background-repeat: no-repeat !important;
				transition: background ease 0.3s;
				box-shadow: var(--simple-boxshadow);
				font-weight: 700;
				text-transform: uppercase;
				font-size: 13px !important;
				letter-spacing: 1px;
				display: flex !important;
				align-items: center;
			}
			input[type="submit"]:hover {
				background-size: 200% 200% !important;
				background-position: 0px 0px !important;
				color: var(--brand) !important;
			}
		</style>
		<div class="wrap">
			<h1>Arkalys Settings</h1>
			<form method="post" action="options.php">
				<?php
					settings_fields("section");
					do_settings_sections("theme-options");
					submit_button(); 
				?>
			</form>
		</div>
	<?php
}

/*
* Register the theme admin page.
*/
function ark_admin() {
	add_menu_page("Arkalys Settings", "Arkalys Settings", "manage_options", "arkalys-settings", "ark_settings", null, 3);
}

add_action("admin_menu", "ark_admin");

/*
* Create the Twitter option field.
*/
function ark_twitter() {
	?>
		<input
			style="width:100%"
			type="text"
			name="twitter_url"
			id="twitter_url"
			value="<?php echo get_option('twitter_url'); ?>"
		/>
	<?php
}

/*
* Create the Facebook option field.
*/
function ark_facebook() {
	?>
		<input
			style="width:100%"
			type="text"
			name="facebook_url"
			id="facebook_url"
			value="<?php echo get_option('facebook_url'); ?>"
		/>
	<?php
}

/*
* Create the Instagram option field.
*/
function ark_instagram() {
	?>
		<input
			style="width:100%"
			type="text"
			name="instagram_url"
			id="instagram_url"
			value="<?php echo get_option('instagram_url'); ?>"
		/>
	<?php
}

/*
* Create the Youtube option field.
*/
function ark_youtube() {
	?>
		<input
			style="width:100%"
			type="text"
			name="youtube_url"
			id="youtube_url"
			value="<?php echo get_option('youtube_url'); ?>"
		/>
	<?php
}

/*
* Create the Announcement option field.
*/
function ark_announcement() {
	?>
		<input
			style="width:100%"
			type="text"
			name="announcement"
			id="announcement"
			value="<?php echo get_option('announcement'); ?>"
		/>
	<?php
}

/*
* Create the Smart Slider 3 option field.
*/
function ark_slider() {
	?>
		<input
			type="number"
			name="slider"
			id="slider"
			value="<?php echo get_option('slider'); ?>"
		/>
	<?php
}

/*
* Create the product gallery switch.
*/
function ark_product_gallery() {
	?>
		<input
			type="checkbox"
			name="product_gallery"
			id="product_gallery"
			value="1" <?php checked("1", get_option("product_gallery")); ?>
		/>
	<?php
}

/*
* Create the instagram feed switch.
*/
function ark_instagram_feed() {
	?>
		<input
			type="checkbox"
			name="instagram_feed"
			id="instagram_feed"
			value="1" <?php checked("1", get_option("instagram_feed")); ?>
		/>
	<?php
}

/*
* Create the instagram headline field.
*/
function ark_instagram_headline() {
	?>
		<input
			style="width:100%"
			type="text"
			name="instagram_headline"
			id="instagram_headline"
			value="<?php echo get_option('instagram_headline'); ?>"
		/>
	<?php
}

/*
* Create the blog display switch.
*/
function ark_blog_display() {
	?>
		<input
			type="checkbox"
			name="blog_display"
			id="blog_display"
			value="1" <?php checked("1", get_option("blog_display")); ?>
		/>
	<?php
}

/*
* Create the blog headline field.
*/
function ark_blog_headline() {
	?>
		<input
			style="width:100%"
			type="text"
			name="blog_headline"
			id="blog_headline"
			value="<?php echo get_option('blog_headline'); ?>"
		/>
	<?php
}

/*
* Create the testimonials switch.
*/
function ark_testimonials() {
	?>
		<input
			type="checkbox"
			name="testimonials"
			id="testimonials"
			value="1"
			<?php checked("1", get_option("testimonials")); ?>
		/>
	<?php
}

/*
* Create the testimonials headline field.
*/
function ark_testimonials_headline() {
	?>
		<input
			style="width:100%"
			type="text"
			name="testimonials_headline"
			id="testimonials_headline"
			value="<?php echo get_option('testimonials_headline'); ?>"
		/>
	<?php
}

/*
* Create the newsletter switch.
*/
function ark_newsletter() {
	?>
		<input
			type="checkbox"
			name="newsletter"
			id="newsletter"
			value="1"
			<?php checked("1", get_option("newsletter")); ?>
		/>
	<?php
}

/*
* Create the newsletter headline field.
*/
function ark_newsletter_headline() {
	?>
		<input
			style="width:100%"
			type="text"
			name="newsletter_headline"
			id="newsletter_headline"
			value="<?php echo get_option('newsletter_headline'); ?>"
		/>
	<?php
}

/*
* Create the newsletter subtitle field.
*/
function ark_newsletter_subtitle() {
	?>
		<input
			style="width:100%"
			type="text"
			name="newsletter_subtitle"
			id="newsletter_subtitle"
			value="<?php echo get_option('newsletter_subtitle'); ?>"
		/>
	<?php
}

/*
* Create the title font-size field.
*/
function ark_blog_title_fs() {
	?>
		<input
			type="number"
			name="blog_title_fs"
			id="blog_title_fs"
			value="<?php echo get_option('blog_title_fs'); ?>"
		/>
	<?php
}

/*
* Create the title font-weight field.
*/
function ark_blog_title_fw() {
	?>
		<select name="blog_title_fw" id="blog_title_fw" value="<?php echo get_option('blog_title_fw'); ?>">
			<option value="100" <?php if (get_option('blog_title_fw') == "100") echo "selected='selected'";?> >100</option>
			<option value="200" <?php if (get_option('blog_title_fw') == "200") echo "selected='selected'";?> >200</option>
			<option value="300" <?php if (get_option('blog_title_fw') == "300") echo "selected='selected'";?> >300</option>
			<option value="400" <?php if (get_option('blog_title_fw') == "400") echo "selected='selected'";?> >400</option>
			<option value="500" <?php if (get_option('blog_title_fw') == "500") echo "selected='selected'";?> >500</option>
			<option value="600" <?php if (get_option('blog_title_fw') == "600") echo "selected='selected'";?> >600</option>
			<option value="700" <?php if (get_option('blog_title_fw') == "700") echo "selected='selected'";?> >700</option>
			<option value="800" <?php if (get_option('blog_title_fw') == "800") echo "selected='selected'";?> >800</option>
			<option value="900" <?php if (get_option('blog_title_fw') == "900") echo "selected='selected'";?> >900</option>
		</select>
	<?php
}

/*
* Create the excerpt font-size field.
*/
function ark_blog_excerpt_fs() {
	?>
		<input
			type="number"
			name="blog_excerpt_fs"
			id="blog_excerpt_fs"
			value="<?php echo get_option('blog_excerpt_fs'); ?>"
		/>
	<?php
}

/*
* Create the excerpt font-weight field.
*/
function ark_blog_excerpt_fw() {
	?>
		<select name="blog_excerpt_fw" id="blog_excerpt_fw" value="<?php echo get_option('blog_excerpt_fw'); ?>">
			<option value="100" <?php if (get_option('blog_excerpt_fw') == "100") echo "selected='selected'";?> >100</option>
			<option value="200" <?php if (get_option('blog_excerpt_fw') == "200") echo "selected='selected'";?> >200</option>
			<option value="300" <?php if (get_option('blog_excerpt_fw') == "300") echo "selected='selected'";?> >300</option>
			<option value="400" <?php if (get_option('blog_excerpt_fw') == "400") echo "selected='selected'";?> >400</option>
			<option value="500" <?php if (get_option('blog_excerpt_fw') == "500") echo "selected='selected'";?> >500</option>
			<option value="600" <?php if (get_option('blog_excerpt_fw') == "600") echo "selected='selected'";?> >600</option>
			<option value="700" <?php if (get_option('blog_excerpt_fw') == "700") echo "selected='selected'";?> >700</option>
			<option value="800" <?php if (get_option('blog_excerpt_fw') == "800") echo "selected='selected'";?> >800</option>
			<option value="900" <?php if (get_option('blog_excerpt_fw') == "900") echo "selected='selected'";?> >900</option>
		</select>
	<?php
}

/*
* Create the excerpt font-size field.
*/
function ark_blog_date_fs() {
	?>
		<input
			type="number"
			name="blog_date_fs"
			id="blog_date_fs"
			value="<?php echo get_option('blog_date_fs'); ?>"
		/>
	<?php
}

/*
* Create the excerpt font-weight field.
*/
function ark_blog_date_fw() {
	?>
		<select name="blog_date_fw" id="blog_date_fw" value="<?php echo get_option('blog_date_fw'); ?>">
			<option value="100" <?php if (get_option('blog_date_fw') == "100") echo "selected='selected'";?> >100</option>
			<option value="200" <?php if (get_option('blog_date_fw') == "200") echo "selected='selected'";?> >200</option>
			<option value="300" <?php if (get_option('blog_date_fw') == "300") echo "selected='selected'";?> >300</option>
			<option value="400" <?php if (get_option('blog_date_fw') == "400") echo "selected='selected'";?> >400</option>
			<option value="500" <?php if (get_option('blog_date_fw') == "500") echo "selected='selected'";?> >500</option>
			<option value="600" <?php if (get_option('blog_date_fw') == "600") echo "selected='selected'";?> >600</option>
			<option value="700" <?php if (get_option('blog_date_fw') == "700") echo "selected='selected'";?> >700</option>
			<option value="800" <?php if (get_option('blog_date_fw') == "800") echo "selected='selected'";?> >800</option>
			<option value="900" <?php if (get_option('blog_date_fw') == "900") echo "selected='selected'";?> >900</option>
		</select>
	<?php
}


/*
* Display the custom theme options fields.
*/
function ark_admin_fields() {
	/*
	* Socials Section
	*/
	add_settings_section("socials", "Socials", null, "theme-options");
	
	add_settings_field("twitter_url", "Twitter URL", "ark_twitter", "theme-options", "socials");
	add_settings_field("facebook_url", "Facebook URL", "ark_facebook", "theme-options", "socials");
	add_settings_field("instagram_url", "Instagram URL", "ark_instagram", "theme-options", "socials");
	add_settings_field("youtube_url", "Youtube URL", "ark_youtube", "theme-options", "socials");

	register_setting("section", "twitter_url");
	register_setting("section", "facebook_url");
	register_setting("section", "instagram_url");
	register_setting("section", "youtube_url");

	/*
	* Customization Section
	*/
	add_settings_section("customization", "Customization", null, "theme-options");
	
	add_settings_field("announcement", "Announcement", "ark_announcement", "theme-options", "customization");

	register_setting("section", "announcement");

	/*
	* Homepage Section
	*/
	add_settings_section("homepage", "Homepage", null, "theme-options");

	// Slider
	add_settings_field("slider", "Smart Slider 3 ID", "ark_slider", "theme-options", "homepage");
	register_setting("section", "slider");
	
	// Product Gallery
	add_settings_field("product_gallery", "Product Gallery", "ark_product_gallery", "theme-options", "homepage");
	register_setting("section", "product_gallery");
	
	// Instagram
	add_settings_field("instagram_feed", "Instagram Feed", "ark_instagram_feed", "theme-options", "homepage");
	add_settings_field("instagram_headline", "Instagram Headline", "ark_instagram_headline", "theme-options", "homepage");
	register_setting("section", "instagram_feed");
	register_setting("section", "instagram_headline");
	
	// Blog Display
	add_settings_field("blog_display", "Blog Display", "ark_blog_display", "theme-options", "homepage");
	add_settings_field("blog_headline", "Blog Headline", "ark_blog_headline", "theme-options", "homepage");
	register_setting("section", "blog_display");
	register_setting("section", "blog_headline");
	
	// Testimonials
	add_settings_field("testimonials", "Testimonials", "ark_testimonials", "theme-options", "homepage");
	add_settings_field("testimonials_headline", "Testimonials Headline", "ark_testimonials_headline", "theme-options", "homepage");
	register_setting("section", "testimonials");
	register_setting("section", "testimonials_headline");

	// Newsletter
	add_settings_field("newsletter", "Newsletter", "ark_newsletter", "theme-options", "homepage");
	add_settings_field("newsletter_headline", "Newsletter Headline", "ark_newsletter_headline", "theme-options", "homepage");
	add_settings_field("newsletter_subtitle", "Newsletter Subtitle", "ark_newsletter_subtitle", "theme-options", "homepage");
	register_setting("section", "newsletter");
	register_setting("section", "newsletter_headline");
	register_setting("section", "newsletter_subtitle");

	/*
	* Blog Section
	*/
	add_settings_section("blog", "Blog", null, "theme-options");

	// Blog Title
	add_settings_field("blog_title_fs", "Blog Title Font Size (PX)", "ark_blog_title_fs", "theme-options", "blog");
	add_settings_field("blog_title_fw", "Blog Title Font Weight", "ark_blog_title_fw", "theme-options", "blog");
	register_setting("section", "blog_title_fs");
	register_setting("section", "blog_title_fw");

	// Blog Exerpt
	add_settings_field("blog_excerpt_fs", "Blog Excerpt Font Size (PX)", "ark_blog_excerpt_fs", "theme-options", "blog");
	add_settings_field("blog_excerpt_fw", "Blog Excerpt Font Weight", "ark_blog_excerpt_fw", "theme-options", "blog");
	register_setting("section", "blog_excerpt_fs");
	register_setting("section", "blog_excerpt_fw");

	// Blog Date
	add_settings_field("blog_date_fs", "Blog Date Font Size (PX)", "ark_blog_date_fs", "theme-options", "blog");
	add_settings_field("blog_date_fw", "Blog Date Font Weight", "ark_blog_date_fw", "theme-options", "blog");
	register_setting("section", "blog_date_fs");
	register_setting("section", "blog_date_fw");
}

add_action("admin_init", "ark_admin_fields");

/*
* Display important information to the admins
*/
function ark_admin_messages() {
	include_once(ABSPATH."wp-admin/includes/plugin.php");
	if (!is_plugin_active("smart-slider-3/smart-slider-3.php")) {
		echo '<div id="alert" class="error">';
		echo '<p>This theme requires you to install <a target="_blank" href="https://wordpress.org/plugins/smart-slider-3/">Smart Slider 3.</a></p>';
		echo '</div>';
	}

	if (!is_plugin_active("site-reviews/site-reviews.php")) {
		echo '<div id="alert" class="error">';
		echo '<p>This theme requires you to install <a target="_blank" href="https://wordpress.org/plugins/site-reviews/">Site Reviews.</a></p>';
		echo '</div>';
	}

	if (!is_plugin_active("side-cart-woocommerce/xoo-wsc-main.php")) {
		echo '<div id="alert" class="error">';
		echo '<p>This theme requires you to install <a target="_blank" href="https://wordpress.org/plugins/side-cart-woocommerce/">Side Cart Woocommerce.</a></p>';
		echo '</div>';
	}
}


add_action("admin_notices", "ark_admin_messages");


/*
* Get article read time
*/
function reading_time($post) {
	$content = get_post_field( 'post_content', $post->ID );
	$word_count = str_word_count( strip_tags( $content ) );
	$readingtime = ceil($word_count / 200);
	
	if ($readingtime == 1) {
		$timer = " minute";
	} else {
		$timer = " minutes";
	}
	
	$totalreadingtime = $readingtime . $timer;
	return $totalreadingtime;
}

/*
* Custom Woocommerce hooks
*/
function ark_echo_qty_before_add_cart() {
	echo '<div class="qty-container"><div class="qty-label">Quantity</div>';
}

function ark_echo_qty_after_add_cart() {
	echo '</div>';
}

function ark_echo_before_after_single_product_summary() {
	echo '<div class="info-container">';
}

function ark_echo_before_before_similar_product() {
	echo '</div>';
}

add_action("woocommerce_before_add_to_cart_quantity", "ark_echo_qty_before_add_cart");
add_action("woocommerce_after_add_to_cart_quantity", "ark_echo_qty_after_add_cart");
add_action("woocommerce_after_single_product_summary", "ark_echo_before_after_single_product_summary", 5);
add_action("woocommerce_after_single_product_summary", "ark_echo_before_before_similar_product");
