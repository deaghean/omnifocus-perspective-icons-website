/**
 * Enable icon color selection
 *
 * @author Josh Hughes (josh@josh-hughes.com)
 */

var colorSelector        = document.querySelector('.color-selector'),
    colorSelectorButtons = colorSelector.querySelectorAll('input[type=radio]'),
    colorButton          = document.querySelector('#color-button'),
    htmlElement          = document.querySelector('html'),
    midDrag              = false,
    paletteButton        = document.querySelector('#palette-button');

/**
 * Switch out icons
 *
 * @param string color Color of icon
 */
function switchIcons(color)
{
    var colorClass          = color,
        colorsAvailable     = ['sherbet', 'pink', 'magenta', 'orange', 'light-pink', 'red', 'green', 'lime-green', 'gold', 'teal', 'light-teal', 'dark-teal', 'purple', 'light-purple', 'indigo', 'lilac', 'fuchsia', 'plum', 'blue', 'light-blue', 'navy', 'graphite', 'grey', 'light-grey'],
        glyphImages         = document.querySelectorAll('.glyphs img'),
        iconClass           = '';
    
    if (colorsAvailable.indexOf(color) >= 0) {

        // Remove src
        for (var i = 0; i < glyphImages.length; i++) {
            glyphImages[i].removeAttribute('src');
        }

        // Update glyphs
        for (i = 0; i < glyphImages.length; i++) {
            iconClass = glyphImages[i].className;
            
            if ((typeof iconClass !== 'undefined') && (iconClass !== '')) {
                glyphImages[i].setAttribute('src', 'icons/' + iconClass + '/icon-ios-' + colorClass + '@2x.png');
            }
        }
    }
}

/**
 * Stop propagation
 *
 * @param object event Event
 */
function stopEventPropagation(event)
{
    event.stopPropagation();
}

/**
 * Disable color selector modal
 */
function removeColorSelectorModal()
{
    if (midDrag !== true) {
        colorSelector.classList.remove('color-selector-shown');
    }
}

/**
 * Change icon colors
 *
 * @param object event Event
 */
function switchColors(event)
{
    event.preventDefault();
    colorButton.setAttribute('class', 'color-button--' + this.value);
    switchIcons(this.value);
    removeColorSelectorModal();
}

// Add events to the color selectors
for (var i = 0; i < colorSelectorButtons.length; i++) {
    colorSelectorButtons[i].addEventListener('change', switchColors);
}

// Setup color button
colorButton.addEventListener('click', function(event) {
    event.preventDefault();
    colorSelector.classList.toggle('color-selector-shown');
});

colorButton.addEventListener('click', stopEventPropagation);
colorButton.addEventListener('touchend', stopEventPropagation);
colorSelector.addEventListener('click', stopEventPropagation);
colorSelector.addEventListener('touchend', stopEventPropagation);

htmlElement.addEventListener('click', removeColorSelectorModal);
htmlElement.addEventListener('touchstart', function() { midDrag = false; });
htmlElement.addEventListener('touchmove', function() { midDrag = true; });
htmlElement.addEventListener('touchend', removeColorSelectorModal);

// Setup palette button
paletteButton.addEventListener('click', function(event) {
    event.preventDefault();

    if (this.value === 'dark') {
        htmlElement.classList.add('dark-palette');
        this.value = 'light';
        this.innerHTML = '<span>Preview </span>Light Palette';
    } else {
        htmlElement.classList.remove('dark-palette');
        this.value = 'dark';
        this.innerHTML = '<span>Preview </span>Dark Palette';
    }
});