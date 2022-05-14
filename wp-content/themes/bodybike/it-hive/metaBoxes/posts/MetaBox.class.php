<?php
namespace it_hive\metaBoxes\posts;

class MetaBox extends \it_hive\core\AdminBox\MetaBox
{
    protected $params = [
        'screen' => 'post',
        'title' => 'Additional',
        'priority' => 'high',
        'name' => 'posts',
        //'context' => 'side',
        'single' => true,
        'children' => WPTITLE + POSTER + LINK + [
            'author' => [
                'type' => 'text',
                'label' => 'Author',
            ]
        ],
    ];

    public function __construct($params = [])
    {
        parent::__construct($this->params);
    }
}
