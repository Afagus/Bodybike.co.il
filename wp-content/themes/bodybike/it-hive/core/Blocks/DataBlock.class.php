<?php
namespace it_hive\core\Blocks;

abstract class DataBlock extends Box {
	const hiddenDefaults = array(
		'single'		=> true,
		'source'		=> 'meta',
		'sourceObject'	=> false
	);

	const defaults = array(
		'value'			=> '',
		'placeholder'	=> '',
		'label'			=> ''
	) + self::hiddenDefaults;

	const exclude = parent::exclude + self::hiddenDefaults;

	protected static $adminScripts = array(
		'theme-add-media' => 'admin.js'
	);

	protected static $adminStyles = array(
		'theme-add-media' => 'admin.css'
	);

	protected $value = null;

	protected $dataChildren = array();

	protected static $displays = [];

	public function __construct( $params ) {
		if (array_key_exists('dataParent', $params) && $params['dataParent']) {
			if (!array_key_exists('source', $params)) {
				$params['source'] = $params['dataParent']->getParam( 'source' );
			}
            if (!array_key_exists('sourceObject', $params)) {
				$params['sourceObject'] = $params['dataParent']->getParam( 'sourceObject' );
			}
			$params['dataParent']->addChild( $this ,$params['name']);
		}
		$this->params = array_merge(self::defaults,$params);
		parent::__construct( $this->params );
	}

	protected function getChildren(){
		return $this->dataChildren;
	}

	protected function getDisplay($skin){
		if(!key_exists($skin,static::$displays)){
			$skinFile = $skin . '.tpl.php';
			static::$displays[$skin] = function ($data , $children , $params , $Block) use ($skinFile){
				require($skinFile);
			};
		}
		return static::$displays[$skin];
	}

	public function display($skin = null){
		$classInfo = new \ReflectionClass($this);
		$classBase = dirname($classInfo->getFileName()) . DIRECTORY_SEPARATOR . 'displays' . DIRECTORY_SEPARATOR;
		if(!$skin){
			($skin = $this->params['localDisplay']) ||
			($skin = $this->params['display']) || //TODO: ето не работает
			($skin = $classBase.'default');
		}else{
			if(!file_exists(($skin.'.tpl.php'))){
				$skin= $classBase.$skin;
			}
		}
		$this->params['value'] = $this->get();
		$dispalay = $this->getDisplay($skin);
		$dispalay( $this->get() , $this->getChildren() ,$this->params, $this);
	}

	public function displayChild($child , $skin = null){
		$this->dataChildren[$child]->display($skin);
	}

	public function render() {
		$this->params['value'] = $this->renderGet();
		$html = parent::render();
		$html=str_replace('{{name}}', $this->getName(), $html);
		return $html;
	}

	public function renderGet(){
		return $this->get();
	}

	protected function CreateChildren() {
		foreach( $this->params['children'] as $name => $child ) {
			$this->params['children'][$name] = $this->params['children'][$name] + array(
				'single'		=> ($this->params['dataParent'] ? false : !$this->params['single']),
				'dataParent'	=> $this
			);
		}
		parent::CreateChildren();
	}

	protected function CreateChildrenRecursive(){
		$this->params['value'] = $this->get();
		parent::CreateChildrenRecursive();
	}

	public function getName( $forTpl = false ) {
		if( $this->params['single'] || !$this->parent ) {
			return $this->name;
		}
		return $this->params['dataParent']->getName() . ( $this->name !== '' ? '[' . $this->name . ']' : '' );

	}

	protected function save() {
		if( $this->isSingle() ) {
			$source = 'it_hive\core\source\\' . $this->params['source'] . '::update';
			call_user_func_array($source, array($this->name, $_POST[$this->name], $this->params['sourceObject']));
		}
		foreach( $this->dataChildren as $child ) {
			$child->save();
		}
	}

	protected function get( $key = null ) {
		if( $key !== null ) {
			if( $key === '' ) {
				return $this->params['value'];
			}

			return is_array($this->params['value']) ? (array_key_exists($key, $this->params['value']) ? $this->params['value'][$key] : null) : null;
		}
		$value = null;
		if( $this->isSingle() ) {
			$source = 'it_hive\core\source\\' . $this->params['source'] . '::get';
			$value = call_user_func_array($source, array($this->getName(), $this->params['sourceObject']));
		}
		elseif( $this->params['dataParent'] ) {
			$value = $this->params['dataParent']->get( $this->name );
		}
		return $value !== null ? $value : $this->params['value'];
	}

	public function isSingle() {
		return $this->params['single'];
	}

	public function addChild( $child ,$name = null) {
		$this->dataChildren[$name] = $child;
	}

	public function getTpl() {
		$tpl = parent::getTpl();
		$tpl= str_replace('{{name}}', $this->getName(), $tpl);
		return $tpl;
	}

	protected static function getLocalDisplay($skin){
		$classInfo = new \ReflectionClass(static::class);
		$skinFile = dirname($classInfo->getFileName()) . DIRECTORY_SEPARATOR . 'displays' . DIRECTORY_SEPARATOR . $skin. 'tpl.php';
		return $skinFile;
	}

	public function getHeading(){
		return $this->get();
	}


	public static function enqueueCurrentScreen(){
		global $post;
		if($post)
			echo '<script type="text/javascript">var current_screen="'. get_post_meta($post->ID,'_wp_page_template',true).'";</script>';
	}



	protected static function init()
	{
		add_action( 'admin_footer', array( __CLASS__, 'enqueueCurrentScreen' ) );
		parent::init(); // TODO: Change the autogenerated stub
	}
}