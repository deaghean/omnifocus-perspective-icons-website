<?php
/**
 * Functions (Color selector and icon output)
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */

/**
 * Output color selector
 *
 * @param string $mode 'mac' or 'ios'
 * @param string $mac_color Currently selected Mac color
 * @param string $ios_color Currently selected iOS color
 * @param array $all_colors List of all colors (see configuration.php)
 * @return string Color selector HTML
 */
function colorSelector($mode, $mac_color, $ios_color, $all_colors)
{
    $color_selector = '';
    foreach ($all_colors as $color) {
        $class = $color;
        
        // Determine link and selected color for each mode
        if ($mode == 'mac') {
            if ($mac_color == $color) {
                $class .= ' selected-color';
            }
            $link = sprintf('?mac-color=%s&#38;ios-color=%s', $color, $ios_color);
        } else { // ios
            if ($ios_color == $color) {
                $class .= ' selected-color';
            }
            $link = sprintf('?mac-color=%s&#38;ios-color=%s', $mac_color, $color);
        }        
        $color_selector .= sprintf('<li><a href="%s" class="%s">%s</a></li>', $link, $class, ucfirst($color));
    }
    return $color_selector;
}

/**
 * Output glyphs
 *
 * @param string $mode 'mac' or 'ios'
 * @param string $icon_color Icon color that should be used
 * @param array $icon_list List of icons (see configuration.php)
 * @return string Glyph HTML
 */
function glyphs($mode, $icon_color, $icon_list)
{
    $glyphs = '';
    foreach ($icon_list as $icon_name => $icon_label) {
        
        if ($mode == 'mac') {
            $glyphs .= sprintf('<li><figure><img src="icons/%s/icon-%s.png" srcset="icons/%s/icon-%s.png 1x, icons/%s/icon-%s@2x.png 2x" alt="%s icon" class="%s" /><figcaption>%s</figcaption></figure></li>', $icon_name, $icon_color, $icon_name, $icon_color, $icon_name, $icon_color, $icon_label, $icon_name, $icon_label);  
        } else { // ios
            $glyphs .= sprintf('<li><figure><img src="icons/%s/icon-ios-%s@2x.png" alt="%s icon" class="%s" /><figcaption>%s</figcaption></figure></li>', $icon_name, $icon_color, $icon_label, $icon_name, $icon_label);
        }
    }
    return $glyphs;
}