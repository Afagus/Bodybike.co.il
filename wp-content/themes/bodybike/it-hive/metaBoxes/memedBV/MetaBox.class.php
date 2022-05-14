<?php
namespace it_hive\metaBoxes\memedBV;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'page',
        'title'         => 'Additional sticky',
        'priority'      => 'high',
        'name'          => 'memedBV',
        'single'        => true,
        'forTemplate'   => ['pages/memedBV.php'],
        'children'      => LINK + BUTTON + [
            'newTab' => [
                'type' => 'checkbox',
                'label' => 'Open link in new tab?',
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
