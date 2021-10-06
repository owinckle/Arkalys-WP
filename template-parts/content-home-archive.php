<a class="article" href="<?php the_permalink(); ?>">
	<img class="thumbnail" src="<?php the_post_thumbnail_url(); ?>">
	<div class="date"><?php echo get_the_date(); ?></div>
	<div class="title"><?php the_title(); ?></div>
	<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
</a>
