<section class="card card--service">
	<a href="<?php the_permalink() ?>">
		<figure>
			<div class="card__image">
				<span class="icon icon--<?php echo get_field('service_icon'); ?> card__icon"></span>
			</div><!--/.card__image -->
			<figcaption<?php if ( get_the_excerpt() ) echo ' class="card--has-excerpt"'; ?>>
				<h1 class="heading card__heading"><?php echo esc_html(get_the_title()); ?></h1>
				<?php if ( get_the_excerpt() ) : ?>
				  <p class="description card__description flush--bottom"><?php echo esc_html(get_the_excerpt()); ?></p>
				<?php endif; ?>
			</figcaption>
		</figure>
	</a>
</section>