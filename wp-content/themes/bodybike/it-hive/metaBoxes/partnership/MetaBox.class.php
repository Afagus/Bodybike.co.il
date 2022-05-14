<?php
namespace it_hive\metaBoxes\partnership;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'partnership',
        'title'         => 'Page customization',
        'priority'      => 'high',
        'name'          => 'partnership',
        'single'        => true,
        'children'      => [
            'type' => [
                'type' => 'text',
                'label' => 'Project type (standard value "Funding")'
            ],
            'budget' => [
                'type' => 'number',
                'label' => 'Project budget'
            ],
            'currency' => [
                'type' => 'text',
                'label' => 'Budget currency ($ is displayed as standard)'
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
