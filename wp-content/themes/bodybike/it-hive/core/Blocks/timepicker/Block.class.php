<?php

namespace it_hive\core\Blocks\timepicker;

class Block extends \it_hive\core\Blocks\DataBlock {
	const defaults = array(
		'timeFormat' => 'H:i',
		'start' => '00:00',
		'end'   => '23:00',
		'step'   => '60',
	);

	public function __construct( $params ) {
		$this->params = array_merge( self::defaults, $params );
		parent::__construct( $this->params );
	}

	protected static $adminScripts = array(
		'timepicker-js'         => 'jquery.timepicker.min.js',
		'wp-timepicker-control' => 'main.js',
	);
	protected static $adminStyles = array(
		'timepicker-css' => 'timepicker.css',
	);

}