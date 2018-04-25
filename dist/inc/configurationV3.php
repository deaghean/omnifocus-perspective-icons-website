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
    'baby-bottle'        => 'Baby Bottle',
    'beaker'             => 'Beaker',
    'book'               => 'Book',
    'briefcase'          => 'Briefcase',
    'calendar-day'       => 'Calendar',
    'calendar-month'     => 'Calendar',
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
    'shopping-bag'       => 'Shopping',
    'shopping-cart'      => 'Shopping',
    'skull'              => 'Skull',
    'star'               => 'Star',
    'suitcase'           => 'Suitcase',
    'tag'                => 'Tag',
    'tag-alt'            => 'Tag',
    'tag-plus'           => 'Tag',
    'tag-star'           => 'Tag',
    'video-game'         => 'Video Game',
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