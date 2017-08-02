<?php
/**
 * Configuration (List of icons, colors, and defaults)
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */
 
// Icon list (file name => label)
$icon_list = array(
    'alarm-clock' => 'Alarm Clock',
    'arrow-down' => 'Arrow Down',
    'arrow-left' => 'Arrow Left',
    'arrow-right' => 'Arrow Right',
    'arrow-up' => 'Arrow Up',
    'baby-bottle' => 'Baby Bottle',
    'battery-high' => 'Battery High',
    'battery-low' => 'Battery Low',
    'battery-medium' => 'Battery Med',
    'beaker' => 'Beaker',
    'book' => 'Book',
    'briefcase' => 'Briefcase',
    'broom' => 'Broom',
    'bug' => 'Bug',
    'calendar-day' => 'Calendar 1',
    'calendar-month' => 'Calendar 2',
    'camera' => 'Camera',
    'car' => 'Car',
    'chart-line' => 'Chart - Line',
    'chart-pie' => 'Chart - Pie',
    'chat' => 'Chat',
    'checkmark' => 'Checkmark',
    'coffee' => 'Coffee',
    'day' => 'Day',
    'desk' => 'Desk',
    'document' => 'Document',
    'envelope' => 'Envelope',
    'eye' => 'Eye',
    'flame' => 'Flame',
    'gift' => 'Gift',
    'group' => 'Group',
    'guillotine' => 'Guillotine',
    'heart' => 'Heart',
    'home' => 'Home',
    'imac' => 'iMac',
    'inbox' => 'Inbox',
    'inbox-in' => 'Inbox - In',
    'inbox-out' => 'Inbox - Out',
    'index-cards' => 'Index Cards',
    'laptop' => 'Laptop',
    'light-bulb' => 'Light Bulb',
    'lightning' => 'Lightning',
    'list' => 'List 1',
    'list-alt' => 'List 2',
    'list-remaining' => 'List 3',
    'list-alt-remaining' => 'List 4',
    'lock' => 'Lock',
    'map' => 'Map',
    'money' => 'Money ($)',
    'money-euros' => 'Money (&#8364;)',
    'money-pounds' => 'Money (&#163;)',
    'music' => 'Music',
    'night' => 'Night',
    'org-chart' => 'Org Chart',
    'paper-airplane' => 'Paper Air',
    'paused' => 'Paused',
    'pencil' => 'Pencil',
    'person-female' => 'Person',
    'person-male' => 'Person',
    'perspective' => 'Perspective',
    'phone-tablet' => 'Phone/Tablet',
    'play' => 'Play',
    'radar' => 'Radar',
    'rain' => 'Rain',
    'repeating' => 'Repeating 1',
    'repeating-alt' => 'Repeating 2',
    'search' => 'Search',
    'shopping-cart' => 'Shopping',
    'skull' => 'Skull',
    'sort' => 'Sort',
    'star' => 'Star',
    'suitcase' => 'Suitcase',
    'tagged' => 'Tagged',
    'trophy' => 'Trophy',
    'warning-sign' => 'Warning',
    'waypoint' => 'Waypoint',
    'wrench' => 'Wrench'
);

// Available colors
$all_colors = array(
    'blue',
    'brown',
    'graphite',
    'green',
    'orange',
    'purple',
    'red',
    'teal'
);

// Default colors
$mac_color = 'purple';
$ios_color = 'teal';

// Override defaults, if set
if ((isset($_GET['mac-color'])) && (in_array($_GET['mac-color'], $all_colors))) {
    $mac_color = $_GET['mac-color'];
}

if ((isset($_GET['ios-color'])) && (in_array($_GET['ios-color'], $all_colors))) {
    $ios_color = $_GET['ios-color'];
}