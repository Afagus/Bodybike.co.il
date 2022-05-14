<?php
namespace it_hive\core\Blocks\hidden;

class Block extends \it_hive\core\Blocks\DataBlock {

    public function __construct( $params ) {
        /*print_r($params['value'].'_____________
        ');*/
        parent::__construct($params );
        /*print_r($this->params['value'].'++++++++++++++++
        ');*/
    }

    public function getTpl() {

        $tpl = parent::getTpl();
        $tpl= str_replace('{{name}}', $this->getName(), $tpl);
        return $tpl;
    }

    protected function applyParams() {
        $html = $this->loadSkin();
        $class = get_class($this); //TODO: подумать над использованием static::
        /*print_r($this->params['value'].'_____________
        ');*/
        foreach( $this->params as $param => $val ) {
            if( key_exists( $param, $class::exclude ) ) {
                continue;
            }


            $val = is_array($val) ? '' : $val;
            $html = str_replace('{{' . $param . '}}', $val, $html);
        }
        return $html;
    }
}