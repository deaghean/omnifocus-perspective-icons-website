/**
 * Google Analytics script (http://google.com/analytics)
 *
 * @version 1.0.3
 */

if ((typeof objGoogleAnalyticsConfig !== 'undefined') && (typeof objGoogleAnalyticsConfig.code !== 'undefined') && (typeof objGoogleAnalyticsConfig.domain !== 'undefined')) {
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', objGoogleAnalyticsConfig.code, objGoogleAnalyticsConfig.domain);
    ga('send', 'pageview');
}