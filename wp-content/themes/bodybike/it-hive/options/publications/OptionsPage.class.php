<?php
namespace it_hive\options\publications;

class OptionsPage extends \it_hive\core\AdminBox\OptionsPage
{
    protected $params = [
        'name' => 'publications',
        'title' => 'Settings',
        'content' => '<h2>Publications page settings</h2>',
        'single' => true,
        'save_text' => 'Save page settings',
        'pageLocation'	=> 'edit.php?post_type=publication',
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
                    'textBlockAndVideo' => textBlockAndVideo,
                    'textBlockAndSlider' => textBlockAndSlider,
                ],
            ],
            'firstItemMenu' => [
                'type' => 'text',
                'label' => 'Name of the first menu item',
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
