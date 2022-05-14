<?php
namespace it_hive\options\main;
const ADDRESS = [
    'phone' => [
        'type' => 'text',
        'label' => 'Phone number'
    ],
    'email' => [
        'type' => 'text',
        'label' => 'E-mail',
    ],
    'street' => [
        'type' => 'text',
        'label' => 'Street'
    ],
    'street2' => [
        'type' => 'text',
        'label' => 'Street2 (second line)'
    ],
];
const HowToShowPosts = [
    'showPosts' => [
        'type' => 'checkbox',
        'default' => 'checked',
        'label' => 'Show last post?',
    ],
];
class OptionsPage extends \it_hive\core\AdminBox\OptionsPage {
	protected static $classes = false;
	protected $params = [
		'name'      => 'options',
		'title'     => 'Block settings',
		'menu_title' => 'Options',
		'save_text' => 'Save',
		'content'   => '',
		'single'    => true,
		'children'  => [
			'options' => [
				'type' => 'tabs',
				'tabs' => [
				    'global' => [
                        'search' => [
                            'type' => 'group',
                            'label' => 'Customize page search',
                            'skin' => 'slideToggleWithoutRemove',
                            'children' => WPTITLE + WPsubTITLE + POSTER,
                        ],
                        'copyright' => [
                            'type' => 'group',
                            'label' => 'Copyright',
                            'skin' => 'slideToggleWithoutRemove',
                            'children' => TEXT,
                        ],
                        'scripts' => [
                            'type' => 'group',
                            'label' => 'JS scripts (example analytics etc.)',
                            'skin' => 'slideToggleWithoutRemove',
                            'children' => [
                                'text' => [
                                    'type' => 'textarea',
                                    'label' => 'Input this field scripts',
                                ],
                            ],
                        ],
                    ],
                    'contact' => [
                        'socials' => [
                            'type' => 'group',
                            'label' => 'Social links',
                            'children' => [
                                'linkedin' => [
                                    'type' => 'group',
                                    'label' => 'LinkedIn',
                                    'skin' => 'slideToggleWithoutRemove',
                                    'children' => LINK + HowToShowPosts,
                                ],
                                'twitter' => [
                                    'type' => 'group',
                                    'label' => 'Twitter',
                                    'skin' => 'slideToggleWithoutRemove',
                                    'children' => LINK + HowToShowPosts,
                                ],
                                'facebook' => [
                                    'type' => 'group',
                                    'label' => 'FaceBook',
                                    'skin' => 'slideToggleWithoutRemove',
                                    'children' => LINK + HowToShowPosts,
                                ],
                            ],
                        ],
                        'officesTitle' => [
                            'type' => 'wpEditor',
                            'label' => 'Block offices title',
                        ],
                        'offices' => [
                            'type' => 'repeater',
                            'sortable' => true,
                            'repeatHeading' => 'Address',
                            'repeatHeadingFrom' => 'address',
                            'repeatSkin' => 'slideToggleWithoutHeading',
                            'addText' => 'Add new address',
                            'removeText' => 'Remove address',
                            'limit' => 3,
                            'repeat' => TITLE + ADDRESS,
                        ],
                        'headcontact' => [
                            'type' => 'group',
                            'label' => 'The address that is displayed in the contact block',
                            'children' => ADDRESS,
                        ],
                        'thankYou' => [
                            'type' => 'group',
                            'label' => 'Thank you message after send contact form',
                            'children' => TITLE + TEXT,
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

	public function __construct($params = []) {
		parent::__construct($this->params);
	}
}