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


						'socials' => [
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

						'headcontact' => [
							'type'     => 'group',
							'label'    => 'Add phone in contact form block',
							'children' => [
								'phone_text' => [
									'type'  => 'text',
									'label' => 'Phone block text'
								],
								'phone'      => [
									'type'  => 'text',
									'label' => 'Phone number (display)'
								],
								'phone_db'   => [
									'type'  => 'text',
									'label' => 'Phone number (database)'
								],

							],
						],

					],
				],


			],
		],

	];

	public function __construct( $params = [] ) {
		parent::__construct( $this->params );
	}
}