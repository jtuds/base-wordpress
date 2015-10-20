<?php
// Site and Theme Paths.

    // Returns or echo URLs
    function getThemePath($return = false)
    {
        $url = get_template_directory_uri();
        if ($return === true) return $url;
        else echo $url;
    }
    
    $themePath = getThemePath(true);

    function getBasePath($return = false)
    {
        $url = site_url();
        if ($return === true) return $url;
        else echo $url;
    }
    
    $basePath = getBasePath(true);

    function getImagePath($return = false)
    {
        $url = get_template_directory_uri() . '/dist/images';
        if ($return === true) return $url;
        else echo $url;
    }

    $imagePath = getImagePath(true);

    function dist_url()
    {
        $url = get_template_directory_uri() . '/dist';
        if ($return === true) return $url;
        else echo $url;
    }