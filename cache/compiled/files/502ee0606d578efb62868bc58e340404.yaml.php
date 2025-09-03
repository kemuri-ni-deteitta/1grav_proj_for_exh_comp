<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/expoGroupOnServer/user/themes/quark/blueprints.yaml',
    'modified' => 1756928897,
    'size' => 26056,
    'data' => [
        'name' => 'Quark',
        'version' => '1.7.0',
        'description' => 'Customizable, responsive, and modern Grav theme',
        'icon' => 'theme://images/logo.svg',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'https://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-quark',
        'demo' => 'https://demo.getgrav.org/blog-skeleton',
        'keywords' => 'quark, theme, responsive, html5, css3, blog',
        'bugs' => 'https://github.com/getgrav/grav-theme-quark/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.CONTENT',
                            'fields' => [
                                'defaults' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.DEFAULTS',
                                    'underline' => true,
                                    'fields' => [
                                        '@section.content' => [
                                            'type' => 'section',
                                            'title' => 'PLUGIN_ADMIN.CONTENT',
                                            'fields' => [
                                                'content' => [
                                                    'type' => 'tab',
                                                    'title' => 'PLUGIN_ADMIN.CONTENT',
                                                    'fields' => [
                                                        'default_lang' => [
                                                            'type' => 'text',
                                                            'size' => 'small',
                                                            'label' => 'PLUGIN_ADMIN.DEFAULT_LANG',
                                                            'help' => 'PLUGIN_ADMIN.DEFAULT_LANG_HELP',
                                                            'default' => 'en'
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'navigation' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.NAVIGATION',
                            'fields' => [
                                'navigation' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.NAVIGATION',
                                    'underline' => true,
                                    'fields' => [
                                        'dropdowns' => [
                                            'type' => 'section',
                                            'title' => 'Dropdown Navigation',
                                            'fields' => [
                                                'enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Enable Dropdown Menus',
                                                    'help' => 'Enable hover-based dropdown submenus',
                                                    'default' => true,
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'animation' => [
                                                    'type' => 'select',
                                                    'label' => 'Dropdown Animation',
                                                    'help' => 'Choose the animation style for dropdown menus',
                                                    'default' => 'fade',
                                                    'options' => [
                                                        'fade' => 'Fade',
                                                        'slide' => 'Slide',
                                                        'zoom' => 'Zoom',
                                                        'none' => 'None'
                                                    ]
                                                ],
                                                'speed' => [
                                                    'type' => 'range',
                                                    'label' => 'Animation Speed',
                                                    'help' => 'Speed of dropdown animations (in milliseconds)',
                                                    'default' => 350,
                                                    'min' => 100,
                                                    'max' => 1000,
                                                    'step' => 50
                                                ],
                                                'hover_delay' => [
                                                    'type' => 'range',
                                                    'label' => 'Hover Delay',
                                                    'help' => 'Delay before showing dropdown on hover (in milliseconds)',
                                                    'default' => 0,
                                                    'min' => 0,
                                                    'max' => 1000,
                                                    'step' => 50
                                                ],
                                                'hide_delay' => [
                                                    'type' => 'range',
                                                    'label' => 'Hide Delay',
                                                    'help' => 'Delay before hiding dropdown when mouse leaves (in milliseconds)',
                                                    'default' => 0,
                                                    'min' => 0,
                                                    'max' => 1000,
                                                    'step' => 50
                                                ]
                                            ]
                                        ],
                                        'mobile' => [
                                            'type' => 'section',
                                            'title' => 'Mobile Navigation',
                                            'fields' => [
                                                'enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Enable Mobile Menu',
                                                    'help' => 'Enable slide-out mobile navigation panel',
                                                    'default' => true,
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'breakpoint' => [
                                                    'type' => 'range',
                                                    'label' => 'Mobile Breakpoint',
                                                    'help' => 'Screen width at which mobile navigation activates (in pixels)',
                                                    'default' => 980,
                                                    'min' => 480,
                                                    'max' => 1200,
                                                    'step' => 20
                                                ],
                                                'animation' => [
                                                    'type' => 'select',
                                                    'label' => 'Mobile Menu Animation',
                                                    'help' => 'Choose the animation style for mobile menu',
                                                    'default' => 'slide',
                                                    'options' => [
                                                        'slide' => 'Slide',
                                                        'fade' => 'Fade',
                                                        'zoom' => 'Zoom',
                                                        'none' => 'None'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'jquery' => [
                                            'type' => 'section',
                                            'title' => 'jQuery & Libraries',
                                            'fields' => [
                                                'enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Load jQuery',
                                                    'help' => 'Load jQuery library (required for Dropotron and mobile navigation)',
                                                    'default' => true,
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'dropotron' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Load Dropotron',
                                                    'help' => 'Load Dropotron library for enhanced dropdown functionality',
                                                    'default' => true,
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'skel' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Load Skel.js',
                                                    'help' => 'Load Skel.js for responsive breakpoint management',
                                                    'default' => true,
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'mainmenu' => [
                                            'type' => 'section',
                                            'title' => 'Main Menu',
                                            'fields' => [
                                                '@section.mainmenu' => [
                                                    'type' => 'section',
                                                    'title' => 'PLUGIN_ADMIN.MAIN_MENU',
                                                    'fields' => [
                                                        'mainmenu' => [
                                                            'type' => 'tab',
                                                            'title' => 'PLUGIN_ADMIN.MAIN_MENU',
                                                            'fields' => [
                                                                'mainmenu' => [
                                                                    'type' => 'list',
                                                                    'label' => 'PLUGIN_ADMIN.MAIN_MENU',
                                                                    'help' => 'PLUGIN_ADMIN.MAIN_MENU_HELP',
                                                                    'fields' => [
                                                                        'text' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_ADMIN.TEXT'
                                                                        ],
                                                                        'link' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_ADMIN.LINK'
                                                                        ],
                                                                        'icon' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_ADMIN.ICON'
                                                                        ],
                                                                        'target' => [
                                                                            'type' => 'select',
                                                                            'label' => 'PLUGIN_ADMIN.TARGET',
                                                                            'default' => '_self',
                                                                            'options' => [
                                                                                '_self' => 'PLUGIN_ADMIN.TARGET_SELF',
                                                                                '_blank' => 'PLUGIN_ADMIN.TARGET_BLANK',
                                                                                '_parent' => 'PLUGIN_ADMIN.TARGET_PARENT',
                                                                                '_top' => 'PLUGIN_ADMIN.TARGET_TOP'
                                                                            ]
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'styles' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.STYLES',
                            'fields' => [
                                '@section.styles' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.STYLES',
                                    'fields' => [
                                        'styles' => [
                                            'type' => 'tab',
                                            'title' => 'PLUGIN_ADMIN.STYLES',
                                            'fields' => [
                                                'Default' => [
                                                    'type' => 'section',
                                                    'title' => 'Default',
                                                    'fields' => [
                                                        'favicon' => [
                                                            'type' => 'file',
                                                            'label' => 'PLUGIN_ADMIN.FAVICON',
                                                            'destination' => 'theme://images',
                                                            'multiple' => false,
                                                            'accept' => 'image/*'
                                                        ],
                                                        'header_logo' => [
                                                            'type' => 'file',
                                                            'label' => 'PLUGIN_ADMIN.HEADER_LOGO',
                                                            'destination' => 'theme://images',
                                                            'multiple' => false,
                                                            'accept' => 'image/*'
                                                        ],
                                                        'custom_logo' => [
                                                            'type' => 'file',
                                                            'label' => 'PLUGIN_ADMIN.CUSTOM_LOGO',
                                                            'destination' => 'theme://images',
                                                            'multiple' => false,
                                                            'accept' => 'image/*'
                                                        ],
                                                        'custom_logo_mobile' => [
                                                            'type' => 'file',
                                                            'label' => 'PLUGIN_ADMIN.CUSTOM_LOGO_MOBILE',
                                                            'destination' => 'theme://images',
                                                            'multiple' => false,
                                                            'accept' => 'image/*'
                                                        ],
                                                        'header-fixed' => [
                                                            'type' => 'toggle',
                                                            'label' => 'PLUGIN_ADMIN.HEADER_FIXED',
                                                            'help' => 'PLUGIN_ADMIN.HEADER_FIXED_HELP',
                                                            'highlight' => 1,
                                                            'options' => [
                                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                                            ],
                                                            'validate' => [
                                                                'type' => 'bool'
                                                            ]
                                                        ],
                                                        'header-animated' => [
                                                            'type' => 'toggle',
                                                            'label' => 'PLUGIN_ADMIN.HEADER_ANIMATED',
                                                            'help' => 'PLUGIN_ADMIN.HEADER_ANIMATED_HELP',
                                                            'highlight' => 1,
                                                            'options' => [
                                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                                            ],
                                                            'validate' => [
                                                                'type' => 'bool'
                                                            ]
                                                        ],
                                                        'header-dark' => [
                                                            'type' => 'toggle',
                                                            'label' => 'PLUGIN_ADMIN.HEADER_DARK',
                                                            'help' => 'PLUGIN_ADMIN.HEADER_DARK_HELP',
                                                            'highlight' => 0,
                                                            'options' => [
                                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                                            ],
                                                            'validate' => [
                                                                'type' => 'bool'
                                                            ]
                                                        ],
                                                        'header-transparent' => [
                                                            'type' => 'toggle',
                                                            'label' => 'PLUGIN_ADMIN.HEADER_TRANSPARENT',
                                                            'help' => 'PLUGIN_ADMIN.HEADER_TRANSPARENT_HELP',
                                                            'highlight' => 0,
                                                            'options' => [
                                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                                            ],
                                                            'validate' => [
                                                                'type' => 'bool'
                                                            ]
                                                        ],
                                                        'sticky_footer' => [
                                                            'type' => 'toggle',
                                                            'label' => 'PLUGIN_ADMIN.STICKY_FOOTER',
                                                            'help' => 'PLUGIN_ADMIN.STICKY_FOOTER_HELP',
                                                            'highlight' => 1,
                                                            'options' => [
                                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                                            ],
                                                            'validate' => [
                                                                'type' => 'bool'
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'blog-page' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'PLUGIN_ADMIN.BLOG_PAGE',
                    'help' => 'PLUGIN_ADMIN.BLOG_PAGE_HELP',
                    'custom_logo_scaled' => [
                        'type' => 'file',
                        'label' => 'PLUGIN_ADMIN.CUSTOM_LOGO_SCALED',
                        'destination' => 'theme://images',
                        'multiple' => false,
                        'accept' => 'image/*'
                    ],
                    'hide_git_sync_repo_link' => [
                        'type' => 'toggle',
                        'label' => 'PLUGIN_ADMIN.HIDE_GIT_SYNC_REPO_LINK',
                        'help' => 'PLUGIN_ADMIN.HIDE_GIT_SYNC_REPO_LINK_HELP',
                        'highlight' => 0,
                        'options' => [
                            1 => 'PLUGIN_ADMIN.ENABLED',
                            0 => 'PLUGIN_ADMIN.DISABLED'
                        ],
                        'validate' => [
                            'type' => 'bool'
                        ]
                    ],
                    'sidebar_include' => [
                        'type' => 'text',
                        'size' => 'medium',
                        'label' => 'PLUGIN_ADMIN.SIDEBAR_INCLUDE',
                        'help' => 'PLUGIN_ADMIN.SIDEBAR_INCLUDE_HELP'
                    ],
                    'sidebar_exclude' => [
                        'type' => 'text',
                        'size' => 'medium',
                        'label' => 'PLUGIN_ADMIN.SIDEBAR_EXCLUDE',
                        'help' => 'PLUGIN_ADMIN.SIDEBAR_EXCLUDE_HELP'
                    ],
                    'sidebar_post_include' => [
                        'type' => 'text',
                        'size' => 'medium',
                        'label' => 'PLUGIN_ADMIN.SIDEBAR_POST_INCLUDE',
                        'help' => 'PLUGIN_ADMIN.SIDEBAR_POST_INCLUDE_HELP'
                    ],
                    'sidebar_post_exclude' => [
                        'type' => 'text',
                        'size' => 'medium',
                        'label' => 'PLUGIN_ADMIN.SIDEBAR_POST_EXCLUDE',
                        'help' => 'PLUGIN_ADMIN.SIDEBAR_POST_EXCLUDE_HELP'
                    ],
                    'advanced' => [
                        'type' => 'tab',
                        'title' => 'PLUGIN_ADMIN.ADVANCED',
                        'fields' => [
                            '@section.advanced' => [
                                'type' => 'section',
                                'title' => 'PLUGIN_ADMIN.ADVANCED',
                                'fields' => [
                                    'advanced' => [
                                        'type' => 'tab',
                                        'title' => 'PLUGIN_ADMIN.ADVANCED',
                                        'fields' => [
                                            'css_cdn' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.CSS_CDN',
                                                'help' => 'PLUGIN_ADMIN.CSS_CDN_HELP'
                                            ],
                                            'js_cdn' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.JS_CDN',
                                                'help' => 'PLUGIN_ADMIN.JS_CDN_HELP'
                                            ],
                                            'css_local' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.CSS_LOCAL',
                                                'help' => 'PLUGIN_ADMIN.CSS_LOCAL_HELP'
                                            ],
                                            'js_local' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.JS_LOCAL',
                                                'help' => 'PLUGIN_ADMIN.JS_LOCAL_HELP'
                                            ],
                                            'google_fonts' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.GOOGLE_FONTS',
                                                'help' => 'PLUGIN_ADMIN.GOOGLE_FONTS_HELP'
                                            ],
                                            'fontawesome' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.FONTAWESOME',
                                                'help' => 'PLUGIN_ADMIN.FONTAWESOME_HELP'
                                            ],
                                            'google_analytics' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.GOOGLE_ANALYTICS',
                                                'help' => 'PLUGIN_ADMIN.GOOGLE_ANALYTICS_HELP'
                                            ],
                                            'google_tag_manager' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.GOOGLE_TAG_MANAGER',
                                                'help' => 'PLUGIN_ADMIN.GOOGLE_TAG_MANAGER_HELP'
                                            ],
                                            'piwik' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.PIWIK',
                                                'help' => 'PLUGIN_ADMIN.PIWIK_HELP'
                                            ],
                                            'piwik_site_id' => [
                                                'type' => 'text',
                                                'size' => 'small',
                                                'label' => 'PLUGIN_ADMIN.PIWIK_SITE_ID',
                                                'help' => 'PLUGIN_ADMIN.PIWIK_SITE_ID_HELP'
                                            ],
                                            'piwik_img' => [
                                                'type' => 'toggle',
                                                'label' => 'PLUGIN_ADMIN.PIWIK_IMG',
                                                'help' => 'PLUGIN_ADMIN.PIWIK_IMG_HELP',
                                                'highlight' => 0,
                                                'options' => [
                                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                                ],
                                                'validate' => [
                                                    'type' => 'bool'
                                                ]
                                            ],
                                            'twitter' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.TWITTER',
                                                'help' => 'PLUGIN_ADMIN.TWITTER_HELP'
                                            ],
                                            'facebook' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.FACEBOOK',
                                                'help' => 'PLUGIN_ADMIN.FACEBOOK_HELP'
                                            ],
                                            'facebook_app_id' => [
                                                'type' => 'text',
                                                'size' => 'large',
                                                'label' => 'PLUGIN_ADMIN.FACEBOOK_APP_ID',
                                                'help' => 'PLUGIN_ADMIN.FACEBOOK_APP_ID_HELP'
                                            ],
                                            'css_pipeline' => [
                                                'type' => 'toggle',
                                                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                                                'help' => 'PLUGIN_ADMIN.CSS_PIPELINE_HELP',
                                                'highlight' => 0,
                                                'options' => [
                                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                                ],
                                                'validate' => [
                                                    'type' => 'bool'
                                                ]
                                            ],
                                            'js_pipeline' => [
                                                'type' => 'toggle',
                                                'label' => 'PLUGIN_ADMIN.JS_PIPELINE',
                                                'help' => 'PLUGIN_ADMIN.JS_PIPELINE_HELP',
                                                'highlight' => 0,
                                                'options' => [
                                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                                ],
                                                'validate' => [
                                                    'type' => 'bool'
                                                ]
                                            ],
                                            'css_minify' => [
                                                'type' => 'toggle',
                                                'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                                                'help' => 'PLUGIN_ADMIN.CSS_MINIFY_HELP',
                                                'highlight' => 1,
                                                'options' => [
                                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                                ],
                                                'validate' => [
                                                    'type' => 'bool'
                                                ]
                                            ],
                                            'js_minify' => [
                                                'type' => 'toggle',
                                                'label' => 'PLUGIN_ADMIN.JS_MINIFY',
                                                'help' => 'PLUGIN_ADMIN.JS_MINIFY_HELP',
                                                'highlight' => 1,
                                                'options' => [
                                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                                ],
                                                'validate' => [
                                                    'type' => 'bool'
                                                ]
                                            ],
                                            'enable_asset_timestamp' => [
                                                'type' => 'toggle',
                                                'label' => 'PLUGIN_ADMIN.ENABLE_ASSET_TIMESTAMP',
                                                'help' => 'PLUGIN_ADMIN.ENABLE_ASSET_TIMESTAMP_HELP',
                                                'highlight' => 0,
                                                'options' => [
                                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                                ],
                                                'validate' => [
                                                    'type' => 'bool'
                                                ]
                                            ],
                                            'collections' => [
                                                'type' => 'ignore'
                                            ],
                                            'assets' => [
                                                'type' => 'ignore'
                                            ],
                                            'errors' => [
                                                'type' => 'ignore'
                                            ],
                                            'debug' => [
                                                'type' => 'ignore'
                                            ],
                                            'images' => [
                                                'type' => 'section',
                                                'title' => 'PLUGIN_ADMIN.IMAGES',
                                                'fields' => [
                                                    'image_quality' => [
                                                        'type' => 'range',
                                                        'label' => 'PLUGIN_ADMIN.IMAGE_QUALITY',
                                                        'help' => 'PLUGIN_ADMIN.IMAGE_QUALITY_HELP',
                                                        'default' => 85,
                                                        'min' => 1,
                                                        'max' => 100,
                                                        'step' => 1
                                                    ],
                                                    'cache_all' => [
                                                        'type' => 'toggle',
                                                        'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                                                        'help' => 'PLUGIN_ADMIN.CACHE_ALL_HELP',
                                                        'highlight' => 0,
                                                        'options' => [
                                                            1 => 'PLUGIN_ADMIN.ENABLED',
                                                            0 => 'PLUGIN_ADMIN.DISABLED'
                                                        ],
                                                        'validate' => [
                                                            'type' => 'bool'
                                                        ]
                                                    ],
                                                    'cache_perms' => [
                                                        'type' => 'text',
                                                        'size' => 'small',
                                                        'label' => 'PLUGIN_ADMIN.CACHE_PERMS',
                                                        'help' => 'PLUGIN_ADMIN.CACHE_PERMS_HELP',
                                                        'default' => '0755'
                                                    ],
                                                    'debug' => [
                                                        'type' => 'toggle',
                                                        'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                                                        'help' => 'PLUGIN_ADMIN.IMAGES_DEBUG_HELP',
                                                        'highlight' => 0,
                                                        'options' => [
                                                            1 => 'PLUGIN_ADMIN.ENABLED',
                                                            0 => 'PLUGIN_ADMIN.DISABLED'
                                                        ],
                                                        'validate' => [
                                                            'type' => 'bool'
                                                        ]
                                                    ],
                                                    'auto_fix_orientation' => [
                                                        'type' => 'toggle',
                                                        'label' => 'PLUGIN_ADMIN.IMAGES_AUTO_FIX_ORIENTATION',
                                                        'help' => 'PLUGIN_ADMIN.IMAGES_AUTO_FIX_ORIENTATION_HELP',
                                                        'highlight' => 0,
                                                        'options' => [
                                                            1 => 'PLUGIN_ADMIN.ENABLED',
                                                            0 => 'PLUGIN_ADMIN.DISABLED'
                                                        ],
                                                        'validate' => [
                                                            'type' => 'bool'
                                                        ]
                                                    ],
                                                    'default_image_quality' => [
                                                        'type' => 'range',
                                                        'label' => 'PLUGIN_ADMIN.IMAGES_DEFAULT_IMAGE_QUALITY',
                                                        'help' => 'PLUGIN_ADMIN.IMAGES_DEFAULT_IMAGE_QUALITY_HELP',
                                                        'default' => 85,
                                                        'min' => 1,
                                                        'max' => 100,
                                                        'step' => 1
                                                    ],
                                                    'cache' => [
                                                        'type' => 'toggle',
                                                        'label' => 'PLUGIN_ADMIN.IMAGES_CACHE',
                                                        'help' => 'PLUGIN_ADMIN.IMAGES_CACHE_HELP',
                                                        'highlight' => 1,
                                                        'options' => [
                                                            1 => 'PLUGIN_ADMIN.ENABLED',
                                                            0 => 'PLUGIN_ADMIN.DISABLED'
                                                        ],
                                                        'validate' => [
                                                            'type' => 'bool'
                                                        ]
                                                    ],
                                                    'cached_adapters' => [
                                                        'type' => 'array',
                                                        'label' => 'PLUGIN_ADMIN.IMAGES_CACHED_ADAPTERS',
                                                        'help' => 'PLUGIN_ADMIN.IMAGES_CACHED_ADAPTERS_HELP',
                                                        'value_only' => true
                                                    ],
                                                    'cli_compatibility' => [
                                                        'type' => 'toggle',
                                                        'label' => 'PLUGIN_ADMIN.IMAGES_CLI_COMPATIBILITY',
                                                        'help' => 'PLUGIN_ADMIN.IMAGES_CLI_COMPATIBILITY_HELP',
                                                        'highlight' => 0,
                                                        'options' => [
                                                            1 => 'PLUGIN_ADMIN.ENABLED',
                                                            0 => 'PLUGIN_ADMIN.DISABLED'
                                                        ],
                                                        'validate' => [
                                                            'type' => 'bool'
                                                        ]
                                                    ],
                                                    'default' => [
                                                        'type' => 'section',
                                                        'title' => 'PLUGIN_ADMIN.IMAGES_DEFAULT',
                                                        'fields' => [
                                                            'IMAGE_QUALITY' => [
                                                                'type' => 'range',
                                                                'label' => 'PLUGIN_ADMIN.IMAGES_IMAGE_QUALITY',
                                                                'help' => 'PLUGIN_ADMIN.IMAGES_IMAGE_QUALITY_HELP',
                                                                'default' => 85,
                                                                'min' => 1,
                                                                'max' => 100,
                                                                'step' => 1
                                                            ]
                                                        ]
                                                    ],
                                                    'presets' => [
                                                        'type' => 'ignore'
                                                    ],
                                                    'seofriendly' => [
                                                        'type' => 'toggle',
                                                        'label' => 'PLUGIN_ADMIN.IMAGES_SEOFRIENDLY',
                                                        'help' => 'PLUGIN_ADMIN.IMAGES_SEOFRIENDLY_HELP',
                                                        'highlight' => 0,
                                                        'options' => [
                                                            1 => 'PLUGIN_ADMIN.ENABLED',
                                                            0 => 'PLUGIN_ADMIN.DISABLED'
                                                        ],
                                                        'validate' => [
                                                            'type' => 'bool'
                                                        ]
                                                    ],
                                                    'cls' => [
                                                        'type' => 'section',
                                                        'title' => 'PLUGIN_ADMIN.IMAGES_CLS',
                                                        'fields' => [
                                                            'auto_sizes' => [
                                                                'type' => 'toggle',
                                                                'label' => 'PLUGIN_ADMIN.IMAGES_CLS_AUTO_SIZES',
                                                                'help' => 'PLUGIN_ADMIN.IMAGES_CLS_AUTO_SIZES_HELP',
                                                                'highlight' => 0,
                                                                'options' => [
                                                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                                                ],
                                                                'validate' => [
                                                                    'type' => 'bool'
                                                                ]
                                                            ],
                                                            'aspect_ratio' => [
                                                                'type' => 'toggle',
                                                                'label' => 'PLUGIN_ADMIN.IMAGES_CLS_ASPECT_RATIO',
                                                                'help' => 'PLUGIN_ADMIN.IMAGES_CLS_ASPECT_RATIO_HELP',
                                                                'highlight' => 0,
                                                                'options' => [
                                                                    1 => 'PLUGIN_ADMIN.ENABLED',
                                                                    0 => 'PLUGIN_ADMIN.DISABLED'
                                                                ],
                                                                'validate' => [
                                                                    'type' => 'bool'
                                                                ]
                                                            ],
                                                            'retina_scale' => [
                                                                'type' => 'select',
                                                                'label' => 'PLUGIN_ADMIN.IMAGES_CLS_RETINA_SCALE',
                                                                'help' => 'PLUGIN_ADMIN.IMAGES_CLS_RETINA_SCALE_HELP',
                                                                'default' => 1,
                                                                'options' => [
                                                                    1 => '1x',
                                                                    2 => '2x',
                                                                    3 => '3x',
                                                                    4 => '4x'
                                                                ]
                                                            ],
                                                            'setup' => [
                                                                'type' => 'array',
                                                                'label' => 'PLUGIN_ADMIN.IMAGES_CLS_SETUP',
                                                                'help' => 'PLUGIN_ADMIN.IMAGES_CLS_SETUP_HELP',
                                                                'value_only' => true
                                                            ],
                                                            'block' => [
                                                                'type' => 'array',
                                                                'label' => 'PLUGIN_ADMIN.IMAGES_CLS_BLOCK',
                                                                'help' => 'PLUGIN_ADMIN.IMAGES_CLS_BLOCK_HELP',
                                                                'value_only' => true
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
