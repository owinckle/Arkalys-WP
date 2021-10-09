<?php

	global $post;

?>

<div class="single-container">
	<div class="meta">
		<div class="author">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
			<p class="post-author"><?php echo get_the_author_meta("email"); ?></p>
			<div aria-label="Administrateur" data-hook="badge" class="_2G7W_">
				<svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 19 19" style="fill-rule:evenodd" class="blog-icon-fill">
					<path d="M15.3812,6.495914 L12.6789333,8.77258837 C12.6191333,8.84477644 12.5099333,8.85722265 12.4354,8.79997005 C12.4215333,8.79001308 12.4094,8.77756686 12.3998667,8.76429089 L9.78686667,6.14327115 C9.67766667,5.99225704 9.46186667,5.95491839 9.305,6.05863687 C9.26946667,6.08186981 9.23913333,6.11091099 9.21573333,6.14493065 L6.60013333,8.81075677 C6.5464,8.88626383 6.43893333,8.90534803 6.3592,8.85390366 C6.34446667,8.84394669 6.33146667,8.83233022 6.32106667,8.81905425 L3.61966667,6.50587098 C3.5018,6.36149485 3.28426667,6.33577266 3.13346667,6.44861837 C3.0494,6.51167921 3,6.60792997 3,6.70998895 L4,14 L15,14 L16,6.70169148 C16,6.51831719 15.8448667,6.36979232 15.6533333,6.36979232 C15.5476,6.36979232 15.4470667,6.41625821 15.3812,6.495914 Z"></path>
				</svg>
			</div>
		</div>
		<div class="separator"></div>
		<p class="post-date"><?php the_date(); ?></p>
		<div class="separator"></div>
		<p class="post-read-time"><?php echo reading_time($post); ?></p>
	</div>
	<h3 class="post-title"><?php single_post_title(); ?></h3>

	<div class="content">
		<?php
			the_content();
		?>
	</div>
</div>