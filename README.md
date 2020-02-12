moodle-atto_styles
==================

[![Build Status](https://travis-ci.org/moodleuulm/moodle-atto_styles.svg?branch=master)](https://travis-ci.org/moodleuulm/moodle-atto_styles)

Moodle Atto plugin which lets the administrator provide custom CSS classes which can afterwards be applied by users to block and inline text in Atto


Requirements
------------

This plugin requires Moodle 3.8+


Motivation for this plugin
--------------------------

The purpose of this Atto plugin is to let users apply custom CSS classes to block and inline text.


Installation
------------

Install the plugin like any other plugin to folder
/lib/editor/atto/plugins/styles

See http://docs.moodle.org/en/Installing_plugins for details on installing Moodle plugins


Usage & Settings
----------------

After installing the plugin, it does not do anything to Moodle yet.

To configure the plugin and its behaviour, you will have to do three configuration steps to take advantage of this plugin:

### 1. Configure CSS classes

The CSS class definitions which are applied to text within Atto can't be made within this plugin. You will have to add your CSS class definitions to your theme (See https://docs.moodle.org/en/Theme_settings#Particular_theme_settings for details) or Moodle additional HTML settings (See https://docs.moodle.org/en/Header_and_footer for details).

Here's a CSS example which might help you to build basic styles with this plugin:

```
.attostylesbox {
    padding: 10px;
    box-sizing: border-box;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%
}
.attostylesbox.attostylesbox-solid {
    color: white;
}
.attostylesbox.attostylesbox-outline {
    background-color: white;
    border-width: 2px;
    border-style: solid;
}
.attostylesbox.attostylesbox-callout {
    background-color: white;
    border: 1px solid #eee;
    border-left-width: 5px;
}
.attostylesbox.attostylesbox-solid-blue {
    background-color: #7d9fd3;
}
.attostylesbox.attostylesbox-solid-green {
    background-color: #98ca3e;
}
.attostylesbox.attostylesbox-solid-yellow {
    background-color: #ffcf35;
}
.attostylesbox.attostylesbox-solid-red {
    background-color: #ef4540;
}
.attostylesbox.attostylesbox-solid-black {
    background-color: #3a3a3a;
}
.attostylesbox.attostylesbox-outline-blue {
    border-color: #7d9fd3;
    color: #7d9fd3;
}
.attostylesbox.attostylesbox-outline-green {
    border-color: #98ca3e;
    color: #98ca3e;
}
.attostylesbox.attostylesbox-outline-yellow {
    border-color: #ffcf35;
    color: #ffcf35;
}
.attostylesbox.attostylesbox-outline-red {
    border-color: #ef4540;
    color: #ef4540;
}
.attostylesbox.attostylesbox-outline-black {
    border-color: #3a3a3a;
    color: #3a3a3a;
}
.attostylesbox.attostylesbox-callout-blue {
    border-left-color: #7d9fd3;
}
.attostylesbox.attostylesbox-callout-green {
    border-left-color: #98ca3e;
}
.attostylesbox.attostylesbox-callout-yellow {
    border-left-color: #ffcf35;
}
.attostylesbox.attostylesbox-callout-red {
    border-left-color: #ef4540;
}
.attostylesbox.attostylesbox-callout-black {
    border-left-color: #3a3a3a;
}
.attostylestextmarker {
    border-radius: 5px;
    padding-left: 5px;
    padding-right: 5px;
}
.attostylestextmarker.attostylestextmarker-green {
    background: #99ffcc;
}
.attostylestextmarker.attostylestextmarker-pink {
    background: #ffccff;
}
.attostylestextmarker.attostylestextmarker-yellow {
    background: #ffffcc;
}
```

### 2. Configure styles widget

atto_styles will have to know which CSS classes you want to provide in the Atto styles widget and how they should be called in the widget.

Please visit Site administration -> Plugins -> Text editors -> Atto HTML editor -> Styles settings.

There, simply follow the instructions and configure the widget according to your needs.

Here's the configuration which corresponds to the CSS example given above:

```
{
    "title": "Red box (solid)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-solid attostylesbox-solid-red",
    "preview": true
},
{
    "title": "Red box (outline)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-outline attostylesbox-outline-red",
    "preview": true
},
{
    "title": "Red box (highlighted)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-callout attostylesbox-callout-red",
    "preview": true
},
{
    "title": "Green box (solid)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-solid attostylesbox-solid-green",
    "preview": true
},
{
    "title": "Green box (outline)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-outline attostylesbox-outline-green",
    "preview": true
},
{
    "title": "Green box (highlighted)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-callout attostylesbox-callout-green",
    "preview": true
},
{
    "title": "Yellow box (solid)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-solid attostylesbox-solid-yellow",
    "preview": true
},
{
    "title": "Yellow box (outline)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-outline attostylesbox-outline-yellow",
    "preview": true
},
{
    "title": "Yellow box (highlighted)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-callout attostylesbox-callout-yellow",
    "preview": true
},
{
    "title": "Blue box (solid)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-solid attostylesbox-solid-blue",
    "preview": true
},
{
    "title": "Blue box (outline)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-outline attostylesbox-outline-blue",
    "preview": true
},
{
    "title": "Blue box (highlighted)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-callout attostylesbox-callout-blue",
    "preview": true
},
{
    "title": "Black box (solid)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-solid attostylesbox-solid-black",
    "preview": true
},
{
    "title": "Black box (outline)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-outline attostylesbox-outline-black",
    "preview": true
},
{
    "title": "Black box (highlighted)",
    "type": "block",
    "classes": "attostylesbox attostylesbox-callout attostylesbox-callout-black",
    "preview": true
},
{
    "title": "Yellow text marker",
    "type": "inline",
    "classes": "attostylestextmarker attostylestextmarker-yellow",
    "preview": true
},
{
    "title": "Green text marker",
    "type": "inline",
    "classes": "attostylestextmarker attostylestextmarker-green",
    "preview": true
},
{
    "title": "Pink text marker",
    "type": "inline",
    "classes": "attostylestextmarker attostylestextmarker-pink",
    "preview": true
}
```


### 3. Add styles widget to Atto toolbar

atto_styles has to be added to the Atto toolbar before it can be used by users.

Please visit Site administration -> Plugins -> Text editors -> Atto HTML editor -> Atto toolbar settings.

There, please add the "styles" keyword to one of the lines in the "editor_atto | toolbar" setting according to your needs.

If you are using a default Atto toolbar, we propose to change "style1 = title, bold, italic" to "style1 = title, styles, bold, italic"


Multilanguage filter support
---------------------------

Within the styles configuration, a title can support the Moodle multilang filter (if enabled), but additonal double-quotes will need to be escaped with a backslash.

For example:
```
"title": <span class=\"multilang\" lang=\"en\">Blue box</span><span class=\"multilang\" lang=\"de\">Blaue Box</span>"
```


Theme support
-------------

This plugin is developed and tested on Moodle Core's Boost theme.
It should also work with Boost child themes, including Moodle Core's Classic theme. However, we can't support any other theme than Boost.


Plugin repositories
-------------------

This plugin is published and regularly updated in the Moodle plugins repository:
http://moodle.org/plugins/view/atto_styles

The latest development version can be found on Github:
https://github.com/moodleuulm/moodle-atto_styles


Bug and problem reports / Support requests
------------------------------------------

This plugin is carefully developed and thoroughly tested, but bugs and problems can always appear.

Please report bugs and problems on Github:
https://github.com/moodleuulm/moodle-atto_styles/issues

We will do our best to solve your problems, but please note that due to limited resources we can't always provide per-case support.


Feature proposals
-----------------

Due to limited resources, the functionality of this plugin is primarily implemented for our own local needs and published as-is to the community. We are aware that members of the community will have other needs and would love to see them solved by this plugin.

Please issue feature proposals on Github:
https://github.com/moodleuulm/moodle-atto_styles/issues

Please create pull requests on Github:
https://github.com/moodleuulm/moodle-atto_styles/pulls

We are always interested to read about your feature proposals or even get a pull request from you, but please accept that we can handle your issues only as feature _proposals_ and not as feature _requests_.


Moodle release support
----------------------

Due to limited resources, this plugin is only maintained for the most recent major release of Moodle. However, previous versions of this plugin which work in legacy major releases of Moodle are still available as-is without any further updates in the Moodle Plugins repository.

There may be several weeks after a new major release of Moodle has been published until we can do a compatibility check and fix problems if necessary. If you encounter problems with a new major release of Moodle - or can confirm that this plugin still works with a new major relase - please let us know on Github.

If you are running a legacy version of Moodle, but want or need to run the latest version of this plugin, you can get the latest version of the plugin, remove the line starting with $plugin->requires from version.php and use this latest plugin version then on your legacy Moodle. However, please note that you will run this setup completely at your own risk. We can't support this approach in any way and there is a undeniable risk for erratic behavior.


Translating this plugin
-----------------------

This Moodle plugin is shipped with an english language pack only. All translations into other languages must be managed through AMOS (https://lang.moodle.org) by what they will become part of Moodle's official language pack.

As the plugin creator, we manage the translation into german for our own local needs on AMOS. Please contribute your translation into all other languages in AMOS where they will be reviewed by the official language pack maintainers for Moodle.


Right-to-left support
---------------------

This plugin has not been tested with Moodle's support for right-to-left (RTL) languages.
If you want to use this plugin with a RTL language and it doesn't work as-is, you are free to send us a pull request on Github with modifications.


PHP7 Support
------------

Since Moodle 3.4 core, PHP7 is mandatory. We are developing and testing this plugin for PHP7 only.


Copyright
---------

Andrew Davidson
Synergy Learning UK
www.synergy-learning.com

on behalf of

Ulm University
Communication and Information Centre (kiz)
Alexander Bias


Credits
-------

This Atto plugin was inspired by the custom styles functionality which was present in TinyMCE.
