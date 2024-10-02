<div class="gdrts-metabox-row __p-zero-margin __with-margin">
    <div class="__column-half">
        <p>
            <label for="gdrts-rich-snippets-mode-<?php echo $this->name; ?>-rating"><?php _e( 'Rating', 'gd-rating-system' ); ?></label>
			<?php d4p_render_select( gdrtsa_admin_rich_snippets()->get_list_include_ratings(), array(
				'class'    => 'widefat',
				'selected' => $this->data['rating'],
				'name'     => 'gdrts[rich-snippets-mode][' . $this->name . '][rating]',
				'id'       => 'gdrts-rich-snippets-mode-' . $this->name . '-rating'
			) ); ?>
        </p>
    </div>
</div>
<h5><?php _e( 'Extra Information', 'gd-rating-system' ); ?></h5>
<div class="gdrts-metabox-row __p-zero-margin __with-margin">
    <div class="__column-half __on-left">
        <p>
            <label for="gdrts-rich-snippets-mode-<?php echo $this->name; ?>-rating"><?php _e( 'Custom Type Name', 'gd-rating-system' ); ?></label>
            <input id="gdrts-rich-snippets-mode-<?php echo $this->name; ?>-name" name="gdrts[rich-snippets-mode][<?php echo $this->name; ?>][name]" class="widefat" type="text" value="<?php echo esc_attr( $this->data['name'] ); ?>"/>
            <span class="description"><?php _e( 'This has to be valid rich snippet type name. If this value is invalid, snippet validation will fail. Also, Google allows ratings to be included with some types of the rich snippets, and if you include rating with unsupported snippet type, Google will not allow it.', 'gd-rating-system' ); ?></span>
        </p>
    </div>
    <div class="__column-half __on-right">
        <p>
            <label for="gdrts-rich-snippets-mode-<?php echo $this->name; ?>-rating"><?php _e( 'Include Autogenerated Data', 'gd-rating-system' ); ?></label>
			<?php d4p_render_checkradios( gdrtsa_admin_rich_snippets()->get_list_custom_features(), array(
				'selected' => $this->data['features'],
				'name'     => 'gdrts[rich-snippets-mode][' . $this->name . '][features]',
				'id'       => 'gdrts-rich-snippets-mode-' . $this->name . '-features'
			) ); ?>
        </p>
    </div>
</div>