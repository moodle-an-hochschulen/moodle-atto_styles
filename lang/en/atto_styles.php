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
 * Strings for component 'atto_styles', language 'en'.
 *
 * @package    atto_styles
 * @copyright  2013 Damyon Wiese  <damyon@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['config'] = 'Styles configuration';
$string['config_desc'] = 'Configuration for the styles widget for Atto in JSON format.
        <hr />
        For example:<br />
        {<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"title": "Blue box",<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"classes": "box blue"<br />
        },{<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"title": "Red text",<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"type": "inline",<br />
        &nbsp;&nbsp;&nbsp;&nbsp;"classes": "red"<br />
        }<br />
        <hr />
        <ul>
        <li>The <em>title</em> attribute defines the name for style within the Atto styles widget.<br />
        A title can also support the Moodle multilang filter (if enabled), but additonal double-quotes will need to be escaped.<br />
        For example:<br />
        "title": "&lt;span class=\\"multilang\\" lang=\\"en\\"&gt;Blue box&lt;/span&gt;&lt;span class=\\"multilang\\" lang=\\"de\\"&gt;Blaue Box&lt;/span&gt;"</li>
        <li>The <em>type</em> attribute can contain one of two values: "block" or "inline".<br />
        "block" will create a &lt;div&gt; tag with the given class(es) and will act as a standard block level element. This will take over the current block level element and may apply to more than just the currently selected text.<br />
        "inline" will create a &lt;span&gt; tag with the given class(es) and will act as a standard inline element. This will only apply to the currently selected text.</li>
        <li>The <em>classes</em> attribute takes the CSS class name which will be applied to the block / inline text.<br />
        Multiple classes can be defined for each item, separated by a space. They will all be applied to the block / inline text.</li>
        </ul>';
$string['nostyle'] = 'No style';
$string['pluginname'] = 'Styles';
$string['settings'] = 'Styles settings';
