<?php
namespace it_hive;

trait init {
	protected static $initialized = array();

	protected static function init() {}

	public static function __init() {
		if(!array_key_exists(static::class, static::$initialized)) {
			static::init();
			static::$initialized[static::class] = true;
		}
	}
}