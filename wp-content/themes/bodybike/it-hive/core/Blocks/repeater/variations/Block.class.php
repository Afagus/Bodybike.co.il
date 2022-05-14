<?php
namespace it_hive\core\Blocks\repeater\variations;

class Block extends \it_hive\core\Blocks\repeater\Block {

	const defaults = array(
		'variations' => array()
	);

	const exclude = parent::exclude + self::defaults;

	protected static $adminScripts = array(
		'repeaterVariations-control' => 'main.js',
        'jquery-ui-selectmenu'=>''
	);

	protected static $adminStyles = array(
        'repeaterVariations-style' => 'admin.css'
    );

	public function __construct( $params ) {
		$this->params = array_merge(self::defaults, $params);
		foreach( $this->params['variations'] as $key => &$variation ) {
			$variation['repeat']['variationType'] = array(
				'type'	=> 'hidden',
				'value' => $key
			);
		}
		parent::__construct( $this->params );
	}

	protected function addChildren() {
		$data = $this->get();
		if(!empty($data)){
			foreach( $data as $item ) {
				$data = array_values($data);
				$this->params['children'][] =  array(
					'name'		   => $this->repeatCounter,
					'value'		   => $item,
					'type'		   => 'repeater\\repeaterItem',
					'children'	   => $this->params['variations'][$item['variationType']]['repeat'],
					'skin'		   => $this->params['repeatSkin'],
					'localDisplay' => (array_key_exists('localDisplay', $this->params['variations'][$item['variationType']]) ? $this->params['variations'][$item['variationType']]['localDisplay'] : null),
					'display'      => (array_key_exists('display', $this->params['variations'][$item['variationType']]) ? $this->params['variations'][$item['variationType']]['display'] : null),
					'heading'      => (array_key_exists('title', $this->params['variations'][$item['variationType']]) ? $this->params['variations'][$item['variationType']]['title'] : null),
					'headingFrom'  => (array_key_exists('repeatHeadingFrom', $this->params['variations'][$item['variationType']]) ? $this->params['variations'][$item['variationType']]['repeatHeadingFrom'] : null),
					/*'display'	   => $this->params['variations'][$item['variationType']]['display'],
					'heading'	   => $this->params['variations'][$item['variationType']]['title'],
					'headingFrom'  => $this->params['variations'][$item['variationType']]['repeatHeadingFrom'],*/
				);
				$this->repeatCounter++;
			}
		}

	}

	protected function addTamplatesItems() {
		$counter = 0;
		foreach( $this->params['variations'] as $variation ) {
			$this->params['children'][$counter] =  array(
				'name'		=> $counter,
				'type'		=> 'repeater\\repeaterItem',
				'children'	=> $variation['repeat'],
				'skin'		=> $this->params['repeatSkin'],
				'heading'	=> isset($variation['title']) ? $variation['title'] : null,
				'template'	=> true
			);
			$counter++;
		}
	}
	protected function getChildren()
	{
		$temp = $this->children;
		$counter = 0;
		foreach ($this->params['variations'] as $value){
			unset($temp[$counter]);
			$counter++;
		}
		return $temp;
	}

	protected function setJSTamplates() {
		$tpls = array();
		$counter = 0;
		foreach( $this->params['variations'] as $key => $variation ) {
			$tpls[] = array(
				'id'	=> '#' . $this->children[$counter]->addTemplate(),
				'title' => isset($variation['title']) ? $variation['title'] : $key,
				'image' => isset($variation['image']) ? $variation['image'] : '',
			);
			$counter++;
		}
		$this->params['templateID'] = htmlspecialchars(json_encode( $tpls ));
	}
}