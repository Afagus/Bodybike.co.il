<?php
namespace it_hive\metaBoxes\pages;

class MetaBox extends \it_hive\core\AdminBox\MetaBox {
    protected $params = [
        'screen'        => 'page',
        'title'         => 'Page customization',
        'priority'      => 'high',
        'name'          => 'box',
        'single'        => true,
        'children'      => [
            'main' => main,
            'variations' => [
                'type'       => 'repeater\variations',
                'label'      => '',
                'skin'       => 'hoverTooltip',
                'addText'    => 'Add new block',
                'removeText' => 'Remove block',
                'repeatSkin' => 'slideToggle',
                'sortable'   => true,
                'variations' => [
                    'TitleTextVideoOrImage' => [
                        'title'  => 'Left: title, text | Right: video or image',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/left-title-text-Right-video-or-image.jpg',
                        'repeat' => TITLE + TEXT + VIDEO + POSTER  + HasLine,
                    ],
                    /*'TitleTextSlider' => [
                        'title'  => 'Left: title, text | Right: slider',
                        'image' => '',
                        'repeat' => TITLE + TEXT + SLIDER + HasLine,
                    ],*/
                    'TitleTextLinkBackground' => [
                        'title'  => 'Left: title | Right: text, link | Background: picture',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/left-title-right-text-link-background-picture.jpg',
                        'repeat' => TITLE + TEXT + LINK + BUTTON + POSTER + [
                                'mobileImageSecond' => [
                                    'type' => 'image',
                                    'label' => 'Poster (mobile) second',
                                ]] + HasLine,
                    ],
                    'TitleTextLinkImage' => [
                        'title'  => 'Left: title, text, link | Right: Image',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/left-title-text-link-right-image.jpg',
                        'repeat' => TITLE + TEXT + LINK + BUTTON + POSTER + HasLine,
                    ],
                    'TitleTextVideoLink' => [
                        'title'  => 'Title on top, left text, link, right video',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/title-on-top-left-text-link-right-video.jpg',
                        'repeat' => TITLE + TEXT + LINK + BUTTON + VIDEO + POSTER + /*['variations' => videoVariation] +*/ HasLine,
                    ],
                    'TopImageTitleTextLink' => [
                        'title'  => 'Top image | Left heading | Right text and link',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/top-image-left-heading-right-text-and-link.jpg',
                        'repeat' => POSTER + TITLE + TEXT + LINK + BUTTON + HasLine,
                    ],

                    'LeftImageTitleTextLink' => [
                        'title'  => 'Left image | Right: title, subTitle, text, link',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/left-image-right-title-subtitle-text-link.jpg',
                        'repeat' => POSTER + TITLE + subTITLE + TEXT + LINK + BUTTON + HasLine,
                    ],
                    /*'LeftAnimation' => [
                        'title'  => 'Left svg or Animation, right title, text',
                        'repeat' => POSTER + TITLE + TEXT,
                    ],*/

                    'PostsBlock' => [
                        'title'  => 'PostsBlock: Content block posts or links',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/postsblock-content-block-posts-or-links.jpg',
                        'repeat' => TITLE + LINK + [
                            'variations' => [
                                'type'       => 'repeater\variations',
                                'label'      => '',
                                'limit'      => 3,
                                'addText'    => 'Add block',
                                'removeText' => 'Remove block',
                                //'repeatSkin' => 'withoutRemove',
                                'sortable'   => true,
                                'variations' => [
                                    'post' => [
                                        'title'  => 'Post',
                                        'repeat' => [
                                            'link' => [
                                                'type' => 'selectPosts',
                                                'skin' => 'ajax',
                                                'query' => [
                                                    'post_type' => ['any'],
                                                ],
                                            ],
                                        ]
                                    ],
                                    'custom' => [
                                        'title'  => 'Custom block',
                                        'repeat' => POSTER + TEXT + [
                                            'date' => [
                                                'type' => 'text',
                                                'label' => 'Date',
                                            ],
                                        ] + BUTTON + LINK
                                    ],
                                ],
                            ],
                        ] + HasLine,
                    ],
                    'LogoSliderImages' => [
                        'title'  => 'LogoSliderImages: Image swapper (slider images)',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/logosliderimages-image-swapper-slider-images.jpg',
                        'repeat' => TITLE + [
                            'images' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'Image',
                                /*'repeatHeadingFrom' => 'I',*/
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new image',
                                'removeText' => 'Remove image',
                                'repeat' => [
                                    'image' => [
                                        'type' => 'image',
                                        'label' => 'Image'
                                    ],
                                ] + LINK,
                            ],
                        ] + HasLine,
                    ],
                    'SocialLinksAndPosts' => [
                        'title'  => 'SocialLinksAndPosts: Social links and posts',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/sociallinksandposts-social-links-and-posts.jpg',
                        'repeat' => TITLE + TEXT + HasLine + [
                            'hideBlock' => [
                                'type' => 'checkbox',
                                'label' => 'Hide block (if checked, the block will be hidden)?',
                                'default' => 1
                            ],
                        ],
                    ],
                    'InfoGraphics' => [
                        'title'  => 'Infographics Blocs and SVG',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/infographics-blocs-and-svg.jpg',
                        'repeat' => TITLE + subTITLE + [
                            'blocks' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'New Item',
                                'repeatHeadingFrom' => 'title',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new block',
                                'removeText' => 'Remove block',
                                'repeat' => [
                                        'image' => [
                                            'type' => 'image',
                                            'label' => 'Icon',
                                        ],
                                    ] + TITLE,
                            ],
                        ] + HasLine,
                    ],
                    'InfoGraphicsRows' => [
                        'title'  => 'InfoGraphics: type line rows',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/infographics-type-line-rows.jpg',
                        'repeat' => [
                            'headline' => [
                                'type' => 'group',
                                'label' => 'HeadLine (optional)',
                                'skin' => 'slideToggleWithoutRemove',
                                'children' => [
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
                            'line' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'Line',
                                'repeatHeadingFrom' => 'left',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add line',
                                'removeText' => 'Remove line',
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
                        ] + HasLine,
                    ],

                    'MediaBlock' => [
                        'title' => 'Media block: Title and Full width screen video',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/media-block-title-and-full-width-screen-video.jpg',
                        'repeat' => TITLE + /*['variations' => videoVariation] +*/ VIDEO + POSTER + HasLine,
                    ],

                    'Testimonials' => [
                        'title'  => 'Testimonials reviews',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/testimonials-reviews.jpg',
                        'repeat' => [
                            'blocks' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'Block',
                                'repeatHeadingFrom' => 'name',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new block',
                                'removeText' => 'Remove block',
                                'repeat' => POSTER + [
                                    'name' => [
                                        'type' => 'text',
                                        'label' => 'Name'
                                    ],
                                    'position' => [
                                        'type' => 'text',
                                        'label' => 'Position'
                                    ],
                                ] + TEXT
                            ],
                        ] + HasLine,
                    ],
                    'PublicationsBlock' => [
                        'title'  => 'Publications block',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/publications-block.jpg',
                        'repeat' => TITLE + LINK + BUTTON + [
                            'blocks' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'Block',
                                'repeatHeadingFrom' => 'title',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new block',
                                'removeText' => 'Remove block',
                                'limit' => 3,
                                'repeat' => POSTER + TITLE + LINK + BUTTON
                            ],
                        ] + HasLine,
                    ],
                    'TwoPieCharts' => [
                        'title'  => 'Title and Two pie charts',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/title-and-two-pie-charts.jpg',
                        'repeat' => TITLE + [
                            'onePie' => [
                                'type' => 'group',
                                'label' => 'First pie',
                                'skin' => 'slideToggleWithoutRemove',
                                'children' => TEXT + PERCENT + COLOR,
                            ],
                            'twoPie' => [
                                'type' => 'group',
                                'label' => 'Second pie',
                                'skin' => 'slideToggleWithoutRemove',
                                'children' => TEXT + PERCENT + COLOR,
                            ],
                        ] + HasLine,
                    ],
                    'DownloadBrochure' => [
                        'title'  => 'Download brochure block (title, text, bg, link)',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/download-brochure-block.jpg',
                        'repeat' => TITLE + TEXT + POSTER + [
                            'link' => [
                                'type' => 'attachment',
                                'skin' => 'readonly',
                                'label' => 'Link or select file',
                            ],
                        ] + BUTTON + HasLine
                    ],
                    'DiagramViralBacterial' => [
                        'title'  => 'Diagram: Viral - Bacterial',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/diagram-vral-bacterial.jpg',
                        'repeat' => POSTER + [
                            'start' => [
                                'type' => 'text',
                                'label' => 'Start text',
                            ],
                            'startSub' => [
                                'type' => 'text',
                                'label' => 'Start sub text',
                            ],
                            'end' => [
                                'type' => 'text',
                                'label' => 'End text',
                            ],
                            'endSub' => [
                                'type' => 'text',
                                'label' => 'End sub text',
                            ],
                            'one' => [
                                'type' => 'wpEditor',
                                'label' => 'One text',
                            ],
                            'two' => [
                                'type' => 'wpEditor',
                                'label' => 'Two text',
                            ],
                            'three' => [
                                'type' => 'wpEditor',
                                'label' => 'Three text',
                            ],
                            'four' => [
                                'type' => 'wpEditor',
                                'label' => 'Four text',
                            ],
                            'five' => [
                                'type' => 'wpEditor',
                                'label' => 'Five text',
                            ],
                            'comment' => [
                                'type' => 'wpEditor',
                                'label' => 'Comment',
                            ],
                        ] + HasLine,
                    ],
                    'OnePieChart' => [
                        'title'  => 'Title One pie chart',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/title-one-pie-chart.jpg',
                        'repeat' => [
                                'pie' => [
                                    'type' => 'group',
                                    'label' => 'Pie',
                                    'skin' => 'slideToggleWithoutRemove',
                                    'children' => TEXT + PERCENT + COLOR,
                                ],
                            ] + TITLE + TEXT + [
                                'comment' => [
                                    'type' => 'wpEditor',
                                    'label' => 'Comment',
                                ],
                            ] + HasLine,
                    ],
                    'BlurBanner' => [
                        'title'  => 'Banner with text on blurred background',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/banner-with-text-on-blurred-background.jpg',
                        'repeat' => [
                            'number' => [
                                'type' => 'text',
                                'label' => 'Number'
                            ]
                        ] + TEXT + POSTER + HasLine,
                    ],
                    'InfoGraphicsColumns' => [
                        'title'  => 'InfoGraphics: type Columns',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/infographics-type-columns.jpg',
                        'repeat' => TITLE + [
                            'columns' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'New Item',
                                'repeatHeadingFrom' => 'title',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new column',
                                'removeText' => 'Remove column',
                                'repeat' => POSTER + TITLE,
                            ],
                        ] + HasLine,
                    ],
                    'TextBlockAndLink' => [
                        'title'  => 'Left title, right text and link',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/left-title-right-text-and-link.jpg',
                        'repeat' => TITLE + TEXT + LINK + BUTTON + HasLine,
                    ],
                    'References' => [
                        'title'  => 'References',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/references.jpg',
                        'repeat' => TITLE + [
                            'variations' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'New Item',
                                'repeatHeadingFrom' => 'title',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new reference',
                                'removeText' => 'Remove reference',
                                'repeat' => LINK + [
                                    'title' => [
                                        'type' => 'text',
                                        'label' => 'Link name',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'FollowUsBlur' => [
                        'title'  => 'Follow Us Blur (contact us page)',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/folow-us-blur.jpg',
                        'repeat' => TITLE + TEXT + POSTER + HasLine,
                    ],

                    'ImageDilemmaTitleText' => [
                        'title'  => 'The dilemma block title, text, 2 images and text',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/the-dilemma-block-title-text-2-images-and-text.jpg',
                        'repeat' => TITLE + TEXT + [
                                'imgLeft' => [
                                    'type' => 'image',
                                    'label' => 'Image left',
                                ],
                                'imgRight' => [
                                    'type' => 'image',
                                    'label' => 'Image right',
                                ],
                                'middleText' => [
                                    'type' => 'wpEditor',
                                    'label' => 'Middle text',
                                ],
                            ] + HasLine,
                    ],
                    'HorizontalCharts' => [
                        'title'  => 'Horizontal charts',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/horizontal-charts.jpg',
                        'repeat' => TITLE + [
                            'variations' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'Chart Line',
                                /*'repeatHeadingFrom' => 'percentText',*/
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new line',
                                'removeText' => 'Remove line',
                                'repeat' => PERCENT + COLOR + [
                                    'percentText' => [
                                        'type' => 'text',
                                        'label' => 'Text under the number',
                                    ],
                                ] + TEXT,
                            ],
                        ] + HasLine,
                    ],
                    'LeftTitleRightImagedList' => [
                        'title'  => 'Left Title Right Imaged List',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/left-title-right-imaged-list.jpg',
                        'repeat' => TITLE + TEXT + [
                            'textAfter' => [
                                'type' => 'wpEditor',
                                'label' => 'Text after list',
                            ],
                            'variations' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'New Item',
                                'repeatHeadingFrom' => 'title',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new list item',
                                'removeText' => 'Remove list item',
                                'repeat' => TITLE + TEXT + [
                                    'image' => [
                                        'type' => 'image',
                                        'label' => 'Image'
                                    ],
                                ],
                            ],
                        ] + HasLine,
                    ],
                    'FormBVOne' => [
                        'title'  => 'Download File Form (Pardot) - Memed BV',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/download-file-form-pardot-memed-bv.jpg',
                        'repeat' => FormBV + HasLine + [
                                'thankYou' => [
                                    'type' => 'group',
                                    'label' => 'Thank You message after send form',
                                    'skin' => 'slideToggleWithoutRemove',
                                    'children' => TITLE + TEXT,
                                ],
                            ],
                    ],
                    'FormKEY' => [
                        'title'  => 'Download a Demo Form (Pardot) - Memed KEY',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/download-a-demo-form-pardot-memed-key.jpg',
                        'repeat' => FormBV + HasLine + [
                                'thankYou' => [
                                    'type' => 'group',
                                    'label' => 'Thank You message after send form',
                                    'skin' => 'slideToggleWithoutRemove',
                                    'children' => TITLE + TEXT,
                                ],
                            ],
                    ],
                    'PipelineBlock' => [
                        'title'  => 'Pipeline blocks body',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/pipeline-blocks-body.jpg',
                        'repeat' => [
                            'image' => [
                                'type' => 'image',
                                'label' => 'Decoration image'
                            ],
                            'blocks' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'New Item',
                                'repeatHeadingFrom' => 'title',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new item',
                                'removeText' => 'Remove item',
                                'repeat' => POSTER + TITLE + TEXT + LINK + BUTTON,
                            ],
                        ] + HasLine,
                    ],
                    'ProgressBlock' => [
                        'title'  => 'Pipeline progress block',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/pipeline-progress-block.jpg',
                        'repeat' => [
                            'titles' => [
                                'type' => 'group',
                                'label' => 'Titles',
                                'skin' => 'slideToggleWithoutRemove',
                                'children' => [
                                    'blocks' => [
                                        'type' => 'repeater',
                                        'sortable' => true,
                                        'repeatHeading' => 'New Item',
                                        'repeatHeadingFrom' => 'title',
                                        'repeatSkin' => 'slideToggleWithoutHeading',
                                        'addText' => 'Add new block line',
                                        'removeText' => 'Remove block line',
                                        'repeat' => TITLE,
                                    ],
                                ],
                            ],
                            'content' => [
                                'type' => 'group',
                                'label' => 'Lines',
                                'skin' => 'slideToggleWithoutRemove',
                                'children' => [
                                    'lines' => [
                                        'type' => 'repeater',
                                        'sortable' => true,
                                        'repeatHeading' => 'New Item',
                                        'repeatHeadingFrom' => 'title',
                                        'repeatSkin' => 'slideToggleWithoutHeading',
                                        'addText' => 'Add new line',
                                        'removeText' => 'Remove line',
                                        'repeat' => [
                                            'title' => [
                                                'type' => 'text',
                                                'label' => 'Line title'
                                            ],
                                            'titleColor' => [
                                                'type' => 'colorpicker',
                                                'label' => 'Title color',
                                            ],
                                            'lineWidth' => [
                                                'type' => 'number',
                                                'label' => 'Line width (indicated as a percentage)',
                                            ],
                                            'lineColor' => [
                                                'type' => 'colorpicker',
                                                'label' => 'Line color',
                                            ],
                                        ],
                                    ],
                                ],
                            ],

                        ] + HasLine,
                    ],
                    'LeftImageAccordingBlock' => [
                        'title'  => 'Left Image Right Hidden (Spoiler) Block',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/left-image-right-hidden-spoiler-block.jpg',
                        'repeat' => TITLE + POSTER + [
                                'blocks' => [
                                    'type' => 'repeater',
                                    'sortable' => true,
                                    'repeatHeading' => 'New Item',
                                    'repeatHeadingFrom' => 'title',
                                    'repeatSkin' => 'slideToggleWithoutHeading',
                                    'addText' => 'Add new block',
                                    'removeText' => 'Remove block',
                                    'repeat' => TITLE + TEXT,
                                ],
                            ] + HasLine,
                    ],
                    'CenterImageAccordingBlock' => [
                        'title'  => 'Center Image Any Position Hidden (Spoiler) Block',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/center-image-any-position-hidden-spoiler-block.jpg',
                        'repeat' => TITLE + POSTER + [
                            'blocks' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'New Item',
                                'repeatHeadingFrom' => 'title',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new block',
                                'removeText' => 'Remove block',
                                'repeat' => TITLE + WPTEXT,
                            ],
                        ] + HasLine,
                    ],
                    'ImageAndBlurText' => [
                        'title' => 'Image And Blur background Title and Text',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/image-and-blur-background-title-and-text.jpg',
                        'repeat' => POSTER + [
                            'title' => [
                                'type' => 'text',
                                'label' => 'left text',
                            ],
                            'text' => [
                                'type' => 'text',
                                'label' => 'right text',
                            ]
                        ] + HasLine,
                    ],
                    'TextBlockAndInfographicsColumns' => [
                        'title'  => 'Text block and 2 columns infographics',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/text-block-and-2-columns-infographics.jpg',
                        'repeat' => TITLE + TEXT + [
                            'columns' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'New Item',
                                'repeatHeadingFrom' => 'title',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new item',
                                'removeText' => 'Remove item',
                                'repeat' => TITLE + TEXT,
                            ],
                        ] + HasLine,
                    ],
                    'LeftAnimationBrochure' => [
                        'title' => 'Brochure block, Left animation',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/brochure-block-left-animation.jpg',
                        'repeat' => POSTER + TITLE + TEXT + ATTACHMENT + BUTTON + HasLine
                    ],
                    'CovidDiagramViral' => [
                        'title'  => 'Covid Viral diagram',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/covid-viral-diagram.jpg',
                        'repeat' => POSTER + [
                                'start' => [
                                    'type' => 'text',
                                    'label' => 'Start text',
                                ],
                                'startSub' => [
                                    'type' => 'text',
                                    'label' => 'Start sub text',
                                ],
                                'end' => [
                                    'type' => 'text',
                                    'label' => 'End text',
                                ],
                                'endSub' => [
                                    'type' => 'text',
                                    'label' => 'End sub text',
                                ],
                                'one' => [
                                    'type' => 'wpEditor',
                                    'label' => 'One text',
                                ],
                                'two' => [
                                    'type' => 'wpEditor',
                                    'label' => 'Two text',
                                ],
                                'three' => [
                                    'type' => 'wpEditor',
                                    'label' => 'Three text',
                                ],
                                'four' => [
                                    'type' => 'wpEditor',
                                    'label' => 'Four text',
                                ],
                            ] + HasLine,
                    ],
                    'LeftBlurImageBG' => [
                        'title' => 'Image BG and Left Blur text',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/image-bg--and-left-blur-text.jpg',
                        'repeat' => TITLE + POSTER + HasLine,
                    ],
                    'TwoBlocks' => [
                        'title' => 'Two blocks',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/two-blocks.jpg',
                        'repeat' => [
                            'leftBlock' => [
                                'type' => 'group',
                                'label' => 'Left block',
                                'skin' => 'slideToggleWithoutRemove',
                                'children' => TITLE + TEXT,
                            ],
                            'rightBlock' => [
                                'type' => 'group',
                                'label' => 'Right block',
                                'skin' => 'slideToggleWithoutRemove',
                                'children' => TITLE + TEXT,
                            ],
                        ] + HasLine,
                    ],
                    'ThreePie' => [
                        'title' => 'Three pies block',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/three-pies-block.jpg',
                        'repeat' => [
                            'pies' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'New Item',
                                'repeatHeadingFrom' => 'title',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add new Pie',
                                'removeText' => 'Remove Pie',
                                'limit' => 3,
                                'repeat' => TITLE + TEXT + PERCENT + COLOR + [
                                    'colorCircle' => [
                                        'type' => 'colorpicker',
                                        'label' => 'Color Circle',
                                    ],
                                ],
                            ],
                        ] + HasLine,
                    ],
                    'BarGraph' => [
                        'title' => 'Bar graph',
                        'image' => 'https://test.it-hive.net/memed/wp-content/themes/memed/screens/bar-graph.jpg',
                        'repeat' => TITLE + TEXT + [
                            'bar' => [
                                'type' => 'repeater',
                                'sortable' => true,
                                'repeatHeading' => 'New Item',
                                'repeatHeadingFrom' => 'title',
                                'repeatSkin' => 'slideToggleWithoutHeading',
                                'addText' => 'Add New Color',
                                'removeText' => 'Remove color',
                                'repeat' => TITLE + COLOR,
                            ],
                        ] + POSTER + HasLine,
                    ],


                ],
            ],
        ],
    ];

    public function __construct($params = []) {
        parent::__construct($this->params);
    }
}