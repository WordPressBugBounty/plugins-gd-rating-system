<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div style="display: none">
    <div title="<?php _e( 'Are you sure?', 'gd-rating-system' ); ?>" id="gdrts-dialog-ratings-delete">
        <div class="gdrts-inner-content">
            <p><?php _e( 'All selected rating objects will be removed from database, and all log entries associated with them will be also removed.', 'gd-rating-system' ); ?></p>
            <p><?php _e( 'Are you sure you want to proceed? This operation is not reversible!', 'gd-rating-system' ); ?></p>
        </div>
    </div>

    <div title="<?php _e( 'Are you sure?', 'gd-rating-system' ); ?>" id="gdrts-dialog-ratings-clear">
        <div class="gdrts-inner-content">
            <p><?php _e( 'All selected rating objects will be reset, and all log entries associated with them will be removed from database.', 'gd-rating-system' ); ?></p>
            <p><?php _e( 'Are you sure you want to proceed? This operation is not reversible!', 'gd-rating-system' ); ?></p>
        </div>
    </div>

    <div title="<?php _e( 'Are you sure?', 'gd-rating-system' ); ?>" id="gdrts-dialog-ratings-delete-single">
        <div class="gdrts-inner-content">
            <p><?php _e( 'Selected rating object will be removed from database, and all associated log entries will be also removed.', 'gd-rating-system' ); ?></p>
            <p><?php _e( 'Are you sure you want to proceed? This operation is not reversible!', 'gd-rating-system' ); ?></p>
        </div>
    </div>

    <div title="<?php _e( 'Are you sure?', 'gd-rating-system' ); ?>" id="gdrts-dialog-ratings-clear-single">
        <div class="gdrts-inner-content">
            <p><?php _e( 'Rating data for this method will be reset, and all log entries associated with them will be removed from database.', 'gd-rating-system' ); ?></p>
            <p><?php _e( 'Are you sure you want to proceed? This operation is not reversible!', 'gd-rating-system' ); ?></p>
        </div>
    </div>

    <div title="<?php _e( 'Are you sure?', 'gd-rating-system' ); ?>" id="gdrts-dialog-ratings-recalculate-single">
        <div class="gdrts-inner-content">
            <p><?php _e( 'Rating will be calculated based on the available rating log entries. If some or all log entries are missing for this item, the overall rating can be significantly affected.', 'gd-rating-system' ); ?></p>
            <p><?php _e( 'Are you sure you want to proceed? This operation is not reversible!', 'gd-rating-system' ); ?></p>
        </div>
    </div>
</div>