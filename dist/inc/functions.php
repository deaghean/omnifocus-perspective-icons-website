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
 * @param string $icon_type Type of icon ("filled" or "rounded")
 * @return string Glyph HTML
 */
function glyphs($icon_color, $icon_list, $icon_type)
{
    foreach ($icon_list as $icon_name => $icon_label) {
        $glyphs .= sprintf('<li><figure><img src="icons/%s/icon-%s-%s@2x.png?v=6" alt="" class="%s" data-type="%s" /><figcaption>%s</figcaption></figure></li>', $icon_name, $icon_type, $icon_color, $icon_name, $icon_type, $icon_label);
    }
    print $glyphs;
}