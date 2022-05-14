<?php
namespace it_hive\metaBoxes\videos;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'video',
        //'title'         => '',
        'priority'      => 'high',
        'name'          => 'videos',
        'single'        => true,
        'children'      => VIDEO + LINK + BUTTON,
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}
