<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_addon_dynamic_load_init extends gdrts_extension_init {
	public $group = 'addons';
	public $prefix = 'dynamic-load';

	public function __construct() {
		parent::__construct();

		add_action( 'gdrts_load_addon_dynamic-load', array( $this, 'load' ), 2 );
		add_filter( 'gdrts_info_addon_dynamic-load', array( $this, 'info' ) );
	}

	public function register() {
		gdrts()->register_addon( 'dynamic-load', __( 'Dynamic Load', 'gd-rating-system' ), array(
			'autoload' => false,
			'free'     => true
		) );
	}

	public function settings() {
		$this->register_option( 'visitors', true );
		$this->register_option( 'users', true );
	}

	public function info( $info = array() ) {
		return array(
			'icon'        => 'spinner',
			'description' => __( 'Use AJAX to load active rating blocks.', 'gd-rating-system' )
		);
	}

	public function load() {
		require_once( GDRTS_PATH . 'addons/dynamic-load/load.php' );
	}
}

$__gdrts_addon_dynamic_load = new gdrts_addon_dynamic_load_init();
