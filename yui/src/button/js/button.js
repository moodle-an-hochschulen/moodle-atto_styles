// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Atto styles - YUI file
 *
 * @package    atto_styles
 * @copyright  2015 Andrew Davidson, Synergy Learning UK <andrew.davidson@synergy-learning.com>
 *             on behalf of Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * @module moodle-atto_styles-button
 */

/**
 * Atto text editor styles plugin.
 *
 * @namespace M.atto_styles
 * @class button
 * @extends M.editor_atto.EditorPlugin
 */

var component = 'atto_styles';

Y.namespace('M.atto_styles').Button = Y.Base.create('button', Y.M.editor_atto.EditorPlugin, [], {
    initializer: function() {
        var styles = this.get('styles');
        styles = JSON.parse(styles);
        var items = [];
        var icon, span, spanpreview, inlinehint;
        Y.Array.each(styles, function(style) {
            icon = '<i></i>';
            span = '<span>';
            spanpreview = '<span class="title">';
            inlinehint = '';
            if (style.type === 'nostyle') {
                icon = '<i class="fa fa-fw fa-times"></i>';
                span = '<span class="nostyle">';
            } else if (style.type === 'block') {
                icon = '<i class="fa fa-fw fa-tint"></i>';
                span = '<span class="blockstyle">';
            } else if (style.type == 'inline') {
                icon = '<i class="fa fa-fw fa-i-cursor"></i>';
                span = '<span class="inlinestyle">';
                inlinehint = '<br /><span class="inlinehint tag tag-info">' +
                    M.util.get_string('inlinehint', 'atto_styles') + '</span>';
            }
            if (style.preview === true) {
                spanpreview = '<span class="preview ' + style.classes + '">';
            }
            items.push({
                text: span + icon + spanpreview + style.title + '</span>' + inlinehint + '</span>',
                callbackArgs: ['<' + style.type + '>', style.classes]
            });
        });

        // Override the _showToolbarMenu function to disable/enable inline styles and to adjust the dropdown height, as needed.
        var showToolbarMenu = this._showToolbarMenu;
        this._showToolbarMenu = function(e, config) {
            showToolbarMenu.call(this, e, config);

            var enableInline, menu, menuContent;
            enableInline = this.hasRangeSelected();
            menu = this.menus[config.buttonClass];
            menuContent = menu.get('contentBox');
            if (enableInline) {
                menuContent.removeClass('disableinline');
            } else {
                menuContent.addClass('disableinline');
            }

            this.toolbar.after('click', Y.bind(this._setDropdownHeight, this));
            Y.on('windowresize', Y.bind(this._setDropdownHeight, this));
        };

        this.addToolbarMenu({
            icon: 'icon',
            iconComponent: component,
            buttonClass: 'styles',
            globalItemConfig: {
                callback: this._changeStyle
            },
            items: items
        });
    },

    /**
     * Change the text to the specified style.
     *
     * @method _changeStyle
     * @param {EventFacade} e
     * @param {string} style The new style
     * @private
     */
    _changeStyle: function(e, style) {
        var eID, element, p, pstyle, styles, host, i;
        if (style[0] === '<nostyle>') {
            element = window.getSelection().focusNode;
            for (p = element; p; p = p.parentNode) {
                if (p.nodeType !== 1) {
                    continue;
                }
                pstyle = window.getComputedStyle(p, null);
                if (pstyle) {
                    p.removeAttribute('class');
                    break;
                }
            }
            return;
        } else if (style[0] === '<block>') {
            document.execCommand('formatBlock', false, '<div>');
            element = window.getSelection().focusNode;
            for (p = element; p; p = p.parentNode) {
                if (p.nodeType !== 1) {
                    continue;
                }
                pstyle = window.getComputedStyle(p, null);
                if (pstyle) {
                    var displaystyle = pstyle.getPropertyValue('display');
                    if (displaystyle === 'block') {
                        eID = p;
                        break;
                    }
                }
            }
            eID.setAttribute('class', style[1]);
        } else {
            styles = style[1].split(" ");
            host = this.get('host');
            for (i = 0; i < styles.length; i += 1) {
                host.toggleInlineSelectionClass([styles[i]]);
            }
        }
        // Mark as updated.
        this.markUpdated();
    },

    hasRangeSelected: function() {
        var selection, range;

        selection = window.rangy.getSelection();
        if (!selection.rangeCount) {
            return false;
        }
        range = selection.getRangeAt(0);
        return !range.collapsed;
    },

    _setDropdownHeight: function() {
        var newHeight = parseInt(this.editor._node.clientHeight, 10) + 35;
        Y.one('.editor_atto_menu .atto_styles_button .dropdown-menu').setStyle('max-height', newHeight);
    }
}, {
    ATTRS: {
        /**
         * The content of the styles.
         *
         * @attribute library
         * @type object
         */
        styles: {
            value: {}
        }
    }
});
