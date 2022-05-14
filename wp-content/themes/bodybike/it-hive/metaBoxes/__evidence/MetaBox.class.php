<?php
namespace it_hive\metaBoxes\evidence;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'page',
        'title'         => 'Page customization',
        'priority'      => 'high',
        'name'          => 'evidence',
        'single'        => true,
        'forTemplate'   => ['pages/evidence.php'],
        'children' => [
            'main' => main,
            'variations' => [
                'type' => 'repeater\variations',
                'label' => '',
                'limit' => 100,
                'addText' => 'Add new block',
                'removeText' => 'Remove block',
                'repeatSkin' => 'slideToggle',
                'sortable' => true,
                'variations' => [
                    'textBlockAndVideo' => listText,
                ],
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}