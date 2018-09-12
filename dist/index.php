<?php
/**
 * Perspective Icons for OmniFocus 3
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */
 
// Libraries
require_once('inc/configuration.php');
require_once('inc/functions.php');
?>
<!DOCTYPE html>
<html lang="en" class="<?php print $palette_html_class;?>">
<head>
    <meta charset="utf-8" />
    <title>Perspective Icons for OmniFocus 3, by Josh Hughes</title>
    <meta name="description" content="Enhance your experience with the Omni Group&rsquo;s powerful task management app, OmniFocus 3 for iOS, with this FREE set of custom perspective icons." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    
    <!-- Apple Touch Icons -->
    <meta name="apple-mobile-web-app-title" content="OF Icons" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/apple-touch-icon-120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/apple-touch-icon-152.png" />
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="images/apple-touch-icon-180.png" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@deaghean" />
    <meta property="og:url" content="https://omnifocusicons.josh-hughes.com/" />
    <meta property="og:title" content="Perspective Icons for OmniFocus 3, by Josh Hughes" />
    <meta property="og:description" content="Enhance your experience with the Omni Group&rsquo;s powerful task management app, OmniFocus 3, with this FREE set of custom perspective icons." />
    <meta property="og:image" content="https://omnifocusicons.josh-hughes.com/images/twitter-image-v3.png" />
    
    <!-- CSS -->
    <link href="css/v3.css?v=8" rel="stylesheet" />

    <!-- Mark JavaScript Support -->
    <script>
    document.querySelector('html').classList.add('has-js');
    </script>
</head>
<body>
<header role="banner">
    <div class="introduction">
        <h1>Perspective Icons for&nbsp;OmniFocus&nbsp;3</h1>

        <p>Enhance your experience with the Omni Group&rsquo;s powerful task management app, <a href="https://www.omnigroup.com/omnifocus/ios/">OmniFocus 3</a>, with this <strong>FREE</strong> set of custom perspective&nbsp;icons.</p>

        <p><a href="https://github.com/deaghean/omnifocus-perspective-icons/archive/master.zip" class="button">Download</a> <span class="github">or <a href="https://github.com/deaghean/omnifocus-perspective-icons">View on Github</a></span></p>
    </div>

    <div class="screenshot-wrapper">
        <div class="screenshot-frame">
            <div class="screenshot"></div>
        </div>
    </div>
</header>

<main id="content" role="main">
    <div class="controls">
        <form method="get" action="">
            <ul class="color-selector">
                <?php colorSelector($color, $all_colors); ?>
            </ul>

            <button name="palette" id="color-button" value="<?php print $apply_color_button_value;?>"><span>Select </span>Colors</button>
            <button name="palette" id="palette-button" value="<?php print $palette_button_value;?>"><span>Preview </span><?php print ucwords($palette_button_value);?> Palette</button>
        </form>
    </div>

    <section id="filled">
        <h2>Filled Style <small class="new">New</small></h2>
        <p>These fit in well with the built-in custom perspective icons, and will work well on the soon-to-be-released OmniFocus 3 for&nbsp;Mac.</p>
        <ul class="glyphs">
            <?php glyphs($color, $icon_list, 'filled'); ?>
        </ul>
    </section>

    <section id="rounded">
        <h2>Rounded Rectangle Style</h2>
        <p>These match up stylistically with the built-in perspectives on&nbsp;iOS.</p>
        <ul class="glyphs">
            <?php glyphs($color, $icon_list, 'rounded'); ?>
        </ul>

        <div class="note">
            <h2>OmniFocus 2 Icon&nbsp;Set</h2>
            <p>Please note, <a href="v2/">my previous set for OmniFocus 2 for Mac and iOS remains available here</a>.</p>
        </div>
    </section>
    
    <section id="installation">
        <h2>Mac Installation</h2>

        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/dVwfSIzE9oM?rel=0" frameborder="0" allow="autoplay; encrypted-media" title="Video tutorial for how to install perspective icons on OmniFocus 3 for Mac" allowfullscreen></iframe>
        </div>
        
        <p>Note that the above video was taken with a beta version of OmniFocus 3. It should be representative of the process,&nbsp;however.</p>

        <div class="instructions">
            <ol>
                <li>If you haven&rsquo;t already, purchase the Pro upgrade. Pro is required to use custom perspectives.</li>

                <li>In the Menu, go to <strong>Perspectives &gt; Show Perspectives</strong></li>
            
                <li>Click on the Perspective you want to edit, or add a new one. (Note that you cannot change the icons for Inbox, Projects, Tags, Forecast, Flagged, or&#160;Review).</li>
            
                <li>Drag the icon you want to use from this site to the icon&#160;picker.</li>

                <li>If you would also like the text color to match the icon, click the arrow in the bottom right of the icon picker and make your&nbsp;choice.</li>
            </ol>
        </div>

        <h2>iOS Installation</h2>
        
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/U23cVd1wyaA?rel=0" frameborder="0" allow="autoplay; encrypted-media" title="Video tutorial for how to install perspective icons on OmniFocus 3 for iOS" allowfullscreen></iframe>
        </div>

        <div class="instructions">
            <p><a href="https://www.omnigroup.com/omnifocus/ios/">OmniFocus 3 for iOS</a> for the first time allows custom perspective icons to be chosen from a user&rsquo;s photo library. Follow these steps:</p>

            <ol>
                <li>If you haven&rsquo;t already, purchase the <a href="https://support.omnigroup.com/of3-ios-iap/">Pro upgrade</a>. Pro is required to use custom perspectives.</li>
            
                <li>On this site, choose the colors and icons you would like to use. To save an icon to your photo library, tap and hold the icon, and then choose <strong>Save&nbsp;Image</strong>.</li>

                <li>Click on the Perspective you want to edit, or add a new one. (Note that you cannot change the icons for Inbox, Projects, Tags, Forecast, Flagged, Nearby, or&nbsp;Review).</li>

                <li>In the perspective editor, tap the icon next to the perspective name, scroll down and hit <strong>Custom</strong>. Choose an icon from your photo&nbsp;library.</li>

                <li>Alternatively, on the iPad in Split View, icons from this site can be dragged to anywhere on the perspective&nbsp;editor.</li>

                <li>If you would also like the text color to match the icon, tap <strong>Color</strong> in the top right of the view, and make your&nbsp;choice.</li>
            </ol>
        </div>
    </section>
</main>

<footer role="contentinfo">
    <p>This project is produced by <a href="https://josh-hughes.com">Josh Hughes</a>. It is not affiliated with the <a href="https://www.omnigroup.com">Omni Group</a>. Please feel free to use the icons as you see fit. If you have any questions or requests, please send them to <a href="mailto:josh@josh-hughes.com">josh@josh-hughes.com</a>.</p>
</footer>

<!-- Javascript -->
<script src="js/v3.js?v=4"></script>
</body>
</html>