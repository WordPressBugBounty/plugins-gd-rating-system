<?php
/**
 * Plugin Name:       GD Rating System
 * Plugin URI:        https://plugins.dev4press.com/gd-rating-system/
 * Description:       Powerful, highly customizable and versatile ratings plugin to allow your users to vote for anything you want. Includes different rating methods and add-ons.
 * Author:            Milan Petrovic
 * Author URI:        https://www.dev4press.com/
 * Text Domain:       gd-rating-system
 * Version:           3.6.2
 * Requires at least: 5.5
 * Tested up to:      6.7
 * Requires PHP:      7.4
 * License:           GPLv3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 *
 * == Copyright ==
 * Copyright 2008 - 2024 Milan Petrovic (email: support@dev4press.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$gdrts_dirname_basic = dirname( __FILE__ ) . '/';
$gdrts_urlname_basic = plugins_url( '/gd-rating-system/' );

if ( ! defined( 'GDRTS_PREVENT_WP_UPDATE_CHECK' ) ) {
	define( 'GDRTS_PREVENT_WP_UPDATE_CHECK', true );
}

define( 'GDRTS_PATH', $gdrts_dirname_basic );
define( 'GDRTS_URL', $gdrts_urlname_basic );
define( 'GDRTS_D4PLIB', $gdrts_dirname_basic . 'd4plib/' );

if ( ! defined( 'D4PLIB_PATH' ) ) {
	define( 'D4PLIB_PATH', GDRTS_PATH . 'd4plib/' );
}

if ( ! defined( 'D4PLIB_URL' ) ) {
	define( 'D4PLIB_URL', GDRTS_URL . 'd4plib/' );
}

require_once( GDRTS_D4PLIB . 'd4p.core.php' );

d4p_prepare_object_cache( GDRTS_D4PLIB );

d4p_includes( array(
	array( 'name' => 'ip', 'directory' => 'classes' ),
	array( 'name' => 'base', 'directory' => 'classes' ),
	array( 'name' => 'wpdb', 'directory' => 'core' ),
	array( 'name' => 'settings', 'directory' => 'plugin' ),
	array( 'name' => 'shortcodes', 'directory' => 'plugin' ),
	array( 'name' => 'cache-wordpress', 'directory' => 'functions' ),
	array( 'name' => 'sort', 'directory' => 'classes' ),
	array( 'name' => 'functions', 'directory' => 'admin' ),
	'functions',
	'sanitize',
	'access',
	'wp',
), GDRTS_D4PLIB );

global $_gdrts_db, $_gdrts_loop, $_gdrts_core, $_gdrts_plugin, $_gdrts_settings;

require_once( GDRTS_PATH . 'core/version.php' );
require_once( GDRTS_PATH . 'core/settings.php' );
require_once( GDRTS_PATH . 'core/functions.php' );
require_once( GDRTS_PATH . 'core/plugin.php' );

require_once( GDRTS_PATH . 'core/admin/shared.php' );
require_once( GDRTS_PATH . 'core/admin/functions.php' );

require_once( GDRTS_PATH . 'rating/core.db.php' );
require_once( GDRTS_PATH . 'rating/core.loop.php' );
require_once( GDRTS_PATH . 'rating/core.shortcodes.php' );
require_once( GDRTS_PATH . 'rating/core.query.php' );
require_once( GDRTS_PATH . 'rating/core.render.php' );
require_once( GDRTS_PATH . 'rating/core.preload.php' );

require_once( GDRTS_PATH . 'rating/base.classes.php' );
require_once( GDRTS_PATH . 'rating/base.elements.php' );
require_once( GDRTS_PATH . 'rating/base.rules.php' );
require_once( GDRTS_PATH . 'rating/base.font.php' );
require_once( GDRTS_PATH . 'rating/base.init.php' );
require_once( GDRTS_PATH . 'rating/base.engine.php' );
require_once( GDRTS_PATH . 'rating/base.widget.php' );

require_once( GDRTS_PATH . 'rating/engine.single.php' );
require_once( GDRTS_PATH . 'rating/engine.list.php' );

require_once( GDRTS_PATH . 'methods/stars-rating/init.php' );
require_once( GDRTS_PATH . 'methods/like-this/init.php' );

require_once( GDRTS_PATH . 'addons/dynamic-load/init.php' );
require_once( GDRTS_PATH . 'addons/posts/init.php' );
require_once( GDRTS_PATH . 'addons/comments/init.php' );
require_once( GDRTS_PATH . 'addons/rich-snippets/init.php' );
require_once( GDRTS_PATH . 'addons/feeds/init.php' );
require_once( GDRTS_PATH . 'addons/shortcode-builder/init.php' );

$_gdrts_db       = new gdrts_core_db();
$_gdrts_core     = new gdrts_core();
$_gdrts_plugin   = new gdrts_core_plugin();
$_gdrts_settings = new gdrts_core_settings();
$_gdrts_loop     = new gdrts_core_loop();

/** return gdrts_core */
function gdrts() {
	global $_gdrts_core;

	return $_gdrts_core;
}

/** return gdrts_core_db */
function gdrts_db() {
	global $_gdrts_db;

	return $_gdrts_db;
}

/** return gdrts_core_loop */
function gdrts_loop() {
	global $_gdrts_loop;

	return $_gdrts_loop;
}

/** return gdrts_core_plugin */
function gdrts_plugin() {
	global $_gdrts_plugin;

	return $_gdrts_plugin;
}

/** return gdrts_core_settings */
function gdrts_settings() {
	global $_gdrts_settings;

	return $_gdrts_settings;
}

if ( D4P_ADMIN ) {
	d4p_includes( array(
		array( 'name' => 'admin', 'directory' => 'plugin' ),
	), GDRTS_D4PLIB );

	require_once( GDRTS_PATH . 'core/admin/help.php' );
	require_once( GDRTS_PATH . 'core/admin/privacy.php' );
	require_once( GDRTS_PATH . 'core/admin/grids.php' );
	require_once( GDRTS_PATH . 'core/admin/plugin.php' );
}

if ( D4P_AJAX ) {
	require_once( GDRTS_PATH . 'core/admin/ajax.php' );
	require_once( GDRTS_PATH . 'rating/core.ajax.php' );
}
