<?php

// Image sizes.
	add_image_size('2560x1440', 2560, 1440, true);
	add_image_size('1280x720', 1280, 720, true);
	add_image_size('1200x600', 1200, 600);
	add_image_size('800x400', 800, 400);
    add_image_size('600x600', 600, 600);
    add_image_size('600x400', 600, 400);
    add_image_size('400x200', 400, 200);
    add_image_size('300x300', 300, 300);
    add_image_size('300x200', 300, 200);
	add_image_size('320x180', 320, 180);

// Srcset helper - device pixel ratio only

    /* Usage example: <img <?php srcset('image_id', 'image_size'); ?> class="a class"> */

    function srcset($img_id, $img_size) 
    {
        $image = get_field($img_id);
        $size = $img_size;
        $size_2x = $img_size.'_2x';
        $thumb = $image['sizes'][$size];
        $thumb_2x = $image['sizes'][$size_2x];

        echo 'src="'.$thumb.'" srcset="'.$thumb.' 1x, '.$thumb_2x.' 2x"';
    }

// Change JPEG upload compression
    add_filter( 'jpeg_quality', create_function( '', 'return 70;' ) );

// Rewrite local image paths
    if (isset($_GET['rewrite_image'])) {
        function rewrite_image_url($rewrite)
        {
            $base_path = site_url();
            global $environments;
            $rewrite_path = $environments['test'] . 'candidsky.com/jrbd';
            $rewrite = str_replace($base_path . '/wp-content/uploads/', 'http://' . $rewrite_path . '/wp-content/uploads/', $rewrite);
            return $rewrite;
        }
        add_filter('wp_get_attachment_url', 'rewrite_image_url');
    }