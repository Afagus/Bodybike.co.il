<?php
namespace it_hive\options\videos;

class OptionsPage extends \it_hive\core\AdminBox\OptionsPage
{
    protected $params = [
        'name' => 'videos',
        'title' => 'Settings',
        'content' => '<h2>Press releases page settings</h2>',
        'single' => true,
        'save_text' => 'Save page settings',
        'pageLocation'	=> 'edit.php?post_type=video',
        'position' => 10,
        'children' => [
            'main' => main,
            'variations' => [
                'type' => 'repeater\variations',
                'label' => '',
                'limit' => 100,
                'addText' => 'Add new block',
                'removeText' => 'Remove block',
                'repeatSkin' => 'slideToggle',
                'sortable' => true,
                'variations' => [
                    'textBlock' => TextBlock,
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
