Upgrading this plugin
=====================

This is an internal documentation for plugin developers with some notes what has to be considered when updating this plugin to a new Moodle major version.

General
-------

* Generally, this is a quite simple plugin with just one purpose.
* It does not rely on any fluctuating library functions and should remain quite stable between Moodle major versions.
* Thus, the upgrading effort is low.


Upstream changes
----------------

* This plugin does not inherit or copy anything from upstream sources.


Automated tests
---------------

* The plugin has a good coverage with Behat tests which test the most important of the plugin's user stories.


Manual tests
------------

* As the plugin deals with HTML changes in the rich-text-editor, manual tests should be carried out to see if the plugin really keeps working as expected on new Moodle major versions.


Visual checks
-------------

* As the plugin's purpose is to apply particular styles to text in the rich-text-editor, manual tests should be carried out to see if the plugin really looks right on new Moodle major versions.
