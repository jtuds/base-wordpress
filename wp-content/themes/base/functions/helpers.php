<?php

// Posts.

    // Get a title
    function title_field($title)
    {
        $title = get_field($title);

        if ( variable_exists($title) ) echo '<h1 class="panel__heading text-secondary">' . $title . '</h1>';
    }
  

    // Get some text
    function text_field($text, $set_width = false, $wrapper = false)
    {
        $text = get_field($text);
        $set_width = ( $set_width === true ? 'class="panel__text"' : false );
        if ( $wrapper === true )
        {
            if ( variable_exists($text) ) echo '<p ' . $set_width . '>' . $text . '</p>';
        }
        else echo $text;
    }

    // Get and format the excerpt
    function get_excerpt($count)
    {
        $permalink = get_permalink($post->ID);
        $excerpt = get_the_content();
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, $count);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt = $excerpt . '... <a href="' . $permalink . '">Read more</a>';
        return $excerpt;
    }


    // Truncate words
    function truncate_words($text, $limit, $ellipsis = '&hellip;')
    {
        $words = preg_split("/[\n\r\t ]+/", $text, $limit + 1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_OFFSET_CAPTURE);

        if (count($words) > $limit) {
            end($words); //ignore last element since it contains the rest of the string
            $last_word = preg_replace("/\.$/", "", prev($words));

            $text =  substr($text, 0, $last_word[1] + strlen($last_word[0])) . $ellipsis;
        }
        return $text;
    }


    // Dummy text used throughout the site.
    function gimme_ipsum()
    {
        return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis placerat massa. Ut ac suscipit nulla. Quisque porta, massa at vehicula efficitur, arcu urna eleifend purus, id pharetra sem enim vel ligula.';
    }


    // Variable exists
    function variable_exists($variable)
    {
        return ! empty($variable) && $variable;
    }

    // Produce a pretty link from a post ID
    function dynamic_link($id, $return = false)
    {
        $link = get_permalink($id);
        if($return === true) return $link;
        else echo $link;
    }

// Misc.

    // Add page slug to body class, love this - Credit: Starkers Wordpress Theme
    function add_slug_to_body_class($classes)
    {
        global $post;
        if (is_home()) {
            $key = array_search('blog', $classes);
            if ($key > -1) {
                unset($classes[$key]);
            }
        } elseif (is_page()) {
            $classes[] = sanitize_html_class($post->post_name);
        } elseif (is_singular()) {
            $classes[] = sanitize_html_class($post->post_name);
        }

        return $classes;
    }
    add_filter('body_class', 'add_slug_to_body_class');


    // Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
    function remove_thumbnail_dimensions( $html )
    {
        $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
        return $html;
    }
    add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10);
    add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10);


    // Remove the <div> surrounding the dynamic navigation to cleanup markup
    function my_wp_nav_menu_args($args = '')
    {
        $args['container'] = false;
        return $args;
    }
    add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');


    // Set contact form success message
    function amgenna_change_grunion_success_message( $msg )
    {
    global $contact_form_message;
    return '<div><h2>' . 'Your enquiry was successfully sent' . '</h2><a href="' . get_permalink() . '">' . 'Go back ' . '</a></div>' . wp_kses($contact_form_message, array('br' => array(), 'blockquote' => array()));
    }
    add_filter( 'grunion_contact_form_success_message', 'amgenna_change_grunion_success_message' );


    // Detect blog pages
    function is_blog ()
    {
        global  $post;
        $posttype = get_post_type($post );
        return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
    }
    add_filter('nav_menu_css_class', 'mytheme_custom_type_nav_class', 10, 2);
    

    // Fixes an issue where the blog page is highlighted as a menu item for archives/singles of other post types.
    function mytheme_custom_type_nav_class($classes, $item)
    {
      $post_type = get_post_type();

      // Remove current_page_parent from classes if the current item is the blog page
      // Note: The object_id property seems to be the ID of the menu item's target.
      if ($post_type != 'post' && $item->object_id == get_option('page_for_posts')) {
          $current_value = "current_page_parent"; 
          $classes = array_filter($classes, function ($element) use ($current_value) { return ($element != $current_value); } );
      }

      // Now look for post-type-<name> in the classes. A menu item with this class
      // should be given a class that will highlight it.
      $this_type_class = 'post-type-' . $post_type;
      if (in_array( $this_type_class, $classes )) {       
          array_push($classes, 'current_page_parent');
      };

      return $classes;
    }
  
?>
