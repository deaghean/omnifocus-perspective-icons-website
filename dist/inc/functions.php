<?php
/**
 * Functions (Color selector and icon output)
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */

/**
 * Output color selector
 *
 * @param string $color Currently selected color
 * @param array $all_colors List of all colors (see configuration.php)
 * @return string Color selector HTML
 */
function colorSelector($color, $all_colors)
{
    $color_selector = '';
    foreach ($all_colors as $color_option) {
        $checked = '';
        if ($color_option == $color) {
            $checked = ' checked';
        }
        $color_selector .= sprintf('<li><input type="radio" name="color" id="color-%s" value="%s"%s /><label for="color-%s">%s</label></li>', $color_option, $color_option, $checked, $color_option, ucwords(str_replace('-', ' ', $color_option)));
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
        $glyphs .= sprintf('<li><figure><img src="icons/%s/icon-ios-%s@2x.png?v=2" alt="" class="%s" /><figcaption>%s</figcaption></figure></li>', $icon_name, $icon_color, $icon_name, $icon_label);
    }
    print $glyphs;
}