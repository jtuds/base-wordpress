<?php
	if ( function_exists('yoast_breadcrumb') ):

		echo '<div class="breadcrumbs breadcrumbs--yoast">';
				yoast_breadcrumb();
		echo '</div>';

	endif;
?>