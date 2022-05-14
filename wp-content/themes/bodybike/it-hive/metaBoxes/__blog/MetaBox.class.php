<?php
namespace it_hive\metaBoxes\blog;

class MetaBox extends \it_hive\core\AdminBox\MetaBox
{
    protected $params = [
        'screen' => 'post',
        'title' => 'Additional',
        'priority' => 'core',
        'name' => 'blog',
        'context' => 'side',
        'single' => true,
        'children' => [
            'mobileImage' => [
                'type' => 'image',
                'label' => 'Image (mobile)'
            ],
        ],
    ];

    public function __construct($params = [])
    {
        parent::__construct($this->params);
    }
}
