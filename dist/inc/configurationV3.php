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
    'arrow-down'                => 'Arrow (D)',
    'arrow-left'                => 'Arrow (L)',
    'arrow-right'               => 'Arrow (R)',
    'arrow-up'                  => 'Arrow (U)',
    'arrow-up-down'             => 'Arrow (U/D)',
    'arrow-left-right'          => 'Arrow (L/R)',
    'arrow-clockwise'           => 'Arrow (C)',
    'arrow-counter-clockwise'   => 'Arrow (CC)',
    'baby-bottle'               => 'Baby Bottle',
    'battery-high'              => 'Battery (H)',
    'battery-medium'            => 'Battery (M)',
    'battery-low'               => 'Battery (L)',
    'beaker'                    => 'Beaker',
    'book'                      => 'Book',
    'briefcase'                 => 'Briefcase',
    'broom'                     => 'Broom',
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
    'document'                  => 'Document',
    'envelope'                  => 'Envelope',
    'eye'                       => 'Eye',
    'guillotine'                => 'Guillotine',
    'heart'                     => 'Heart',
    'home'                      => 'Home',
    'imac'                      => 'iMac',
    'laptop'                    => 'Laptop',
    'lightning'                 => 'Lightning',
    'list'                      => 'List',
    'list-alt'                  => 'List',
    'list-remaining'            => 'List',
    'list-alt-remaining'        => 'List',
    'lock'                      => 'Lock',
    'map'                       => 'Map',
    'music'                     => 'Music',
    'mug'                       => 'Mug',
    'night'                     => 'Night',
    'org-chart'                 => 'Org Chart',
    'paused'                    => 'Paused',
    'perspective'               => 'Perspective',
    'play'                      => 'Play',
    'rain'                      => 'Rain',
    'search'                    => 'Search',
    'shopping-bag'              => 'Shopping',
    'shopping-cart'             => 'Shopping',
    'skull'                     => 'Skull',
    'star'                      => 'Star',
    'suitcase'                  => 'Suitcase',
    'tag'                       => 'Tag',
    'tag-alt'                   => 'Tag',
    'tag-plus'                  => 'Tag',
    'tag-star'                  => 'Tag',
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