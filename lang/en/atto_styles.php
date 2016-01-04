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
 * Atto styles - Language file
 *
 * @package     atto
 * @subpackage  atto_styles
 * @copyright   2015 Andrew Davidson, Synergy Learning UK <andrew.davidson@synergy-learning.com> on behalf of Alexander Bias, University of Ulm <alexander.bias@uni-ulm.de>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
The <em>title</em> attribute defines the name for style within the Atto styles widget.<br />
<br />
A title can also support the Moodle multilang filter (if enabled), but additonal double-quotes will need to be escaped with a backslash.<br />
Please have a look at the plugin’s README file for an example.<br />
<hr />
The <em>type</em> attribute can contain one of two values: "block" or "inline".<br />
<br />
"block" will create a div tag with the given class(es) and will act as a standard block level element. This will take over the current block level element and may apply to more than just the currently selected text.<br />
<br />
"inline" will create a span tag with the given class(es) and will act as a standard inline element. This will only apply to the currently selected text.
<hr />
The <em>classes</em> attribute takes the CSS class name which will be applied to the block / inline text.<br />
<br />
Multiple classes can be defined for each item, separated by a space. They will all be applied to the block / inline text.<br />
<br />
The CSS class definitions can\'t be made within this plugin. You will have to add your CSS class definitions to your theme or Moodle additional HTML settings.
<hr />
On Moodle installations with bootstrap-based themes (especially <em>More</em> and <em>Clean</em>, you can also create styles with bootstrap CSS classes instead of defining your own classes.
<br /><br />
For example:<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Hero unit box",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "hero-unit"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Well",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "well"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Info text",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "inline",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "label label-info"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Warning text",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "inline",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "label label-warning"<br />
}<br /><br />
For more information about bootstrap classes, please visit the following links in the Bootstrap 2.3 documenation:
<ul>
<li><a href="http://getbootstrap.com/2.3.2/components.html#labels-badges">Bootstrap labels and badges</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#alerts">Bootstrap alerts</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#misc">Bootstrap helper classes</a></li>
</ul>';
$string['nostyle'] = 'No style';
$string['pluginname'] = 'Styles';
$string['settings'] = 'Styles settings';
