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
 * Steps definitions related to atto styles
 *
 * @package    atto_styles
 * @category   test
 * @copyright  2016 Janek Lasocki-Biczysko <j.lasocki-biczysko@intrallect.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// NOTE: no MOODLE_INTERNAL test here, this file may be required by behat before including /config.php.

require_once(__DIR__ . '/../../../../../../../lib/behat/behat_base.php');

use Behat\Behat\Context\Step\Given as Given,
    Behat\Gherkin\Node\PyStringNode as PyStringNode;

/**
 * Atto styles related step definitions.
 *
 * @package    atto_styles
 * @category   test
 * @copyright  2016 Janek Lasocki-Biczysko <j.lasocki-biczysko@intrallect.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class behat_atto_styles extends behat_base {

    /**
     * Sets the specified value to the field.
     *
     * @Given /^the config value "([^"]*)" of "([^"]*)" is set as admin to multiline$/
     * @param string $name
     * @param string $component
     * @param PyStringNode $value
     * @return void
     */
    public function the_config_value_is_set_as_admin_to_multiline($name, $component, PyStringNode $value) {
        set_config($name, (string) $value, $component);
    }

}
