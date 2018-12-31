/**
 * Enable icon color selection
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */
/**
 * Switch out icons
 *
 * @param string color Color of icon
 */
function switchIcons(e){var t=e,o=["sherbet","pink","magenta","orange","light-pink","red","green","lime-green","gold","teal","light-teal","dark-teal","purple","light-purple","indigo","lilac","fuchsia","plum","blue","light-blue","navy","graphite","grey","light-grey"],r=document.querySelectorAll(".glyphs img"),l="",n="";if(0<=o.indexOf(e)){
// Remove src
for(var a=0;a<r.length;a++)r[a].removeAttribute("src");
// Update glyphs
for(a=0;a<r.length;a++)l=r[a].className,n=r[a].getAttribute("data-type")||"filled",void 0!==l&&""!==l&&r[a].setAttribute("src","icons/"+l+"/icon-"+n+"-"+t+"@2x.png")}}
/**
 * Stop propagation
 *
 * @param object event Event
 */function stopEventPropagation(e){e.stopPropagation()}
/**
 * Disable color selector modal
 */function removeColorSelectorModal(){!0!==midDrag&&colorSelector.classList.remove("color-selector-shown")}
/**
 * Change icon colors
 *
 * @param object event Event
 */function switchColors(e){e.preventDefault(),colorButton.setAttribute("class","color-button--"+this.value),switchIcons(this.value),removeColorSelectorModal()}
/**
 * Switch color palettes
 *
 * @param type string 'light' or 'dark'
 */function switchColorPalette(e){paletteButton.innerHTML="dark"===e?(htmlElement.classList.add("dark-palette"),paletteButton.value="light","<span>Preview </span>Light Palette"):(htmlElement.classList.remove("dark-palette"),paletteButton.value="dark","<span>Preview </span>Dark Palette")}
/**
 * Setup automatic dark mode handling
 *
 * @param object event Event
 */function triggerDarkMode(e){e.matches?switchColorPalette("dark"):switchColorPalette("light")}
// Add events to the color selectors
for(var colorSelector=document.querySelector(".color-selector"),colorSelectorButtons=colorSelector.querySelectorAll("input[type=radio]"),colorButton=document.querySelector("#color-button"),htmlElement=document.querySelector("html"),midDrag=!1,paletteButton=document.querySelector("#palette-button"),i=0;i<colorSelectorButtons.length;i++)colorSelectorButtons[i].addEventListener("change",switchColors);
// Setup color button
colorButton.addEventListener("click",function(e){e.preventDefault(),colorSelector.classList.toggle("color-selector-shown")}),colorButton.addEventListener("click",stopEventPropagation),colorButton.addEventListener("touchend",stopEventPropagation),colorSelector.addEventListener("click",stopEventPropagation),colorSelector.addEventListener("touchend",stopEventPropagation),htmlElement.addEventListener("click",removeColorSelectorModal),htmlElement.addEventListener("touchstart",function(){midDrag=!1}),htmlElement.addEventListener("touchmove",function(){midDrag=!0}),htmlElement.addEventListener("touchend",removeColorSelectorModal),
// Setup palette button
paletteButton.addEventListener("click",function(e){e.preventDefault(),switchColorPalette(this.value)});
// Trigger dark mode automatically
var darkModeMediaQuery=window.matchMedia("(prefers-color-scheme: dark)");triggerDarkMode(darkModeMediaQuery),darkModeMediaQuery.addListener(triggerDarkMode);