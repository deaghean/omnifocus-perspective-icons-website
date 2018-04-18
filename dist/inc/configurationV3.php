<?php
/**
 * Configuration (List of icons, colors, and defaults)
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */
 
// Icon list (file name => label)
$icon_list = array(
    'alarm-clock'        => 'Alarm Clock',
    'app'                => 'App',
    'arrow-down'         => 'Arrow Down',
    'arrow-left'         => 'Arrow Left',
    'arrow-right'        => 'Arrow Right',
    'arrow-up'           => 'Arrow Up',
    'beaker'             => 'Beaker',
    'book'               => 'Book',
    'briefcase'          => 'Briefcase',
    'calendar-day'       => 'Calendar (Day)',
    'calendar-month'     => 'Calendar (Month)',
    'car'                => 'Car',
    'chat'               => 'Chat',
    'eye'                => 'Eye',
    'guillotine'         => 'Guillotine',
    'heart'              => 'Heart',
    'home'               => 'Home',
    'laptop'             => 'Laptop',
    'lightning'          => 'Lightning',
    'list'               => 'List',
    'list-alt'           => 'List',
    'list-remaining'     => 'List',
    'list-alt-remaining' => 'List',
    'night'              => 'Night',
    'org-chart'          => 'Org Chart',
    'paused'             => 'Paused',
    'perspective'        => 'Perspective',
    'play'               => 'Play',
    'rain'               => 'Rain',
    'search'             => 'Search',
    'skull'              => 'Skull',
    'star'               => 'Star',
    'suitcase'           => 'Suitcase',
    'tag'                => 'Tag',
    'tag-alt'            => 'Tag (Alt)',
    'tag-plus'           => 'Tag (Plus)',
    'tag-star'           => 'Tag (Star)',
    'wrench'             => 'Wrench'
);

// Available colors
$all_colors = array(
    'blue',
    'graphite',
    'purple',
    'violet',
    'teal',
    'green',
    'red',
    'orange',
    'brown'
);

// Set colors
$ios_color = 'teal';
if ((isset($_GET['ios-color'])) && (in_array($_GET['ios-color'], $all_colors))) {
    $ios_color = $_GET['ios-color'];
}