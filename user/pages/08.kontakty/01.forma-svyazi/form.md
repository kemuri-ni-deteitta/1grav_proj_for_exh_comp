---
title: Форма связи
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
            '': 'Выберите тему'
            'info': 'Общая информация'
            'quote': 'Запрос коммерческого предложения'
            'consultation': 'Консультация'
            'partnership': 'Партнёрство'
            'complaint': 'Жалоба'
            'other': 'Другое'
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
            from: '{{ config.plugins.email.from }}'
            to: ['expoland@mail.ru', 'stand@expoland-group.ru']
            reply_to: '{{ form.value.email|e }}'
            subject: '[Контакт] {{ form.value.subject }}'
            body: '{% include "forms/data.html.twig" %}'
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: '{% include "forms/data.txt.twig" %}'
        - message: Спасибо за обращение! Мы свяжемся с вами в ближайшее время.
        - display: thankyou
---

# Форма связи

Заполните форму ниже, и мы свяжемся с вами в ближайшее время. 