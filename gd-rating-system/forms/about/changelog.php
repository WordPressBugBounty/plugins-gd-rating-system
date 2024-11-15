<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="d4p-group d4p-group-changelog">
    <h3><?php _e( 'Version', 'gd-rating-system' ); ?> 3</h3>
    <div class="d4p-group-inner">
        <h4>Version: 3.6.2 / november 15 2024</h4>
        <ul>
            <li><strong>edit</strong> proper sanitization of the HTML classes</li>
            <li><strong>edit</strong> d4pLib 2.8.19</li>
            <li><strong>fix</strong> authenticated stored cross-site scripting vulnerability</li>
            <li><strong>fix</strong> import from YASR plugin doesn't import decimal places</li>
        </ul>

        <h4>Version: 3.6.1 / june 28 2024</h4>
        <ul>
            <li><strong>edit</strong> validate the template in render functions prior to inclusion</li>
            <li><strong>fix</strong> underlying functions not loaded on the blocks widgets panel</li>
            <li><strong>fix</strong> widgets not loading interface when used via blocks</li>
            <li><strong>fix</strong> local file inclusion vulnerability with the rating block templates</li>
        </ul>

        <h4>Version: 3.6 / june 7 2024</h4>
        <ul>
            <li><strong>new</strong> fully tested and compatible with WordPress up to 6.6</li>
            <li><strong>edit</strong> updates to code formatting and readability</li>
            <li><strong>edit</strong> updates to the translation strings</li>
            <li><strong>edit</strong> many improvements to the PHP core code and syntax</li>
            <li><strong>edit</strong> d4pLib 2.8.18</li>
            <li><strong>fix</strong> minor issue with state capture class on taxonomy archives with no results</li>
            <li><strong>fix</strong> several typos and other text and information issues</li>
            <li><strong>fix</strong> several small issues with the boolean functions and methods</li>
        </ul>

        <h4>Version: 3.5.1 / december 19 2023</h4>
        <ul>
            <li><strong>new</strong> fully tested and compatible with WordPress up to 6.4</li>
            <li><strong>new</strong> plugin is tested and compatible with the PHP 8.0, 8.1, 8.2 and 8.3</li>
            <li><strong>edit</strong> escaping IP for display in a votes list and dashboard widget</li>
            <li><strong>edit</strong> rewritten functions for getting and validating IP</li>
            <li><strong>edit</strong> d4pLib 2.8.16</li>
            <li><strong>fix</strong> stored script vulnerability related to IP field</li>
        </ul>

        <h4>Version: 3.5 / may 15 2022</h4>
        <ul>
            <li><strong>new</strong> tested with WordPress 6.0</li>
            <li><strong>new</strong> rich snippets: added missing microdata code for Software Application</li>
            <li><strong>edit</strong> rich snippets: some minor optimization in the snippets code</li>
            <li><strong>edit</strong> d4pLib 2.8.14</li>
            <li><strong>fix</strong> rich snippets: minor issue with the snippet engine loading</li>
        </ul>

        <h4>Version: 3.4 / january 31 2021</h4>
        <ul>
            <li><strong>new</strong> system requirements: PHP 7.0 or newer</li>
            <li><strong>new</strong> system requirements: WordPress 5.0 or newer</li>
            <li><strong>new</strong> shortcodes builder: option to change the displayed rating value</li>
            <li><strong>new</strong> all shortcodes expanded with the 'rating' attribute</li>
            <li><strong>new</strong> all widgets expanded with the 'rating' attribute</li>
            <li><strong>new</strong> additional class to handle admin grids loading</li>
            <li><strong>removed</strong> addon with support for Shortcake UI plugin</li>
            <li><strong>removed</strong> few more unused/obsolete functions or methods</li>
            <li><strong>fix</strong> items per page not saving for the admin grids</li>
            <li><strong>fix</strong> problem with the admin database grid listing</li>
            <li><strong>fix</strong> issue with the function used to get quick items stats</li>
            <li><strong>fix</strong> minor issue in the dashboard votes widget listing</li>
        </ul>

        <h4>Version: 3.3.1 / november 23 2020</h4>
        <ul>
            <li><strong>new</strong> font icons class has conversion of the char formats</li>
            <li><strong>new</strong> call to action rendering added to many default templates</li>
            <li><strong>fix</strong> in some cases single rating block max value not valid</li>
            <li><strong>fix</strong> distribution not properly initialized for new items</li>
            <li><strong>fix</strong> distribution division by zero when item has no votes</li>
            <li><strong>fix</strong> distribution for stars rating not properly saved</li>
            <li><strong>fix</strong> quick database query for counts calculation issue</li>
            <li><strong>fix</strong> stars badge rendering fails for the default font icons</li>
        </ul>

        <h4>Version: 3.3 / november 19 2020</h4>
        <ul>
            <li><strong>new</strong> rebuilt the default font icons with the woff2 support</li>
            <li><strong>new</strong> generate the embedded version of the default font</li>
            <li><strong>new</strong> default font now has font-display property set to auto</li>
            <li><strong>new</strong> full code refactoring for the WordPress coding style</li>
            <li><strong>new</strong> all methods include item type based args/calc filters</li>
            <li><strong>edit</strong> improvements to some of the admin side interface elements</li>
            <li><strong>edit</strong> few improvements to the votes handling for all methods</li>
            <li><strong>edit</strong> various updates to the code organization and structure</li>
            <li><strong>edit</strong> d4pLib 2.8.13</li>
            <li><strong>fix</strong> rich snippets: minor issue with the application based snippets</li>
            <li><strong>fix</strong> votes log: missing meta data for log items breaking some addons</li>
            <li><strong>fix</strong> maintenance: problem with saving stars rating distribution</li>
            <li><strong>fix</strong> new install shows the upgrade notice with maintenance mode</li>
        </ul>

        <h4>Version: 3.2 / august 19 2020</h4>
        <ul>
            <li><strong>new</strong> fully tested and compatible with WordPress 5.5</li>
            <li><strong>new</strong> class for handling of preloading for rating data</li>
            <li><strong>new</strong> huge performance improvements for plugin dashboard</li>
            <li><strong>new</strong> huge performance improvements with loop based rating integrations</li>
            <li><strong>new</strong> preload: support for comments loop</li>
            <li><strong>new</strong> preload: preload posts from the supplied or global WP_Query</li>
            <li><strong>new</strong> preload: preload posts from the list of post ids</li>
            <li><strong>new</strong> preload: preload items from the list of item ids</li>
            <li><strong>new</strong> preload: preload items for item types and real ids</li>
            <li><strong>new</strong> comments addon: option to control preload</li>
            <li><strong>new</strong> dashboard widget: show item title and link if available</li>
            <li><strong>edit</strong> plugin dashboard: optimized loading of the votes widget</li>
            <li><strong>edit</strong> rewritten several of the database class methods</li>
            <li><strong>edit</strong> few minor changes to the database tables schema</li>
            <li><strong>edit</strong> various small quality of code improvements</li>
            <li><strong>edit</strong> d4pLib 2.8.12</li>
            <li><strong>fix</strong> rating items retrieval doesn't check if rating method is loaded</li>
            <li><strong>fix</strong> transfer panel script was not loading due to bad URL used</li>
        </ul>

        <h4>Version: 3.1.3 / june 20 2020</h4>
        <ul>
            <li><strong>fix</strong> rich snippets: product offer not saved properly if price is 0</li>
            <li><strong>fix</strong> rich snippets: product offer with price 0 not properly displayed</li>
        </ul>

        <h4>Version: 3.1.2 / june 12 2020</h4>
        <ul>
            <li><strong>fix</strong> rich snippets: metabox JavaScript not loaded</li>
            <li><strong>fix</strong> rich snippets: metabox selections not working</li>
            <li><strong>fix</strong> few issues with metabox elements styling</li>
        </ul>

        <h4>Version: 3.1.1 / june 10 2020</h4>
        <ul>
            <li><strong>edit</strong> d4pLib 2.8.10</li>
            <li><strong>fix</strong> problem with using cookie validation values for anonymous visitors</li>
        </ul>

        <h4>Version: 3.1 / june 1 2020</h4>
        <ul>
            <li><strong>new</strong> shortcodes builder</li>
            <li><strong>new</strong> rich snippets: custom snippet type (JSON-LD format)</li>
            <li><strong>new</strong> rich snippets: expanded default settings for post types</li>
            <li><strong>new</strong> rich snippets: option to use GMT based dates if available</li>
            <li><strong>new</strong> rich snippets: tools to remove and reset default settings for posts</li>
            <li><strong>new</strong> posts: rewritten detection method for use of the_content filter</li>
            <li><strong>new</strong> posts: includes excerpt detection logic to avoid excerpt related issues</li>
            <li><strong>new</strong> function to properly handle mysql date conversion with or without GMT</li>
            <li><strong>edit</strong> rich snippets: updated context help and removed some outdated information</li>
            <li><strong>edit</strong> shortcodes: improvements to the attributes values cleanup</li>
            <li><strong>edit</strong> few minor changes to the frontend styling and rendering</li>
            <li><strong>edit</strong> various small styling improvements and changes</li>
            <li><strong>edit</strong> d4pLib 2.8.9</li>
            <li><strong>fix</strong> posts: in some cases output rendered inside the head area</li>
            <li><strong>fix</strong> posts: conflicts related to some SEO plugins</li>
            <li><strong>fix</strong> shortcodes: few issues with conditional shortcodes</li>
            <li><strong>fix</strong> widgets: showing options for the features that are not available in Lite</li>
            <li><strong>fix</strong> small issues with cleaning up the shortcode object attributes</li>
            <li><strong>fix</strong> in some cases results for comments based queries can be empty</li>
            <li><strong>fix</strong> various small styling issues with the rating lists results</li>
            <li><strong>fix</strong> like this balloon theme styling in the results list</li>
            <li><strong>fix</strong> few instances of using wrong method call signature</li>
        </ul>

        <h4>Version: 3.0.3 / may 26 2020</h4>
        <ul>
            <li><strong>edit</strong> rich snippets: product snippet not rendered if rating is missing</li>
            <li><strong>fix</strong> rich snippets: rendering empty snippet in some cases</li>
            <li><strong>fix</strong> stars rating: display of rating blocks with RTL orientation</li>
            <li><strong>fix</strong> import tool not showing proper failed import message</li>
            <li><strong>fix</strong> broken tool for exporting plugin settings</li>
            <li><strong>fix</strong> few potential PHP warnings related to some of the tools</li>
        </ul>

        <h4>Version: 3.0.2 / may 23 2020</h4>
        <ul>
            <li><strong>fix</strong> rich snippets: not showing rating for some snippet types</li>
            <li><strong>fix</strong> rich snippets: setting the review option value in meta table</li>
        </ul>

        <h4>Version: 3.0.1 / may 22 2020</h4>
        <ul>
            <li><strong>edit</strong> db columns for method, series and ip set to 64 characters</li>
            <li><strong>edit</strong> db columns for action and status set to 32 characters</li>
            <li><strong>edit</strong> db columns for module set to 16 characters</li>
        </ul>

        <h4>Version: 3.0 / may 20 2020</h4>
        <ul>
            <li><strong>new</strong> various new features transferred from the Pro version</li>
            <li><strong>new</strong> like this rating method transferred from the Pro version</li>
            <li><strong>new</strong> rich snippets addon: transferred from the Pro version</li>
            <li><strong>new</strong> database table: for storing item basic rating data</li>
            <li><strong>new</strong> database queries: largely rewritten for the new database schema</li>
            <li><strong>new</strong> performance: improvements due to the new database schema</li>
            <li><strong>new</strong> performance: more in memory temporary cache for various operations</li>
            <li><strong>new</strong> rating item object: mostly rewritten and expanded</li>
            <li><strong>new</strong> rating methods: additional registration features arguments</li>
            <li><strong>new</strong> rating templates: show only own rating for stars rating</li>
            <li><strong>new</strong> js and css files: enqueue expanded with the registration of files</li>
            <li><strong>new</strong> js and css files: additional improvements to registration and queue use</li>
            <li><strong>new</strong> js and css files: big improvements in the way files are loaded on request</li>
            <li><strong>new</strong> voting security: throttle voting requests protection method</li>
            <li><strong>new</strong> ajax request handler: unified and expanded error processing</li>
            <li><strong>new</strong> shortcodes: has_voted to, has_voted_auto, has_not_voted, has_not_voted_auto</li>
            <li><strong>new</strong> shortcake addon: support for new shortcodes</li>
            <li><strong>new</strong> rich snippets addon: tool to mass update some snippets settings</li>
            <li><strong>new</strong> rich snippets addon: tool to remove legacy snippets data</li>
            <li><strong>edit</strong> posts and comments addons: expanded with features from Pro version</li>
            <li><strong>edit</strong> d4pLib 2.8.8</li>
            <li><strong>fix</strong> various fixes transferred and applied from the Pro version</li>
        </ul>
    </div>
</div>

<div class="d4p-group d4p-group-changelog">
    <h3><?php _e( 'Version', 'gd-rating-system' ); ?> 2</h3>
    <div class="d4p-group-inner">
        <h4>Version: 2.7.1 / september 6 2019</h4>
        <ul>
            <li><strong>edit</strong> d4pLib 2.7.7</li>
            <li><strong>fix</strong> problem with rendering of the user vote in rating block</li>
            <li><strong>fix</strong> issue with language initialization on plugin load</li>
            <li><strong>fix</strong> few minor issues with undefined variables</li>
            <li><strong>fix</strong> votes log potential error when the post type is not registered</li>
            <li><strong>fix</strong> small problem with the method to find and load template</li>
        </ul>

        <h4>Version: 2.7 - Perses / march 30 2019</h4>
        <ul>
            <li><strong>new</strong> all items operations now check for entity/name validity</li>
            <li><strong>new</strong> all metaboxes handling now check for entity/name validity</li>
            <li><strong>new</strong> database: adding items now check for entity/name validity</li>
            <li><strong>new</strong> database: prevent outside code from adding new rating items</li>
            <li><strong>edit</strong> database: method for adding new item set changed to private</li>
            <li><strong>edit</strong> database: additional sanitation of the input numeric arrays</li>
            <li><strong>edit</strong> database: additional absint() conversion for ID based queries</li>
            <li><strong>edit</strong> d4pLib 2.6.1</li>
            <li><strong>fix</strong> potential vector for injecting bogus rating items in database</li>
            <li><strong>fix</strong> missing sanitation for some input data expected as arrays</li>
            <li><strong>fix</strong> database object internal calls not use $this in every case</li>
        </ul>

        <h4>Version: 2.6 - Asteria / january 30 2019</h4>
        <ul>
            <li><strong>new</strong> stars rating method: quick revote option</li>
            <li><strong>new</strong> stars rating method: option to disable rating</li>
            <li><strong>new</strong> shortcodes: option to disable rating for stars rating method</li>
            <li><strong>new</strong> shortcodes: rating value for method and any item</li>
            <li><strong>new</strong> shortcodes: rating value for method and current item</li>
            <li><strong>new</strong> shortcake addon: option to disable rating for stars rating method</li>
            <li><strong>new</strong> shortcake addon: support for rating value shortcodes</li>
            <li><strong>edit</strong> rating javascript: replaced jQuery .bind with .on</li>
            <li><strong>edit</strong> improved minification of all CSS stylesheets</li>
            <li><strong>edit</strong> d4pLib 2.5.4</li>
            <li><strong>fix</strong> template path debug information not using debug on/off check</li>
        </ul>

        <h4>Version: 2.5 - Aura / july 16 2018</h4>
        <ul>
            <li><strong>new</strong> widget: special unique Developer ID option</li>
            <li><strong>new</strong> feeds addon: skip ratings for the XMLRPC requests</li>
            <li><strong>new</strong> rating item data objects now have method to get author ID</li>
            <li><strong>edit</strong> minor updates to the metabox handler functions</li>
            <li><strong>edit</strong> few updates to widget settings organization</li>
            <li><strong>edit</strong> various improvements to the plugin core classes</li>
            <li><strong>edit</strong> d4pLib 2.3.4</li>
            <li><strong>fix</strong> posts sorting: problem with negative ratings order</li>
            <li><strong>fix</strong> comments sorting: problem with negative ratings order</li>
            <li><strong>fix</strong> problem with the rating labels translations</li>
            <li><strong>fix</strong> several strings missing from the POT translations file</li>
        </ul>

        <h4>Version: 2.4 - Styx / march 20 2018</h4>
        <ul>
            <li><strong>new</strong> dynamic load: visitor and user loading settings</li>
            <li><strong>new</strong> tools: convert all votes log IP's into MD5 hashed strings</li>
            <li><strong>new</strong> stars rating: filter inside the calculation methods before save</li>
            <li><strong>new</strong> stars rating: args/calc filters for each item in the list loop</li>
            <li><strong>new</strong> stars rating: completely rewritten single default templates</li>
            <li><strong>new</strong> stars rating: new list loop default templates - list and table</li>
            <li><strong>new</strong> stars rating: new render classes methods and filters</li>
            <li><strong>new</strong> stars rating: more settings for the rendering methods</li>
            <li><strong>new</strong> stars rating: new list loop default templates - list and table</li>
            <li><strong>new</strong> list templates now display item thumbnails if available</li>
            <li><strong>new</strong> posts addon: filter for the priority for the_content</li>
            <li><strong>new</strong> comments addon: filter for the priority for comment_text</li>
            <li><strong>new</strong> centralized method for setting user agent for votes</li>
            <li><strong>new</strong> store IP's in votes log as MD5 hashed strings</li>
            <li><strong>new</strong> dedicated function to get user agent if it is set</li>
            <li><strong>new</strong> all item objects now have thumbnails functions</li>
            <li><strong>new</strong> all item objects use filters to modify returned data</li>
            <li><strong>new</strong> all widgets are logging currently used widget</li>
            <li><strong>new</strong> all shortcodes are logging currently used shortcodes</li>
            <li><strong>new</strong> render process is logging currently used template</li>
            <li><strong>new</strong> completely rewritten template loading process</li>
            <li><strong>new</strong> render process is logging currently used template</li>
            <li><strong>new</strong> completely rewritten default templates for all methods</li>
            <li><strong>new</strong> function to get current rendering template</li>
            <li><strong>new</strong> function to get current plugin widget</li>
            <li><strong>new</strong> function to get current plugin shortcode</li>
            <li><strong>edit</strong> dynamic load: various improvements and optimizations</li>
            <li><strong>edit</strong> various improvements to single and list engines</li>
            <li><strong>edit</strong> few improvements to the rating item objects</li>
            <li><strong>edit</strong> old Default templates are now Classic templates</li>
            <li><strong>edit</strong> YASR data transfer: support for YASR 1.5 or newer only</li>
            <li><strong>edit</strong> metabox support for the Gutenberg editor 2.3 or newer</li>
            <li><strong>edit</strong> d4pLib 2.2.7</li>
            <li><strong>fix</strong> YASR data transfer: invalid conversion of the max rating data</li>
            <li><strong>fix</strong> YASR data transfer: detection of the database tables</li>
            <li><strong>fix</strong> WP PostRatings data transfer: few issues with ratings only transfer</li>
            <li><strong>fix</strong> WP_Query sorting not working inside the AJAX calls processing</li>
            <li><strong>fix</strong> problem with missing the please wait when the rating is saved</li>
            <li><strong>fix</strong> check for loaded methods and addon not working correctly</li>
            <li><strong>fix</strong> loading from library for icons on the Entity editor page</li>
        </ul>

        <h4>Version: 2.3.2 / january 26 2018</h4>
        <ul>
            <li><strong>fix</strong> missing proper sanitation for some grid filters variables</li>
        </ul>

        <h4>Version: 2.3.1 / january 11 2018</h4>
        <ul>
            <li><strong>new translation</strong> German (de_DE) language</li>
            <li><strong>new</strong> ajax handler actions for various processing errors</li>
            <li><strong>new</strong> ajax handler uses improved validation for request data</li>
            <li><strong>edit</strong> d4pLib 2.2.4</li>
            <li><strong>fix</strong> xss vulnerability: query string panel was not sanitized</li>
            <li><strong>fix</strong> xss vulnerability: panel variable for some pages was not verified</li>
        </ul>

        <h4>Version: 2.3 - Phoebe / december 06 2017</h4>
        <ul>
            <li><strong>new</strong> core loop object for easier templates control</li>
            <li><strong>new</strong> additional abstract classes for some plugin objects</li>
            <li><strong>new</strong> dynamic load addon: performance optimizations</li>
            <li><strong>new</strong> dynamic load addon: render multiple blocks at once</li>
            <li><strong>new</strong> transfer: option to control records to process per call</li>
            <li><strong>new</strong> transfer: various improvements to the transfer script</li>
            <li><strong>new</strong> stars rating: accessibility for the rating block</li>
            <li><strong>new</strong> additional abstract classes for some plugin objects</li>
            <li><strong>new</strong> all templates modified to use new loop object</li>
            <li><strong>new</strong> base widget class with improved code sharing</li>
            <li><strong>new</strong> database table: for storing cached data</li>
            <li><strong>new</strong> database cache handling object</li>
            <li><strong>new</strong> posts sorting: added parameter for minimal rating</li>
            <li><strong>new</strong> comments sorting: added parameter for minimal rating</li>
            <li><strong>edit</strong> stars rating: various rendering improvements</li>
            <li><strong>edit</strong> stars rating: various JavaScript improvements</li>
            <li><strong>edit</strong> changed order of the plugin initialization on admin side</li>
            <li><strong>edit</strong> posts sorting: various minor updates</li>
            <li><strong>edit</strong> comments sorting: various minor updates</li>
            <li><strong>edit</strong> improvements to the rating method load classes</li>
            <li><strong>edit</strong> various improvements to the votes and rating logs</li>
            <li><strong>edit</strong> d4pLib 2.2.1</li>
            <li><strong>fix</strong> dynamic load addon: problems with addon initialization</li>
            <li><strong>fix</strong> posts sorting: problem with the ASC sort order</li>
            <li><strong>fix</strong> lists rendering: missing default query elements</li>
            <li><strong>fix</strong> lists rendering: shows ratings for deleted posts</li>
            <li><strong>fix</strong> user rating object: init problem for non-logged visitors</li>
            <li><strong>fix</strong> query object: problem with limit and offset arguments</li>
            <li><strong>fix</strong> query object: problem with filtering the taxonomy entities</li>
        </ul>

        <h4>Version: 2.2 - Tethys / may 17 2017</h4>
        <ul>
            <li><strong>new</strong> dynamic load: filter to control loading</li>
            <li><strong>new</strong> admin interface is now fully accessible</li>
            <li><strong>new</strong> widgets tabbed interface using ARIA markup</li>
            <li><strong>edit</strong> widgets interface using proper HTML input types</li>
            <li><strong>edit</strong> main rating query object perfromance improvements</li>
            <li><strong>edit</strong> improvements with the font handling widget settings</li>
            <li><strong>edit</strong> various improvements to the plugin core</li>
            <li><strong>edit</strong> d4pLib 1.9.6</li>
            <li><strong>fix</strong> stars rating: division by zero error when removing votes</li>
            <li><strong>fix</strong> widgets font settings problems with some rating methods</li>
            <li><strong>fix</strong> problem with custom settings rule loading</li>
            <li><strong>fix</strong> small issue with the global post set to null</li>
        </ul>

        <h4>Version: 2.1.1 / march 4 2017</h4>
        <ul>
            <li><strong>edit</strong> d4pLib 1.9.0.1</li>
            <li><strong>fix</strong> custom settings rules get deleted on plugin update</li>
            <li><strong>fix</strong> minor issue in the function to load templates</li>
        </ul>

        <h4>Version: 2.1 - Rhea / february 24 2017</h4>
        <ul>
            <li><strong>new</strong> stars rating: hidden input field and passive mode</li>
            <li><strong>new</strong> rating item: method to get all data for a method</li>
            <li><strong>new</strong> filter to register additional widgets</li>
            <li><strong>new</strong> filter to provide extra templates storage locations</li>
            <li><strong>new</strong> filters for getting external methods templates</li>
            <li><strong>new</strong> font base class updated to support new rating methods</li>
            <li><strong>new</strong> more actions and filters in the main JavaScript file</li>
            <li><strong>edit</strong> posts: improved inserting of the rating block</li>
            <li><strong>edit</strong> all main form files preventing direct loading</li>
            <li><strong>edit</strong> improved rating item data validation</li>
            <li><strong>edit</strong> improved validation for the post rating rendering function</li>
            <li><strong>edit</strong> minor improvements to data validation for all methods</li>
            <li><strong>edit</strong> additional optimization for main JavaScript file</li>
            <li><strong>edit</strong> code optimization for several core classes</li>
            <li><strong>edit</strong> many improvements to the main CSS stylesheet</li>
            <li><strong>edit</strong> various small improvements to admin side panels</li>
            <li><strong>edit</strong> d4pLib 1.9</li>
            <li><strong>fix</strong> XSS security issue with the log.php form file</li>
            <li><strong>fix</strong> posts addon: triggered by home page queries in some cases</li>
            <li><strong>fix</strong> main log item meta database method missing unserialization</li>
            <li><strong>fix</strong> few problems with badge/symbol rendering</li>
            <li><strong>fix</strong> php warning in the rich snippet addon</li>
        </ul>

        <h4>Version: 2.0.2 / january 27 2017</h4>
        <ul>
            <li><strong>edit</strong> d4pLib 1.8.9</li>
            <li><strong>fix</strong> multisite issue with the blog switching functions</li>
            <li><strong>fix</strong> multisite issue with deletion of the blog tables</li>
        </ul>

        <h4>Version: 2.0.1 / january 3 2017</h4>
        <ul>
            <li><strong>edit</strong> display error messages in the rating block</li>
            <li><strong>edit</strong> improvements in the way AJAX response handles errors</li>
            <li><strong>edit</strong> improvements to main AJAX error response handling</li>
            <li><strong>fix</strong> rich snippets: problem with adding snippets in some cases</li>
        </ul>

        <h4>Version: 2.0 - Cronus / december 30 2016</h4>
        <ul>
            <li><strong>new</strong> transfer: rewritten to use threaded AJAX based transfer</li>
            <li><strong>new</strong> debug: option to force loading of source JS and CSS files</li>
            <li><strong>new</strong> rich snippet: support for JSON-LD snippet format</li>
            <li><strong>new</strong> rating items log: filters and query expanding for the log</li>
            <li><strong>new</strong> multisite: remove tables for deleted blogs</li>
            <li><strong>new</strong> database: function to get list of users who votes for an item</li>
            <li><strong>new</strong> javascript: improved method for handling AJAX errors</li>
            <li><strong>new</strong> debug: log AJAX error to console, display alert or hide</li>
            <li><strong>new</strong> many small updates to improve plugin extensibility</li>
            <li><strong>new</strong> all rating methods render text: before and after wrapper</li>
            <li><strong>new</strong> theme overridable functions to render various elements</li>
            <li><strong>new</strong> several new functions for dealing with rating methods</li>
            <li><strong>edit</strong> transfer: various speed optimizations and improvements</li>
            <li><strong>edit</strong> shortcake addon: improved code organization</li>
            <li><strong>edit</strong> shortcake addon: improvements to the editor elements display</li>
            <li><strong>edit</strong> shortcake addon: display wrapper and block CSS class options</li>
            <li><strong>edit</strong> metabox: updated interface for better usability</li>
            <li><strong>edit</strong> dynamic load: check if the rendering is inside the feed</li>
            <li><strong>edit</strong> many improvements to core methods objects</li>
            <li><strong>edit</strong> many improvements to the addon architecture</li>
            <li><strong>edit</strong> many updates to the core objects initialization</li>
            <li><strong>edit</strong> few improvements to the administration panels</li>
            <li><strong>edit</strong> few improvements organization of the plugin code</li>
            <li><strong>edit</strong> d4pLib 1.8.7</li>
            <li><strong>edit</strong> updated plugin system requirements</li>
            <li><strong>fix</strong> shortcake addon: wrong options for the stars review shortcodes</li>
            <li><strong>fix</strong> shortcake addon: showing unsupported shortcode attributes</li>
            <li><strong>fix</strong> votes log: display of some rating items titles</li>
            <li><strong>fix</strong> votes log: filter user ID set to zero (visitors)</li>
            <li><strong>fix</strong> shortcodes: few issues with preprocessing of attributes</li>
            <li><strong>fix</strong> stars rating: problem with formatting rating value</li>
            <li><strong>fix</strong> stars rating: few issues with rendering of votes text</li>
            <li><strong>fix</strong> stars rating: list widget template missing list item classes</li>
            <li><strong>fix</strong> dynamic load: doesn't take into account the feed</li>
            <li><strong>fix</strong> transfer: few problems with YASR plugin data transfer</li>
            <li><strong>fix</strong> transfer: many warnings happening during the transfer</li>
            <li><strong>fix</strong> transfer: missing item preparation for saving transferred data</li>
            <li><strong>fix</strong> translation missing for the word 'ago' for rating text</li>
            <li><strong>fix</strong> issues with scanning for theme override templates</li>
            <li><strong>fix</strong> rating query object: wrong sorting by rating</li>
        </ul>
    </div>
</div>

<div class="d4p-group d4p-group-changelog">
    <h3><?php _e( 'Version', 'gd-rating-system' ); ?> 1</h3>
    <div class="d4p-group-inner">
        <h4>Version: 1.4 - Themis / october 23 2016</h4>
        <ul>
            <li><strong>new</strong> addon: Shortcake UI Plugin Support</li>
            <li><strong>new</strong> administration: panel for managing rating entities and types</li>
            <li><strong>new</strong> rules panel: buttons for delete and activation of rules</li>
            <li><strong>new</strong> rules panel: color coding for list of available rules</li>
            <li><strong>new</strong> rules panel: confirmation dialog for deleting the rule</li>
            <li><strong>new</strong> votes log: filters and query expanding for the log</li>
            <li><strong>new</strong> stars rating: translation templates for rendering blocks</li>
            <li><strong>new</strong> database: new column for 'series' to the items table</li>
            <li><strong>new</strong> database: indexing more columns in the items table</li>
            <li><strong>new</strong> debug: embed SQL query for the rating lists</li>
            <li><strong>new</strong> protect entities and types array from tampering</li>
            <li><strong>new</strong> update plugin panel rechecks for broken settings</li>
            <li><strong>edit</strong> votes log: refactored SQL query to get log items</li>
            <li><strong>edit</strong> plugin now uses d4pLib settings core class</li>
            <li><strong>edit</strong> refactored access to entities array to use access functions</li>
            <li><strong>edit</strong> refactored main rendering JavaScript file</li>
            <li><strong>edit</strong> changes in the way JavaScript files are compressed</li>
            <li><strong>edit</strong> improvements to rating method core classes</li>
            <li><strong>edit</strong> improvements to generated inline CSS for font icons</li>
            <li><strong>edit</strong> improvements to rating method core classes</li>
            <li><strong>edit</strong> d4pLib 1.8.3</li>
            <li><strong>edit</strong> removed some outdated code from rating methods</li>
            <li><strong>fix</strong> anonymous verify option can cause broken SQL log queries</li>
            <li><strong>fix</strong> some votes log URL's were not working in every case</li>
            <li><strong>fix</strong> missing sanitation of the settings for some operation</li>
            <li><strong>fix</strong> few minor issues with the rendering objects</li>
        </ul>

        <h4>Version: 1.3.1 / september 29 2016</h4>
        <ul>
            <li><strong>edit</strong> d4pLib 1.8.2</li>
            <li><strong>fix</strong> removal of rating items not working in some cases</li>
        </ul>

        <h4>Version: 1.3 - Pallas / august 24 2016</h4>
        <ul>
            <li><strong>new</strong> addon: Feeds - for RSS, AMP, FIP, ANF integration support</li>
            <li><strong>new</strong> font icons: support for adding custom icon fonts</li>
            <li><strong>new</strong> font icons: 10 more icons in default icons font</li>
            <li><strong>new</strong> rewriten handling for the font icons</li>
            <li><strong>new</strong> allow or prevent authors to vote for own rating items</li>
            <li><strong>new</strong> improved sanitation of plugins settings on save</li>
            <li><strong>new</strong> transfer data from KK Star Ratings plugin</li>
            <li><strong>new</strong> actions run when voting items data is saved to the database</li>
            <li><strong>new</strong> filter to modify votes meta data added to the database</li>
            <li><strong>new</strong> ratings and votes grids allow for adding of new columns</li>
            <li><strong>new</strong> support for IP detection when behind CloudFlare</li>
            <li><strong>edit</strong> improved sanitation of plugins settings on save</li>
            <li><strong>edit</strong> improved buttons on all dialogs on the admin side</li>
            <li><strong>edit</strong> many improvements in handling shortcodes and widgets</li>
            <li><strong>edit</strong> ratings grid proper use of the rating item objects</li>
            <li><strong>edit</strong> many small improvements to the JavaScript code</li>
            <li><strong>edit</strong> d4pLib 1.7.8</li>
            <li><strong>fix</strong> few small issues when the user agent is not set</li>
            <li><strong>fix</strong> saving option to disbale custom settings rule not working</li>
            <li><strong>fix</strong> few minor styling issues related to rating lists</li>
            <li><strong>fix</strong> warnings generated by the missing style type and/or name</li>
            <li><strong>fix</strong> logs display warnings with post types are missing</li>
            <li><strong>fix</strong> small issue with type option in the shortcodes processing</li>
            <li><strong>fix</strong> duplicated classes added for star rating font icons styles</li>
            <li><strong>fix</strong> minor problems in applying default styles for widgets</li>
            <li><strong>fix</strong> few minor problems with the main JavaScript file</li>
            <li><strong>fix</strong> warnings related to query object SQL query in some cases</li>
            <li><strong>fix</strong> wrong attribute name for item ID for some shortcodes</li>
        </ul>

        <h4>Version: 1.2 - Helios / may 10 2016</h4>
        <ul>
            <li><strong>new</strong> posts addon: sort posts by rating</li>
            <li><strong>new</strong> posts addon: additional control filters</li>
            <li><strong>new</strong> comments addon: sort posts by rating</li>
            <li><strong>new</strong> comments addon: additional control filters</li>
            <li><strong>new</strong> query engine: posts filter by author, meta and terms</li>
            <li><strong>new</strong> query engine: comments filter by author and meta</li>
            <li><strong>new</strong> query engine: terms filter by meta</li>
            <li><strong>new</strong> query engine: users filter meta</li>
            <li><strong>new</strong> debug information added for shortcodes and widgets</li>
            <li><strong>new</strong> separate security and debug settings panels</li>
            <li><strong>new</strong> settings panel now uses dividers for settings groups</li>
            <li><strong>edit</strong> posts addon: do not embed if inside the rss feed</li>
            <li><strong>edit</strong> new settings and updates for rendering of rating blocks</li>
            <li><strong>edit</strong> protect expanded rendering functions</li>
            <li><strong>edit</strong> extra information for transfer data panels</li>
            <li><strong>edit</strong> check if method is active for transfer data panels</li>
            <li><strong>edit</strong> minor updates to some of the templates</li>
            <li><strong>edit</strong> some minor improvements on the admin side interface</li>
            <li><strong>edit</strong> d4pLib 1.6.9</li>
            <li><strong>fix</strong> minor issue with the GD Star Rating transfer process</li>
            <li><strong>fix</strong> comments addon: rating display when no comment is detected</li>
            <li><strong>fix</strong> posts addon: rating display when no comment is detected</li>
            <li><strong>fix</strong> small issue with the d4pLib shortcodes class</li>
        </ul>
        <h4>Version: 1.1.1 / january 23 2016</h4>
        <ul>
            <li><strong>new</strong> front page knowledge base and support links</li>
            <li><strong>edit</strong> check for rating method validity before render</li>
            <li><strong>edit</strong> few minor updates to the default styling</li>
            <li><strong>fix</strong> templates in theme subfolder 'gdrts' not loaded</li>
        </ul>
        <h4>Version: 1.1 / january 18 2016</h4>
        <ul>
            <li><strong>new</strong> stars rating: set custom colors for font icons based stars</li>
            <li><strong>new</strong> daily maintenance background job</li>
            <li><strong>new</strong> background job: calculate rating type based statistics</li>
            <li><strong>new</strong> background job: recalculate ratings on stars number change</li>
            <li><strong>edit</strong> rating query object allows filtering of query elements</li>
            <li><strong>edit</strong> main posts metabox improves default filters and actions</li>
            <li><strong>edit</strong> font icons: includes spinner icon and some extra classes</li>
            <li><strong>edit</strong> font icons: font files included with plugin version parameter</li>
            <li><strong>edit</strong> posts integration addon shows help for the addon</li>
            <li><strong>edit</strong> posts integration addon hides bbPress post types</li>
            <li><strong>edit</strong> d4pLib 1.5.8</li>
            <li><strong>fix</strong> comment rating type missing title when display in lists</li>
            <li><strong>fix</strong> using FontAwesome spinner icon for loading message</li>
            <li><strong>fix</strong> method and addon issues with missing custom rule values</li>
            <li><strong>fix</strong> several smaller issues with the admin interface</li>
            <li><strong>fix</strong> problems with rating lists ordering by votes</li>
        </ul>
        <h4>Version: 1.0.3 / january 4 2016</h4>
        <ul>
            <li><strong>edit</strong> some addons function moved into plugin core</li>
            <li><strong>edit</strong> improvements to some rendering functions</li>
            <li><strong>edit</strong> switched to new admin object base class from D4PLib</li>
            <li><strong>edit</strong> d4pLib 1.5.6</li>
            <li><strong>fix</strong> extensions panel allows for all methods to be disabled</li>
            <li><strong>fix</strong> rich snippet addon: broken if selected method is disabled</li>
            <li><strong>fix</strong> rating method dropdown lists show disabled methods</li>
        </ul>
        <h4>Version: 1.0.2.1 / december 29 2015</h4>
        <ul>
            <li><strong>fix</strong> abstract method class inheritance problem</li>
        </ul>
        <h4>Version: 1.0.2 / december 28 2015</h4>
        <ul>
            <li><strong>edit</strong> improvements to loading of the templates list</li>
            <li><strong>edit</strong> d4pLib 1.5.5</li>
            <li><strong>fix</strong> deleting custom rules not working</li>
            <li><strong>fix</strong> showing disabled methods and addons on rules panel</li>
            <li><strong>fix</strong> loading conflict with GD bbPress Toolbox Pro</li>
            <li><strong>fix</strong> minor metabox initialization issue</li>
        </ul>
        <h4>Version: 1.0.1 / december 27 2015</h4>
        <ul>
            <li><strong>new</strong> metabox for posts to override embed settings</li>
            <li><strong>edit</strong> plugin initialization priority changed</li>
        </ul>
        <h4>Version: 1.0 / december 23 2015</h4>
        <ul>
            <li><strong>new</strong> first official version</li>
        </ul>
    </div>
</div>
