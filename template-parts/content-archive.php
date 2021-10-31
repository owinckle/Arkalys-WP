<style type="text/css">
	.archive-container .article .date {
		font-size: <?php  echo get_option("blog_date_fs"); ?>px;
		font-weight: <?php  echo get_option("blog_date_fw"); ?>;
	}
	.archive-container .article .title {
		font-size: <?php  echo get_option("blog_title_fs"); ?>px;
		font-weight: <?php  echo get_option("blog_title_fw"); ?>;
	}
	.archive-container .article .excerpt {
		font-size: <?php  echo get_option("blog_excerpt_fs"); ?>px;
		font-weight: <?php  echo get_option("blog_excerpt_fw"); ?>;
	}
</style>
<a class="article" href="<?php the_permalink(); ?>">
	<img class="thumbnail" src="<?php the_post_thumbnail_url(); ?>">
	<div class="meta">
		<div class="date"><?php echo get_the_date(); ?></div>
		<div class="title"><?php the_title(); ?></div>
		<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
	</div>
</a>
