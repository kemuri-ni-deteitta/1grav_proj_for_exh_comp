<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/expoGroupOnServer/system/languages/my.yaml',
    'modified' => 1756928896,
    'size' => 5260,
    'data' => [
        'GRAV' => [
            'FRONTMATTER_ERROR_PAGE' => '---
ခေါင်းစဥ်: %1$s
---

# အမှား - Frontmatter မမှန်ကန်ပါ

လမ်းကြောင်း `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en',
                '/([m|l])ouse$/i' => '\\1ice',
                '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
                '/(x|ch|ss|sh)$/i' => '\\1es',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([^aeiouy]|qu)y$/i' => '\\1ies',
                '/(hive)$/i' => '\\1s',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
                '/sis$/i' => 'ses',
                '/([ti])um$/i' => '\\1a',
                '/(buffal|tomat)o$/i' => '\\1oes',
                '/(bu)s$/i' => '\\1ses',
                '/(alias|status)/i' => '\\1es',
                '/(octop|vir)us$/i' => '\\1i',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1us',
                '/(cris|ax|test)es$/i' => '\\1is',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1sis',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews'
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'ကိရိယာ',
                1 => 'အချက်အလက်',
                2 => 'ဆန်',
                3 => 'ငွေ',
                4 => 'မျိုးစိတ်',
                5 => 'အတွဲများ',
                6 => 'ငါး',
                7 => 'သိုးများ'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'လူ',
                'man' => 'ယောက်ျား',
                'child' => 'ကလေးများ',
                'sex' => 'လိင်',
                'move' => 'ရွှေ့ခြင်း'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'th',
                'first' => 'st',
                'second' => 'nd',
                'third' => 'rd'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'နေ့စွဲ မသတ်မှတ်ထား',
                'BAD_DATE' => 'ရက်စွဲမမှန်ပါ',
                'AGO' => 'လွန်ခဲ့တဲ့',
                'FROM_NOW' => 'ယခုမှ',
                'JUST_NOW' => 'အခုပဲ',
                'SECOND' => 'ဒုတိယ',
                'MINUTE' => 'မိနစ်',
                'HOUR' => 'နာရီ',
                'DAY' => 'နေ့',
                'WEEK' => 'တစ်ပတ်',
                'MONTH' => 'လ',
                'YEAR' => 'နှစ်',
                'DECADE' => 'ဆယ်စုနှစ်',
                'SEC' => 'စက္ကန့်',
                'MIN' => 'မိနစ်',
                'HR' => 'နာရီ',
                'WK' => 'တစ်ပတ်',
                'MO' => 'လ',
                'YR' => 'နှစ်',
                'DEC' => 'ဒီဇင်ဘာ',
                'SECOND_PLURAL' => 'စက္ကန့်',
                'MINUTE_PLURAL' => 'မိနစ်',
                'HOUR_PLURAL' => 'နာရီ',
                'DAY_PLURAL' => 'နေ့',
                'WEEK_PLURAL' => 'ရက်သတ္တပတ်',
                'MONTH_PLURAL' => 'လ',
                'YEAR_PLURAL' => 'နှစ်',
                'DECADE_PLURAL' => 'ဆယ်စုနှစ်များစွ',
                'SEC_PLURAL' => 'စက္ကန့်',
                'MIN_PLURAL' => 'မိနစ်',
                'HR_PLURAL' => 'နာရီ',
                'WK_PLURAL' => 'အပတ်',
                'MO_PLURAL' => 'လ',
                'YR_PLURAL' => 'နှစ်',
                'DEC_PLURAL' => 'ဆယ်စုနှစ်'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b> အတည်ပြုခြင်းမအောင်မြင်ပါ: </b>',
                'INVALID_INPUT' => 'ထည့်သွင်းမှုမမှန်ပါ',
                'MISSING_REQUIRED_FIELD' => 'လိုအပ်သောအကွက်ပျောက်နေသည်',
                'XSS_ISSUES' => 'XSS ပြဿနာ ဖြစ်နိုင်ချေ ကို \'%s\' အကွက်တွင် တွေ့'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'ဇန်နဝါရီ',
                1 => 'ဖေဖော်ဝါရီ',
                2 => 'မတ်',
                3 => 'ဧပြီ',
                4 => 'မေ',
                5 => 'ဇွန်',
                6 => 'ဇူလိုင်',
                7 => 'သြဂုတ်',
                8 => 'စက်တင်ဘာ',
                9 => 'အောက်တိုဘာ',
                10 => 'နိုဝင်ဘာ',
                11 => 'ဒီဇင်ဘာ'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'တနင်္လာ',
                1 => ' အင်္ဂါ',
                2 => 'ဗုဒ္ဓဟူး',
                3 => 'ကြာသပတေး',
                4 => 'သောကြာ',
                5 => 'စနေ',
                6 => 'တနင်္ဂနွေ'
            ],
            'YES' => 'လုပ်',
            'NO' => 'မလုပ်',
            'CRON' => [
                'EVERY' => 'အမြဲတမ်း',
                'EVERY_HOUR' => 'နာရီတိုင်း',
                'EVERY_MINUTE' => 'မိနစ်တိုင်း',
                'EVERY_DAY_OF_WEEK' => 'တစ်ပတ်လုံး နေ့တိုင်း',
                'EVERY_DAY_OF_MONTH' => 'တစ်လလုံး နေ့တိုင်း',
                'EVERY_MONTH' => 'လစဉ်လတိုင်း',
                'TEXT_PERIOD' => '</b>တိုင်း',
                'TEXT_MINS' => 'နာရီ ကျော်ပြီး <b /> မိနစ် တွင်',
                'TEXT_TIME' => ' <b />:<b /> တွင် ',
                'TEXT_DOW' => '<b /> ပေါ်တွင်  ',
                'TEXT_MONTH' => '<b />၏ ',
                'TEXT_DOM' => '<b /> တွင် ',
                'ERROR1' => 'ဤ %s တက် ကိုပံ့ပိုးမထားပါ။',
                'ERROR2' => 'လိုအပ်သောထည့်သွင်း နာပတ် အမှားဖြစ်နေသည်',
                'ERROR3' => 'jquery_element ကို jqCron ဆက်တင် တွင်ထားရမည်',
                'ERROR4' => 'အသိအမှတ်မပြုသော အသုံးအနှုန်း'
            ]
        ]
    ]
];
