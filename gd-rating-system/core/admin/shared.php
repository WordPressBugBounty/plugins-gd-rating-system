<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_admin_shared {
	public static function data_settings_shared_notice() : string {
		return __( 'In this panel you can set global rules for this extension. But, you can override these settings for each individual rating entity/type from the plugin Rules panel.', 'gd-rating-system' ) . '<br/><a class="button-secondary" style="margin-top: 5px" target="_blank" href="admin.php?page=gd-rating-system-rules">' . __( 'Open Rules Panel', 'gd-rating-system' ) . '</a>';
	}

	public static function data_list_date_published() : array {
		return array(
			'disabled' => __( 'Disabled', 'gd-rating-system' ),
			'latest'   => __( 'Latest Range', 'gd-rating-system' ),
			'range'    => __( 'Custom Range', 'gd-rating-system' ),
			'exact'    => __( 'Exact Match', 'gd-rating-system' )
		);
	}

	public static function data_list_entity_name_types() : array {
		$items = array();

		foreach ( gdrts()->get_entities() as $entity => $obj ) {
			foreach ( $obj['types'] as $name => $label ) {
				$items[ $entity . '.' . $name ] = $obj['label'] . ': ' . $label;
			}
		}

		return $items;
	}

	public static function data_list_embed_methods( $series_separator = '&minus' ) : array {
		$list = array();

		foreach ( gdrts()->methods as $key => $data ) {
			if ( $data['autoembed'] && gdrts_is_method_loaded( $key ) ) {
				if ( gdrts_method_has_series( $key ) ) {
					$obj = gdrts_get_method_object( $key );

					foreach ( $obj->all_series_list() as $sers => $label ) {
						$list[ $key . '::' . $sers ] = $data['label'] . ' ' . $series_separator . ' ' . $label;
					}
				} else {
					$list[ $key ] = $data['label'];
				}
			}
		}

		return $list;
	}

	public static function data_list_all_methods( $series_separator = '&minus;' ) : array {
		$list = array();

		foreach ( gdrts()->methods as $key => $data ) {
			if ( gdrts_is_method_loaded( $key ) ) {
				if ( gdrts_method_has_series( $key ) ) {
					$obj = gdrts_get_method_object( $key );

					foreach ( $obj->all_series_list() as $sers => $label ) {
						$list[ $key . '::' . $sers ] = $data['label'] . ' ' . $series_separator . ' ' . $label;
					}
				} else {
					$list[ $key ] = $data['label'];
				}
			}
		}

		return $list;
	}

	public static function data_list_style_image_name() {
		return gdrts_base_data::stars_style_image_name();
	}

	public static function data_list_style_type() {
		return gdrts_base_data::stars_style_type();
	}

	public static function data_list_likes_style_type() {
		return gdrts_base_data::likes_style_type();
	}

	public static function data_list_likes_style_image_name() {
		return gdrts_base_data::likes_style_image_name();
	}

	public static function data_list_likes_style_theme() {
		return gdrts_base_data::likes_style_theme();
	}

	public static function data_list_rating_values( $method = 'stars-rating' ) {
		switch ( $method ) {
			default:
				$list = array(
					'rating' => __( 'Rating', 'gd-rating-system' )
				);
				break;
			case 'stars-rating':
				$list = array(
					'average' => __( 'Average', 'gd-rating-system' )
				);
				break;
			case 'like-this':
				$list = array(
					'sum' => __( 'Sum', 'gd-rating-system' )
				);
				break;
		}

		switch ( $method ) {
			case 'stars-rating':
				return apply_filters( 'gdrts_list_stars-rating_rating_value', $list );
			case 'like-this':
				return apply_filters( 'gdrts_list_like-this_rating_value', $list );
			default:
				return $list;
		}
	}

	public static function data_list_orderby( $method = 'stars-rating' ) {
		$list = gdrts_admin_shared::data_list_rating_values( $method ) + array(
				'votes'   => __( 'Votes', 'gd-rating-system' ),
				'item_id' => __( 'Item ID', 'gd-rating-system' ),
				'id'      => __( 'Object ID', 'gd-rating-system' ),
				'latest'  => __( 'Latest Vote', 'gd-rating-system' )
			);

		switch ( $method ) {
			case 'stars-rating':
				return apply_filters( 'gdrts_list_stars-rating_orderby', $list );
			case 'like-this':
				return apply_filters( 'gdrts_list_like-this_orderby', $list );
			default:
				return $list;
		}
	}

	public static function data_list_order() : array {
		return array(
			'DESC' => __( 'Descending', 'gd-rating-system' ),
			'ASC'  => __( 'Ascending', 'gd-rating-system' )
		);
	}

	public static function data_list_stars() : array {
		$list = array();

		for ( $i = 1; $i < 26; $i ++ ) {
			$list[ $i ] = sprintf( _n( '%s star', '%s stars', $i, 'gd-rating-system' ), $i );
		}

		return $list;
	}

	public static function data_list_templates( $method, $type = 'single' ) {
		if ( gdrts_is_method_valid( $method ) && gdrts_is_template_type_valid( $type ) ) {
			$templates = gdrts_settings()->get( $method, 'templates' );

			if ( empty( $templates[ $type ] ) ) {
				gdrts_rescan_for_templates();

				$templates = gdrts_settings()->get( $method, 'templates' );
			}

			return $templates[ $type ];
		} else {
			return array();
		}
	}

	public static function data_default_template( $method, $type = 'single' ) {
		$list = gdrts_admin_shared::data_list_templates( $method, $type );

		if ( isset( $list['default'] ) ) {
			return 'default';
		} else if ( ! is_array( $list ) || empty( $list ) ) {
			return '';
		}

		return key( $list );
	}

	public static function data_list_distributions() : array {
		return array(
			'normalized' => __( 'Normalized', 'gd-rating-system' ),
			'exact'      => __( 'Exact', 'gd-rating-system' )
		);
	}

	public static function data_list_resolutions() : array {
		return array(
			100 => __( '100% - Full Star', 'gd-rating-system' ),
			50  => __( '50% - Half Star', 'gd-rating-system' ),
			25  => __( '25% - One Quarter Star', 'gd-rating-system' ),
			20  => __( '20% - One Fifth Star', 'gd-rating-system' ),
			10  => __( '10% - One Tenth Star', 'gd-rating-system' )
		);
	}

	public static function data_list_vote() {
		$default_rules = array(
			'single' => __( 'Basic', 'gd-rating-system' ) . ': ' . __( 'Single vote only', 'gd-rating-system' ),
			'revote' => __( 'Basic', 'gd-rating-system' ) . ': ' . __( 'Single vote with revote', 'gd-rating-system' ),
			'multi'  => __( 'Basic', 'gd-rating-system' ) . ': ' . __( 'Multiple votes', 'gd-rating-system' )
		);

		$custom_rules = apply_filters( 'gdrts_custom_vote_rules', array() );

		if ( ! empty( $custom_rules ) ) {
			$default_rules += $custom_rules;
		}

		return $default_rules;
	}

	public static function data_list_align() : array {
		return array(
			'none'   => __( 'No alignment', 'gd-rating-system' ),
			'left'   => __( 'Left', 'gd-rating-system' ),
			'center' => __( 'Center', 'gd-rating-system' ),
			'right'  => __( 'Right', 'gd-rating-system' )
		);
	}
}
