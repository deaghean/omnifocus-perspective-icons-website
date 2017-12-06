/**
 * Enable icon color selection
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */
/* globals mac_resolution_changed */

var currentColors = {
    'ios' : document.querySelector('#ios .color-selector a.selected').classList[0], 
    'mac' : document.querySelector('#mac .color-selector a.selected').classList[0]
};

var currentResolutions = { 
    'ios' : document.querySelector('#ios .resolution-selector a.selected').classList[0], 
    'mac' : document.querySelector('#mac .resolution-selector a.selected').classList[0]
};

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
        iconClass           = '';
    
    if (colorsAvailable.indexOf(colorClass) >= 0) {
        
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
        document.querySelectorAll('#' + type + ' .resolution-selector .selected').forEach(function(selector) {
            selector.classList.remove('selected');
        });
        document.querySelectorAll('#' + type + ' .resolution-selector .resolution-' + resolution).forEach(function(selector) {
            selector.classList.add('selected');
        });

        document.querySelectorAll('#' + type + ' .glyphs img').forEach(function(glyphImage) {
            iconClass = glyphImage.className;
            
            if ((typeof iconClass !== 'undefined') && (iconClass !== '')) {
                glyphImage.setAttribute('src', 'icons/' + iconClass + '/icon-' + colorClass + '.png');
            }
        });
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
    switchIcons(this.className, currentSection, currentResolutions[currentSection]);

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
    var resolution = '1x';
    if (this.classList.contains('resolution-2x')) {
        resolution = '2x';
    }
    switchIcons(currentColors[currentSection], currentSection, resolution);

    // Stop clickthrough
    event.preventDefault();
}

// Do a Mac resolution check, and update the Mac icons if necessary
if ((window.devicePixelRatio) && (window.devicePixelRatio > 1.5) && (mac_resolution_changed === false)) {
    switchIcons(currentColors.mac, 'mac', '2x');
}

// Add events to the color and resolution switchers
document.querySelectorAll('.color-selector a').forEach(function(selectorLink) {
    selectorLink.addEventListener('click', switchColors);
});

document.querySelectorAll('.resolution-selector a').forEach(function(selectorLink) {
    selectorLink.addEventListener('click', switchResolutions);
});