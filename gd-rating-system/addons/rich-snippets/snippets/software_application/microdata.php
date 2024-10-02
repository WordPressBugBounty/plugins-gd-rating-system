<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class gdrts_rich_snippet_mode_engine_microdata_software_application extends gdrts_rich_snippet_mode_engine_microdata {
	public $name = 'software_application';
	public $type = 'SoftwareApplication';

	public function run() {
		$this->build['root'] = array(
			'tag'       => 'span',
			'itemscope' => true,
			'itemtype'  => 'http://schema.org/' . $this->type,
			'items'     => array(
				'name'                => array(
					'tag'      => 'meta',
					'itemprop' => 'name',
					'content'  => $this->snippet->item->title()
				),
				'url'                 => array(
					'tag'      => 'meta',
					'itemprop' => 'url',
					'content'  => $this->snippet->item->url()
				),
				'operatingSystem'     => array(
					'tag'      => 'meta',
					'itemprop' => 'operatingSystem',
					'content'  => $this->snippet->data['os']
				),
				'applicationCategory' => array(
					'tag'      => 'meta',
					'itemprop' => 'applicationCategory',
					'content'  => $this->snippet->data['category']
				),
				'description'         => array(
					'tag'      => 'meta',
					'itemprop' => 'description',
					'content'  => $this->snippet->data['description']
				)
			)
		);

		$this->_get_featured_image();
		$this->_rating_data();
	}
}
