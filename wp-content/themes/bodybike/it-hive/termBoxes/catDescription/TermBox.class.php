<?php
namespace it_hive\termBoxes\catDescription;


class TermBox extends \it_hive\core\AdminBox\TermBox {
	protected $params = array(
		//'name' => 'catDescription',
		//'title' => 'Story configuration',
        //'single'    => true,
		'taxonomies' => ['product_cat'],
		'children' => [
            'block' => [
                'type'  => 'wpEditor',
                'rows'  => 5,
                'label' => 'Text WWWWWWWW'
            ],
		],
	);

	public function __construct( $params = array() ) {
		parent::__construct( $this->params );
	}

}
