<?php
namespace it_hive\core\Blocks\attachment;
use \it_hive\THEME;

define( 'removeText', __( 'Remove', THEME::$textdomain ) );
define( 'uploadText', __( 'Upload', THEME::$textdomain ) );

class Block extends \it_hive\core\Blocks\DataBlock {

    protected static $adminScripts = array(
        'wp-attachment-control' => 'main.js'
    );

	const defaults = array(
		'textUpload' => uploadText,
		'textRemove' => removeText,
	);

	public function __construct( $params ) {
		$this->params = array_merge(self::defaults, $params);
		parent::__construct( $this->params );
	}

    protected function applyParams() {
        $html = parent::applyParams();
        $html = str_replace('{{video}}', $this->get() ? wp_get_attachment_url( stripslashes($this->get()) ) : null, $html);
        return $html;
    }

    protected static function init() {
        wp_enqueue_media();
        parent::init();
    }

}