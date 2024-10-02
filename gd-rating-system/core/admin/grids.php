<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_admin_grids {
	public $options = array(
		'gdrts_rows_ratings_per_page',
		'gdrts_rows_votes_per_page'
	);

	public function __construct() {
		add_filter( 'set-screen-option', array( $this, 'screen_options_grid_rows_save' ), 10, 3 );
		add_filter( 'gdrts_admin_grid_votes_columns', array( $this, 'admin_grid_votes_columns' ) );
		add_action( 'gdrts_admin_load_hooks', array( $this, 'load_hooks' ) );
	}

	public function admin_grid_votes_columns( $columns ) {
		if ( gdrts_using_hashed_ip() && isset( $columns['ip'] ) ) {
			unset( $columns['ip'] );
		}

		return $columns;
	}

	public function screen_options_grid_rows_save( $status, $option, $value ) {
		if ( in_array( $option, $this->options ) ) {
			return $value;
		}

		return $status;
	}

	public function load_hooks() {
		if ( isset( $_GET['page'] ) ) {
			if ( $_GET['page'] === 'gd-rating-system-ratings' ) {
				add_action( 'load-rating-system_page_gd-rating-system-ratings', array(
					$this,
					'screen_options_grid_rows_ratings'
				) );
			}

			if ( $_GET['page'] === 'gd-rating-system-log' ) {
				add_action( 'load-rating-system_page_gd-rating-system-log', array(
					$this,
					'screen_options_grid_rows_votes'
				) );
			}
		}
	}

	public function screen_options_grid_rows_ratings() {
		$args = array(
			'label'   => __( 'Rows', 'gd-rating-system' ),
			'default' => 25,
			'option'  => 'gdrts_rows_ratings_per_page'
		);

		add_screen_option( 'per_page', $args );

		require_once( GDRTS_PATH . 'core/grids/ratings.php' );

		new gdrts_grid_ratings();
	}

	public function screen_options_grid_rows_votes() {
		$args = array(
			'label'   => __( 'Rows', 'gd-rating-system' ),
			'default' => 25,
			'option'  => 'gdrts_rows_votes_per_page'
		);

		add_screen_option( 'per_page', $args );

		require_once( GDRTS_PATH . 'core/grids/votes.php' );

		new gdrts_grid_votes();
	}
}
