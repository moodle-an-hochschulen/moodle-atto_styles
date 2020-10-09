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
 * Atto styles - Upgrade Script.
 *
 * @package    atto_styles
 * @copyright  2020 Kathrin Osswald, Ulm University <kathrin.osswald@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

/**
 * Function to upgrade atto_styles
 * @param int $oldversion the version we are upgrading from
 * @return bool result
 */
function xmldb_atto_styles_upgrade($oldversion) {

    if ($oldversion < 2020100200) {
        /* JSON validation has been added to the setting and now every entry must be valid JSON.
           Up to this point entries without [] brackets were accepted, so we need to add them now
           to the existent setting entries. */

        $oldconfig = get_config('atto_styles', 'config');

        /* Check if rules with multiple JSON heads exist like this
           {
                "title": "Hero unit box",
                "type": "block",
                "classes": "hero-unit"
            },{
                "title": "Muted Well",
                "type": "block",
                "classes": "well text-muted"
            }
            and add surrounding square brackets around it to provide valid JSON code in the setting. */

        // First character (without leading whitespaces) in string should not be a '['.
        // Last character (without trailing whitespaces) in string should not be a ‘]‘.
        if (strpos($oldconfig, '},') !== false &&
                (trim($oldconfig)[0] != '[') &&
                (trim($oldconfig)[-1] != ']')) {
            $newconfig = '['.trim($oldconfig).']';
            set_config('config', $newconfig, 'atto_styles');
        }

        upgrade_plugin_savepoint(true, 2020100200, 'atto', 'styles');
    }

    return true;
}
