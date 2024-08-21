moodle-atto_styles
==================

Changes
-------

### v4.2-r2

* 2024-08-11 - Add section for scheduled tasks to README
* 2024-08-11 - Updated Moodle Plugin CI to latest upstream recommendations

### v4.2-r1

* 2023-09-01 - Prepare compatibility for Moodle 4.2.

### v4.1-r3

* 2023-10-14 - Add automated release to moodle.org/plugins
* 2023-10-14 - Make codechecker happy again
* 2023-10-10 - Updated Moodle Plugin CI to latest upstream recommendations

### v4.1-r2

* 2023-05-02 - Bugfix: Get rid of debug message if no styles are configured
* 2023-04-30 - Tests: Updated Moodle Plugin CI to use PHP 8.1 and Postgres 13 from Moodle 4.1 on.

### v4.1-r1

* 2023-01-21 - Prepare compatibility for Moodle 4.1.
* 2022-11-28 - Updated Moodle Plugin CI to latest upstream recommendations

### v4.0-r2

* 2022-11-26 - Bugfix: Styles might have been applied outside the editor on Firefox, credits to danowar2k.

### v4.0-r1

* 2022-11-26 - Prepare compatibility for Moodle 4.0.

### v3.11-r1

* 2022-11-26 - Prepare compatibility for Moodle 3.11.

### v3.10-r1

* 2022-11-26 - Prepare compatibility for Moodle 3.10.

### v3.9-r2

* 2022-11-26 - Add Capabilities section to README.md
* 2022-11-26 - Updated Moodle Plugin CI to newer upstream recommendations
* 2022-11-26 - Add UPGRADE.md as internal upgrade documentation
* 2022-11-26 - Update maintainers and copyrights in README.md.
* 2022-11-26 - Change in Moodle release support:
               For the time being, this plugin is maintained for the most recent LTS release of Moodle as well as the most recent major release of Moodle.
               Bugfixes are backported to the LTS release. However, new features and improvements are not necessarily backported to the LTS release.
* 2022-11-26 - Improvement: Declare which major stable version of Moodle this plugin supports (see MDL-59562 for details).

### v3.9-r1

* 2022-11-26 - Improvement: Make the plugin's JSON configuration more robust against whitespace issues.
* 2021-02-05 - Move Moodle Plugin CI from Travis CI to Github actions
* 2020-10-14 - Changed styles for focusing and hovering of dropdown list items.
* 2020-10-09 - Prepare compatibility for Moodle 3.9.

### v3.8-r2

* 2020-10-08 - Removed bottom border from last element in list of styles.
* 2020-10-06 - Fixed error in JSON example and improved setting with JSON validation.
               PLEASE NOTE: Now, surrounding square brackets are mandatory when defining multiple styles.
                            An upgrade script will handle existent settings. However, after updating the plugin
                            please double check the setting.

### v3.8-r1

* 2020-02-12 - Prepare compatibility for Moodle 3.8.

### v3.7-r2

* 2019-09-26 - Make codechecker happy.

### v3.7-r1

* 2019-08-16 - Enriched README.md with extensive examples.
* 2019-08-05 - Renamed behat feature file.
* 2019-08-05 - Updated Bootstrap info in README.md.
* 2019-08-05 - Prepare compatibility for Moodle 3.7.

### v3.6-r1

* 2019-04-09 - Improvement: Add "Select some text first to apply this style" hint to inline elements.
* 2019-04-09 - Improvement: Change list item icons to FontAwesome.
* 2019-04-09 - Improvement: Add preview to dropdown menu.
* 2019-04-09 - Check compatibility for Moodle 3.6, no functionality change.

### v3.5-r2

* 2019-04-09 - Improvement: Make sure that the dropdown menu does not protrude from the editor.
* 2018-12-05 - Changed travis.yml due to upstream changes.

### v3.5-r1

* 2018-09-26 - Check compatibility for Moodle 3.5, no functionality change.

### v3.4-r3

* 2018-05-16 - Implement Privacy API.

### v3.4-r2

* 2018-03-08 - Changed icon to use Font Awesome - Admins: please note that the ion representation changed.

### v3.4-r1

* 2017-12-14 - Check compatibility for Moodle 3.4, no functionality change.

### v3.3-r1

* 2017-12-04 - Check compatibility for Moodle 3.3, no functionality change.
* 2017-12-04 - Added Workaround to travis.yml for fixing Behat tests with TravisCI.
* 2017-11-08 - Updated travis.yml to use newer node version for fixing TravisCI error.

### v3.2-r4

* 2017-05-29 - Add Travis CI support

### v3.2-r3

* 2017-05-05 - Improve README.md

### v3.2-r2

* 2017-04-03 - Bugfix: Fix menu item appearance on theme_boost

### v3.2-r1

* 2017-01-13 - Check compatibility for Moodle 3.2, no functionality change
* 2017-01-12 - Move Changelog from README.md to CHANGES.md

### v3.1-r1

* 2016-07-19 - Check compatibility for Moodle 3.1, no functionality change

### Changes before v3.1

* 2016-05-26 - Adding behat feature testing block and inline styles, no functionality change - Credits to Janek Lasocki-Biczysko
* 2016-03-03 - Bugfix: Adding 2 classes for inline styling failed on Moodle 3.0.x - Credits to clementpr and Davo Smith
* 2016-02-10 - Change plugin version and release scheme to the scheme promoted by moodle.org, no functionality change
* 2016-01-01 - Check compatibility for Moodle 3.0, no functionality change
* 2015-08-18 - Check compatibility for Moodle 2.9, no functionality change
* 2015-05-22 - Include bootstrap classes into configuration example - Credits to David Mudrák
* 2015-05-21 - Initial version
