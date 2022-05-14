<?php
namespace it_hive\metaBoxes\upcomingEvents;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'upcoming_event',
        'title'         => 'Event settings',
        'priority'      => 'high',
        'name'          => 'upcomingEvents',
        'single'        => true,
        'children'      => [
            'dateStart' => [
                'type' => 'datepicker',
                'label' => 'Date start',
                'single' => true,
            ],
            'dateEnd' => [
                'type' => 'datepicker',
                'label' => 'Date end',
                'single' => true,
            ],
            'location' => [
                'type'  => 'text',
                'label' => 'Event Location'
            ],
            'link' => [
                'type'  => 'text',
                'label' => 'Link',
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
