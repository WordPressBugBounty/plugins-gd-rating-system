<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_addon_comments extends gdrts_addon {
	public $prefix = 'comments';

	public function __construct() {
		parent::__construct();

		add_action( 'gdrts_populate_settings', array( $this, 'prepare_comments' ), 20 );
	}

	public function prepare_comments() {
		if ( $this->get( 'comments_preload_ratings' ) ) {
			add_filter( 'gdrts_preload_the_comments', '__return_true' );
		}
	}

	public function load_admin() {
		require_once( GDRTS_PATH . 'addons/comments/admin.php' );
	}

	public function core() {
		if ( is_admin() ) {
			return;
		}

		$priority = $this->get( 'comments_auto_embed_priority' );

		add_filter( 'comment_text', array( $this, 'content' ), $priority );
	}

	public function content( $content ) {
		if ( is_main_query() && is_singular() ) {
			$location = apply_filters( 'gdrts_comments_auto_embed_location', $this->get( 'comments_auto_embed_location' ) );

			$_method = apply_filters( 'gdrts_comments_auto_embed_method', $this->get( 'comments_auto_embed_method' ) );
			$_parts  = explode( '::', $_method, 2 );
			$method  = $_parts[0];
			$series  = null;

			if ( isset( $_parts[1] ) ) {
				$series = $_parts[1];
			}

			if ( gdrts_is_method_loaded( $method ) ) {
				if ( ! empty( $location ) && is_string( $location ) && in_array( $location, array(
						'top',
						'bottom',
						'both'
					) ) ) {
					$rating = gdrts_comments_render_rating( array(
						'method' => $method,
						'series' => $series
					) );

					if ( $location == 'top' || $location == 'both' ) {
						$content = $rating . $content;
					}

					if ( $location == 'bottom' || $location == 'both' ) {
						$content .= $rating;
					}
				}
			}
		}

		return $content;
	}
}

global $_gdrts_addon_comments;
$_gdrts_addon_comments = new gdrts_addon_comments();

function gdrtsa_comments() {
	global $_gdrts_addon_comments;

	return $_gdrts_addon_comments;
}
