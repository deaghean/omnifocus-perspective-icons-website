<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Perspective Icons for OmniFocus, by Josh Hughes</title>
    <meta name="description" content="Enhance your experience with the Omni Group&#8217;s best-of-breed task management software, OmniFocus, with this FREE set of custom perspective icons." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    
    <!-- Apple Touch Icons -->
    <meta name="apple-mobile-web-app-title" content="OF Icons" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/apple-touch-icon-120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/apple-touch-icon-152.png" />
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="images/apple-touch-icon-180.png" />
    
    <!-- Microsoft Windows 8+ Tiles -->
    <meta name="application-name" content="OF Icons" />
    <meta name="msapplication-TileImage" content="images/microsoft-pinned-site.png" />
    <meta name="msapplication-TileColor" content="#7431ab" />
    
    <!-- CSS -->
    <!--[if !lt IE 9]><!--><link href="css/style.css?v=2" rel="stylesheet" /><!--<![endif]-->
    <!--[if lte IE 8]><link href="css/text-only.css" rel="stylesheet" /><![endif]-->
</head>
<body>
<!--[if lte IE 8]>
    <p class="outdated-browser">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header role="banner">
    <div class="container">
        <h1>Perspective Icons for&#160;OmniFocus</h1>
        <p>Enhance your experience with the Omni Group&#8217;s best-of-breed task management software, <a href="https://www.omnigroup.com/omnifocus/">OmniFocus</a>, with this <strong>FREE</strong> set of custom perspective&#160;icons.</p>
        <p><a href="https://github.com/deaghean/omnifocus-perspective-icons/archive/master.zip" class="button">Download</a> <span class="github">or <a href="https://github.com/deaghean/omnifocus-perspective-icons">View on Github</a></span></p>
    </div>
</header>

<?php
// Create icon list
$icon_list = array
(
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
    'calendar-day' => 'Cal Day',
    'calendar-month' => 'Cal Month',
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
    'list' => 'List',
    'list-alt' => 'List - Alt',
    'list-remaining' => 'List 2',
    'list-alt-remaining' => 'List 2 - Alt',
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
    'rain' => 'Rain',
    'repeating' => 'Repeating',
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

$all_colors = array('blue', 'brown', 'graphite', 'green', 'orange', 'purple', 'red', 'teal');
$mac_color = 'purple';
$ios_color = 'teal';

if ((isset($_GET['mac-color'])) && (in_array($_GET['mac-color'], $all_colors)))
    $mac_color = $_GET['mac-color'];
    
if ((isset($_GET['ios-color'])) && (in_array($_GET['ios-color'], $all_colors)))
    $ios_color = $_GET['ios-color'];
?>

<main id="content" role="main" tabindex="-1">
    <section id="mac">
        <div class="container">
            <h2>Mac Icons</h2>
            
            <div class="introduction">
                <p>For the Mac, each glyph has a file, starting with <code>icon-</code>, for each of the following colors: blue, brown, graphite, green, orange, purple, red, and teal. There are also Retina display <code>@2x</code>&#160;variations.</p>
                
                <ul class="color-selector">
                <?php
                foreach ($all_colors as $color)
                {
                    $class = '';
                    if ($mac_color == $color)
                        $class = ' selected-color';
                    printf('<li><a href="?mac-color=%s&#38;ios-color=%s" class="%s%s">%s</a></li>', $color, $ios_color, $color, $class, ucfirst($color));
                }
                ?>
                </ul>
            </div>
            
            <ul class="glyphs">
                <?php
                foreach ($icon_list as $icon_name => $icon_label)
                {
                    printf('<li><figure><img src="icons/%s/icon-%s.png" srcset="icons/%s/icon-%s.png 1x, icons/%s/icon-%s@2x.png 2x" alt="%s icon" class="%s" /><figcaption>%s</figcaption></figure></li>', $icon_name, $mac_color, $icon_name, $mac_color, $icon_name, $mac_color, $icon_label, $icon_name, $icon_label);  
                }
                ?>
            </ul>
        </div>
    </section>
    
    <section id="ios">
        <div class="container">
            <h2>iOS Icons</h2>
            
            <div class="introduction">
                <p>For the universal iOS application, each glyph has a file, starting with <code>icon-ios-</code>, for the same color options as the Mac (though, regardless, it'll be paired with teal text, so that color tends to work best). There are also Retina display <code>@2x</code>&#160;variations.</p>
            
                <p>To use these icons I recommend duplicating your perspectives, so you have one you use on the Mac, and one you use on iOS, each with the appropriate icon&#160;file.</p>
            
                <ul class="color-selector">
                <?php
                foreach ($all_colors as $color)
                {
                    $class = '';
                    if ($ios_color == $color)
                        $class = ' selected-color';
                    printf('<li><a href="?mac-color=%s&#38;ios-color=%s" class="%s%s">%s</a></li>', $mac_color, $color, $color, $class, ucfirst($color));
                }
                ?>
                </ul>
            </div>
             
            <ul class="glyphs">
                <?php
                foreach ($icon_list as $icon_name => $icon_label)
                {
                    printf('<li><figure><img src="icons/%s/icon-ios-%s@2x.png" alt="%s icon" class="%s" /><figcaption>%s</figcaption></figure></li>', $icon_name, $ios_color, $icon_label, $icon_name, $icon_label);  
                }
                ?>
            </ul>
        </div>
    </section>
    
    <section id="installation">
        <div class="container">
            <h2>Installation</h2>
            
            <img src="images/perspective-installation.png" srcset="images/perspective-installation.png 1x, images/perspective-installation@2x.png 2x" alt="Screenshot of Perspectives window" />
            
            <p>Note that installing these icons requires OmniFocus 2 for Mac with the Professional upgrade. Using custom perspectives on iOS also requires the Professional&#160;upgrade.</p>
            
            <ul>
                <li>In the Menu, go to <strong>Perspectives &gt; Show Perspectives</strong></li>
            
                <li>Click on the Perspective you want to edit the icon for. (Note that Inbox, Projects, Contexts, Forecast, Flagged, and Review all cannot be&#160;changed).</li>
            
                <li>Select the icon you want to use. The <code>dist</code> folder has all the usable icons. There&#8217;s a folder for each one which contains files for each of the 8 colors for the Mac version, each of the 8 colors for the iOS version, and the <code>@2x</code> variations. You should only use the <code>@2x</code> versions if you have a Retina Display Mac or a Retina iOS&#160;device.</li>

                <li>Drag the icon you want to the icon well in the Perspectives window, or click the down arrow on the icon, and then Choose File, and navigate to the&#160;icon.</li>
            </ul>
        </div>
    </section>
</main>

<footer role="contentinfo">
    <div class="container">
        <p>The fine print: This is a fan project, and is in no way officially affiliated with the <a href="https://www.omnigroup.com">Omni Group</a>. The icons themselves have been released into the <a href="https://github.com/deaghean/omnifocus-perspective-icons/blob/master/LICENSE.md">public domain</a>; feel free to use them as you see fit. If you have any questions, please contact Josh Hughes at <a href="mailto:josh@josh-hughes.com">josh@josh-hughes.com</a></p>
    </div>
</footer>

<!-- Javascript -->
<!--[if !lt IE 9]><!-->
<script src="js/script.js"></script>

<script src="//use.typekit.net/chz1jjn.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<!--<![endif]-->

<?php
if ((isset($_SERVER['HTTP_HOST'])) && ($_SERVER['HTTP_HOST'] == 'omnifocusicons.josh-hughes.com'))
    print '<script src="js/google-analytics.js"></script>';
?>
</body>
</html>