/**
 * Enable icon color selection
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */
 
var colorClass, colorOptions, i, iconClass, iconImages, iosSelectorLinks, macSelectorLinks, selectorLinks;
    
// Set color options
colorOptions = ['blue', 'brown', 'graphite', 'green', 'orange', 'purple', 'red', 'teal'];

// Setup color switchers
macSelectorLinks = document.querySelectorAll('#mac .color-selector a');
iosSelectorLinks = document.querySelectorAll('#ios .color-selector a');

/**
 * Switch icon colors (general method for both Mac and iOS)
 *
 * @param object element Node associated with a given color
 * @param string mode 'mac' or 'ios'
 */
function switchColors(element, mode)
{
    // Stop clickthrough
    event.preventDefault();
    
    // Classes
    iconClass = '';
    colorClass = element.className;
    
    if (colorOptions.indexOf(colorClass) >= 0) {
        
        // Mac or iOS?
        if (mode === 'mac') {
            selectorLinks = macSelectorLinks;
            iconImages = document.querySelectorAll('#mac .glyphs img');
        } else {
            selectorLinks = iosSelectorLinks;
            iconImages = document.querySelectorAll('#ios .glyphs img');
        }
            
        // Set proper 'selected-color' class on the color selector
        for (i = 0; i < selectorLinks.length; i++) {
            selectorLinks[i].className = selectorLinks[i].className.replace(' selected-color', '');
        }
        element.className = element.className + ' selected-color';
        
        // Update glyphs
        if (iconImages.length > 0) {
            for (i = 0; i < iconImages.length; i++) {            
                iconClass = iconImages[i].className;
                if ((typeof iconClass !== 'undefined') && (iconClass !== '')) {
                    
                    // Mac or iOS?
                    if (mode === 'mac') {
                        iconImages[i].setAttribute('src', 'icons/' + iconClass + '/icon-' + colorClass + '.png');
                        iconImages[i].setAttribute('srcset', 'icons/' + iconClass + '/icon-' + colorClass + '.png 1x, icons/' + iconClass + '/icon-' + colorClass + '@2x.png 2x');
                    } else {
                        iconImages[i].setAttribute('src', 'icons/' + iconClass + '/icon-ios-' + colorClass + '@2x.png');
                    }
                }
            }
        }
    }
}

/**
 * Switch Mac colors
 */
function switchMacColors()
{
    switchColors(this, 'mac');
}

/**
 * Switch iOS colors
 */
function switchiOSColors()
{
    switchColors(this, 'ios');
}

// Add click events
if (macSelectorLinks.length > 0) {
    for (i = 0; i < macSelectorLinks.length; i++) {
        macSelectorLinks[i].onclick = switchMacColors;
    }
}

if (iosSelectorLinks.length > 0) {
    for (i = 0; i < iosSelectorLinks.length; i++) {
        iosSelectorLinks[i].onclick = switchiOSColors;
    }
}