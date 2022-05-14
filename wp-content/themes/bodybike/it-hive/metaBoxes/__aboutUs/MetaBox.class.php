<?php
namespace it_hive\metaBoxes\aboutUs;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => ['page'],
        'title'         => 'Page customization',
        'priority'      => 'high',
        'name'          => 'aboutUs',
        'single'        => true,
        'forTemplate'   => ['pages/aboutUs.php'],
        'children'      => [
            'main' => main,
            'variations' => [
                'type'       => 'repeater\variations',
                'label'      => '',
                'limit'      => 100,
                'addText'    => 'Add new block',
                'removeText' => 'Remove block',
                'repeatSkin' => 'slideToggle',
                'sortable'   => true,
                'variations' => [
                    'video' => video,
                    'leftImage' => leftImage,
                    'topImage' => topImage,
                    'infoGraph' => infoGraph,
                    'leftImage' => leftImage,
                ],
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
