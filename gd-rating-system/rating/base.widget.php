<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_widget_core extends WP_Widget {
	public $rating_method = '';
	public $widget_code = '';

	public $widget_domain = 'd4prts_widgets';

	public $selective_refresh = true;
	public $cache_key = '';
	public $cache_prefix = 'd4prts';
	public $cache_method = 'disabled'; // full, results
	public $cache_active = false;
	public $cache_time = 0;

	public $widget_name = 'GDRTS';
	public $widget_description = 'GD Rating System';
	public $widget_base = 'gdrts_widget';
	public $widget_id;

	public $defaults = array(
		'title' => 'Base Widget Class'
	);

	public $shared_defaults = array(
		'_display' => 'all',
		'_hook'    => '',
		'_tab'     => 'global',
		'_class'   => '',
		'_cached'  => 0,
		'_devid'   => '',
		'before'   => '',
		'after'    => ''
	);

	public function __construct( $id_base = false, $name = '', $widget_options = array(), $control_options = array() ) {
		$widget_options  = empty( $widget_options ) ? array(
			'customize_selective_refresh' => $this->selective_refresh,
			'classname'                   => 'cls_' . $this->widget_base,
			'description'                 => $this->widget_description
		) : $widget_options;
		$control_options = empty( $control_options ) ? array() : $control_options;

		parent::__construct( $this->widget_base, $this->widget_name, $widget_options, $control_options );
	}

	private function _visible( $instance ) {
		$visible = $this->is_visible( $instance );

		if ( $visible && isset( $instance['_display'] ) ) {
			$logged = is_user_logged_in();

			$role = substr( $instance['_display'], 0, 5 ) == 'role:' ? substr( $instance['_display'], 5 ) : false;
			$cap  = substr( $instance['_display'], 0, 4 ) == 'cap:' ? substr( $instance['_display'], 4 ) : false;

			if ( $role === false && $cap === false ) {
				if ( $instance['_display'] == 'all' || ( $instance['_display'] == 'user' && $logged ) || ( $instance['_display'] == 'visitor' && ! $logged ) ) {
					$visible = true;
				} else {
					$visible = false;
				}
			} else if ( $role === false ) {
				$visible = current_user_can( $cap );
			} else {
				$visible = d4p_is_current_user_roles( $role );
			}
		}

		if ( isset( $instance['_hook'] ) && $instance['_hook'] != '' ) {
			$visible = apply_filters( $this->widget_base . '_visible_' . $instance['_hook'], $visible, $this );
		}

		return $visible;
	}

	private function _widget_id( $args ) {
		$this->widget_id = str_replace( array( '-', '_' ), array( '', '' ), $args['widget_id'] );
	}

	private function _cache_key( $instance ) {
		$this->cache_active = $this->_cache_active( $instance );

		if ( $this->cache_active ) {
			$copy = $instance;
			unset( $copy['_cached'] );

			$this->cache_key = $this->cache_prefix . '_' . md5( $this->widget_base . '_' . serialize( $copy ) );
		}
	}

	private function _cache_active( $instance ) {
		$this->cache_time = isset( $instance['_cached'] ) ? intval( $instance['_cached'] ) : 0;

		return $this->cache_time > 0;
	}

	private function _cached_data( $instance ) {
		if ( $this->cache_method == 'data' && $this->cache_active && $this->cache_key !== '' ) {
			$results = get_transient( $this->cache_key );

			if ( $results === false ) {
				$results = $this->results( $instance );
				set_transient( $this->cache_key, $results, $this->cache_time * 3600 );
			}

			return $results;
		} else {
			return $this->results( $instance );
		}
	}

	protected function _method_available() {
		return gdrts_is_method_loaded( $this->rating_method );
	}

	protected function _form_available() {
		if ( ! $this->_method_available() ) {
			include( GDRTS_PATH . 'forms/widgets/method-missing.php' );

			return false;
		}

		return true;
	}

	protected function _shared_update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title'] = d4p_sanitize_basic( $new_instance['title'] );

		$instance['_display'] = d4p_sanitize_basic( $new_instance['_display'] );
		$instance['_class']   = d4p_sanitize_basic( $new_instance['_class'] );
		$instance['_tab']     = d4p_sanitize_basic( $new_instance['_tab'] );
		$instance['_hook']    = d4p_sanitize_key_expanded( $new_instance['_hook'] );
		$instance['_devid']   = d4p_sanitize_key_expanded( $new_instance['_devid'] );

		if ( isset( $new_instance['_cached'] ) ) {
			$instance['_cached'] = intval( $new_instance['_cached'] );
		}

		if ( current_user_can( 'unfiltered_html' ) ) {
			$instance['before'] = $new_instance['before'];
			$instance['after']  = $new_instance['after'];
		} else {
			$instance['before'] = d4p_sanitize_html( $new_instance['before'] );
			$instance['after']  = d4p_sanitize_html( $new_instance['after'] );
		}

		return $instance;
	}

	public function get_tabkey( $tab ) {
		$key = $this->get_field_id( 'tab-' . $tab );

		return str_replace( array( '_', ' ' ), array( '-', '-' ), $key );
	}

	public function get_defaults() {
		$_defaults = array_merge( $this->shared_defaults, $this->defaults );

		return apply_filters( 'gdrts_widget_settings_defaults', $_defaults, $this->widget_code, $this->rating_method );
	}

	public function widget( $args, $instance ) {
		if ( ! $this->_method_available() ) {
			return;
		}

		$this->_widget_id( $args );
		$this->_cache_key( $instance );

		$this->init();

		if ( $this->_visible( $instance ) ) {
			if ( $this->cache_method == 'full' && $this->cache_active && $this->cache_key !== '' ) {
				$render = get_transient( $this->cache_key );

				if ( $render === false ) {
					$render = $this->widget_output( $args, $instance );
					set_transient( $this->cache_key, $render, $this->cache_time * 3600 );
				} else {
					if ( D4P_DEBUG ) {
						$render .= '<!-- from cache -->';
					}
				}
			} else {
				$render = $this->widget_output( $args, $instance );
			}

			echo $render;
		}
	}

	public function widget_output( $args, $instance ) {
		/**
		 * @var string $before_widget;
		 * @var string $before_title;
		 * @var string $after_title;
		 * @var string $after_widget;
		 */
		extract( $args, EXTR_SKIP );

		gdrts()->load_widget( $this->widget_code, $args, $instance );

		ob_start();

		$results = $this->_cached_data( $instance );
		echo $before_widget;

		if ( isset( $instance['title'] ) && $instance['title'] != '' ) {
			echo $before_title;
			echo $this->title( $instance );
			echo $after_title;
		}

		echo $this->render( $results, $instance );
		echo $after_widget;

		$render = ob_get_contents();
		ob_end_clean();

		gdrts()->unload_widget();

		return $render;
	}

	public function title( $instance ) {
		return $instance['title'];
	}

	public function is_visible( $instance ) {
		return true;
	}

	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, $this->defaults );
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title'] = d4p_sanitize_basic( $new_instance['title'] );

		return $instance;
	}

	public function simple_render( $instance = array() ) {
		$instance = shortcode_atts( $this->defaults, $instance );

		$results = $this->results( $instance );

		return $this->render( $results, $instance );
	}

	public function init() {
	}

	public function prepare( $instance, $results ) {
		return $results;
	}

	public function results( $instance ) {
		return null;
	}

	public function render( $results, $instance ) {
		return $results;
	}
}

class gdrts_widget_single_core extends gdrts_widget_core {
	public $shared_defaults = array(
		'_display'    => 'all',
		'_hook'       => '',
		'_tab'        => 'global',
		'_class'      => '',
		'_cached'     => 0,
		'_devid'      => '',
		'title'       => '',
		'content'     => 'post',
		'styling'     => 'default',
		'type'        => '',
		'id'          => 0,
		'item_id'     => 0,
		'rating'      => 'average',
		'template'    => 'default',
		'alignment'   => '',
		'style_class' => '',
		'before'      => '',
		'after'       => ''
	);

	public function widget( $args, $instance ) {
		if ( ! $this->_method_available() ) {
			return;
		}

		$instance = wp_parse_args( (array) $instance, $this->get_defaults() );

		$show = $instance['content'] == 'custom';

		if ( ! $show ) {
			$show = $instance['content'] == 'post' && is_singular();
		}

		if ( $show ) {
			parent::widget( $args, $instance );
		}
	}

	protected function _shared_update( $new_instance, $old_instance ) {
		$instance = parent::_shared_update( $new_instance, $old_instance );

		$instance['content'] = d4p_sanitize_basic( $new_instance['content'] );
		$instance['styling'] = d4p_sanitize_basic( $new_instance['styling'] );

		$instance['rating']  = d4p_sanitize_basic( $new_instance['rating'] );
		$instance['type']    = d4p_sanitize_basic( $new_instance['type'] );
		$instance['id']      = intval( $new_instance['id'] );
		$instance['item_id'] = intval( $new_instance['item_id'] );

		$instance['template']    = d4p_sanitize_basic( $new_instance['template'] );
		$instance['alignment']   = d4p_sanitize_basic( $new_instance['alignment'] );
		$instance['style_class'] = d4p_sanitize_basic( $new_instance['style_class'] );

		return $instance;
	}
}

class gdrts_widget_list_core extends gdrts_widget_core {
	public $shared_defaults = array(
		'_display'    => 'all',
		'_hook'       => '',
		'_tab'        => 'global',
		'_class'      => '',
		'_cached'     => 0,
		'_devid'      => '',
		'variant'     => array(),
		'title'       => 'Top Ratings',
		'type'        => 'posts.post',
		'orderby'     => 'rating',
		'order'       => 'DESC',
		'limit'       => 5,
		'rating_min'  => 0,
		'votes_min'   => 0,
		'rating'      => 'average',
		'template'    => 'widget',
		'terms'       => '',
		'author'      => '',
		'style_class' => '',
		'before'      => '',
		'after'       => ''
	);

	protected function _shared_update( $new_instance, $old_instance ) {
		$instance = parent::_shared_update( $new_instance, $old_instance );

		$instance['variant'] = array();

		foreach ( array( 'type', 'term', 'hide', 'rule' ) as $variant ) {
			if ( isset( $new_instance[ 'variant_' . $variant ] ) && $new_instance[ 'variant_' . $variant ] == 'on' ) {
				$instance['variant'][] = $variant;
			}
		}

		$instance['type']    = d4p_sanitize_basic( $new_instance['type'] );
		$instance['orderby'] = d4p_sanitize_basic( $new_instance['orderby'] );
		$instance['order']   = d4p_sanitize_basic( $new_instance['order'] );

		$instance['limit']      = intval( $new_instance['limit'] );
		$instance['rating_min'] = intval( $new_instance['rating_min'] );
		$instance['votes_min']  = intval( $new_instance['votes_min'] );

		$instance['rating']  = d4p_sanitize_basic( $new_instance['rating'] );
		$instance['template'] = d4p_sanitize_basic( $new_instance['template'] );

		$instance['terms']  = d4p_sanitize_basic( $new_instance['terms'] );
		$instance['author'] = d4p_sanitize_basic( $new_instance['author'] );

		$instance['style_class'] = d4p_sanitize_basic( $new_instance['style_class'] );

		return $instance;
	}

	public function get_orderby_list() {
		return gdrts_admin_shared::data_list_orderby( $this->rating_method );
	}
}
