<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_engine_single extends gdrts_base_engine {
	protected $_engine = 'single';

	private $_suppress_filters = false;
	private $_loop_save = false;

	private $_method_args;

	public function set_method_args( $args ) {
		$this->_method_args = $args;
	}

	public function do_suppress_filters( $suppress = true ) {
		$this->_suppress_filters = $suppress;
	}

	public function do_loop_save( $status = true ) {
		$this->_loop_save = $status;
	}

	public function is_suppress_filters() {
		return $this->_suppress_filters;
	}

	public function is_loop_save() {
		return $this->_loop_save;
	}

	public function user_init() {
		$this->_user = new gdrts_core_user();
	}

	public function set_arg( $arg, $value ) {
		$this->_args[ $arg ] = $value;
	}

	public function render( $args = array(), $method = array() ) {
		do_action( 'gdrts_single_render_pre_process', $args, $method );

		$this->loop( $args, $method );

		if ( $this->abort ) {
			return '';
		}

		$render = apply_filters( 'gdrts_engine_single_rendering_override', false, $this->_args, $this->_method_args );

		$_active_method = $this->_args['method'];

		if ( $render === false ) {
			$templates = array();

			if ( ! $this->is_suppress_filters() ) {
				$templates = apply_filters( 'gdrts_render_single_templates_pre', $templates, $this->item() );
			}

			if ( empty( $templates ) ) {
				switch ( $_active_method ) {
					case 'stars-rating':
						$templates = gdrtsm_stars_rating()->loop()->templates_single( $this->item() );
						break;
					case 'like-this':
						$templates = gdrtsm_like_this()->loop()->templates_single( $this->item() );
						break;
					default:
						$templates = apply_filters( 'gdrts_render_single_templates_' . $this->_args['method'], array(), $this->item() );
						break;
				}
			}

			if ( ! $this->is_suppress_filters() ) {
				$templates = apply_filters( 'gdrts_render_single_templates', $templates, $this->item() );
			}

			$render = gdrts()->render_template( $templates );
		}

		if ( $render !== false && ! empty( $render ) ) {
			do_action( 'gdrts_trigger_enqueue_' . $_active_method );
		}

		$this->do_loop_status( false );

		if ( $this->_args['echo'] ) {
			echo $render;
		}

		return $render;
	}

	public function loop( $args = array(), $method = array() ) {
		$defaults = apply_filters( 'gdrts_single_block_args_defaults', array(
			'echo'                 => false,
			'entity'               => null,
			'name'                 => null,
			'item_id'              => null,
			'id'                   => null,
			'method'               => 'stars-rating',
			'series'               => null,
			'disable_dynamic_load' => false
		) );

		if ( isset( $method['disable_rating'] ) && $method['disable_rating'] === true ) {
			$defaults['disable_dynamic_load'] = true;
		}

		$this->_args = apply_filters( 'gdrts_single_block_args_ready', wp_parse_args( $args, $defaults ) );

		$this->abort = false;

		if ( gdrts_is_method_loaded( $this->_args['method'] ) ) {
			$this->do_loop_status();

			$this->_item = gdrts_get_rating_item( $this->_args );

			if ( $this->_item === false ) {
				$this->abort = true;

				return;
			}

			if ( isset( $this->_args['title'] ) || isset( $this->_args['url'] ) ) {
				$_meta = array();

				if ( isset( $this->_args['title'] ) && ! empty( $this->_args['title'] ) ) {
					$_meta['title'] = $this->_args['title'];
				}

				if ( isset( $this->_args['url'] ) && ! empty( $this->_args['url'] ) ) {
					$_meta['url'] = $this->_args['url'];
				}

				if ( ! empty( $_meta ) ) {
					$this->_item->update_meta( $_meta );
				}
			}

			switch ( $this->_args['method'] ) {
				case 'stars-rating':
					gdrtsm_stars_rating()->prepare_loop_single( $method, $this->_args );
					break;
				case 'like-this':
					gdrtsm_like_this()->prepare_loop_single( $method, $this->_args );
					break;
				default:
					do_action( 'gdrts_loop_single_method_' . $this->_args['method'] . '_prepare', $method, $this->_args );
					break;
			}
		} else {
			$this->abort = true;
		}
	}

	public function json() {
		$data = apply_filters( 'gdrts_loop_single_json_data', array(
			'item'   => $this->_item->item_data(),
			'render' => array(
				'args'   => $this->_args,
				'method' => array()
			)
		), $this->_args['method'] );

		echo '<script class="gdrts-rating-data" type="application/json">';
		echo wp_json_encode( $data );
		echo '</script>';
	}
}

global $_gdrts_engine_single;
$_gdrts_engine_single = new gdrts_engine_single();

function gdrts_single() {
	global $_gdrts_engine_single;

	return $_gdrts_engine_single;
}
