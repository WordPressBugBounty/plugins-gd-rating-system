<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_rich_snippet_mode_engine_microdata_creative_work extends gdrts_rich_snippet_mode_engine_microdata {
	public $name = 'creative_work';
	public $type = 'CreativeWork';

	public function run() {
		$this->_basic_data();
		$this->_rating_data();

		$this->_get_featured_image();

		$this->build['root']['items']['author']           = $this->_get_author();
		$this->build['root']['items']['publisher']        = $this->_get_publisher();
		$this->build['root']['items']['mainEntityOfPage'] = $this->_get_main_entitiy();

		$_date_published = $this->snippet->item->date_published( 'c', gdrtsa_rich_snippets()->gmt() );
		if ( $_date_published ) {
			$this->build['root']['items']['published'] = array(
				'tag'      => 'meta',
				'itemprop' => 'datePublished',
				'content'  => $_date_published
			);
		}

		$_date_modified = $this->snippet->item->date_modified( 'c', gdrtsa_rich_snippets()->gmt() );
		if ( $_date_modified && $_date_published != $_date_modified ) {
			$this->build['root']['items']['modified'] = array(
				'tag'      => 'meta',
				'itemprop' => 'dateModified',
				'content'  => $_date_modified
			);
		}
	}
}
