<?php
	$id		= get_the_ID();
	$product	= wc_get_product($id);
	$title		= get_the_title();
	$price		= wc_price($product->get_price());
	$permalink	= get_permalink($product->ID);
	$rating		= $product->get_average_rating();
	$count		= $product->get_rating_count();
?>

<a class="product" href="<?php echo $permalink; ?>">
	<img class="thumbnail" src="<?php the_post_thumbnail_url(); ?>" />
	<h2 class="title"><?php echo $title; ?></h2>
	<div class="meta">
		<div class="rating-container">
			<?php echo wc_get_rating_html($rating, $count); ?>
			<span class="rating-count">( <?php echo $count; ?> avis )</span>
		</div>
		<span class="price"><?php echo $price; ?></span>
	</div>
</a>