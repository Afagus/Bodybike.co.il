<?php
namespace it_hive\metaBoxes\publications;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'publication',
        'title'         => 'Page customization',
        'priority'      => 'high',
        'name'          => 'publications',
        'single'        => true,
        'children'      => LINK + BUTTON + [
            'additionalImages' => [
                'label'  => 'Additional featured images',
                'type' => 'repeater',
                'limit' => 2,
                'sortable' => true,
                'repeatHeading' => 'Image',
                'addText' => 'Add new Image',
                'removeText' => 'Remove Image',
                'repeat' => [
                    'image' => [
                        'type' => 'image',
                        'label' => 'Image',
                    ],
                ],
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
