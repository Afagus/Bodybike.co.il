<?php
namespace it_hive\metaBoxes\whatsNew;
const whatsNew = TITLE + [
    'button' => [
        'type' => 'text',
        'label' => 'Button',
    ],
    'buttonMobile' => [
        'type' => 'text',
        'label' => 'Button mobile',
    ],
    'hasLine' => [
        'type' => 'checkbox',
        'label' => 'Show bottom line for desktop?',
        'default' => 1
    ],
    'hasMobileLine' => [
        'type' => 'checkbox',
        'label' => 'Show bottom line for mobile?',
        'default' => 1
    ],
];
class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => ['page'],
        'title'         => 'Editing content blocks on a page',
        'priority'      => 'high',
        'name'          => 'whatsNew',
        'single'        => true,
        'forTemplate'   => ['pages/whatsNew.php'],
        'children'      => [
            'press_release' => [
                'type' => 'group',
                'label' => 'Press Releases block',
                'skin' => 'slideToggleWithoutRemove',
                'children' => whatsNew,
            ],
            'news' => [
                'type' => 'group',
                'label' => 'News block',
                'skin' => 'slideToggleWithoutRemove',
                'children' => whatsNew,
            ],
            'post' => [
                'type' => 'group',
                'label' => 'Blog block',
                'skin' => 'slideToggleWithoutRemove',
                'children' => whatsNew,
            ],
            'upcoming_event' => [
                'type' => 'group',
                'label' => 'Upcoming Events block',
                'skin' => 'slideToggleWithoutRemove',
                'children' => whatsNew,
            ],
            'video' => [
                'type' => 'group',
                'label' => 'Video block',
                'skin' => 'slideToggleWithoutRemove',
                'children' => whatsNew,
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
