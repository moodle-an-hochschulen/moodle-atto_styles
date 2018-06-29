<?php
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
 * Atto styles - Library
 *
 * @package    atto_styles
 * @copyright  2015 Andrew Davidson, Synergy Learning UK <andrew.davidson@synergy-learning.com>
               on behalf of Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Set params for this plugin.
 *
 * @param string $elementid
 * @param stdClass $options - the options for the editor, including the context.
 * @param stdClass $fpoptions - unused.
 */
function atto_styles_params_for_js($elementid, $options, $fpoptions) {

    // Format a string with the active filter set.
    // If it is modified - we assume that some sort of text filter is working in this context.
    $styles = get_config('atto_styles', 'config');
    $styles = '['.$styles.']';

    $styles = json_decode($styles);

    foreach ($styles as $key => $style) {
        $styles[$key]->title = format_text($styles[$key]->title);
        $styles[$key]->title = strip_tags($styles[$key]->title);
    }

    $nostyle = new stdClass();
    $nostyle->title = get_string('nostyle', 'atto_styles');
    $nostyle->type = 'nostyle';
    $nostyle->classes = 'nostyle';

    array_unshift($styles, $nostyle);

    $styles = json_encode($styles);

    return array('styles' => $styles);
}

/**
 * Get icon mapping for font-awesome.
 */
function atto_styles_get_fontawesome_icon_map() {
    return [
        'atto_styles:icon' => 'fa-tint'
    ];
}
