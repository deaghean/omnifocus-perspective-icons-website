<?php
/**
 * Perspective Icons for OmniFocus
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */
 
// Libraries
require_once('inc/configuration.php');
require_once('inc/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Perspective Icons for OmniFocus, by Josh Hughes</title>
    <meta name="description" content="Enhance your experience with the Omni Group&#8217;s fantastic personal task management software, OmniFocus, with this FREE set of custom perspective icons." />
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

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@deaghean" />
    <meta property="og:url" content="https://omnifocusicons.josh-hughes.com/" />
    <meta property="og:title" content="Perspective Icons for OmniFocus, by Josh Hughes" />
    <meta property="og:description" content="Enhance your experience with the Omni Group&#8217;s fantastic personal task management software, OmniFocus, with this FREE set of custom perspective icons." />
    <meta property="og:image" content="https://omnifocusicons.josh-hughes.com/images/twitter-image.png" />
    
    <!-- CSS -->
    <!--[if !lt IE 9]><!--><link href="css/style.css" rel="stylesheet" /><!--<![endif]-->
    <!--[if lte IE 8]><link href="css/text-only.css" rel="stylesheet" /><![endif]-->
</head>
<body>
<!--[if lte IE 8]>
    <p class="outdated-browser">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header role="banner">
    <div class="introduction">
        <h1>Perspective Icons for&#160;OmniFocus</h1>

        <p>Enhance your experience with the Omni Group&#8217;s fantastic personal task management software, <a href="https://www.omnigroup.com/omnifocus/">OmniFocus</a>, with this <strong>FREE</strong> set of custom perspective&#160;icons.</p>

        <p><a href="https://github.com/deaghean/omnifocus-perspective-icons/archive/master.zip" class="button">Download</a> <span class="github">or <a href="https://github.com/deaghean/omnifocus-perspective-icons">View on Github</a></span></p>
    </div>

    <div class="screenshot"></div>
</header>

<main id="content" role="main">
    <section id="mac">
        <h2>Mac Icons</h2>
        
        <div class="controls">
            <ul class="color-selector">
                <?php colorSelector('mac', $mac_color, $ios_color, $all_colors, $mac_resolution, $ios_resolution); ?>
            </ul>

            <ul class="resolution-selector">
                <?php resolutionSelector('mac', $mac_resolution, $ios_resolution, $all_resolutions, $mac_color, $ios_color); ?>
            </ul>
        </div>
        
        <ul class="glyphs">
            <?php glyphs('mac', $mac_color, $mac_resolution, $icon_list); ?>
        </ul>
    </section>
    
    <section id="ios">
        <h2>iOS Icons</h2>
        
        <div class="controls">
            <ul class="color-selector">
                <?php colorSelector('ios', $mac_color, $ios_color, $all_colors, $mac_resolution, $ios_resolution); ?>
            </ul>

            <ul class="resolution-selector">
                <?php resolutionSelector('ios', $mac_resolution, $ios_resolution, $all_resolutions, $mac_color, $ios_color); ?>
            </ul>
        </div>
            
        <ul class="glyphs">
            <?php glyphs('ios', $ios_color, $ios_resolution, $icon_list); ?>
        </ul>
    </section>
    
    <section id="installation">
        <h2>Installation</h2>

        <div class="instructions">
            <p>Setting custom perspective icons can only be done using <a href="https://www.omnigroup.com/omnifocus#pro">OmniFocus for Mac with the Professional upgrade</a>. Using custom perspectives on the iOS version of OmniFocus also require it have the <a href="https://support.omnigroup.com/omnifocus-2-ios-pro-upgrade/">Pro&#160;upgrade</a>.</p>
            
            <ul>
                <li>In the Menu, go to <strong>Perspectives &gt; Show Perspectives</strong></li>
            
                <li>Click on the Perspective you want to edit, or add a new one. (Note that you cannot change the icons for Inbox, Projects, Contexts, Forecast, Flagged, and&#160;Review).</li>
            
                <li>Drag the icon you want to use from this site to the icon&#160;picker.</li>
            </ul>

            <p>If you want to use both Mac and iOS icons, the best strategy is to duplicate your perspectives, so you have one you use on the Mac, and one you use on iOS, each with the appropriate icon&#160;file.</p>
        </div>

        <div class="screenshot">
            <img src="images/perspective-installation.png" srcset="images/perspective-installation.png 1x, images/perspective-installation@2x.png 2x" alt="Screenshot of Perspectives window" />
        </div>
    </section>
</main>

<footer role="contentinfo">
    <p>This project is not affiliated with the <a href="https://www.omnigroup.com">Omni Group</a>. The <a href="https://github.com/deaghean/omnifocus-perspective-icons/blob/master/LICENSE.md">icons themselves have been released into the public domain</a>, so feel free to use them as you see fit. If you have any questions or requests, please contact Josh Hughes at <a href="mailto:josh@josh-hughes.com">josh@josh-hughes.com</a>.</p>
</footer>

<!-- Javascript -->
<!--[if !lt IE 9]><!-->
<script>var mac_resolution_changed = <?php print $mac_resolution_changed;?>;</script>
<script src="js/script.js"></script>
<!--<![endif]-->

<?php
if ((isset($_SERVER['HTTP_HOST'])) && ($_SERVER['HTTP_HOST'] == 'omnifocusicons.josh-hughes.com')) {
    print '<script src="js/google-analytics.js"></script>';
}
?>
</body>
</html>