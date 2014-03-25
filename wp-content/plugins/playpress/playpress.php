<?php
/*
Plugin name: PlayPress
Plugin URI: http://joshuagoodwin.com/playpress
Version: 1.2.1
Description: A JavaScript-free, non--Flash-dependent audio player, fortified with HTML5 vitamins and minerals. [audio mp3="example"]
Author: Joshua Goodwin
Author URI: http://joshuagoodwin.com
License: MIT
*/
function playpress_func($atts)
{
    extract(
        shortcode_atts(
            array('mp3'=>'', 'ogg'=>'', 'title'=>false, 'artist'=>false), $atts
        )
    );

    STATIC $i = 0;
    $i++;

    $flash_parameters = 'soundFile=' . $mp3 . '&playerID=' . $i;
    if ($title === '' || $artist === '') {
        $flash_parameters .= '&noinfo=yes';
    }
    if ($title !== false) {
        $flash_parameters .= '&titles=' . $title;
    }
    if ($artist !== false) {
        $flash_parameters .= '&artists=' . $artist;
    }


/*
You can customise the Flash player like this:

    $flash_parameters .= '&setting=value&setting=value';

Some popular settings and their default values (see http://wpaudioplayer.com/standalone/ for more):

    autostart=no
    loop=no
    animation=yes
    remaining=no
    noinfo=no
    initialvolume=60
    buffer=5
    checkpolicy=no
    rtl=no

    bg=E5E5E5
    leftbg=CCCCCC
    lefticon=333333
    voltrack=F2F2F2
    volslider=666666
    rightbg=B4B4B4
    rightbghover=999999
    righticon=333333
    righticonhover=FFFFFF
    loader=009900
    track=FFFFFF
    tracker=DDDDDD
    border=CCCCCC
    skip=666666
    text=333333
*/

    $flash_top = '<object id="audioplayer' . $i . '" type="application/x-shockwave-flash" data="' . plugins_url() . '/playpress/player.swf" width="290" height="24">
<param name="movie" value="' . plugins_url() . '/playpress/player.swf" />
<param name="FlashVars" value="' . htmlspecialchars($flash_parameters) . '" />
<param name="quality" value="high" />
<param name="menu" value="false" />
<param name="wmode" value="opaque" />';

    $download_link = '<a href="' . $mp3 . '">Download audio file (' . basename($mp3) . ')</a>';

    if (! is_feed()) {
        if (! empty($mp3)) {
            $output = '<p>';
            if (! empty($ogg)) {
                $output .= '<audio controls preload="metadata">';
                $output .= '<source src="' . $mp3 . '" type="audio/mp3"><source src="' . $ogg . '" type="audio/ogg" />';
            }
            $output .= $flash_top;
            if (empty($ogg)) {
                $output .= '<audio controls preload="metadata" src="' . $mp3 . '">';
            }
            $output .= $download_link;
            if (empty($ogg)) {
                $output .= '</audio>';
            }
            $output .= '</object>';
            if (! empty($ogg)) {
                $output .= '</audio>';
            }
            $output .= '</p>';
    } elseif (! empty($ogg)) {
            $mp3 = $ogg;
            $output = '<p>' . $download_link . '</p>';
        }
    } else {
        if (! empty($mp3)) {
            $output = '<p>' . $download_link . '</p>';
        }
        if (! empty($ogg)) {
            $mp3 = $ogg;
            $output .= '<p>' . $download_link . '</p>';
        }
    }
    return $output;
}
add_shortcode('audio', 'playpress_func');
?>