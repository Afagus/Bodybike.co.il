<?php

namespace it_hive\options\main;
const ADDRESS        = [
	'phone'   => [
		'type'  => 'text',
		'label' => 'Phone number'
	],
	'email'   => [
		'type'  => 'text',
		'label' => 'E-mail',
	],
	'street'  => [
		'type'  => 'text',
		'label' => 'Street'
	],
	'street2' => [
		'type'  => 'text',
		'label' => 'Street2 (second line)'
	],
];
const HowToShowPosts = [
	'showPosts' => [
		'type'    => 'checkbox',
		'default' => 'checked',
		'label'   => 'Show last post?',
	],
];
class OptionsPage extends \it_hive\core\AdminBox\OptionsPage {
	protected static $classes = false;
	protected $params = [
		'name'       => 'options',
		'title'      => 'Block settings',
		'menu_title' => ' כלליו',
		'save_text'  => 'Save',
		'content'    => '',
		'single'     => true,
		'soc'        => [
			'type'  => 'group',
			'label' => 'Social links'
		],
		'children'   => [
			'options' => [
				'type' => 'tabs',
				'tabs' => [

					'general' => [
						'uploadPhoto' => [
							'type'     => 'group',
							'label'    => 'Logo',
							'children' => POSTER + LOGO_LINK,
						]

					],

					'footer ' => [
						'uploadPhoto' => [
							'type'     => 'group',
							'label'    => 'Logo',
							'children' => POSTER + LOGO_LINK,
						],


						'socials'     => [
							'type'     => 'group',
							'label'    => 'Social',
							'children' => [

								'instagram' => [
									'type'  => 'text',
									'label' => 'Instagram',
								],
								'youTube'   => [
									'type'  => 'text',
									'label' => 'YouTube',
								],
								'faceBook'  => [
									'type'  => 'text',
									'label' => 'FaceBook',

								],
							],
						],
						'offices'     => [
							'type'              => 'repeater',
							'sortable'          => true,
							'repeatHeading'     => 'Address',
							'repeatHeadingFrom' => 'address',
							'repeatSkin'        => 'slideToggleWithoutHeading',
							'addText'           => 'Add new address',
							'removeText'        => 'Remove address',
							'limit'             => 3,
							'repeat'            => TITLE + ADDRESS,
						],
						'headcontact' => [
							'type'     => 'group',
							'label'    => 'The address that is displayed in the contact block',
							'children' => ADDRESS,
						],

					],
				],


			],
		],

	];

	protected static $adminScripts = [
		'options-js' => 'main.js'
	];

	protected static $adminStyles = [
		'jquery-ui-css' => 'jquery-ui.css'
	];

	public function __construct( $params = [] ) {
		parent::__construct( $this->params );
	}
}