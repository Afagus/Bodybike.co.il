<?php
namespace it_hive\options\upcomingEvents;

class OptionsPage extends \it_hive\core\AdminBox\OptionsPage
{
    protected $params = [
        'name' => 'upcomingEvents',
        'title' => 'Settings',
        'content' => '<h2>Upcoming events page settings</h2>',
        'single' => true,
        'save_text' => 'Save page settings',
        'pageLocation'	=> 'edit.php?post_type=upcoming_event',
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
