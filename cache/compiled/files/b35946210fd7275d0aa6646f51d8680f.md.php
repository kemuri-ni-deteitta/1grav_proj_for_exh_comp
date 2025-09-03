<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/ivan/expoGroupOnServer/user/pages/06.otpravit-zayavku/form.md',
    'modified' => 1756928896,
    'size' => 4629,
    'data' => [
        'header' => [
            'title' => 'Отправить заявку',
            'menu' => 'Оставить заявку',
            'visible' => true,
            'template' => 'form',
            'form' => [
                'name' => 'inquiry_form',
                'fields' => [
                    0 => [
                        'name' => 'name',
                        'label' => 'Ваше имя',
                        'placeholder' => 'Введите ваше имя',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    1 => [
                        'name' => 'company',
                        'label' => 'Компания',
                        'placeholder' => 'Название компании',
                        'type' => 'text'
                    ],
                    2 => [
                        'name' => 'phone',
                        'label' => 'Телефон',
                        'placeholder' => '+7 (xxx) xxx-xx-xx',
                        'type' => 'tel',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    3 => [
                        'name' => 'email',
                        'label' => 'Email',
                        'placeholder' => 'your@email.com',
                        'type' => 'email',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    4 => [
                        'name' => 'service',
                        'type' => 'select',
                        'size' => 'long',
                        'label' => 'Услуга',
                        'help' => 'Выберите тип услуги, который вас интересует. Это поможет нам подготовить персонализированное предложение',
                        'options' => [
                            '' => 'Выберите услугу',
                            'development' => 'Разработка и строительство выставочных стендов',
                            'design' => 'Дизайн выставочных стендов',
                            'full_service' => 'Полный выставочный сервис'
                        ],
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    5 => [
                        'name' => 'budget',
                        'label' => 'Бюджет проекта',
                        'placeholder' => 'Укажите бюджет в рублях',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    6 => [
                        'name' => 'message',
                        'label' => 'Описание проекта',
                        'placeholder' => 'Расскажите о вашем проекте, требованиях и пожеланиях',
                        'type' => 'textarea',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    7 => [
                        'name' => 'files',
                        'label' => 'Прикрепить файлы',
                        'type' => 'file',
                        'multiple' => true,
                        'limit' => 10,
                        'filesize' => 32,
                        'destination' => 'user-data://forms/uploads',
                        'avoid_overwriting' => true,
                        'random_name' => false,
                        'accept' => [
                            0 => '.pdf',
                            1 => '.doc',
                            2 => '.docx',
                            3 => '.xls',
                            4 => '.xlsx',
                            5 => '.ppt',
                            6 => '.pptx',
                            7 => '.jpg',
                            8 => '.jpeg',
                            9 => '.png',
                            10 => '.gif',
                            11 => '.bmp',
                            12 => '.tiff',
                            13 => '.zip',
                            14 => '.rar',
                            15 => '.txt'
                        ],
                        'help' => 'Можно загрузить до 10 файлов. Поддерживаемые форматы: PDF, DOC, DOCX, XLS, XLSX, PPT, PPTX, изображения (JPG, PNG, GIF, BMP, TIFF), архивы (ZIP, RAR), текстовые файлы (TXT). Максимальный размер файла: 32MB.'
                    ],
                    8 => [
                        'name' => 'agreement',
                        'label' => 'Согласие на обработку персональных данных',
                        'type' => 'checkbox',
                        'validate' => [
                            'required' => true
                        ]
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Отправить заявку',
                        'classes' => 'btn btn-primary custom-form-btn'
                    ],
                    1 => [
                        'type' => 'reset',
                        'value' => 'Очистить',
                        'classes' => 'btn btn-secondary custom-form-btn'
                    ]
                ],
                'process' => [
                    0 => [
                        'email' => [
                            'from' => '{{ config.plugins.email.from }}',
                            'to' => [
                                0 => 'expoland@mail.ru',
                                1 => 'stand@expoland-group.ru'
                            ],
                            'reply_to' => '{{ form.value.email }}',
                            'subject' => '[Заявка] Новая заявка с сайта',
                            'body' => '{% include "forms/inquiry.txt.twig" %}',
                            'attachments' => [
                                0 => 'files'
                            ],
                            'process_markdown' => false
                        ]
                    ],
                    1 => [
                        'save' => [
                            'fileprefix' => 'inquiry-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include "forms/data.txt.twig" %}',
                            'destination' => 'user-data://forms/submissions'
                        ]
                    ],
                    2 => [
                        'message' => 'Спасибо за заявку! Мы свяжемся с вами в ближайшее время.'
                    ],
                    3 => [
                        'display' => 'thankyou'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: \'Отправить заявку\'
menu: Оставить заявку
visible: true
template: form
form:
    name: inquiry_form
    fields:
        -
            name: name
            label: \'Ваше имя\'
            placeholder: \'Введите ваше имя\'
            type: text
            validate:
                required: true
        -
            name: company
            label: Компания
            placeholder: \'Название компании\'
            type: text
        -
            name: phone
            label: Телефон
            placeholder: \'+7 (xxx) xxx-xx-xx\'
            type: tel
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: your@email.com
            type: email
            validate:
                required: true
        -
            name: service
            type: select
            size: long
            label: Услуга
            help: \'Выберите тип услуги, который вас интересует. Это поможет нам подготовить персонализированное предложение\'
            options:
                \'\': \'Выберите услугу\'
                development: \'Разработка и строительство выставочных стендов\'
                design: \'Дизайн выставочных стендов\'
                full_service: \'Полный выставочный сервис\'
            validate:
                required: true
        -
            name: budget
            label: \'Бюджет проекта\'
            placeholder: \'Укажите бюджет в рублях\'
            type: text
            validate:
                required: true
        -
            name: message
            label: \'Описание проекта\'
            placeholder: \'Расскажите о вашем проекте, требованиях и пожеланиях\'
            type: textarea
            validate:
                required: true
        -
            name: files
            label: \'Прикрепить файлы\'
            type: file
            multiple: true
            limit: 10
            filesize: 32
            destination: \'user-data://forms/uploads\'
            avoid_overwriting: true
            random_name: false
            accept:
                - .pdf
                - .doc
                - .docx
                - .xls
                - .xlsx
                - .ppt
                - .pptx
                - .jpg
                - .jpeg
                - .png
                - .gif
                - .bmp
                - .tiff
                - .zip
                - .rar
                - .txt
            help: \'Можно загрузить до 10 файлов. Поддерживаемые форматы: PDF, DOC, DOCX, XLS, XLSX, PPT, PPTX, изображения (JPG, PNG, GIF, BMP, TIFF), архивы (ZIP, RAR), текстовые файлы (TXT). Максимальный размер файла: 32MB.\'
        -
            name: agreement
            label: \'Согласие на обработку персональных данных\'
            type: checkbox
            validate:
                required: true
    buttons:
        -
            type: submit
            value: \'Отправить заявку\'
            classes: \'btn btn-primary custom-form-btn\'
        -
            type: reset
            value: Очистить
            classes: \'btn btn-secondary custom-form-btn\'
    process:
        -
            email:
                from: \'{{ config.plugins.email.from }}\'
                to:
                    - \'expoland@mail.ru\'
                    - \'stand@expoland-group.ru\'
                reply_to: \'{{ form.value.email }}\'
                subject: \'[Заявка] Новая заявка с сайта\'
                body: \'{% include "forms/inquiry.txt.twig" %}\'
                attachments:
                    - \'files\'
                process_markdown: false
        -
            save:
                fileprefix: inquiry-
                dateformat: Ymd-His-u
                extension: txt
                body: \'{% include "forms/data.txt.twig" %}\'
                destination: \'user-data://forms/submissions\'
        -
            message: \'Спасибо за заявку! Мы свяжемся с вами в ближайшее время.\'
        -
            display: thankyou',
        'markdown' => '# Отправить заявку

'
    ]
];
