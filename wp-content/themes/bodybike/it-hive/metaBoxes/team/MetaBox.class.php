<?php
namespace it_hive\metaBoxes\team;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'team',
        'title'         => 'Page customization',
        'priority'      => 'high',
        'name'          => 'team',
        'single'        => true,
        'children'      => [
            'position' => [
                'type' => 'text',
                'label' => 'Position'
            ],
            'linkedin' => [
                'type' => 'text',
                'label' => 'Linkedin'
            ],
            'twitter' => [
                'type' => 'text',
                'label' => 'Twitter'
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
