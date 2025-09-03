<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/expoGroupOnServer/system/config/security.yaml',
    'modified' => 1756928896,
    'size' => 749,
    'data' => [
        'xss_whitelist' => [
            0 => 'admin.super'
        ],
        'xss_enabled' => [
            'on_events' => true,
            'invalid_protocols' => true,
            'moz_binding' => true,
            'html_inline_styles' => true,
            'dangerous_tags' => true
        ],
        'xss_invalid_protocols' => [
            0 => 'javascript',
            1 => 'livescript',
            2 => 'vbscript',
            3 => 'mocha',
            4 => 'feed',
            5 => 'data'
        ],
        'xss_dangerous_tags' => [
            0 => 'applet',
            1 => 'meta',
            2 => 'xml',
            3 => 'blink',
            4 => 'link',
            5 => 'style',
            6 => 'script',
            7 => 'embed',
            8 => 'object',
            9 => 'iframe',
            10 => 'frame',
            11 => 'frameset',
            12 => 'ilayer',
            13 => 'layer',
            14 => 'bgsound',
            15 => 'title',
            16 => 'base'
        ],
        'uploads_dangerous_extensions' => [
            0 => 'php',
            1 => 'php2',
            2 => 'php3',
            3 => 'php4',
            4 => 'php5',
            5 => 'phar',
            6 => 'phtml',
            7 => 'html',
            8 => 'htm',
            9 => 'shtml',
            10 => 'shtm',
            11 => 'js',
            12 => 'exe'
        ],
        'sanitize_svg' => true
    ]
];
