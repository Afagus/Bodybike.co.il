<?php
namespace it_hive;

class loader {

	public $folder = '';

	private $prefix = '';

	/** @param string $folder  */
	public function __construct( $folder='', $prefix='' ) {
		$this->folder = $folder;
		$this->prefix = $prefix;
		spl_autoload_register( array( $this,'loader' ) );
	}

	public static function loadFile( $file ) {
		$file = DIRECTORY_SEPARATOR == '\\' ? $file : str_replace( '\\', DIRECTORY_SEPARATOR, $file );
		if( file_exists($file) ) {
			require_once( $file );
			return true;
		}
		return false;
	}

// TODO: оптимизация лоадера до лучших времен.

	public function loader( $item ) {
		if( $this->prefix ) {
			$_item = str_replace($this->prefix, '', $item);
			if( $item == $_item ) {
				return;
			}
			$item = $_item;
		}
		$this->loadClass( $item ) || $this->loadInterface( $item ) || $this->loadTrait( $item );
	}

	public function loadClass( $classname ) {
		$filename = $this->folder . '/' . $classname . '.class.php';
		if( self::loadFile( $filename ) ) {
			$fullName = $this->prefix . $classname;
			if( is_subclass_of($fullName, 'it_hive\__init') ) {
				$fullName::__init();
			}
			return true;
		}
		return false;
	}

	public function loadInterface( $interface ) {
		$filename = $this->folder . '/' . $interface . '.interface.php';
		return self::loadFile( $filename );
	}

	public function loadTrait( $trait ) {
		$filename = $this->folder . '/' . $trait . '.trait.php';
		return self::loadFile( $filename );
	}
}