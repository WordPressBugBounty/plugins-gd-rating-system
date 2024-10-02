<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<h4><?php _e( 'Rating', 'gd-rating-system' ); ?></h4>
<table>
    <tbody>
    <tr>
        <td class="cell-left">
            <label for="<?php echo $this->get_field_id( 'rating' ); ?>"><?php _e( 'Rating to Show', 'gd-rating-system' ); ?>:</label>
			<?php d4p_render_select( gdrts_admin_shared::data_list_rating_values( $this->rating_method ), array(
				'id'       => $this->get_field_id( 'rating' ),
				'class'    => 'widefat',
				'name'     => $this->get_field_name( 'rating' ),
				'selected' => $instance['rating']
			) ); ?>
        </td>
        <td class="cell-right"></td>
    </tr>
    </tbody>
</table>
