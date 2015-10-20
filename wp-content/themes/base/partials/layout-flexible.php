<?php

// Loop through rows.
while (have_rows('flexible'))
{
	// Initiate the row.
	the_row();

	// Switch based on layout type.
	get_template_part('partials/flexible', get_row_layout());
}