<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/expoGroupOnServer/user/config/security.yaml',
    'modified' => 1756928896,
    'size' => 223,
    'data' => [
        'salt' => 'gJ2ZocD7xCWGzt',
        'xss_enabled' => [
            'on_events' => true,
            'invalid_protocols' => true,
            'moz_binding' => true,
            'html_inline_styles' => true,
            'dangerous_tags' => true
        ],
        'xss_whitelist' => [
            0 => 'admin.super'
        ]
    ]
];
