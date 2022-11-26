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
 * Atto styles - Local library
 *
 * @package    atto_styles
 * @copyright  2022 Moodle an Hochschulen e.V. <kontakt@moodle-an-hochschulen.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Helper function to preprocess the plugin's JSON configuration.
 *
 * @param string $json The JSON configuration.
 * @return string The processed JSON configuration.
 */
function atto_styles_preprocess_json($json) {
    // Trim the entered data.
    $json = trim($json);

    // Replace non-breaking spaces (which could especially occur if the admin copied the example on the settings page).
    $json = str_replace("\xc2\xa0", ' ', $json);

    // Return JSON.
    return $json;
}
