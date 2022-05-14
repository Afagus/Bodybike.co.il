<?php
namespace it_hive\options\team;

class OptionsPage extends \it_hive\core\AdminBox\OptionsPage
{
    protected $params = [
        'name' => 'team',
        'title' => 'Settings',
        'content' => '<h2>Team page settings</h2>',
        'single' => true,
        'save_text' => 'Save page settings',
        'pageLocation'	=> 'edit.php?post_type=team',
        'position' => 10,
        'children' => [
            'main' => main,
            'posts_per_page' => [
                'type' => 'number',
                'label' => 'Posts per page team',
            ],
            'variations' => [
                'type' => 'repeater\variations',
                'label' => '',
                'limit' => 100,
                'addText' => 'Add new block',
                'removeText' => 'Remove block',
                'repeatSkin' => 'slideToggle',
                'sortable' => true,
                'variations' => [
                    'TextBlockAndVideo' => textBlockAndVideo,
                    'textBlockAndSlider' => textBlockAndSlider,
                ],
            ],
        ],
    ];

    protected static $adminStyles = [
        'jquery-ui-css' => 'jquery-ui.css',
        'wp-color-picker' => ''
    ];

    public function __construct($params = [])
    {
        parent::__construct($this->params);
    }
}
