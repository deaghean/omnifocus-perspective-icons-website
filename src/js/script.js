/**
 * Enable icon color selection
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */
/* globals mac_resolution_changed */

var currentColors = {
    'ios' : document.querySelector('#ios .color-selector a.selected').getAttribute('data-color'), 
    'mac' : document.querySelector('#mac .color-selector a.selected').getAttribute('data-color')
};

var currentResolutions = { 
    'ios' : document.querySelector('#ios .resolution-selector a.selected').getAttribute('data-resolution'), 
    'mac' : document.querySelector('#mac .resolution-selector a.selected').getAttribute('data-resolution')
};

var colorSelectors      = document.querySelectorAll('.color-selector a'),
    resolutionSelectors = document.querySelectorAll('.resolution-selector a');

/**
 * Switch out icons
 *
 * @param string color Color of icon
 * @param string type 'mac' or 'ios'
 * @param string resolution '1x' or '2x'
 */
function switchIcons(color, type, resolution)
{
    var colorClass          = color,
        colorsAvailable     = ['blue', 'brown', 'graphite', 'green', 'orange', 'purple', 'red', 'teal'],
        glyphImages         = document.querySelectorAll('#' + type + ' .glyphs img'),
        iconClass           = '',
        selectedNow        = document.querySelectorAll('#' + type + ' .resolution-selector .resolution-' + resolution),
        selectedPreviously = document.querySelectorAll('#' + type + ' .resolution-selector .selected');
    
    if (colorsAvailable.indexOf(color) >= 0) {
        
        // Update current values
        currentColors[type] = color;
        currentResolutions[type] = resolution;

        // Update colorClass
        if (type === 'ios') {
            colorClass = 'ios-' + colorClass;
        }

        if (resolution !== '1x') {
            colorClass += '@' + resolution;
        }

        // Update selected class for resolution selector
        for (var i = 0; i < selectedPreviously.length; i++) {
            selectedPreviously[i].classList.remove('selected');
        }
        for (i = 0; i < selectedNow.length; i++) {
            selectedNow[i].classList.add('selected');
        }

        // Update glyphs
        for (i = 0; i < glyphImages.length; i++) {
            iconClass = glyphImages[i].className;
            
            if ((typeof iconClass !== 'undefined') && (iconClass !== '')) {
                glyphImages[i].setAttribute('src', 'icons/' + iconClass + '/icon-' + colorClass + '.png');
            }
        }

        // Update control hrefs (in case the user opens the links in a new tab/window)
        for (i = 0; i < colorSelectors.length; i++) {
            if (colorSelectors[i].parentNode.parentNode.parentNode.parentNode.id === 'mac') {
                colorSelectors[i].setAttribute('href', '?mac-color=' + colorSelectors[i].getAttribute('data-color') +  '&ios-color=' + currentColors.ios + '&mac-resolution=' + currentResolutions.mac + '&ios-resolution=' + currentResolutions.ios);
            } else {
                colorSelectors[i].setAttribute('href', '?mac-color=' + currentColors.mac +  '&ios-color=' + colorSelectors[i].getAttribute('data-color') + '&mac-resolution=' + currentResolutions.mac + '&ios-resolution=' + currentResolutions.ios);
            }
        }

        for (i = 0; i < resolutionSelectors.length; i++) {
            if (resolutionSelectors[i].parentNode.parentNode.parentNode.parentNode.id === 'mac') {
                resolutionSelectors[i].setAttribute('href', '?mac-color=' + currentColors.mac +  '&ios-color=' + currentColors.ios + '&mac-resolution=' + resolutionSelectors[i].getAttribute('data-resolution') + '&ios-resolution=' + currentResolutions.ios);
            } else {
                resolutionSelectors[i].setAttribute('href', '?mac-color=' + currentColors.mac +  '&ios-color=' + currentColors.ios + '&mac-resolution=' + currentResolutions.mac + '&ios-resolution=' + resolutionSelectors[i].getAttribute('data-resolution'));
            }
        }
    }
}

/**
 * Change icon colors
 *
 * @param object event Event
 */
function switchColors(event)
{
    var currentSection = this.parentNode.parentNode.parentNode.parentNode.id;
    switchIcons(this.getAttribute('data-color'), currentSection, currentResolutions[currentSection]);

    // Stop clickthrough
    event.preventDefault();
}

/**
 * Change resolutions
 *
 * @param object event Event
 */
function switchResolutions(event)
{
    var currentSection = this.parentNode.parentNode.parentNode.parentNode.id;
    switchIcons(currentColors[currentSection], currentSection, this.getAttribute('data-resolution'));

    // Stop clickthrough
    event.preventDefault();
}

// Do a Mac resolution check, and update the Mac icons if necessary
if ((window.devicePixelRatio) && (window.devicePixelRatio > 1.5) && (mac_resolution_changed === false)) {
    switchIcons(currentColors.mac, 'mac', '2x');
}

// Add events to the color and resolution switchers
for (var i = 0; i < colorSelectors.length; i++) {
    colorSelectors[i].addEventListener('click', switchColors);
}
for (i = 0; i < resolutionSelectors.length; i++) {
    resolutionSelectors[i].addEventListener('click', switchResolutions);
}