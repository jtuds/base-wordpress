<?php
	switch (get_sub_field('style'))
	{
		case 'subtle': $class = 'panel panel--subtle'; break;
		case 'strong': $class = 'panel panel--strong'; break;
		default: $class = 'panel';
	}
?>
<section class="<?php echo $class; ?>">

	<?php if ($title = get_sub_field('title')) echo '<h1 class="heading">' . $title . '</h1>'; ?>

	<div class="grid">

		<div class="grid__item one-whole">
			<figure class="image flexible__image">
				<?php
					if ($image = get_sub_field('image')) echo '<img src="' . esc_url($image['sizes']['600x600']) . '" alt="' . esc_attr($image['alt']) . '">';
					if ($caption = get_sub_field('caption')) echo '<figcaption class="flexible__image__caption text--center">' . esc_html($caption) . '</figcaption>';
				?>
			</figure>
		</div><!--/.grid__item -->

	</div><!--/.grid -->

</section>