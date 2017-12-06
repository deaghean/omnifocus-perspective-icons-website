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
    'battery-high' => 'Battery (High)',
    'battery-medium' => 'Battery (Medium)',
    'battery-low' => 'Battery (Low)',
    'beaker' => 'Beaker',
    'book' => 'Book',
    'briefcase' => 'Briefcase',
    'broom' => 'Broom',
    'bug' => 'Bug',
    'calendar-day' => 'Calendar (Day)',
    'calendar-month' => 'Calendar (Month)',
    'camera' => 'Camera',
    'car' => 'Car',
    'chart-line' => 'Chart (Line)',
    'chart-pie' => 'Chart (Pie)',
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
    'inbox-in' => 'Inbox (In)',
    'inbox-out' => 'Inbox (Out)',
    'index-cards' => 'Index Card',
    'laptop' => 'Laptop',
    'light-bulb' => 'Light Bulb',
    'lightning' => 'Lightning',
    'list' => 'List',
    'list-alt' => 'List',
    'list-remaining' => 'List',
    'list-alt-remaining' => 'List',
    'lock' => 'Lock',
    'map' => 'Map',
    'money' => 'Money ($)',
    'money-euros' => 'Money (&#8364;)',
    'money-pounds' => 'Money (&#163;)',
    'music' => 'Music',
    'night' => 'Night',
    'org-chart' => 'Org Chart',
    'paper-airplane' => 'Paper Airplane',
    'paused' => 'Paused',
    'pencil' => 'Pencil',
    'person-female' => 'Person',
    'person-male' => 'Person',
    'perspective' => 'Perspective',
    'phone-tablet' => 'Phone',
    'play' => 'Play',
    'rain' => 'Rain',
    'repeating' => 'Repeating',
    'repeating-alt' => 'Repeating',
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
    'purple',
    'blue',
    'graphite',
    'teal',
    'green',
    'brown',
    'red',
    'orange'
);

// Available resolutions
$all_resolutions = array(
    '1x' => 'Non-Retina',
    '2x' => 'Retina'
);

// Set colors
$mac_color = 'purple';
if ((isset($_GET['mac-color'])) && (in_array($_GET['mac-color'], $all_colors))) {
    $mac_color = $_GET['mac-color'];
}

$ios_color = 'teal';
if ((isset($_GET['ios-color'])) && (in_array($_GET['ios-color'], $all_colors))) {
    $ios_color = $_GET['ios-color'];
}

// Set resolutions
$mac_resolution = '1x';
$mac_resolution_changed = 'false';
if ((isset($_GET['mac-resolution'])) && (array_key_exists($_GET['mac-resolution'], $all_resolutions))) {
    $mac_resolution = $_GET['mac-resolution'];
    $mac_resolution_changed = 'true';
}

$ios_resolution = '2x';
if ((isset($_GET['ios-resolution'])) && (array_key_exists($_GET['ios-resolution'], $all_resolutions))) {
    $ios_resolution = $_GET['ios-resolution'];
}