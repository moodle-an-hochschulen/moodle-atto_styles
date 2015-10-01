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
 * @package     atto
 * @subpackage  atto_styles
 * @copyright   2015 Alexander Bias, University of Ulm <alexander.bias@uni-ulm.de>, together with Synergy Learning UK
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
        var icon, span;
        Y.Array.each(styles, function(style) {
            icon = '';
            span = '<span>';
            if (style.type === 'block') {
                icon = '<i class="block_element"></i>';
            } else if (style.type !== 'nostyle') {
                icon = '<i class="inline_element"></i>';
                span = '<span class="inlinestyle">';
            }
            items.push({
                text: span+icon+style.title+'</span>',
                callbackArgs: ['<'+style.type+'>', style.classes]
            });
        });

        // Override the _showToolbarMenu function to disable/enable inline styles, as needed.
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
        var element, node, blockMethod;
        blockMethod = this.get('blockmethod');
        if (style[0] === '<nostyle>') {
            element = window.getSelection().focusNode;
            if (blockMethod === 'replace') {
                node = this._getParentBlockOld(element); // Find a styled element.
            } else {
                node = this._getParentBlock(element, true); // Find a block or list-item element.
                if (blockMethod === 'adddiv') {
                    node = this._getDiv(node);
                }
            }
            if (node) {
                node.removeAttribute('class');
            }
        } else if (style[0] === '<block>') {
            if (blockMethod === 'replace') {
                document.execCommand('formatBlock', false, '<div>');
            }
            element = window.getSelection().focusNode;
            node = this._getParentBlock(element, (blockMethod !== 'replace'));
            if (blockMethod === 'adddiv') {
                node = this._addDivIfNeeded(node);
            }
            if (node) {
                node.setAttribute('class', style[1]);
            }
        } else {
            var styles = style[1].split(" ");
            this.get('host').toggleInlineSelectionClass(styles);
        }
        // Mark as updated
        this.markUpdated();
    },

    /**
     * Find the nearest parent with display:block (or list-item)
     * @param el Node
     * @param includeListItem bool - true if list-item is a valid display type to return
     * @returns Node|null
     * @private
     */
    _getParentBlock: function(el, includeListItem) {
        var p, node, display;
        for (p = el; p; p = p.parentNode) {
            if (p.nodeType !== 1) {
                continue;
            }
            node = Y.one(p);
            if (node.hasClass('editor_atto_content')) {
                return null;
            }
            display = node.getComputedStyle('display');
            if (display === 'block' || display === 'inline-block' || (includeListItem && display === 'list-item')) {
                return node;
            }
        }
    },

    /**
     * Find the nearest parent with any associated style.
     * @param el Node
     * @returns Node|null
     * @private
     */
    _getParentBlockOld: function(el) {
        var p, pstyle;
        for (p = el; p; p = p.parentNode) {
            if (p.nodeType !== 1) {
                continue;
            }
            pstyle = window.getComputedStyle(p, null);
            if (pstyle) {
                return p;
            }
        }
        return null;
    },

    /**
     * Make sure we are targetting a div element - creating one if none is found.
     * @param el Node
     * @returns Node|null
     * @private
     */
    _addDivIfNeeded: function(el) {
        var parent, next, div;
        if (!el) {
            return null;
        }
        if (el.get('tagName').toLowerCase() === 'div') {
            return el; // The block element is already a div - just return it.
        }
        parent = el.get('parentNode');
        if (parent.get('tagName').toLowerCase() === 'div') {
            if (parent.get('children').size() === 1) {
                return parent; // The block element is surrounded by a div - return that.
            }
        }

        // Need to wrap the existing element in a div.
        next = el.next();
        div = Y.Node.create('<div></div>');
        div.appendChild(el);
        if (next) {
            parent.insertBefore(div, next);
        } else {
            parent.appendChild(div);
        }
        return div;
    },

    /**
     * Look for a div that
     * @param el Node
     * @returns Node|null
     * @private
     */
    _getDiv: function(el) {
        var parent;
        if (!el) {
            return null;
        }
        if (el.get('tagName').toLowerCase() === 'div') {
            return el; // The block element is already a div - just return it.
        }
        parent = el.get('parentNode');
        if (parent.get('tagName').toLowerCase() === 'div') {
            return parent; // The block is surrounded by a div - return it.
        }

        return null; // Not able to find a suitable div.
    },

    hasRangeSelected: function() {
        var selection, range;

        selection = rangy.getSelection();
        if (!selection.rangeCount) {
            return false;
        }
        range = selection.getRangeAt(0);
        return !range.collapsed;
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
        },
        blockmethod: {
            value: 'setclass'
        }
    }
});

