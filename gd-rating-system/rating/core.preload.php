<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_rating_preload {
	public $preloaded = array();
	public $userstats = array();

	public function __construct() {
		if ( ! is_admin() && apply_filters( 'gdrts_preload_the_comments', false ) ) {
			add_action( 'the_comments', array( $this, 'comments' ) );
		}
	}

	public static function get_instance() {
		static $_instance = false;

		if ( $_instance === false ) {
			$_instance = new gdrts_rating_preload();
		}

		return $_instance;
	}

	/**
	 * @param WP_Query $loop
	 */
	public function the_loop( $loop = null ) {
		if ( is_null( $loop ) ) {
			global $wp_query;

			$loop = $wp_query;
		}

		if ( $loop instanceof WP_Query && ! empty( $loop->posts ) ) {
			$ids = wp_list_pluck( $loop->posts, 'ID' );

			$this->posts( $ids );
		}
	}

	public function posts( $post_ids = array() ) {
		$this->ratings( 'posts', null, $post_ids );
	}

	public function comments( $comments = array() ) {
		if ( ! empty( $comments ) ) {
			$ids = wp_list_pluck( $comments, 'comment_ID' );
			$this->ratings( 'comments', null, $ids );
		}

		return $comments;
	}

	public function ratings( $entity, $name = null, $ids = array() ) {
		$items = gdrts_db()->get_items_ids( $entity, $name, $ids );

		if ( ! empty( $items ) ) {
			$get = array();

			foreach ( $items as $item ) {
				gdrts_cache()->set( 'item_id', $item->entity . '-' . $item->name . '-' . $item->id, $item->item_id );

				if ( ! gdrts_cache()->in( 'item', $item->item_id ) ) {
					$get[] = $item->item_id;
				}
			}

			if ( ! empty( $get ) ) {
				$metas   = gdrts_db()->get_items_meta( $get );
				$ratings = gdrts_db()->get_items_ratings( $get );

				foreach ( $items as $obj ) {
					$item_id = $obj->item_id;

					if ( in_array( $item_id, $get ) ) {
						$data = array(
							'item_id' => $item_id,
							'entity'  => $obj->entity,
							'name'    => $obj->name,
							'id'      => intval( $obj->id ),
							'latest'  => intval( mysql2date( 'G', $obj->latest ) ),
							'meta'    => isset( $metas[ $item_id ] ) ? $metas[ $item_id ] : array(),
							'ratings' => isset( $ratings[ $item_id ] ) ? $ratings[ $item_id ] : array()
						);

						gdrts_rating_item::cache_and_get_instance( $item_id, $data, false );

						$this->_preloaded( $item_id );
					}
				}
			}
		}
	}

	public function ratings_from_item_ids( $ids = array() ) {
		$get = array();

		foreach ( $ids as $id ) {
			$id = absint( $id );

			if ( $id > 0 ) {
				if ( ! gdrts_cache()->in( 'item', $id ) ) {
					$get[] = $id;
				}
			}
		}

		if ( ! empty( $get ) ) {
			$items   = gdrts_db()->get_items( $get );
			$metas   = gdrts_db()->get_items_meta( $get );
			$ratings = gdrts_db()->get_items_ratings( $get );

			foreach ( $items as $obj ) {
				$item_id = $obj->item_id;

				$data = array(
					'item_id' => $item_id,
					'entity'  => $obj->entity,
					'name'    => $obj->name,
					'id'      => intval( $obj->id ),
					'latest'  => intval( mysql2date( 'G', $obj->latest ) ),
					'meta'    => isset( $metas[ $item_id ] ) ? $metas[ $item_id ] : array(),
					'ratings' => isset( $ratings[ $item_id ] ) ? $ratings[ $item_id ] : array()
				);

				gdrts_rating_item::cache_and_get_instance( $item_id, $data, false );

				$this->_preloaded( $item_id );
			}
		}
	}

	public function user_stats( $args ) {
		if ( empty( $this->preloaded ) ) {
			return;
		}

		$cache_key = md5( wp_json_encode( $args ) );

		if ( ! isset( $this->userstats[ $cache_key ] ) ) {
			$this->userstats[ $cache_key ] = $this->preloaded;
			$log_ids                       = array();

			$raw = gdrts_db()->get_items_log_counts_user_method( $this->preloaded, $args['user_id'], $args['method'], $args['series'], $args['ip'], $args['log_ids'], $args['from'], $args['to'] );

			foreach ( $raw as $item_id => $data ) {
				$item            = $args;
				$item['item_id'] = absint( $item_id );
				$the_key         = md5( wp_json_encode( $item ) );

				gdrts_cache()->set( 'item_user_stats', $the_key, $data );

				foreach ( $data as $entry ) {
					if ( isset( $entry['log_id'] ) && $entry['log_id'] > 0 ) {
						$log_ids[] = absint( $entry['log_id'] );
					}
				}
			}

			if ( ! empty( $log_ids ) ) {
				gdrts_db()->process_log_entries( $log_ids );
			}
		}
	}

	private function _preloaded( $item_id ) {
		$item_id = absint( $item_id );

		if ( ! in_array( $item_id, $this->preloaded ) ) {
			$this->preloaded[] = $item_id;
		}
	}
}

/** @return gdrts_rating_preload */
function gdrts_preload() {
	return gdrts_rating_preload::get_instance();
}
