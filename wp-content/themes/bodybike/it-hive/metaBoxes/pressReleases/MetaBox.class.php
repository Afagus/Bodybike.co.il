<?php
namespace it_hive\metaBoxes\pressReleases;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'press_release',
        'title'         => 'Additional',
        'priority'      => 'high',
        'name'          => 'pressReleases',
        'single'        => true,
        'children'      => [
            'main' => main,
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
