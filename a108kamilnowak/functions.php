<?php

// Add Shortcode
function youtube_shortcode($atts) {

    // Attributes
    $default_link = 'https://www.youtube.com/watch?v=mIYzp5rcTvU&t=989s';
    $atts = shortcode_atts(
        array(
            'link'   => $default_link,
            'width'  => '100%',
            'height' => '360px',
        ), $atts
    );
    
    // parse link
    if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $atts['link'], $match)) {
        $link = 'https://www.youtube.com/embed/'.$match[1].'';
    } else {
        $link = $default_link;
    }
//    return 'Video';
    return '<iframe style="width: '.$atts['width'].'; height: '.$atts['height'].'; " src="'.$link.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}

add_shortcode('youtube', 'youtube_shortcode');
