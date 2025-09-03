<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/gravExpo/user/config/plugins/form.yaml',
    'modified' => 1756582842,
    'size' => 1919,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'inline_css' => true,
        'refresh_prevention' => false,
        'client_side_validation' => true,
        'inline_errors' => false,
        'files' => [
            'multiple' => true,
            'limit' => 10,
            'destination' => 'user-data://forms/uploads',
            'avoid_overwriting' => true,
            'random_name' => false,
            'accept' => [
                0 => 'image/*',
                1 => 'application/pdf',
                2 => 'application/msword',
                3 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                4 => 'application/vnd.ms-excel',
                5 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                6 => 'application/vnd.ms-powerpoint',
                7 => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                8 => 'application/zip',
                9 => 'application/x-rar-compressed',
                10 => 'text/plain'
            ],
            'filesize' => 32,
            'field' => [
                'destination' => 'user-data://forms/uploads',
                'avoid_overwriting' => true,
                'random_name' => false,
                'accept' => [
                    0 => 'image/*',
                    1 => 'application/pdf',
                    2 => 'application/msword',
                    3 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    4 => 'application/vnd.ms-excel',
                    5 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    6 => 'application/vnd.ms-powerpoint',
                    7 => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                    8 => 'application/zip',
                    9 => 'application/x-rar-compressed',
                    10 => 'text/plain'
                ],
                'filesize' => 32
            ]
        ],
        'recaptcha' => [
            'version' => '2-checkbox',
            'theme' => 'light',
            'site_key' => '',
            'secret_key' => ''
        ],
        'messages' => [
            'success' => 'Спасибо! Ваше сообщение было успешно отправлено.',
            'error' => 'Произошла ошибка при отправке формы. Попробуйте еще раз.',
            'required' => 'Обязательное поле',
            'invalid_email' => 'Неправильный email адрес',
            'invalid_phone' => 'Неправильный номер телефона',
            'file_too_large' => 'Файл слишком большой',
            'invalid_file_type' => 'Неподдерживаемый тип файла'
        ]
    ]
];
