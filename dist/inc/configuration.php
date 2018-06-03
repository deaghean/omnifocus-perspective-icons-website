<?php
/**
 * Configuration (List of icons, colors, and defaults)
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */
 
// Icon list (file name => label)
$icon_list = array(
    'alarm-clock'               => 'Alarm Clock',
    'app'                       => 'App',
    'archive'                   => 'Archive',
    'arrow-down'                => 'Arrow Down',
    'arrow-left'                => 'Arrow Left',
    'arrow-right'               => 'Arrow Right',
    'arrow-up'                  => 'Arrow Up',
    'arrow-up-down'             => 'Arrow Vertical',
    'arrow-left-right'          => 'Arrow Horizontal',
    'arrow-clockwise'           => 'Arrow Clockwise',
    'arrow-counter-clockwise'   => 'Arrow Counter-Clockwise',
    'baby-bottle'               => 'Baby Bottle',
    'ball'                      => 'Ball',
    'battery-high'              => 'Battery (High)',
    'battery-medium'            => 'Battery (Medium)',
    'battery-low'               => 'Battery (Low)',
    'beaker'                    => 'Beaker',
    'book'                      => 'Book',
    'briefcase'                 => 'Briefcase',
    'broom'                     => 'Broom',
    'bug'                       => 'Bug',
    'calendar-day'              => 'Calendar (Day)',
    'calendar-month'            => 'Calendar (Month)',
    'calendar-star'             => 'Calendar (Star)',
    'camera'                    => 'Camera',
    'car'                       => 'Car',
    'chart-bar'                 => 'Chart (Bar)',
    'chart-line'                => 'Chart (Line)',
    'chart-pie'                 => 'Chart (Pie)',
    'chat'                      => 'Chat',
    'checkmark'                 => 'Checkmark',
    'clipboard'                 => 'Clipboard',
    'coffee'                    => 'Coffee',
    'cup'                       => 'Cup',
    'desk'                      => 'Desk',
    'document'                  => 'Doc',
    'document-scratch'          => 'Scratch',
    'envelope'                  => 'Envelope',
    'eye'                       => 'Eye',
    'flag'                      => 'Flag',
    'flame'                     => 'Flame',
    'gift'                      => 'Gift',
    'grad-cap'                  => 'Grad Cap',
    'guillotine'                => 'Guillotine',
    'heart'                     => 'Heart',
    'home'                      => 'Home',
    'imac'                      => 'iMac',
    'inbox'                     => 'Inbox',
    'inbox-add'                 => 'Inbox (Add)',
    'inbox-in'                  => 'Inbox (In)',
    'inbox-out'                 => 'Inbox (Out)',
    'index-cards'               => 'Index Cards',
    'ipad'                      => 'iPad',
    'iphone'                    => 'iPhone',
    'iphone-x'                  => 'iPhone X',
    'laptop'                    => 'Laptop',
    'light-bulb'                => 'Light Bulb',
    'lightning'                 => 'Lightning',
    'list'                      => 'List',
    'list-alt'                  => 'List',
    'list-remaining'            => 'List',
    'list-alt-remaining'        => 'List',
    'lock'                      => 'Lock',
    'map'                       => 'Map',
    'microphone'                => 'Microphone',
    'money'                     => 'Money',
    'money-dollars'             => 'Money ($)',
    'money-euros'               => 'Money (&euro;)',
    'money-pounds'              => 'Money (&pound;)',
    'money-yen'                 => 'Money (&yen;)',
    'music'                     => 'Music',
    'mug'                       => 'Mug',
    'night'                     => 'Night',
    'org-chart'                 => 'Org Chart',
    'paused'                    => 'Paused',
    'paper-airplane'            => 'Paper Air',
    'pencil'                    => 'Pencil',
    'person'                    => 'Person',
    'person-group'              => 'Group',
    'perspective'               => 'Perspective',
    'play'                      => 'Play',
    'radar'                     => 'Radar',
    'rain'                      => 'Rain',
    'repeating'                 => 'Repeating',
    'search'                    => 'Search',
    'shopping-bag'              => 'Shopping',
    'shopping-cart'             => 'Shopping',
    'skull'                     => 'Skull',
    'star'                      => 'Star',
    'suitcase'                  => 'Suitcase',
    'sun'                       => 'Sun',
    'sunrise'                   => 'Sunrise',
    'sunset'                    => 'Sunset',
    'tag'                       => 'Tag',
    'tag-alt'                   => 'Tag',
    'tag-plus'                  => 'Tag (+)',
    'tag-star'                  => 'Tag (Star)',
    'target'                    => 'Target',
    'trophy'                    => 'Trophy',
    'video-game'                => 'Video Game',
    'warning'                   => 'Warning',
    'waypoint'                  => 'Waypoint',
    'wrench'                    => 'Wrench'
);

// Available colors
$all_colors = array(
    'sherbet',
    'pink',
    'magenta',
    'orange',
    'light-pink',
    'red',
    'green',
    'lime-green',
    'gold',
    'teal',
    'light-teal',
    'dark-teal',
    'purple',
    'light-purple',
    'indigo',
    'lilac',
    'fuchsia',
    'plum',
    'blue',
    'light-blue',
    'navy',
    'graphite',
    'grey',
    'light-grey'
);

// Set colors
$color = 'teal';
if ((isset($_GET['color'])) && (in_array($_GET['color'], $all_colors))) {
    $color = $_GET['color'];
}

// Set palette
if ((isset($_GET['palette'])) && ($_GET['palette'] == 'dark')) {
    $palette_html_class = 'dark-palette';
    $apply_color_button_value = 'dark';
    $palette_button_value = 'light';
} else {
    $palette_html_class = '';
    $apply_color_button_value = 'light';
    $palette_button_value = 'dark';
}