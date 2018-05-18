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
    'arrow-down'                => 'Arrow (D)',
    'arrow-left'                => 'Arrow (L)',
    'arrow-right'               => 'Arrow (R)',
    'arrow-up'                  => 'Arrow (U)',
    'arrow-up-down'             => 'Arrow (U/D)',
    'arrow-left-right'          => 'Arrow (L/R)',
    'arrow-clockwise'           => 'Arrow (C)',
    'arrow-counter-clockwise'   => 'Arrow (CC)',
    'baby-bottle'               => 'Baby Bottle',
    'ball'                      => 'Ball',
    'battery-high'              => 'Battery (H)',
    'battery-medium'            => 'Battery (M)',
    'battery-low'               => 'Battery (L)',
    'beaker'                    => 'Beaker',
    'book'                      => 'Book',
    'briefcase'                 => 'Briefcase',
    'broom'                     => 'Broom',
    'bug'                       => 'Bug',
    'calendar-day'              => 'Calendar',
    'calendar-month'            => 'Calendar',
    'calendar-star'             => 'Calendar',
    'camera'                    => 'Camera',
    'car'                       => 'Car',
    'chart-bar'                 => 'Chart (Bar)',
    'chart-line'                => 'Chart (Line)',
    'chart-pie'                 => 'Chart (Pie)',
    'chat'                      => 'Chat',
    'checkmark'                 => 'Checkmark',
    'coffee'                    => 'Coffee',
    'cup'                       => 'Cup',
    'desk'                      => 'Desk',
    'document'                  => 'Doc',
    'document-scratch'          => 'Scratch',
    'envelope'                  => 'Envelope',
    'eye'                       => 'Eye',
    'flame'                     => 'Flame',
    'gift'                      => 'Gift',
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
    'tag-plus'                  => 'Tag',
    'tag-star'                  => 'Tag',
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
$ios_color = 'teal';
if ((isset($_GET['ios-color'])) && (in_array($_GET['ios-color'], $all_colors))) {
    $ios_color = $_GET['ios-color'];
}