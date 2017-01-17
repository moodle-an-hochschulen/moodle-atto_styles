moodle-atto_styles
==================

Moodle Atto plugin which lets the administrator provide custom CSS classes which can afterwards be applied by users to block and inline text in Atto


Requirements
------------

This plugin requires Moodle 3.2+


Installation
------------

Install the plugin like any other plugin to folder
/lib/editor/atto/plugins/styles

See http://docs.moodle.org/en/Installing_plugins for details on installing Moodle plugins


Usage & Settings
----------------

The purpose of this Atto plugin is to let users apply custom CSS classes to block and inline text.
After installing atto_styles in Moodle, you will have to do three configuration steps to take advantage of this plugin:

### 1. Configure CSS classes

The CSS class definitions which are applied to text within Atto can't be made within this plugin. You will have to add your CSS class definitions to your theme (See https://docs.moodle.org/en/Theme_settings#Particular_theme_settings for details) or Moodle additional HTML settings (See https://docs.moodle.org/en/Header_and_footer for details).

### 2. Configure styles widget

atto_styles will have to know which CSS classes you want to provide in the Atto styles widget and how they should be called in the widget.

Please visit Site administration -> Plugins -> Text editors -> Atto HTML editor -> Styles settings.

There, simply follow the instructions and configure the widget according to your needs.

### 3. Add styles widget to Atto toolbar

atto_styles has to be added to the Atto toolbar before it can be used by users.

Please visit Site administration -> Plugins -> Text editors -> Atto HTML editor -> Atto toolbar settings.

There, please add the "styles" keyword to one of the lines in the "editor_atto | toolbar" setting according to your needs.

If you are using a default Atto toolbar, we propose to change "style1 = title, bold, italic" to "style1 = title, styles, bold, italic"


Multilangugae filter support
---------------------------

Within the styles configuration, a title can support the Moodle multilang filter (if enabled), but additonal double-quotes will need to be escaped with a backslash.

For example:
```
"title": <span class=\"multilang\" lang=\"en\">Blue box</span><span class=\"multilang\" lang=\"de\">Blaue Box</span>"
```


Themes
------

atto_styles should work with all themes from moodle core.


Further information
-------------------

atto_styles is found in the Moodle Plugins repository: http://moodle.org/plugins/view/atto_styles

Report a bug or suggest an improvement: https://github.com/moodleuulm/moodle-atto_styles/issues


Moodle release support
----------------------

Due to limited resources, atto_styles is only maintained for the most recent major release of Moodle. However, previous versions of this plugin which work in legacy major releases of Moodle are still available as-is without any further updates in the Moodle Plugins repository.

There may be several weeks after a new major release of Moodle has been published until we can do a compatibility check and fix problems if necessary. If you encounter problems with a new major release of Moodle - or can confirm that atto_styles still works with a new major relase - please let us know on https://github.com/moodleuulm/moodle-atto_styles/issues


Right-to-left support
---------------------

This plugin has not been tested with Moodle's support for right-to-left (RTL) languages.
If you want to use this plugin with a RTL language and it doesn't work as-is, you are free to send us a pull request on
github with modifications.


PHP7 Support
------------

Since Moodle 3.0, Moodle core basically supports PHP7.
Please note that PHP7 support is on our roadmap for this plugin, but it has not yet been thoroughly tested for PHP7 support and we are still running it in production on PHP5.
If you encounter any success or failure with this plugin and PHP7, please let us know.


Copyright
---------

Andrew Davidson
Synergy Learning UK
www.synergy-learning.com

on behalf of

Ulm University
kiz - Media Department
Team Web & Teaching Support
Alexander Bias


Credits
-------

This Atto plugin was inspired by the custom styles functionality which was present in TinyMCE.
