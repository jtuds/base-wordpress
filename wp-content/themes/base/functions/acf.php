<?php

// Add ACF options page
if(function_exists('acf_add_options_page'))
{
    acf_add_options_page(array(
        'page_title'    => 'Sitewide Content',
        'menu_title'    => 'Sitewide Content',
        'menu_slug'     => 'sitewide-content',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}