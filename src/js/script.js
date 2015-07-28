/**
 * Enable icon color selection
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */
 
var colorClass, colorOptions, i, iconClass, iconImages, iosSelectorLinks, macSelectorLinks,
    
// Set color options
colorOptions = ['blue', 'brown', 'graphite', 'green', 'orange', 'purple', 'red', 'teal'];

/**
 * Switch Mac colors
 *
 * @param object event Event variable
 */
function switchMacColors(event)
{
    // Stop clickthrough
    event.preventDefault();
    
    // Classes
    iconClass = '';
    colorClass = this.className;
    
    if (colorOptions.indexOf(colorClass) >= 0) {
            
        // Set proper 'selected-color' class on the color selector
        for (i = 0; i < macSelectorLinks.length; i++) {
            macSelectorLinks[i].className = macSelectorLinks[i].className.replace(' selected-color', '');
        }
        this.className = this.className + ' selected-color';
        
        // Update glyphs
        iconImages = document.querySelectorAll('#mac .glyphs img');
        if (iconImages.length > 0) {
            for (i = 0; i < iconImages.length; i++) {            
                iconClass = iconImages[i].className;
                if ((typeof iconClass !== 'undefined') && (iconClass !== '')) {
                    iconImages[i].setAttribute('src', 'icons/' + iconClass + '/icon-' + colorClass + '.png');
                    iconImages[i].setAttribute('srcset', 'icons/' + iconClass + '/icon-' + colorClass + '.png 1x, icons/' + iconClass + '/icon-' + colorClass + '@2x.png 1x');
                }
            }
        }
    }
}

/**
 * Switch iOS colors
 *
 * @param object event Event variable
 */
function switchiOSColors(event)
{
    // Stop clickthrough
    event.preventDefault();
    
    // Classes
    iconClass = '';
    colorClass = this.className;
    
    if (colorOptions.indexOf(colorClass) >= 0) {
            
        // Set proper 'selected-color' class on the color selector
        for (i = 0; i < iosSelectorLinks.length; i++) {
            iosSelectorLinks[i].className = iosSelectorLinks[i].className.replace(' selected-color', '');
        }
        this.className = this.className + ' selected-color';
        
        // Update glyphs
        iconImages = document.querySelectorAll('#ios .glyphs img');
        if (iconImages.length > 0) {
            for (i = 0; i < iconImages.length; i++) {            
                iconClass = iconImages[i].className;
                if ((typeof iconClass !== 'undefined') && (iconClass !== '')) {
                    iconImages[i].setAttribute('src', 'icons/' + iconClass + '/icon-ios-' + colorClass + '@2x.png');
                }
            }
        }
    }
}

// Setup color switchers
macSelectorLinks = document.querySelectorAll('#mac .color-selector a');
iosSelectorLinks = document.querySelectorAll('#ios .color-selector a');

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