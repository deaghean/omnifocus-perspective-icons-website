<?php
/**
 * Functions (Color selector and icon output)
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */

/**
 * Output color selector
 *
 * @param string $ios_color Currently selected iOS color
 * @param array $all_colors List of all colors (see configuration.php)
 * @return string Color selector HTML
 */
function colorSelector($ios_color, $all_colors)
{
    $color_selector = '';
    foreach ($all_colors as $color) {
        $class = $color;
        if ($color == $ios_color) {
            $class .= ' selected';
        }
        $link = sprintf('?ios-color=%s', $color);    
        $color_selector .= sprintf('<li><a href="%s" class="%s" data-color="%s">%s</a></li>', $link, $class, $color, ucfirst($color));
    }
    
    print $color_selector;
}

/**
 * Output glyphs
 *
 * @param string $icon_color Icon color that should be used
 * @param array $icon_list List of icons (see configuration.php)
 * @return string Glyph HTML
 */
function glyphs($icon_color, $icon_list)
{
    foreach ($icon_list as $icon_name => $icon_label) {
        $glyphs .= sprintf('<li><figure><img src="icons/%s/icon-ios-%s@2x.png" alt="" class="%s" /><figcaption>%s</figcaption></figure></li>', $icon_name, $icon_color, $icon_name, $icon_label);
    }
    print $glyphs;
}