<?php
namespace it_hive\metaBoxes\downloads;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'downloads',
        //'title'         => '',
        'priority'      => 'high',
        'name'          => 'downloads',
        'single'        => true,
        'children'      => [
            'attachment' => [
                'type' => 'repeater\variations',
                'label' => '',
                'limit' => 1,
                'addText' => 'Add item',
                'removeText' => 'Remove item',
                //'repeatSkin' => 'slideToggle',
                'sortable' => false,
                'variations' => [
                    'video' => [
                        'repeat' => [
                            'link' => [
                                'type' => 'attachment',
                                'label' => 'Video (link or attach)',
                            ],
                        ],
                    ],
                    'link' => [
                        'repeat' => [
                            'link' => [
                                'type' => 'attachment',
                                'label' => 'Remote link or File',
                            ],
                            'newTab' => [
                                'type' => 'checkbox',
                                'label' => 'Open in new tab?',
                                'default' => 1,
                            ]
                        ],
                    ],
                ],
            ],
        ] + BUTTON,
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
