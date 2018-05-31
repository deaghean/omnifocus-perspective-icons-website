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
 * @param string $mac_resolution Currently selected Mac resolution
 * @param string $ios_resolution Currently selected iOS resolution
 * @return string Color selector HTML
 */
function colorSelector($mode, $mac_color, $ios_color, $all_colors, $mac_resolution, $ios_resolution)
{
    $color_selector = '';
    foreach ($all_colors as $color) {
        $class = $color;

        // Determine link and selected color for each mode
        if ($mode == 'mac') {
            if ($color == $mac_color) {
                $class .= ' selected';
            }
            $link = sprintf('?mac-color=%s&#38;ios-color=%s&#38;mac-resolution=%s&#38;ios-resolution=%s', $color, $ios_color, $mac_resolution, $ios_resolution);
        } else { // ios
            if ($color == $ios_color) {
                $class .= ' selected';
            }
            $link = sprintf('?mac-color=%s&#38;ios-color=%s&#38;mac-resolution=%s&#38;ios-resolution=%s', $mac_color, $color, $mac_resolution, $ios_resolution);
        }        
        $color_selector .= sprintf('<li><a href="%s" class="%s" data-color="%s">%s</a></li>', $link, $class, $color, ucfirst($color));
    }
    
    print $color_selector;
}

/**
 * Output resolution selector
 *
 * @param string $mode 'mac' or 'ios'
 * @param string $mac_resolution Currently selected Mac resolution
 * @param string $ios_resolution Currently selected iOS resolution
 * @param array $all_resolutions List of all resolutions (see configuration.php)
 * @param string $mac_color Currently selected Mac color
 * @param string $ios_color Currently selected iOS color
 * @return string Resolution selector HTML
 */
function resolutionSelector($mode, $mac_resolution, $ios_resolution, $all_resolutions, $mac_color, $ios_color)
{
    $resolution_selector = '';
    foreach ($all_resolutions as $resolution => $resolution_label) {
        $class = 'resolution-' . $resolution;
        
        // Determine link and selected color for each mode
        if ($mode == 'mac') {
            if ($resolution == $mac_resolution) {
                $class .= ' selected';
            }
            $link = sprintf('?mac-color=%s&#38;ios-color=%s&#38;mac-resolution=%s&#38;ios-resolution=%s', $mac_color, $ios_color, $resolution, $ios_resolution);
        } else { // ios
            if ($resolution == $ios_resolution) {
                $class .= ' selected';
            }
            $link = sprintf('?mac-color=%s&#38;ios-color=%s&#38;mac-resolution=%s&#38;ios-resolution=%s', $mac_color, $ios_color, $mac_resolution, $resolution);
        }        
        $resolution_selector .= sprintf('<li><a href="%s" class="%s" data-resolution="%s">%s</a></li>', $link, $class, $resolution, $resolution_label);
    }
    print $resolution_selector;
}

/**
 * Output glyphs
 *
 * @param string $mode 'mac' or 'ios'
 * @param string $icon_color Icon color that should be used
 * @param string $icon_resolution Icon resolution that should be used
 * @param array $icon_list List of icons (see configuration.php)
 * @return string Glyph HTML
 */
function glyphs($mode, $icon_color, $icon_resolution, $icon_list)
{
    $glyphs = '';
    if ($icon_resolution != '1x') {
        $icon_color .= '@' . $icon_resolution;
    }

    foreach ($icon_list as $icon_name => $icon_label) {
        if ($mode == 'mac') {
            $glyphs .= sprintf('<li><figure><img src="icons/%s/icon-%s.png" alt="" class="%s" /><figcaption>%s</figcaption></figure></li>', $icon_name, $icon_color, $icon_name, $icon_label);  
        } else { // ios
            $glyphs .= sprintf('<li><figure><img src="icons/%s/icon-ios-%s.png" alt="" class="%s" /><figcaption>%s</figcaption></figure></li>', $icon_name, $icon_color, $icon_name, $icon_label);
        }
    }
    print $glyphs;
}