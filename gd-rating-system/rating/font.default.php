<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_font_default extends gdrts_font {
	public $version = '3.3.1';
	public $name = 'font';

	public $char_format = 'css-hex';

	public function __construct() {
		parent::__construct();

		$this->label = __( 'Default Font Icon', 'gd-rating-system' );

		$this->icons = array(
			'star'      => array( 'char' => '\f113', 'label' => __( 'Star', 'gd-rating-system' ) ),
			'asterisk'  => array( 'char' => '\f101', 'label' => __( 'Asterisk', 'gd-rating-system' ) ),
			'heart'     => array( 'char' => '\f10a', 'label' => __( 'Heart', 'gd-rating-system' ) ),
			'bell'      => array( 'char' => '\f102', 'label' => __( 'Bell', 'gd-rating-system' ) ),
			'square'    => array( 'char' => '\f112', 'label' => __( 'Square', 'gd-rating-system' ) ),
			'circle'    => array( 'char' => '\f104', 'label' => __( 'Circle', 'gd-rating-system' ) ),
			'gear'      => array( 'char' => '\f109', 'label' => __( 'Gear', 'gd-rating-system' ) ),
			'trophy'    => array( 'char' => '\f114', 'label' => __( 'Trophy', 'gd-rating-system' ) ),
			'snowflake' => array( 'char' => '\f110', 'label' => __( 'Snowflake', 'gd-rating-system' ) ),
			'like'      => array( 'char' => '\f10b', 'label' => __( 'Thumb', 'gd-rating-system' ) ),
			'like2'     => array( 'char' => '\f10c', 'label' => __( 'Thumb Alt', 'gd-rating-system' ) ),
			'dislike'   => array( 'char' => '\f106', 'label' => __( 'Thumb Down', 'gd-rating-system' ) ),
			'dislike2'  => array( 'char' => '\f107', 'label' => __( 'Thumb Down Alt', 'gd-rating-system' ) ),
			'smile'     => array( 'char' => '\f10f', 'label' => __( 'Smile', 'gd-rating-system' ) ),
			'frown'     => array( 'char' => '\f108', 'label' => __( 'Frown', 'gd-rating-system' ) ),
			'plus'      => array( 'char' => '\f10e', 'label' => __( 'Plus', 'gd-rating-system' ) ),
			'minus'     => array( 'char' => '\f10d', 'label' => __( 'Minus', 'gd-rating-system' ) ),
			'spinner'   => array( 'char' => '\f111', 'label' => __( 'Spinner', 'gd-rating-system' ) ),
			'clear'     => array( 'char' => '\f105', 'label' => __( 'Clear', 'gd-rating-system' ) ),
			'check'     => array( 'char' => '\f103', 'label' => __( 'Check', 'gd-rating-system' ) )
		);

		$this->likes = array(
			'hands-fill'  => array(
				'like'  => '\f10b',
				'liked' => '\f103',
				'clear' => '\f105',
				'label' => __( 'Hands Filled', 'gd-rating-system' )
			),
			'hands-empty' => array(
				'like'  => '\f10c',
				'liked' => '\f103',
				'clear' => '\f105',
				'label' => __( 'Hands Empty', 'gd-rating-system' )
			)
		);
	}

	public function register_enqueue_files( $js_full, $css_full, $js_dep, $css_dep ) {
		$font = gdrts_settings()->get( 'load_font_embed' ) ? 'fonts/default-embed' : 'fonts/default';

		wp_register_style( 'gdrts-font-default', gdrts_plugin()->file( 'css', $font ), $css_dep, gdrts_settings()->file_version() );
	}

	public function enqueue_core_files() {
		wp_enqueue_style( 'gdrts-font-default' );
	}
}
