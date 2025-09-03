<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/ivan/expoGroupOnServer/user/pages/08.kontakty/01.forma-svyazi/form.md',
    'modified' => 1756928896,
    'size' => 2429,
    'data' => [
        'header' => [
            'title' => 'Форма связи',
            'template' => 'form',
            'visible' => false,
            'form' => [
                'name' => 'contact_form',
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
                        'name' => 'email',
                        'label' => 'Email',
                        'placeholder' => 'your@email.com',
                        'type' => 'email',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    2 => [
                        'name' => 'phone',
                        'label' => 'Телефон',
                        'placeholder' => '+7 (xxx) xxx-xx-xx',
                        'type' => 'tel'
                    ],
                    3 => [
                        'name' => 'subject',
                        'label' => 'Тема обращения',
                        'type' => 'select',
                        'options' => [
                            '' => 'Выберите тему',
                            'info' => 'Общая информация',
                            'quote' => 'Запрос коммерческого предложения',
                            'consultation' => 'Консультация',
                            'partnership' => 'Партнёрство',
                            'complaint' => 'Жалоба',
                            'other' => 'Другое'
                        ],
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    4 => [
                        'name' => 'message',
                        'label' => 'Сообщение',
                        'placeholder' => 'Ваше сообщение',
                        'type' => 'textarea',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    5 => [
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
                        'value' => 'Отправить',
                        'classes' => 'btn btn-primary'
                    ],
                    1 => [
                        'type' => 'reset',
                        'value' => 'Очистить',
                        'classes' => 'btn btn-secondary'
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
                            'reply_to' => '{{ form.value.email|e }}',
                            'subject' => '[Контакт] {{ form.value.subject }}',
                            'body' => '{% include "forms/data.html.twig" %}'
                        ]
                    ],
                    1 => [
                        'save' => [
                            'fileprefix' => 'contact-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include "forms/data.txt.twig" %}'
                        ]
                    ],
                    2 => [
                        'message' => 'Спасибо за обращение! Мы свяжемся с вами в ближайшее время.'
                    ],
                    3 => [
                        'display' => 'thankyou'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Форма связи
template: form
visible: false
form:
    name: contact_form
    fields:
        - name: name
          label: Ваше имя
          placeholder: Введите ваше имя
          type: text
          validate:
            required: true
        - name: email
          label: Email
          placeholder: your@email.com
          type: email
          validate:
            required: true
        - name: phone
          label: Телефон
          placeholder: +7 (xxx) xxx-xx-xx
          type: tel
        - name: subject
          label: Тема обращения
          type: select
          options:
            \'\': \'Выберите тему\'
            \'info\': \'Общая информация\'
            \'quote\': \'Запрос коммерческого предложения\'
            \'consultation\': \'Консультация\'
            \'partnership\': \'Партнёрство\'
            \'complaint\': \'Жалоба\'
            \'other\': \'Другое\'
          validate:
            required: true
        - name: message
          label: Сообщение
          placeholder: Ваше сообщение
          type: textarea
          validate:
            required: true
        - name: agreement
          label: Согласие на обработку персональных данных
          type: checkbox
          validate:
            required: true
    buttons:
        - type: submit
          value: Отправить
          classes: btn btn-primary
        - type: reset
          value: Очистить
          classes: btn btn-secondary
    process:
        - email:
            from: \'{{ config.plugins.email.from }}\'
            to: [\'expoland@mail.ru\', \'stand@expoland-group.ru\']
            reply_to: \'{{ form.value.email|e }}\'
            subject: \'[Контакт] {{ form.value.subject }}\'
            body: \'{% include "forms/data.html.twig" %}\'
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: \'{% include "forms/data.txt.twig" %}\'
        - message: Спасибо за обращение! Мы свяжемся с вами в ближайшее время.
        - display: thankyou',
        'markdown' => '# Форма связи

Заполните форму ниже, и мы свяжемся с вами в ближайшее время. '
    ]
];
