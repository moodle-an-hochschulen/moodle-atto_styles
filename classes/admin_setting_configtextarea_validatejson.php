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
 * Atto styles - Special settings.
 *
 * @package    atto_styles
 * @copyright  2020 Kathrin Osswald, Ulm University <kathrin.osswald@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace atto_styles;

defined('MOODLE_INTERNAL') || die();

/**
 * Special setting for configtextarea with JSON validation.
 *
 * @package    atto_styles
 * @copyright  2020 Kathrin Osswald, Ulm University <kathrin.osswald@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class admin_setting_configtextarea_validatejson extends \admin_setting_configtextarea {

    /**
     * Validate the contents of the textarea to ensure it's valid JSON.
     *
     * @param string $data The JSON from text field.
     * @return mixed bool true for success or string:error on failure.
     */
    public function validate($data) {
        // If no entry is made validate true, otherwise the setting would always return an error and
        // could not be saved.
        if (empty($data)) {
            return true;
        }

        $jsonobject = json_decode($data);
        // If the JSON decoding was not possible (returns null) or encountered errors (returns false)
        // then return an error message.
        if (!$jsonobject) {
            return get_string('jsondecodemessage', 'atto_styles');
        }

        // Return the result of the parent class' check of the data.
        return parent::validate($data);
    }
}
