function switchIcons(e,o,t){var r=e,s=["blue","brown","graphite","green","orange","purple","red","teal"],l=document.querySelectorAll("#"+o+" .glyphs img"),c="",i=document.querySelectorAll("#"+o+" .resolution-selector .resolution-"+t),n=document.querySelectorAll("#"+o+" .resolution-selector .selected");if(s.indexOf(e)>=0){currentColors[o]=e,currentResolutions[o]=t,"ios"===o&&(r="ios-"+r),"1x"!==t&&(r+="@"+t);for(var u=0;u<n.length;u++)n[u].classList.remove("selected");for(u=0;u<i.length;u++)i[u].classList.add("selected");for(u=0;u<l.length;u++)void 0!==(c=l[u].className)&&""!==c&&l[u].setAttribute("src","icons/"+c+"/icon-"+r+".png");for(u=0;u<colorSelectors.length;u++)"mac"===colorSelectors[u].parentNode.parentNode.parentNode.parentNode.id?colorSelectors[u].setAttribute("href","?mac-color="+colorSelectors[u].getAttribute("data-color")+"&ios-color="+currentColors.ios+"&mac-resolution="+currentResolutions.mac+"&ios-resolution="+currentResolutions.ios):colorSelectors[u].setAttribute("href","?mac-color="+currentColors.mac+"&ios-color="+colorSelectors[u].getAttribute("data-color")+"&mac-resolution="+currentResolutions.mac+"&ios-resolution="+currentResolutions.ios);for(u=0;u<resolutionSelectors.length;u++)"mac"===resolutionSelectors[u].parentNode.parentNode.parentNode.parentNode.id?resolutionSelectors[u].setAttribute("href","?mac-color="+currentColors.mac+"&ios-color="+currentColors.ios+"&mac-resolution="+resolutionSelectors[u].getAttribute("data-resolution")+"&ios-resolution="+currentResolutions.ios):resolutionSelectors[u].setAttribute("href","?mac-color="+currentColors.mac+"&ios-color="+currentColors.ios+"&mac-resolution="+currentResolutions.mac+"&ios-resolution="+resolutionSelectors[u].getAttribute("data-resolution"))}}function switchColors(e){var o=this.parentNode.parentNode.parentNode.parentNode.id;switchIcons(this.getAttribute("data-color"),o,currentResolutions[o]),e.preventDefault()}function switchResolutions(e){var o=this.parentNode.parentNode.parentNode.parentNode.id;switchIcons(currentColors[o],o,this.getAttribute("data-resolution")),e.preventDefault()}var currentColors={ios:document.querySelector("#ios .color-selector a.selected").getAttribute("data-color"),mac:document.querySelector("#mac .color-selector a.selected").getAttribute("data-color")},currentResolutions={ios:document.querySelector("#ios .resolution-selector a.selected").getAttribute("data-resolution"),mac:document.querySelector("#mac .resolution-selector a.selected").getAttribute("data-resolution")},colorSelectors=document.querySelectorAll(".color-selector a"),resolutionSelectors=document.querySelectorAll(".resolution-selector a");window.devicePixelRatio&&window.devicePixelRatio>1.5&&!1===mac_resolution_changed&&switchIcons(currentColors.mac,"mac","2x");for(var i=0;i<colorSelectors.length;i++)colorSelectors[i].addEventListener("click",switchColors);for(i=0;i<resolutionSelectors.length;i++)resolutionSelectors[i].addEventListener("click",switchResolutions);