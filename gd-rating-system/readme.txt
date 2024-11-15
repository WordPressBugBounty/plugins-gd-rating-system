=== GD Rating System ===
Contributors: GDragoN
Donate link: https://plugins.dev4press.com/gd-rating-system/
Version: 3.6.2
Tags: dev4press, stars, rating, like, vote
Requires at least: 5.5
Requires PHP: 7.4
Tested up to: 6.7
Stable tag: trunk
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Powerful, highly customizable and versatile ratings plugin to allow your users to vote for anything you want.

== Description ==
GD Rating System is the successor to GD Star Rating plugin, but it has nothing in common with the old plugin. GD Rating System uses modular structure with most features split into addons and rating methods. For front end display plugin uses templates similar to WordPress theme templates and allows you to override existing templates or add new ones.

= Overview of plugin features =
With GD Rating System you can rate anything. The Plugin supports several basic rating entities, and for each one you can have more than one rating type. This includes posts with all default and custom post types, comments, users, terms for default or custom taxonomies.

Here is the list of most important plugin features:

* Rating Method: Stars Rating
* Rating Method: Like This (3.0)
* Addon: Shortcodes Builder (3.1)
* Addon: Rich Snippets Support
* Addon: Posts Integration
* Addon: Comments Integration
* Addon: Dynamic Load
* Addon: Feeds Support (v1.3)
* Widget: Rating block
* Widget: Rating list
* Shortcodes: Rating block and list
* Shortcodes: Rating values
* Shortcodes: Rating conditions
* Presentation: Default set of templates
* Posts Addon: Sort by rating (v1.2)
* Posts Addon: Auto sort by rating (v3.0)
* Comments Addon: Sort by rating (v1.2)
* Stars Rating: 20 icons in a font
* Stars Rating: 6 image based sets
* Like This Rating: 2 font icons sets in a font
* Like This Rating: 1 image based set
* Administration: Rating objects log
* Administration: Votes log
* Administration: Custom rating rules
* List Shortcodes and Widgets: additional object filters (v3.0)
* Data Transfer: Import from GD Star Rating
* Data Transfer: Import from WP PostRatings
* Data Transfer: Import from Yet Another Stars Rating
* Data Transfer: Import from KK Star Ratings (v1.3)

= Upgrade to GD Rating System Pro =
The Pro version contains many more great features:

* Rating Method: Slider Rating (v3.0)
* Rating Method: Slider Review (v3.0)
* Rating Method: Emote This (v1.4)
* Rating Method: Stars Review
* Rating Method: Thumbs Rating
* Addon: Sync To Meta (v3.1)
* Addon: Instant Notifications (v3.0)
* Addon: BuddyPress Integration (v2.0)
* Addon: BuddyPress Notifications (v3.5)
* Addon: BuddyPress Activities (v3.5)
* Addon: Tooltip (v2.0)
* Addon: Client Detection (v1.3)
* Addon: bbPress Integration (v1.1)
* Addon: Bayesian Calculation (v1.1)
* Addon: WP REST API Plugin Support
* Addon: Dummy Ratings
* Addon: Edit Rating Votes
* Addon: GEO Location for Votes
* Addon: Admin Enhancer
* Published date can be used in queries (v3.0)
* Date based period queries (v2.2)
* Date based voting limiters (v4.0)
* Aggregate ratings (v2.2)
* Posts Addon: Auto sort by rating (v1.2)
* bbPress Addon: Rating topics views (v1.2)
* Font Icons: FontAwesome 4.7 support (v1.3)
* Presentation: Additional Templates
* Presentation: Additional Widgets

With more features on the roadmap exclusively for Pro version.

* More information about [GD Rating System Pro](https://plugins.dev4press.com/gd-rating-system/)
* Premium addons for [GD Rating System Pro](https://plugins.dev4press.com/gd-rating-system/addons/)
* Compare [Free vs. Pro Plugin](https://plugins.dev4press.com/gd-rating-system/articles/lite-vs-pro/)

Premium addons:
* Multi Rating Addon (4 new rating methods)
* User Reviews Addon
* Analytics Addon
* myCRED Integration Addon
* myCRED Simple Integration Addon (free with GD Rating System Pro license)
* Recipe Rich Snippet Addon (free with GD Rating System Pro license)
* Book Rich Snippet Addon (free with GD Rating System Pro license)
* Code Builder Addon (free with GD Rating System Pro license)
* Comments Form Addon (free with GD Rating System Pro license)

Premium graphics packs:
* Halloween Pack (free with GD Rating System Pro license)
* Christmas Pack (free with GD Rating System Pro license)
* Emoji Pack (free with GD Rating System Pro license)

= Documentation and Support =
You need to register for a free account on [Dev4Press](https://www.dev4press.com/):

* [Frequently Asked Questions](https://support.dev4press.com/kb/product/gd-rating-system/faqs/)
* [Knowledge Base Articles](https://support.dev4press.com/kb/product/gd-rating-system/articles/)
* Support Forum: [Free](https://support.dev4press.com/forums/forum/plugins-lite/gd-rating-system-lite/) & [Pro](https://support.dev4press.com/forums/forum/plugins/gd-rating-system/)

== Installation ==
= General Requirements =
* PHP: 7.4 or newer

= PHP Notice =
* Plugin doesn't work with PHP 7.3 or older versions.

= WordPress Requirements =
* WordPress: 5.5 or newer

= WordPress Notice =
* Plugin doesn't work with WordPress 5.4 or older versions.

= Basic Installation =
* Plugin folder in the WordPress plugins folder must be `gd-rating-system`.
* Upload `gd-rating-system` folder to the `/wp-content/plugins/` directory.
* Activate the plugin through the 'Plugins' menu in WordPress.
* Plugin adds top level menu 'Rating System' where you can start using it.

== Frequently Asked Questions ==
= Is the GD Rating System compatible with GD Star Rating? =
No. GD Rating System is a completely new and different plugin, that has nothing in common with old GD Star Rating plugin. You can transfer data from GD Star Rating to the GD Rating System.

= How can I upgrade to Pro version? =
You need to buy Pro plugin license from plugin [home page](https://plugins.dev4press.com/gd-rating-system/), and download Pro plugin and replace free plugin with Pro plugin. All data and settings will be used by Pro version, no data will be lost.

= Can GD Rating System work with cache plugins? =
Yes. Plugin includes Dynamic Load addon that will load rating blocks through AJAX. This addon is disabled by default, and if you use cache plugins, just enable this addon from plugin Settings -> Extensions panel.

= How can I setup the rich snippets for the search engines to find and use? =
Make sure to read this tutorial: [Setup rich snippets for rating items](https://support.dev4press.com/kb/article/setup-rich-snippets-for-rating-items/) and the linked user guide about rich snippets.

= Can I use shortcodes to add ratings to posts? =
Yes. There are several shortcodes available, and you can use Shortcodes Builder (plugin menu, panel Shortcodes) to generate every supported shortcode.

= Can I import data from other rating plugins? =
Yes. GD Rating System supports the import of rating data from: GD Star Rating, WP PostRatings, Yet Another Stars Rating, KK Star Ratings. PRO version of GD Rating System can import thumbs and review ratings too.

= Does plugin work with WordPress MultiSite installations? =
Yes. Each website in the network can activate and use plugin on its on.

= Can I translate plugin to my language? =
Yes. POT file is provided as a base for translation. Translation files should go into Languages directory. You can join WordPress Translation project and translate online: [GD Rating System Translations](https://translate.wordpress.org/projects/wp-plugins/gd-rating-system/).

Find more FAQ here: [Frequently Asked Questions](https://support.dev4press.com/kb/product/gd-rating-system/faqs/).

== Translations ==
* English

== Upgrade Notice ==
= 3.6 =
Various improvements and fixes.

= 3.5 =
Various improvements and fixes.

== Changelog ==
= 3.6.2 - 2024.11.15
* Edit: proper sanitization of the HTML classes
* Edit: d4pLib 2.8.19
* Fix: authenticated stored cross-site scripting vulnerability
* Fix: import from YASR plugin doesn't import decimal places

= 3.6.1 - 2024.06.28
* Edit: validate the template in render functions prior to inclusion
* Fix: underlying functions not loaded on the blocks widgets panel
* Fix: widgets not loading interface when used via blocks
* Fix: local file inclusion vulnerability with the rating block templates

= 3.6 - 2024.06.07
* New: fully tested and compatible with WordPress up to 6.6
* Edit: updates to code formatting and readability
* Edit: updates to the translation strings
* Edit: many improvements to the PHP core code and syntax
* Edit: d4pLib 2.8.18
* Fix: minor issue with state capture class on taxonomy archives with no results
* Fix: several typos and other text and information issues
* Fix: several small issues with the boolean functions and methods

= 3.5.1 - 2023.12.19 =
* New: fully tested and compatible with WordPress up to 6.4
* New: plugin is tested and compatible with the PHP 8.0, 8.1, 8.2 and 8.3
* Edit: escaping IP for display in a votes list and dashboard widget
* Edit: rewritten functions for getting and validating IP
* Edit: d4pLib 2.8.16
* Fix: stored script vulnerability related to IP field

= 3.5 - 2022.05.15 =
* New: tested with WordPress 6.0
* New: rich snippets: added missing microdata code for Software Application
* Edit: rich snippets: some minor optimization in the snippets code
* Edit: d4pLib 2.8.14
* Fix: rich snippets: minor issue with the snippet engine loading

= 3.4 - 2021.01.31 =
* New: system requirements: PHP 7.0 or newer
* New: system requirements: WordPress 5.0 or newer
* New: shortcodes builder: option to change the displayed rating value
* New: all shortcodes expanded with the 'rating' attribute
* New: all widgets expanded with the 'rating' attribute
* New: additional class to handle admin grids loading
* Removed: addon with support for Shortcake UI plugin
* Removed: few more unused/obsolete functions or methods
* Fix: items per page not saving for the admin grids
* Fix: problem with the admin database grid listing
* Fix: issue with the function used to get quick items stats
* Fix: minor issue in the dashboard votes widget listing

= 3.3.1 - 2020.11.23 =
* New: font icons class has conversion of the char formats
* New: call to action rendering added to many default templates
* Fix: in some cases single rating block max value not valid
* Fix: distribution not properly initialized for new items
* Fix: distribution division by zero when item has no votes
* Fix: distribution for stars rating not properly saved
* Fix: quick database query for counts calculation issue
* Fix: stars badge rendering fails for the default font icons

= 3.3 - 2020.11.19 =
* New: rebuilt the default font icons with the woff2 support
* New: generate the embedded version of the default font
* New: default font now has font-display property set to auto
* New: full code refactoring for the WordPress coding style
* New: all methods include item type based args/calc filters
* Edit: improvements to some of the admin side interface elements
* Edit: few improvements to the votes handling for all methods
* Edit: various updates to the code organization and structure
* Edit: d4pLib 2.8.13
* Fix: rich snippets: minor issue with the application based snippets
* Fix: votes log: missing meta data for log items breaking some addons
* Fix: maintenance: problem with saving stars rating distribution
* Fix: new install shows the upgrade notice with maintenance mode

= 3.2 - 2020.08.19 =
* New: fully tested and compatible with WordPress 5.5
* New: class for handling of preloading for rating data
* New: huge performance improvements for plugin dashboard
* New: huge performance improvements with loop based rating integrations
* New: preload: support for comments loop
* New: preload: preload posts from the supplied or global WP_Query
* New: preload: preload posts from the list of post ids
* New: preload: preload items from the list of item ids
* New: preload: preload items for item types and real ids
* New: comments addon: option to control preload
* New: dashboard widget: show item title and link if available
* Edit: plugin dashboard: optimized loading of the votes widget
* Edit: rewritten several of the database class methods
* Edit: few minor changes to the database tables schema
* Edit: various small quality of code improvements
* Edit: d4pLib 2.8.12
* Fix: rating items retrieval doesn't check if rating method is loaded
* Fix: transfer panel script was not loading due to bad URL used

= 3.1.3 - 2020.06.20 =
* Fix: rich snippets: product offer not saved properly if price is 0
* Fix: rich snippets: product offer with price 0 not properly displayed

= 3.1.2 - 2020.06.12 =
* Fix: rich snippets: metabox JavaScript not loaded
* Fix: rich snippets: metabox selections not working
* Fix: few issues with metabox elements styling

= 3.1.1 - 2020.06.10 =
* Edit: d4pLib 2.8.10
* Fix: problem with using cookie validation values for anonymous visitors

= 3.1 - 2020.06.01 =
* New: shortcodes builder
* New: rich snippets: custom snippet type (JSON-LD format)
* New: rich snippets: expanded default settings for post types
* New: rich snippets: option to use GMT based dates if available
* New: rich snippets: tools to remove and reset default settings for posts
* New: posts: rewritten detection method for use of the_content filter
* New: posts: includes excerpt detection logic to avoid excerpt related issues
* New: function to properly handle mysql date conversion with or without GMT
* Edit: rich snippets: updated context help and removed some outdated information
* Edit: shortcodes: improvements to the attributes values cleanup
* Edit: few minor changes to the frontend styling and rendering
* Edit: various small styling improvements and changes
* Edit: d4pLib 2.8.9
* Fix: posts: in some cases output rendered inside the head area
* Fix: posts: conflicts related to some SEO plugins
* Fix: shortcodes: few issues with conditional shortcodes
* Fix: widgets: showing options for the features that are not available in Lite edition
* Fix: small issues with cleaning up the shortcode object attributes
* Fix: in some cases results for comments based queries can be empty
* Fix: various small styling issues with the rating lists results
* Fix: like this balloon theme styling in the results list
* Fix: few instances of using wrong method call signature

= 3.0.3 - 2020.05.26 =
* Edit: rich snippets: product snippet not rendered if rating is missing
* Fix: rich snippets: rendering empty snippet in some cases
* Fix: stars rating: display of rating blocks with RTL orientation
* Fix: import tool not showing proper failed import message
* Fix: broken tool for exporting plugin settings
* Fix: few potential PHP warnings related to some of the tools

= 3.0.2 - 2020.05.23 =
* Fix: rich snippets: not showing rating for some snippet types
* Fix: rich snippets: setting the review option value in meta table

= 3.0.1 - 2020.05.22 =
* Edit: db columns for method, series and ip set to 64 characters
* Edit: db columns for action and status set to 32 characters
* Edit: db columns for module set to 16 characters

= 3.0 - 2020.05.20 =
* New: various new features transferred from the Pro version
* New: like this rating method transferred from the Pro version
* New: rich snippets addon: transferred from the Pro version
* New: database table: for storing item basic rating data
* New: database queries: largely rewritten for the new database schema
* New: performance: improvements due to the new database schema
* New: performance: more in memory temporary cache for various operations
* New: rating item object: mostly rewritten and expanded
* New: rating methods: additional registration features arguments
* New: rating templates: show only own rating for stars rating
* New: js and css files: enqueue expanded with the registration of files
* New: js and css files: additional improvements to registration and queue use
* New: js and css files: big improvements in the way files are loaded on request
* New: voting security: throttle voting requests protection method
* New: ajax request handler: unified and expanded error processing
* New: shortcodes: has_voted to, has_voted_auto, has_not_voted, has_not_voted_auto
* New: shortcake addon: support for new shortcodes
* New: rich snippets addon: tool to mass update some snippets settings
* New: rich snippets addon: tool to remove legacy snippets data
* Edit: posts and comments addons: expanded with features from Pro version
* Edit: d4pLib 2.8.8
* Fix: various fixes transferred and applied from the Pro version

= 2.7.1 - 2019.09.06 =
* Edit: d4pLib 2.7.7
* Fix: problem with rendering of the user vote in rating block
* Fix: issue with language initialization on plugin load
* Fix: few minor issues with undefined variables
* Fix: votes log potential error when the post type is not registered
* Fix: small problem with the method to find and load template

= 2.7 - 2019.03.30 =
* New: all items operations now check for entity/name validity
* New: all metaboxes handling now check for entity/name validity
* New: database: adding items now check for entity/name validity
* New: database: prevent outside code from adding new rating items
* Edit: database: method for adding new item set changed to private
* Edit: database: additional sanitation of the input numeric arrays
* Edit: database: additional absint() conversion for ID based queries
* Edit: d4pLib 2.6.1
* Fix: potential vector for injecting bogus rating items in database
* Fix: missing sanitation for some input data expected as arrays
* Fix: database object internal calls not use $this in every case

= 2.6 - 2019.01.30 =
* New: stars rating method: quick revote option
* New: stars rating method: option to disable rating
* New: shortcodes: option to disable rating for stars rating method
* New: shortcodes: rating value for method and any item
* New: shortcodes: rating value for method and current item
* New: shortcake addon: option to disable rating for stars rating method
* New: shortcake addon: support for rating value shortcodes
* Edit: rating javascript: replaced jQuery .bind with .on
* Edit: improved minification of all CSS stylesheets
* Edit: d4pLib 2.5.4
* Fix: template path debug information not using debug on/off check

= 2.5 - 2018.07.16 =
* New: widget: special unique Developer ID option
* New: feeds addon: skip ratings for the XMLRPC requests
* New: rating item data objects now have method to get author ID
* Edit: minor updates to the metabox handler functions
* Edit: few updates to widget settings organization
* Edit: various improvements to the plugin core classes
* Edit: d4pLib 2.3.4
* Fix: posts sorting: problem with negative ratings order
* Fix: comments sorting: problem with negative ratings order
* Fix: problem with the rating labels translations
* Fix: several strings missing from the POT translations file

= 2.4 - 2018.03.20 =
* New: dynamic load: visitor and user loading settings
* New: tools: convert all votes log IP's into MD5 hashed strings
* New: stars rating: filter inside the calculation methods before save
* New: stars rating: args/calc filters for each item in the list loop
* New: stars rating: completely rewritten single default templates
* New: stars rating: new list loop default templates - list and table
* New: stars rating: new render classes methods and filters
* New: stars rating: more settings for the rendering methods
* New: stars rating: new list loop default templates - list and table
* New: list templates now display item thumbnails if available
* New: posts addon: filter for the priority for the_content
* New: comments addon: filter for the priority for comment_text
* New: centralized method for setting user agent for votes
* New: store IP's in votes log as MD5 hashed strings
* New: dedicated function to get user agent if it is set
* New: all item objects now have thumbnails functions
* New: all item objects use filters to modify returned data
* New: all widgets are logging currently used widget
* New: all shortcodes are logging currently used shortcodes
* New: render process is logging currently used template
* New: completely rewritten template loading process
* New: render process is logging currently used template
* New: completely rewritten default templates for all methods
* New: function to get current rendering template
* New: function to get current plugin widget
* New: function to get current plugin shortcode
* Edit: dynamic load: various improvements and optimizations
* Edit: various improvements to single and list engines
* Edit: few improvements to the rating item objects
* Edit: old Default templates are now Classic templates
* Edit: YASR data transfer: support for YASR 1.5 or newer only
* Edit: metabox support for the Gutenberg editor 2.3 or newer
* Edit: d4pLib 2.2.7
* Fix: YASR data transfer: invalid conversion of the max rating data
* Fix: YASR data transfer: detection of the database tables
* Fix: WP PostRatings data transfer: few issues with ratings only transfer
* Fix: WP_Query sorting not working inside the AJAX calls processing
* Fix: problem with missing the please wait when the rating is saved
* Fix: check for loaded methods and addon not working correctly
* Fix: loading from library for icons on the Entity editor page

= 2.3.2 - 2018.01.26 =
* Fix: missing proper sanitation for some grid filters variables

= 2.3.1 - 2018.01.11 =
* New Translation: German (de_DE) language
* New: ajax handler actions for various processing errors
* New: ajax handler uses improved validation for request data
* Edit: d4pLib 2.2.4
* Fix: xss vulnerability: query string panel was not sanitized
* Fix: xss vulnerability: panel variable for some pages was not verified

= 2.3 - 2017.12.06 =
* New: core loop object for easier templates control
* New: additional abstract classes for some plugin objects
* New: dynamic load addon: performance optimizations
* New: dynamic load addon: render multiple blocks at once
* New: transfer: option to control records to process per call
* New: transfer: various improvements to the transfer script
* New: stars rating: accessibility for the rating block
* New: additional abstract classes for some plugin objects
* New: all templates modified to use new loop object
* New: base widget class with improved code sharing
* New: database table: for storing cached data
* New: database cache handling object
* New: posts sorting: added parameter for minimal rating
* New: comments sorting: added parameter for minimal rating
* Edit: stars rating: various rendering improvements
* Edit: stars rating: various JavaScript improvements
* Edit: changed order of the plugin initialization on admin side
* Edit: posts sorting: various minor updates
* Edit: comments sorting: various minor updates
* Edit: improvements to the rating method load classes
* Edit: various improvements to the votes and rating logs
* Edit: d4pLib 2.2.1
* Fix: dynamic load addon: problems with addon initialization
* Fix: posts sorting: problem with the ASC sort order
* Fix: lists rendering: missing default query elements
* Fix: lists rendering: shows ratings for deleted posts
* Fix: user rating object: init problem for non-logged visitors
* Fix: query object: problem with limit and offset arguments
* Fix: query object: problem with filtering the taxonomy entities

= 2.2 - 2017.05.17 =
* New: dynamic load: filter to control loading
* New: admin interface is now fully accessible
* New: widgets tabbed interface using ARIA markup
* Edit: widgets interface using proper HTML input types
* Edit: main rating query object perfromance improvements
* Edit: improvements with the font handling widget settings
* Edit: various improvements to the plugin core
* Edit: d4pLib 1.9.6
* Fix: stars rating: division by zero error when removing votes
* Fix: widgets font settings problems with some rating methods
* Fix: problem with custom settings rule loading
* Fix: small issue with the global post set to null

= 2.1.1 - 2017.03.04 =
* Edit: d4pLib 1.9.0.1
* Fix: custom settings rules get deleted on plugin update
* Fix: minor issue in the function to load templates

= 2.1 - 2017.02.24 =
* New: stars rating: hidden input field and passive mode
* New: rating item: method to get all data for a method
* New: filter to register additional widgets
* New: filter to provide extra templates storage locations
* New: filters for getting external methods templates
* New: font base class updated to support new rating methods
* New: more actions and filters in the main JavaScript file
* Edit: posts: improved inserting of the rating block
* Edit: all main form files preventing direct loading
* Edit: improved rating item data validation
* Edit: improved validation for the post rating rendering function
* Edit: minor improvements to data validation for all methods
* Edit: additional optimization for main JavaScript file
* Edit: code optimization for several core classes
* Edit: many improvements to the main CSS stylesheet
* Edit: various small improvements to admin side panels
* Edit: d4pLib 1.9
* Fix: XSS security issue with the log.php form file
* Fix: posts addon: triggered by home page queries in some cases
* Fix: main log item meta database method missing unserialization
* Fix: few problems with badge/symbol rendering
* Fix: php warning in the rich snippet addon

= 2.0.2 - 2017.01.27 =
* Edit: d4pLib 1.8.9
* Fix: multisite issue with the blog switching functions
* Fix: multisite issue with deletion of the blog tables

= 2.0.1 - 2017.01.03 =
* Edit: display error messages in the rating block
* Edit: improvements in the way AJAX response handles errors
* Edit: improvements to main AJAX error response handling
* Fix: rich snippets: problem with adding snippets in some cases

= 2.0 - 2016.12.30 =
* New: transfer: rewritten to use threaded AJAX based transfer
* New: debug: option to force loading of source JS and CSS files
* New: rich snippet: support for JSON-LD snippet format
* New: rating items log: filters and query expanding for the log
* New: multisite: remove tables for deleted blogs
* New: database: function to get list of users who votes for an item
* New: javascript: improved method for handling AJAX errors
* New: debug: log AJAX error to console, display alert or hide
* New: many small updates to improve plugin extensibility
* New: all rating methods render text: before and after wrapper
* New: theme overridable functions to render various elements
* New: several new functions for dealing with rating methods
* Edit: transfer: various speed optimizations and improvements
* Edit: shortcake addon: improved code organization
* Edit: shortcake addon: improvements to the editor elements display
* Edit: shortcake addon: display wrapper and block CSS class options
* Edit: metabox: updated interface for better usability
* Edit: dynamic load: check if the rendering is inside the feed
* Edit: many improvements to core methods objects
* Edit: many improvements to the addon architecture
* Edit: many updates to the core objects initialization
* Edit: few improvements to the administration panels
* Edit: few improvements organization of the plugin code
* Edit: d4pLib 1.8.7
* Edit: updated plugin system requirements
* Fix: shortcake addon: wrong options for the stars review shortcodes
* Fix: shortcake addon: showing unsupported shortcode attributes
* Fix: votes log: display of some rating items titles
* Fix: votes log: filter user ID set to zero (visitors)
* Fix: shortcodes: few issues with preprocessing of attributes
* Fix: stars rating: problem with formatting rating value
* Fix: stars rating: few issues with rendering of votes text
* Fix: stars rating: list widget template missing list item classes
* Fix: dynamic load: doesn't take into account the feed
* Fix: transfer: few problems with YASR plugin data transfer
* Fix: transfer: many warnings happening during the transfer
* Fix: transfer: missing item preparation for saving transferred data
* Fix: translation missing for the word 'ago' for rating text
* Fix: issues with scanning for theme override templates
* Fix: rating query object: wrong sorting by rating

= 1.4 - 2016.10.23 =
* New: addon: Shortcake UI Plugin Support
* New: administration: panel for managing rating entities and types
* New: rules panel: buttons for delete and activation of rules
* New: rules panel: color coding for list of available rules
* New: rules panel: confirmation dialog for deleting the rule
* New: votes log: filters and query expanding for the log
* New: stars rating: translation templates for rendering blocks
* New: database: new column for 'series' to the items table
* New: database: indexing more columns in the items table
* New: debug: embed SQL query for the rating lists
* New: protect entities and types array from tampering
* New: update plugin panel rechecks for broken settings
* Edit: votes log: refactored SQL query to get log items
* Edit: plugin now uses d4pLib settings core class
* Edit: refactored access to entities array to use access functions
* Edit: refactored main rendering JavaScript file
* Edit: changes in the way JavaScript files are compressed
* Edit: improvements to rating method core classes
* Edit: improvements to generated inline CSS for font icons
* Edit: improvements to rating method core classes
* Edit: d4pLib 1.8.3
* Edit: removed some outdated code from rating methods
* Fix: anonymous verify option can cause broken SQL log queries
* Fix: some votes log URL's were not working in every case
* Fix: missing sanitation of the settings for some operation
* Fix: few minor issues with the rendering objects

= 1.3.1 - 2016.09.29 =
* Edit: d4pLib 1.8.2
* Fix: removal of rating items not working in some cases

= 1.3 - 2016.08.05 =
* New: addon: Feeds - for RSS, AMP, FIP, ANF integration support
* New: font icons: support for adding custom icon fonts
* New: font icons: 10 more icons in default icons font
* New: rewriten handling for the font icons
* New: allow or prevent authors to vote for own rating items
* New: improved sanitation of plugins settings on save
* New: transfer data from KK Star Ratings plugin
* New: actions run when voting items data is saved to the database
* New: filter to modify votes meta data added to the database
* New: ratings and votes grids allow for adding of new columns
* New: support for IP detection when behind CloudFlare
* Edit: improved sanitation of plugins settings on save
* Edit: improved buttons on all dialogs on the admin side
* Edit: many improvements in handling shortcodes and widgets
* Edit: ratings grid proper use of the rating item objects
* Edit: many small improvements to the JavaScript code
* Edit: d4pLib 1.7.8
* Fix: few small issues when the user agent is not set
* Fix: saving option to disbale custom settings rule not working
* Fix: few minor styling issues related to rating lists
* Fix: warnings generated by the missing style type and/or name
* Fix: logs display warnings with post types are missing
* Fix: small issue with type option in the shortcodes processing
* Fix: duplicated classes added for star rating font icons styles
* Fix: minor problems in applying default styles for widgets
* Fix: few minor problems with the main JavaScript file
* Fix: warnings related to query object SQL query in some cases
* Fix: wrong attribute name for item ID for some shortcodes

= 1.2 - 2016.05.10 =
* New: posts addon: sort posts by rating
* New: posts addon: additional control filters
* New: comments addon: sort posts by rating
* New: comments addon: additional control filters
* New: query engine: posts filter by author, meta and terms
* New: query engine: comments filter by author and meta
* New: query engine: terms filter by meta
* New: query engine: users filter meta
* New: debug information added for shortcodes and widgets
* New: separate security and debug settings panels
* New: settings panel now uses dividers for settings groups
* Edit: posts addon: do not embed if inside the rss feed
* Edit: new settings and updates for rendering of rating blocks
* Edit: protect expanded rendering functions
* Edit: extra information for transfer data panels
* Edit: check if method is active for transfer data panels
* Edit: minor updates to some of the templates
* Edit: some minor improvements on the admin side interface
* Edit: d4pLib 1.6.9
* Fix: minor issue with the GD Star Rating transfer process
* Fix: comments addon: rating display when no comment is detected
* Fix: posts addon: rating display when no comment is detected
* Fix: small issue with the d4pLib shortcodes class

= 1.1.1 - 2016.01.23 =
* New: front page knowledge base and support links
* Edit: check for rating method validity before render
* Edit: few minor updates to the default styling
* Fix: templates in theme subfolder 'gdrts' not loaded

= 1.1 - 2016.01.18 =
* New: stars rating: set custom colors for font icons based stars
* New: daily maintenance background job
* New: background job: calculate rating type based statistics
* New: background job: recalculate ratings on stars number change
* Edit: rating query object allows filtering of query elements
* Edit: main posts metabox improves default filters and actions
* Edit: font icons: includes spinner icon and some extra classes
* Edit: font icons: font files included with plugin version parameter
* Edit: posts integration addon shows help for the addon
* Edit: posts integration addon hides bbPress post types
* Edit: d4pLib 1.5.8
* Fix: comment rating type missing title when display in lists
* Fix: using FontAwesome spinner icon for loading message
* Fix: method and addon issues with missing custom rule values
* Fix: several smaller issues with the admin interface
* Fix: problems with rating lists ordering by votes

= 1.0.3 - 2016.01.04 =
* Edit: some addons function moved into plugin core
* Edit: improvements to some rendering functions
* Edit: switched to new admin object base class from D4PLib
* Edit: d4pLib 1.5.6
* Fix: extensions panel allows for all methods to be disabled
* Fix: rich snippet addon: broken if selected method is disabled
* Fix: rating method dropdown lists show disabled methods

= 1.0.2.1 - 2015.12.29. =
* Fix: abstract method class inheritance problem

= 1.0.2 - 2015.12.28. =
* Edit: improvements to loading of the templates list
* Edit: d4pLib 1.5.5
* Fix: deleting custom rules not working
* Fix: showing disabled methods and addons on rules panel
* Fix: loading conflict with GD bbPress Toolbox Pro
* Fix: minor metabox initialization issue

= 1.0.1 - 2015.12.27. =
* New: metabox for posts to override embed settings
* Edit: plugin initialization priority changed

= 1.0 - 2015.12.25. =
* First official release

== Screenshots ==
1. Example rating block
2. Example rating block with votes distribution
3. Example Like This in comments
4. Stars rating method settings
5. Votes Log
6. Shortcodes Builder
7. Example rating block with widget and shortcode lists
