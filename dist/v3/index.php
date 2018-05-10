<?php
/**
 * Perspective Icons for OmniFocus 3
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */
 
// Libraries
require_once('../inc/configurationV3.php');
require_once('../inc/functionsV3.php');
?>
<!DOCTYPE html>
<html lang="en" class="v3">
<head>
    <meta charset="utf-8" />
    <title>Perspective Icons for OmniFocus 3, by Josh Hughes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="../images/favicon.ico" />
    
    <!-- Apple Touch Icons -->
    <meta name="apple-mobile-web-app-title" content="OF Icons" />
    <link rel="apple-touch-icon-precomposed" href="../images/apple-touch-icon-76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../images/apple-touch-icon-120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../images/apple-touch-icon-152.png" />
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="../images/apple-touch-icon-180.png" />
    
    <!-- Microsoft Windows 8+ Tiles -->
    <meta name="application-name" content="OF Icons" />
    <meta name="msapplication-TileImage" content="../images/microsoft-pinned-site.png" />
    <meta name="msapplication-TileColor" content="#7431ab" />
    
    <!-- CSS -->
    <!--[if !lt IE 9]><!--><link href="../css/style.css?v=4" rel="stylesheet" /><!--<![endif]-->
    <!--[if lte IE 8]><link href="../css/text-only.css?v=3" rel="stylesheet" /><![endif]-->
</head>
<body>
<!--[if lte IE 8]>
    <p class="outdated-browser">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<main id="content" role="main">
    <section id="ios">
        <h1>Perspective Icons for OmniFocus 3 for&nbsp;iOS</h1>
        <p>This is very much a work in progress. Requests or feedback can be directed to <a href="mailto:josh@josh-hughes.com">josh@josh-hughes.com</a>. 
        
        <div class="controls">
            <ul class="color-selector">
                <?php colorSelector($ios_color, $all_colors); ?>
            </ul>
        </div>
            
        <ul class="glyphs">
            <?php glyphs($ios_color, $icon_list); ?>
        </ul>
    </section>
</main>

<?php
if ((isset($_SERVER['HTTP_HOST'])) && ($_SERVER['HTTP_HOST'] == 'omnifocusicons.josh-hughes.com')) {
    print '<script src="../js/google-analytics.js"></script>';
}
?>
</body>
</html>