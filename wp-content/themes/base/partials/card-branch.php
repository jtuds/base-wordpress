<section class="card card--branch">
	<a href="<?php echo get_the_permalink() . (isset($_GET['postcode']) ? '?postcode=' . str_replace('\\', '', $_GET['postcode']) : '' ); ?>">
		<figure>
			<div class="card__image">
				<?php
				// If there is gallery images
				if(have_rows('branch_gallery'))
				{
					// Get the first galllery image
					$gallery = get_field('branch_gallery');
					$gallery_main_image = $gallery[0]['branch_gallery_image'];

					// Set image alt text
					$gallery_main_image_alt = ($gallery_main_image['alt'] != '' ? $gallery_main_image['alt'] : "Gallery image");

					// Grab the thumbnail version of the image
					$gallery_main_image = $gallery_main_image['sizes']['thumbnail'];

					// Output the image
					echo '<img class="gallery__image branch__gallery__image" src="' . $gallery_main_image . '" alt="' . $gallery_main_image_alt . '">';
				}
				else
				{
					// Use a placeholder image if no gallery image exists
					echo '<img src="' . get_template_directory_uri() . '/dist/images/placeholder.png">';
				}
				?>
			</div><figcaption>
				<h1 class="heading card__heading"><?php echo esc_html(get_the_title()); ?></h1>
				<div class="description card__description"><?php
  				// Check if the branch single has flexible content
  				if (have_rows('flexible'))
  				{
  					// Loop through rows.
  					while (have_rows('flexible'))
  					{
  						// Initiate the row.
  						the_row();
  
  						// If there is an address field
  						if (get_row_layout() == 'address')
  						{
  							// Output the address city field
  							$html = '<div class="branch__address">';
  							$address = get_sub_field('address');
  
  							$address = explode(',', $address);
  
  							foreach ($address as $a) $html .= $a . '';
  							if (isset($post->distance)) $html .= '<span class="branch__distance">' . $post->distance . ' Miles</span>';
  							$html .= '</div>';
  
  							echo $html;
  						}
  					}
  				}
  				 

					// Get list of services for this branch
					$services = get_field('branch_services');

					// If branch has services
/*
					if ($services)
					{
						$html = '<ul class="branch__services">';

						// List the services
						foreach ($services  as $service)
						{
							// Grab the link to the service
							$permalink = get_permalink($service->ID);

							$html .= '<li>' . $service->post_title . '</li>';
						}

						$html .= '</ul>';

						echo $html;
					}
*/
					?></div><!--/.card__description -->
			</figcaption>
		</figure>
	</a>
</section>