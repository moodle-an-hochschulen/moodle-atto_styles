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
 * Atto styles - Settings file
 *
 * @package    atto_styles
 * @copyright  2015 Andrew Davidson, Synergy Learning UK <andrew.davidson@synergy-learning.com>
               on behalf of Alexander Bias, Ulm University <alexander.bias@uni-ulm.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$ADMIN->add('editoratto', new admin_category('atto_styles', new lang_string('pluginname', 'atto_styles')));

$settings = new admin_settingpage('atto_styles_settings', new lang_string('settings', 'atto_styles'));

if ($ADMIN->fulltree) {
    $name = new lang_string('config', 'atto_styles');
    $desc = new lang_string('config_desc', 'atto_styles');
    $default = '';

    $setting = new admin_setting_configtextarea('atto_styles/config',
                                              $name,
                                              $desc,
                                              $default);
    $settings->add($setting);
}
