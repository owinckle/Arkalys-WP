<?php

/*
* Initialize ArkalysWP
*/
function ark_setup() {
	// Add dynamic title tag support
	add_theme_support("title-tag");
	add_theme_support("custom-logo");

	// Register menus
	$locations	= array(
		"primary" => "Default Menu",
		"footer" => "Footer Menu"
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
		<div class="wrap">
			<h1>ArkalysWP Settings</h1>
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
	add_menu_page("ArkalysWP Settings", "ArkalysWP Settings", "manage_options", "arkalys-settings", "ark_settings", null, 2);
}

add_action("admin_menu", "ark_admin");


/*
* Create the Twitter option field.
*/
function ark_twitter() {
	?>
		<input style="width:100%" type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
	<?php
}

/*
* Create the Facebook option field.
*/
function ark_facebook() {
	?>
		<input style="width:100%" type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
	<?php
}

/*
* Create the Instagram option field.
*/
function ark_instagram() {
	?>
		<input style="width:100%" type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>" />
	<?php
}

/*
* Create the Youtube option field.
*/
function ark_youtube() {
	?>
		<input style="width:100%" type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>" />
	<?php
}

/*
* Create the Announcement option field.
*/
function ark_announcement() {
	?>
		<input style="width:100%" type="text" name="announcement" id="announcement" value="<?php echo get_option('announcement'); ?>" />
	<?php
}

/*
* Create the Smart Slider 3 option field.
*/
function ark_slider() {
	?>
		<input type="number" name="slider" id="slider" value="<?php echo get_option('slider'); ?>" />
	<?php
}

/*
* Create the product gallery switch.
*/
function ark_product_gallery() {
	?>
		<input type="checkbox" name="product_gallery" id="product_gallery" value="1" <?php checked("1", get_option("product_gallery")); ?> />
	<?php
}

/*
* Create the instagram feed switch.
*/
function ark_instagram_feed() {
	?>
		<input type="checkbox" name="instagram_feed" id="instagram_feed" value="1" <?php checked("1", get_option("instagram_feed")); ?> />
	<?php
}

/*
* Create the instagram headline field.
*/
function ark_instagram_headline() {
	?>
		<input style="width:100%" type="text" name="instagram_headline" id="instagram_headline" value="<?php echo get_option('instagram_headline'); ?>" />
	<?php
}

/*
* Create the blog display switch.
*/
function ark_blog_display() {
	?>
		<input type="checkbox" name="blog_display" id="blog_display" value="1" <?php checked("1", get_option("blog_display")); ?> />
	<?php
}

/*
* Create the blog headline field.
*/
function ark_blog_headline() {
	?>
		<input style="width:100%" type="text" name="blog_headline" id="blog_headline" value="<?php echo get_option('blog_headline'); ?>" />
	<?php
}

/*
* Create the testimonials switch.
*/
function ark_testimonials() {
	?>
		<input type="checkbox" name="testimonials" id="testimonials" value="1" <?php checked("1", get_option("testimonials")); ?> />
	<?php
}

/*
* Create the testimonials headline field.
*/
function ark_testimonials_headline() {
	?>
		<input style="width:100%" type="text" name="testimonials_headline" id="testimonials_headline" value="<?php echo get_option('testimonials_headline'); ?>" />
	<?php
}

/*
* Display the custom theme options fields.
*/
function ark_admin_fields() {
	// Socials
	add_settings_section("socials", "Socials", null, "theme-options");
	
	add_settings_field("twitter_url", "Twitter URL", "ark_twitter", "theme-options", "socials");
	add_settings_field("facebook_url", "Facebook URL", "ark_facebook", "theme-options", "socials");
	add_settings_field("instagram_url", "Instagram URL", "ark_instagram", "theme-options", "socials");
	add_settings_field("youtube_url", "Youtube URL", "ark_youtube", "theme-options", "socials");

	register_setting("section", "twitter_url");
	register_setting("section", "facebook_url");
	register_setting("section", "instagram_url");
	register_setting("section", "youtube_url");

	// Customization
	add_settings_section("customization", "Customization", null, "theme-options");
	
	add_settings_field("announcement", "Announcement", "ark_announcement", "theme-options", "customization");

	register_setting("section", "announcement");

	// Homepage
	add_settings_section("homepage", "Homepage", null, "theme-options");

	add_settings_field("slider", "Smart Slider 3 ID", "ark_slider", "theme-options", "homepage");
	add_settings_field("product_gallery", "Product Gallery", "ark_product_gallery", "theme-options", "homepage");
	add_settings_field("instagram_feed", "Instagram Feed", "ark_instagram_feed", "theme-options", "homepage");
	add_settings_field("instagram_headline", "Instagram Headline", "ark_instagram_headline", "theme-options", "homepage");
	add_settings_field("blog_display", "Blog Display", "ark_blog_display", "theme-options", "homepage");
	add_settings_field("blog_headline", "Blog Headline", "ark_blog_headline", "theme-options", "homepage");
	add_settings_field("testimonials", "Testimonials", "ark_testimonials", "theme-options", "homepage");
	add_settings_field("testimonials_headline", "Testimonials Headline", "ark_testimonials_headline", "theme-options", "homepage");

	register_setting("section", "slider");
	register_setting("section", "product_gallery");
	register_setting("section", "instagram_feed");
	register_setting("section", "instagram_headline");
	register_setting("section", "blog_display");
	register_setting("section", "blog_headline");
	register_setting("section", "testimonials");
	register_setting("section", "testimonials_headline");
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
}


add_action("admin_notices", "ark_admin_messages");


/*
* Get article read time
*/
function reading_time() {
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
* Woocommerce
*/
function ark_woocommerce_support() {
	add_theme_support("woocommerce");
}

add_action("after_setup_theme", "ark_woocommerce_support");

?>