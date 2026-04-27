<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_core_info {
	public $code = 'gd-rating-system';

	public $version = '3.7';
	public $build = 1000;
	public $edition = 'lite';
	public $status = 'stable';
	public $updated = '2026.04.27';
	public $url = 'https://plugins.dev4press.com/gd-rating-system/';
	public $author_name = 'Milan Petrovic';
	public $author_url = 'https://www.dev4press.com/';
	public $released = '2015.12.25';

	public $php = '7.4';
	public $mysql = '5.1';
	public $wordpress = '5.5';

	public $install = false;
	public $update = false;
	public $previous = 0;

	function __construct() {
	}

	public function to_array() {
		return (array) $this;
	}
}
