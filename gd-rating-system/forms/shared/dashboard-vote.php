<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<?php

$item = gdrts_get_rating_item_by_id( $log->item_id );

if ( $item ) {

	?>

    <li>
        <div class="gdrts-vote">
			<?php

			$title = $item->title();
			$url   = $item->url();

			if ( ! empty( $title ) ) {
				if ( empty( $url ) ) {
					echo '<h5>' . $title . '</h5>';
				} else {
					echo '<h5><a target="_blank" href="' . $url . '">' . $title . '</a></h5>';
				}
			}

			?>
            <strong style="float: right"><a href="<?php echo admin_url( 'admin.php?page=gd-rating-system-log&filter-method=' . $log->method ); ?>"><?php echo gdrts_get_method_label( $log->method ); ?></a></strong>
			<?php echo apply_filters( 'gdrts_votes_grid_vote_' . $log->method, '', $log ); ?> &middot;
			<?php

			$_entity = gdrts()->get_entity( $item->entity );

			?>
            <a href="<?php echo admin_url( 'admin.php?page=gd-rating-system-log&filter-entity=' . $item->entity ); ?>"><?php echo $_entity['label']; ?></a> &middot;
			<?php

			$label = '';

			if ( isset( $_entity['types'][ $item->name ] ) ) {
				$label = $_entity['types'][ $item->name ];
			} else {
				$label = $item->name . ' <strong style="color: red">(' . __( 'missing', 'gd-rating-system' ) . ')</strong>';
			}

			?>
            <a href="<?php echo admin_url( 'admin.php?page=gd-rating-system-log&filter-entity=' . $item->entity . '.' . $item->name ); ?>"><?php echo $label; ?></a> &middot;
            <a href="<?php echo admin_url( 'admin.php?page=gd-rating-system-log&filter-item_id=' . $log->item_id ); ?>"><?php echo $log->item_id; ?></a>
        </div>
        <div class="gdrts-voter">
            <span style="float: right"><?php echo sprintf( __( '%s ago', 'gd-rating-system' ), human_time_diff( mysql2date( 'U', $log->logged ) ) ); ?></span>
			<?php

			$user = __( 'by', 'gd-rating-system' ) . ' <strong><a href="' . admin_url( 'admin.php?page=gd-rating-system-log&filter-user_id=' . $log->user_id . '&filter-method=' . $log->method ) . '">';

			if ( $log->user_id == 0 ) {
				$user .= __( 'Visitor', 'gd-rating-system' );
			} else {
				$u = get_user_by( 'id', $log->user_id );

				if ( $u ) {
					$user .= $u->display_name;
				}
			}

			$user .= '</a></strong>';

			echo $user;

			if ( ! gdrts_using_hashed_ip() ) {
				echo ' &middot; ';
				echo __( 'from', 'gd-rating-system' ) . ' ' . esc_html($log->ip);
			}

			?>
        </div>
    </li>

	<?php
}

?>
