<?php

/**
 * Items
 */
const HasLine = [
    'hasLine' => [
        'type' => 'checkbox',
        'label' => 'Show bottom line for desktop?',
        'default' => 1
    ],
    'hasMobileLine' => [
        'type' => 'checkbox',
        'label' => 'Show bottom line for mobile?',
        'default' => 1
    ],
];
const POSTER = [
    'image' => [
        'type' => 'image',
        'label' => 'Poster',
    ]
 ];

const POSTER_MOBILE = [
	'mobileImage' => [
		'type' => 'image',
		'label' => 'Poster (mobile)',
	]
];

const TITLE = [
    'title' => [
        'type' => 'text',
        'label' => 'Title',
    ],
];
const subTITLE = [
    'subTitle' => [
        'type' => 'text',
        'label' => 'Sub title',
    ],
];
const TEXT = [
    'text' => [
        'type' => 'wpEditor',
        'label' => 'Text',
    ],
];
const WPTITLE = [
    'title' => [
        'type' => 'wpEditor',
        'label' => 'Title',
    ],
];
const WPsubTITLE = [
    'subTitle' => [
        'type' => 'wpEditor',
        'label' => 'Sub title',
    ],
];
const WPTEXT = [
    'text' => [
        'type' => 'text',
        'label' => 'Text',
    ],
];
const LINK = [
    'link' => [
        'type' => 'text',
        'label' => 'Link',
    ],
];
const LOGO_LINK = [
    'link' => [
        'type' => 'text',
        'label' => 'Logo link',
    ],
];
const BUTTON = [
    'button' => [
        'type' => 'text',
        'label' => 'Button name (if not specified)'
    ],
];
const PERCENT = [
    'percent' => [
    'type' => 'number',
    'label' => 'Percent',
    ],
];
const COLOR = [
    'color' => [
        'type' => 'colorpicker',
        'label' => 'Color',
    ],
];
const ATTACHMENT = [
    'attachment' => [
        'type' => 'attachment',
        'label' => 'Attachment',
        'skin' => 'readonly',
    ],
];
/**
 * Blocks
 */
const main = [
    'type' => 'group',
    'label' => 'Main head block',
    'skin' => 'slideToggleWithoutRemove',
    'children' => WPTITLE + WPsubTITLE + POSTER,
];
const TextBlock = [
    'title'  => 'Left title, right text',
    'repeat' => TITLE + TEXT + HasLine,
]; //используется в опшинах
const VIDEO = [
    'video' => [
        'type' => 'attachment',
        'label' => 'Video url',
    ]
];
const SLIDER = [
    'slider' => [
        'title'  => 'Slider',
        'type' => 'repeater',
        'sortable' => true,
        'repeatHeading' => 'Slide',
        'repeatHeadingFrom' => 'Slide',
        'repeatSkin' => 'slideToggleWithoutHeading',
        'addText' => 'Add new slide',
        'removeText' => 'Remove slide',
        'repeat' => [
            'slide' => [
                'type' => 'image',
                'label' => 'Slide',
            ],
        ],
    ],
];
const videoVariation = [
    'type'       => 'repeater\variations',
    'label'      => '',
    'limit'      => 1,
    'addText'    => 'Add',
    'removeText' => 'Remove',
    'sortable'   => true,
    'variations' => [
        'local' => [
            'title'  => 'Local video',
            'repeat' => [
                    'link' => [
                        'type' => 'attachment',
                        'label' => 'Video',
                    ],
                ] + POSTER,
        ],
        'remote' => [
            'title'  => 'Remote video',
            'repeat' => [
                    'link' => [
                        'type' => 'text',
                        'label' => 'Remote video',
                    ],
                ] + POSTER,
        ],
        'image' => [
            'title'  => 'Image',
            'repeat' => POSTER,
        ],
        'slider' => [
            'title'  => 'Slider',
            'repeat' => [
                'slides' => [
                    'title'  => 'Slider',
                    'type' => 'repeater',
                    'sortable' => true,
                    'limit' => 50,
                    'repeatHeading' => 'Slide',
                    'repeatHeadingFrom' => 'Slide',
                    'repeatSkin' => 'slideToggleWithoutHeading',
                    'addText' => 'Add new slide',
                    'removeText' => 'Remove slide',
                    'repeat' => [
                        'slide' => [
                            'type' => 'image',
                            'label' => 'Slide',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
const textBlockAndVideo = [
    'title'  => 'Left title, right text, video',
    'repeat' => TITLE + TEXT + VIDEO + HasLine,
];
const textBlockAndSlider = [
    'title'  => 'Left title, right text, slider',
    'repeat' => TITLE + TEXT + SLIDER + HasLine,
];
/*const infoGraphicsVariation = [
    'type'       => 'repeater\variations',
    'label'      => '',
    'limit'      => 100,
    'addText'    => 'Add line',
    'removeText' => 'Remove line',
    'sortable'   => true,
    'variations' => [
        'line' => [
            'title'  => 'element',
            'repeat' => [
                'left' => [
                    'type' => 'text',
                    'label' => 'Text left',
                ],
                'right' => [
                    'type' => 'text',
                    'label' => 'Text right',
                ],
            ],
        ],
        'headline' => [
            'title'  => 'Bold element',
            'repeat' => [
                'left' => [
                    'type' => 'text',
                    'label' => 'Text left',
                ],
                'right' => [
                    'type' => 'text',
                    'label' => 'Text right',
                ],
            ],
        ],
    ],
];*/
const pipelineBlock = [
    'title'  => 'Pipeline body block',
    'type' => 'repeater',
    'sortable' => true,
    'repeatHeading' => 'title',
    'repeatHeadingFrom' => 'title',
    'repeatSkin' => 'slideToggleWithoutHeading',
    'addText' => 'Add new block',
    'removeText' => 'Remove block',
    'repeat' => TITLE + TEXT + LINK + POSTER,
];
const FormContent = [
    'title' => [
        'type' => 'text',
        'label' => 'Title first line',
    ],
    'titleSecond' => [
        'type' => 'text',
        'label' => 'Title second line',
    ],
    'shortcode' => [
        'type' => 'text',
        'label' => 'Form shortcode'
    ],
    'skipStep' => [
        'type' => 'checkbox',
        'label' => 'Skip this form? (it is possible not to display this form without deleting the data)',
        'default' => 1
    ],
];
const FormBV = [
    'attachment' => [
        'type' => 'attachment',
        'skin' => 'readonly',
        'label' => 'File For Download',
    ],
    'formOne' => [
        'type' => 'group',
        'label' => 'First Step Form',
        'skin' => 'slideToggleWithoutRemove',
        'children' => FormContent,
    ],
    'formTwo' => [
        'type' => 'group',
        'label' => 'Second Step Form',
        'skin' => 'slideToggleWithoutRemove',
        'children' => FormContent,
    ],
    'formThree' => [
        'type' => 'group',
        'label' => 'Last Step Content',
        'skin' => 'slideToggleWithoutRemove',
        'children' => [
            'title' => [
                'type' => 'text',
                'label' => 'Title first line',
            ],
            'titleSecond' => [
                'type' => 'text',
                'label' => 'Title second line',
            ],
        ],
    ],
];