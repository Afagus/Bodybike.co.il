<?php
namespace it_hive\metaBoxes\news;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'news',
        'title'         => 'Additional',
        'priority'      => 'high',
        'name'          => 'news',
        'single'        => true,
        'children'      => [
            'link' => [
                'type' => 'text',
                'label' => 'Link',
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
