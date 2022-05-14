<?php
namespace it_hive\metaBoxes\advocacy;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'advocacy',
        'title'         => 'Page customization',
        'priority'      => 'high',
        'name'          => 'advocacy',
        'single'        => true,
        'children'      => [
            'image' => [
                'type' => 'image',
                'label' => 'Image',
            ],
            'mobileImage' => [
                'type' => 'image',
                'label' => 'Image (mobile)',
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
