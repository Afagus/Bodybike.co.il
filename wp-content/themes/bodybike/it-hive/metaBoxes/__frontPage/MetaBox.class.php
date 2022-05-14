<?php
namespace it_hive\metaBoxes\frontPage;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'page',
        'title'         => 'Page customization',
        'priority'      => 'high',
        'name'          => 'frontPage',
        'single'        => true,
        'forTemplate'   => ['front-page.php'],
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
                    'textAndLink' => textAndLink,
                    'leftTextAndLink' => leftTextAndLink,
                    'videoAndLink' => videoAndLink,
                    'topImage' => topImage,
                    'leftImage' => leftImage,
                    'posts' => posts,
                    'imageSwapper' => imageSwapper,
                    'socials' => socials,
                ],
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
