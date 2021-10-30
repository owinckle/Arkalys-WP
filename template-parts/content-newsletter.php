<div class="newsletter-container grid-layout _2-grid">
	<div>
		<h3><?php echo get_option("newsletter_headline") ?></h3>
		<p><?php echo get_option("newsletter_subtitle") ?></p>
	</div>
	<div>
		<form method="post" action="https://tantinotte-670ead.ingress-bonde.easywp.com/?na=s">
			<input type="hidden" name="nlang" value="" />
			<input class="text-field slim" type="email" name="ne" value="" required placeholder="Votre email" />
			<input class="submit-field" type="submit" value="S'abonner" />
		</form>
	</div>
</div>