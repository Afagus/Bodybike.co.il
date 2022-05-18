<?php

namespace it_hive\metaBoxes\pages;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
	protected $params = [
		'screen'   => 'page',
		'title'    => 'Page customization',
		'priority' => 'high',
		'name'     => 'box',
		'single'   => true,
		'children' => [
			'headerPoster'     => [
				'type'              => 'repeater',
				'label'             => 'HEADER SLIDER',
				'sortable'          => true,
				'repeatHeading'     => 'Slider',
				'repeatHeadingFrom' => 'title',
				'repeatSkin'        => 'slideToggleWithoutHeading',
				'addText'           => 'Add Poster',
				'removeText'        => 'Remove Poster',
				'repeat'            => POSTER + POSTER_MOBILE
			],
			'aboutLogo'       => [
				'type'     => 'group',
				'label'    => 'ABOUT LOGO',
				'children' => POSTER + POSTER_MOBILE,

			],
			'productsCarousel' => [
				'type'              => 'repeater',
				'label'             => 'PRODUCTS',
				'sortable'          => true,
				'repeatHeading'     => 'Item',
				'repeatHeadingFrom' => 'title',
				'repeatSkin'        => 'slideToggleWithoutHeading',
				'addText'           => 'Add Poster',
				'removeText'        => 'Remove Poster',
				'repeat'            => POSTER + TITLE + LINK,
			],
			'footPoster'       => [
				'type'              => 'repeater',
				'label'             => 'FOOTER POSTER',
				'sortable'          => true,
				'repeatHeading'     => 'Slider',
				'repeatHeadingFrom' => 'title',
				'repeatSkin'        => 'slideToggleWithoutHeading',
				'addText'           => 'Add Poster',
				'removeText'        => 'Remove Poster',
				'repeat'            => POSTER + POSTER_MOBILE
			],
		],
	];

	public function __construct( $params = [] ) {
		parent::__construct( $this->params );
	}
}