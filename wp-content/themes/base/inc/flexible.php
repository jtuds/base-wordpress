<?php 
	// Loop through rows.
	while (have_rows('flexible_content'))
	{

		// Load the row.
		the_row();

		// Switch based on layout type.
		$type = get_row_layout();

		if ( $type === 'cta_no_title' )
		{

			include ("flexibly_blocks/cta-no-title.php");
		}
		else if ( $type === 'cta_with_title' )
		{
		
			include ("flexibly_blocks/cta-with-title.php");
		}
		else if ( $type === 'feefo' )
		{
			
			include ("flexibly_blocks/feefo.php");
		}
		else if ( $type === 'testimonials_slider' )
		{

			include ("flexibly_blocks/testimonials-slider.php");
		}
		else if ( $type === 'menu' )
		{
		
			// Loop through menu items.
			if (have_rows('menu'))
			{
				$menu_list = array();

				while (have_rows('menu'))
				{
					the_row();

					$item_text = get_sub_field( 'link_label' );
					$item_link = get_sub_field( 'link' );

					$menu_list[] = array($item_link, $item_text);
				}

				include ("flexibly_blocks/menu.php");
			}

		}
		else if ( $type === 'form' )
		{
		
			include ("flexibly_blocks/form.php");
		}

	} // Endwhile

?>
