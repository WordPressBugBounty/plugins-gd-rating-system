<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

abstract class gdrts_font {
	public $map = array(
		'stars-rating' => 'stars',
		'like-this'    => 'likes'
	);

	public $status = 'hold';
	public $char_format = '';

	public $version = '';
	public $name = '';
	public $label = '';

	public $icons = array();
	public $likes = array();

	public $active = array(
		'stars-rating',
		'like-this'
	);

	public function __construct() {
		add_action( 'gdrts_load_settings', array( $this, 'load_settings' ), 20 );
	}

	protected function option_name( $prefix = '' ) {
		return $prefix . 'style_' . $this->name . '_name';
	}

	protected function hook_name( $name ) {
		return 'gdrts_' . $name . '_' . $this->name;
	}

	public function load_settings() {
		$this->map    = apply_filters( $this->hook_name( 'method_map' ), $this->map, $this->name );
		$this->active = apply_filters( $this->hook_name( 'method_active' ), $this->active, $this->name );

		foreach ( $this->active as $method ) {
			$glyph = $this->map[ $method ];

			switch ( $glyph ) {
				case 'stars':
					gdrts_settings()->register( 'methods', $this->option_name( $method . '_' ), $this->default_star() );
					break;
				case 'likes':
					gdrts_settings()->register( 'methods', $this->option_name( $method . '_' ), $this->default_likes() );
					break;
			}
		}
	}

	public function actions() {
		$this->status = 'active';

		add_action( 'gdrts_register_enqueue_files', array( $this, 'register_enqueue_files' ), 10, 4 );
		add_action( 'gdrts_enqueue_core_files', array( $this, 'enqueue_core_files' ) );

		add_filter( 'gdrts_list_stars_style_types', array( $this, 'list_stars_style_types' ) );
		add_filter( 'gdrts_list_likes_style_types', array( $this, 'list_likes_style_types' ) );

		add_filter( 'gdrts_embed_function_defaults_method', array( $this, 'embed_defaults_method' ) );

		add_filter( 'gdrts_widget_settings_defaults', array( $this, 'widget_settings' ), 10, 3 );
		add_filter( 'gdrts_widget_settings_save', array( $this, 'widget_save' ), 10, 4 );
		add_action( 'gdrts_widget_display_types', array( $this, 'widget_display' ), 10, 3 );
		add_action( 'gdrts_widget_default_keys', array( $this, 'widget_default_keys' ), 10, 3 );

		add_filter( 'gdrts_shortcode_attributes', array( $this, 'shortcode_attributes' ), 10, 2 );

		if ( in_array( 'stars-rating', $this->active ) ) {
			add_filter( 'gdrts_shared_settings_stars-rating', array( $this, 'shared_settings_stars_rating' ), 10, 5 );

			add_filter( 'gdrts_shortcode_attrs_stars_rating', array( $this, 'shortcode_stars_rating' ) );
			add_filter( 'gdrts_shortcode_attrs_stars_rating_auto', array( $this, 'shortcode_stars_rating' ) );
			add_filter( 'gdrts_shortcode_attrs_stars_rating_list', array( $this, 'shortcode_stars_rating' ) );
		}

		if ( in_array( 'like-this', $this->active ) ) {
			add_filter( 'gdrts_shared_settings_like-this', array( $this, 'shared_settings_like_this' ), 10, 5 );

			add_filter( 'gdrts_shortcode_attrs_like_this', array( $this, 'shortcode_like_this' ) );
			add_filter( 'gdrts_shortcode_attrs_like_this_auto', array( $this, 'shortcode_like_this' ) );
			add_filter( 'gdrts_shortcode_attrs_like_this_list', array( $this, 'shortcode_like_this' ) );
		}

		do_action( $this->hook_name( 'actions' ), $this );
	}

	public function is_active( $method ) {
		return in_array( $method, $this->active );
	}

	public function default_star() {
		$icons = array_keys( $this->icons );

		return reset( $icons );
	}

	public function default_likes() {
		$icons = array_keys( $this->likes );

		return reset( $icons );
	}

	public function get_stars_list() {
		return apply_filters( $this->hook_name( 'list_stars_styles_icons' ), wp_list_pluck( $this->icons, 'label' ) );
	}

	public function get_likes_list() {
		return apply_filters( $this->hook_name( 'list_likes_styles_icons' ), wp_list_pluck( $this->likes, 'label' ) );
	}

	protected function formatted_char( $char ) {
		switch ( $this->char_format ) {
			default:
				return $char;
			case 'css-hex':
				return '&#' . hexdec( substr( $char, 1 ) ) . ';';
		}
	}

	public function get_star_char( $name ) {
		if ( ! isset( $this->icons[ $name ] ) || empty( $name ) ) {
			$name = $this->default_star();
		}

		return $this->formatted_char( $this->icons[ $name ]['char'] );
	}

	public function get_like_chars( $name ) {
		if ( ! isset( $this->likes[ $name ] ) || empty( $name ) ) {
			$name = $this->default_likes();
		}

		$likes = $this->likes[ $name ];
		unset( $likes['label'] );

		foreach ( $likes as $key => &$char ) {
			$char = $this->formatted_char( $char );
		}

		return $likes;
	}

	public function register_enqueue_files( $js_full, $css_full, $js_dep, $css_dep ) {
	}

	public function enqueue_core_files() {
	}

	public function list_stars_style_types( $list ) {
		$list[ $this->name ] = $this->label;

		return $list;
	}

	public function list_likes_style_types( $list ) {
		if ( in_array( 'like-this', $this->active ) ) {
			$list[ $this->name ] = $this->label;
		}

		return $list;
	}

	public function shortcode_attributes( $settings, $shortcode ) {
		$settings[ $this->option_name() ] = '';

		return $settings;
	}

	public function embed_defaults_method( $settings ) {
		$settings[ $this->option_name() ] = '';

		return $settings;
	}

	public function widget_settings( $settings, $widget, $method ) {
		if ( $this->is_active( $method ) ) {
			$settings[ $this->option_name() ] = '';
		}

		return $settings;
	}

	public function widget_save( $instance, $new_instance, $widget, $method ) {
		if ( $this->is_active( $method ) && isset( $new_instance[ $this->option_name() ] ) ) {
			$instance[ $this->option_name() ] = d4p_sanitize_basic( $new_instance[ $this->option_name() ] );
		}

		return $instance;
	}

	public function widget_display( $widget, $instance, $method = 'stars-rating' ) {
		if ( $this->is_active( $method ) ) {
			$_name = $this->option_name();
			$_list = array();

			$glyph = $this->map[ $method ];

			switch ( $glyph ) {
				case 'stars':
					$_list = $this->get_stars_list();
					break;
				case 'likes':
					$_list = $this->get_likes_list();
					break;
			}

			echo '<label for="' . $widget->get_field_id( $_name ) . '">' . $this->label . ':</label>';
			d4p_render_select( $_list, array(
				'id'       => $widget->get_field_id( $_name ),
				'class'    => 'widefat',
				'name'     => $widget->get_field_name( $_name ),
				'selected' => $instance[ $_name ]
			) );
		}
	}

	public function widget_default_keys( $keys, $widget, $method ) {
		if ( $this->is_active( $method ) ) {
			$keys[] = $this->option_name();
		}

		return $keys;
	}

	public function shortcode_stars_rating( $attrs ) {
		$item = array(
			'label'   => $this->label,
			'attr'    => $this->option_name(),
			'type'    => 'select',
			'options' => $this->get_stars_list(),
			'value'   => '',
			'rule'    => array(
				'style_type' => $this->name
			)
		);

		return gdrts_insert_at_attr( $attrs, $item );
	}

	public function shortcode_like_this( $attrs ) {
		$item = array(
			'label'   => $this->label,
			'attr'    => $this->option_name(),
			'type'    => 'select',
			'options' => $this->get_likes_list(),
			'value'   => '',
			'rule'    => array(
				'style_type' => $this->name
			)
		);

		return gdrts_insert_at_attr( $attrs, $item );
	}

	public function shared_settings_stars_rating( $settings, $type, $real_prefix, $prefix, $prekey ) {
		$_name = $this->option_name();

		array_splice( $settings['msr_style']['settings'], 3, 0,
			array( new d4pSettingElement( $real_prefix, gdrtsa_admin_stars_rating()->key( $_name, $prekey ), $this->label, '', d4pSettingType::SELECT, gdrtsa_admin_stars_rating()->get( $_name ), 'array', $this->get_stars_list(), array( 'wrapper_class' => 'gdrts-select-type gdrts-sel-type-' . $this->name . ' ' . ( $type == $this->name ? 'gdrts-select-type-show' : '' ) ) ) )
		);

		return $settings;
	}

	public function shared_settings_like_this( $settings, $type, $real_prefix, $prefix, $prekey ) {
		$_name = $this->option_name();

		array_splice( $settings['mlt_style']['settings'], 3, 0,
			array( new d4pSettingElement( $real_prefix, gdrtsa_admin_like_this()->key( $_name, $prekey ), $this->label, '', d4pSettingType::SELECT, gdrtsa_admin_like_this()->get( $_name ), 'array', $this->get_likes_list(), array( 'wrapper_class' => 'gdrts-select-type gdrts-sel-type-' . $this->name . ' ' . ( $type == $this->name ? 'gdrts-select-type-show' : '' ) ) ) )
		);

		return $settings;
	}
}
