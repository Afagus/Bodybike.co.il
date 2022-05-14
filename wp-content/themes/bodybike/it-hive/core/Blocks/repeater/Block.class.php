<?php
namespace it_hive\core\Blocks\repeater;
use \it_hive\THEME;

define('remove_text', __( 'Remove', THEME::$textdomain ));

class Block extends \it_hive\core\Blocks\DataBlock {

	const hiddenDefaults = array(
		'repeat'            => array(),
		'repeatSkin'        => 'default',
		'repeatHeading'     => '',
		'repeatHeadingFrom' => false
	);

	const defaults = array(
		                 'value'      => array(),
		                 'templateID' => 0,
		                 'addText'    => 'Add+',
		                 'sortable'   => false,
		                 'limit'      => '',
                         'removeText' => remove_text
	                 ) + self::hiddenDefaults;

	const exclude = parent::exclude + self::hiddenDefaults;

    protected static $adminStyles = array(
        'repeaterItem-style' => 'admin.css'
    );

	protected static $adminScripts = array(
		'repeaterItem-control' => 'main.js'
	);

	protected $repeatCounter = 0;

	public function __construct( $params ) {
		$this->params = array_merge( self::defaults, $params );
		parent::__construct( $this->params );
	}

	protected function CreateChildren() {
		$this->addTamplatesItems();
		$this->addChildren();
		parent::CreateChildren();
		$this->setJSTamplates();
	}

	protected function addChildren() {
		$data = $this->get();
		$data = is_array($data) ? array_values( $data ) : [];
		foreach ( $data as $item ) {
			$this->params['children'][] = array(
				'name'         => $this->repeatCounter,
				'value'        => $item,
				'skin'         => $this->params['repeatSkin'],
				'display'      => (array_key_exists('repeatDisplay', $this->params) ? $this->params['repeatDisplay'] : null),
				'localDisplay' => (array_key_exists('localDisplay', $this->params) ? $this->params['localDisplay'] : null),
				'heading'      => $this->params['repeatHeading'],
				'removeText'   => $this->params['removeText'],
				'headingFrom'  => $this->params['repeatHeadingFrom'],
				'type'         => 'repeater\\repeaterItem',
				'children'     => $this->params['repeat']
			);
			$this->repeatCounter ++;
		}
	}

	protected function addTamplatesItems() {
		$this->params['children'][ - 1 ] = array(
			'name'       => - 1,
			'type'       => 'repeater\\repeaterItem',
			'skin'       => $this->params['repeatSkin'],
			'heading'    => $this->params['repeatHeading'],
			'removeText' => $this->params['removeText'],
			'children'   => $this->params['repeat'],
			'template'   => true
		);
	}

	protected function setJSTamplates() {
		$this->params['templateID'] = $this->children[0]->addTemplate();
		unset( $this->children[ - 1 ] );
	}

	public function render() {
		$this->params['sortable'] = array_key_exists('sortable', $this->params) ? 'data-sortable="sortable"' : null;
		$this->params['label']    = array_key_exists('label', $this->params) ? '<h4>' . $this->params['label'] . '</h4>' : null;
		$this->params['heading']  = array_key_exists('heading', $this->params) ? '<h4>' . $this->params['heading'] . '</h4>' : null;
		$html                     = parent::render();

		return $html;
	}

	protected function getChildren() {
		$temp = parent::getChildren();
		unset( $temp[ - 1 ] );

		return $temp;
	}
}