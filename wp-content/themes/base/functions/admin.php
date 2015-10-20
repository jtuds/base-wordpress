<?php

// Hide update notifications from all users except those defined below
function check_current_username_and_hide_updates()
{
    $user = wp_get_current_user();

    if($user && isset($user->user_login) && 'info@candidsky.com' != $user->user_login)
    {
        function wphidenag() {
            remove_action( 'admin_notices', 'update_nag', 3 );
        }
        add_action('admin_menu','wphidenag');

        function wphidenagcss() {
            echo '<style>
            .update-count, .plugin-count {
                display:none !important;
            }
          </style>';
        }
        add_filter('admin_head','wphidenagcss');
    }
}
add_action('admin_init', 'check_current_username_and_hide_updates');

