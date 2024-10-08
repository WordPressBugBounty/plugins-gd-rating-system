<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_addon_admin_dynamic_load extends gdrts_addon_admin {
	public $prefix = 'dynamic-load';

	public function panels( $panels ) {
		$panels['addon_dynamic'] = array(
			'title' => __( 'Dynamic Load', 'gd-rating-system' ),
			'icon'  => 'spinner',
			'type'  => 'addon',
			'info'  => __( 'Settings on this panel are for control over Dynamic Load addon.', 'gd-rating-system' )
		);

		return $panels;
	}

	public function settings( $settings, $method = '' ) {
		$settings['addon_dynamic'] = array(
			'add_conditions' => array(
				'name'     => __( 'Loading Conditions', 'gd-rating-system' ),
				'settings' => array(
					new d4pSettingElement( 'addons', $this->key( 'visitors' ), __( 'For anonymous visitors', 'gd-rating-system' ), '', d4pSettingType::BOOLEAN, $this->get( 'visitors' ) ),
					new d4pSettingElement( 'addons', $this->key( 'users' ), __( 'For logged in users', 'gd-rating-system' ), '', d4pSettingType::BOOLEAN, $this->get( 'users' ) )
				)
			)
		);

		return $settings;
	}
}

global $_gdrts_addon_admin_dynamic_load;
$_gdrts_addon_admin_dynamic_load = new gdrts_addon_admin_dynamic_load();

function gdrtsa_admin_dynamic_load() {
	global $_gdrts_addon_admin_dynamic_load;

	return $_gdrts_addon_admin_dynamic_load;
}
