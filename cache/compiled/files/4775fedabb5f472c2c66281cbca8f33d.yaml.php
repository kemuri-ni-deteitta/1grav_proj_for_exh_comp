<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/expoGroupOnServer/user/config/plugins/email.yaml',
    'modified' => 1756928896,
    'size' => 649,
    'data' => [
        'enabled' => true,
        'from' => 'expoland@mail.ru',
        'from_name' => 'Expo Land',
        'to' => 'expoland@mail.ru, stand@expoland-group.ru',
        'to_name' => 'Expo Land',
        'subject' => 'Новое сообщение с сайта',
        'body' => '{% include "forms/inquiry.txt.twig" %}',
        'process_markdown' => false,
        'twig' => true,
        'debug' => true,
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.mail.ru',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'expoland@mail.ru',
                'password' => 'ME9UB6EgqJfjAae80ySc'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -t'
            ]
        ],
        'content_type' => 'text/html',
        'charset' => 'utf-8'
    ]
];
