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
			'headPoster'=> [
				'type'     => 'group',
				'label'    => 'HEAD POSTER',
				'skin'     => 'slideToggleWithoutRemove',
				'children' =>[
					'blocks' => [
						'type'              => 'repeater',
						'sortable'          => true,
						'repeatHeading'     => 'Item',
						'repeatHeadingFrom' => 'title',
						'repeatSkin'        => 'slideToggleWithoutHeading',
						'addText'           => 'Add Poster',
						'removeText'        => 'Remove Poster',
						'repeat'            => POSTER,
					],
				]
			],
			'footPoster'=> [
				'type'     => 'group',
				'label'    => 'FOOTER POSTER',
				'skin'     => 'slideToggleWithoutRemove',
				'children' =>[
					'blocks' => [
						'type'              => 'repeater',
						'sortable'          => true,
						'repeatHeading'     => 'Item',
						'repeatHeadingFrom' => 'title',
						'repeatSkin'        => 'slideToggleWithoutHeading',
						'addText'           => 'Add Poster',
						'removeText'        => 'Remove Poster',
						'repeat'            => POSTER,
					],
				]
			],
			'productsCarousel'=> [
				'type'     => 'group',
				'label'    => 'PRODUCTS',
				'skin'     => 'slideToggleWithoutRemove',
				'children' =>[
					'blocks' => [
						'type'              => 'repeater',
						'sortable'          => true,
						'repeatHeading'     => 'Product Item',
						'repeatHeadingFrom' => 'title',
						'repeatSkin'        => 'slideToggleWithoutHeading',
						'addText'           => 'Add Poster',
						'removeText'        => 'Remove Poster',
						'repeat'            => POSTER,TITLE
					],
				]
			],
		],

	];

	public function __construct( $params = [] ) {
		parent::__construct( $this->params );
	}
}