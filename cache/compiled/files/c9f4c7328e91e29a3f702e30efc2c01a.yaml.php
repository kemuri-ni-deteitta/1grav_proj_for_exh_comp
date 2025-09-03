<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/gravExpo/system/languages/sw.yaml',
    'modified' => 1756582841,
    'size' => 3667,
    'data' => [
        'GRAV' => [
            'FRONTMATTER_ERROR_PAGE' => '---
kichwa: %1$s
---

# Kosa: Mbele ya Mbele

Njia: `%2$s`

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
                0 => 'vifaa',
                1 => 'habari',
                2 => 'mchele',
                3 => 'pesa',
                4 => 'spishi',
                5 => 'mfululizo',
                6 => 'samaki',
                7 => 'kondoo'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'watu',
                'man' => 'wanaume',
                'child' => 'watoto',
                'sex' => 'jinsia',
                'move' => 'songa'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'th',
                'first' => 'st',
                'second' => 'nd',
                'third' => 'rd'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Hakuna tarehe iliyotolewa',
                'BAD_DATE' => 'Tarehe mbaya',
                'AGO' => 'zilizopita',
                'FROM_NOW' => 'kuanzia sasa',
                'JUST_NOW' => 'sasa hivi',
                'SECOND' => 'pili',
                'MINUTE' => 'dakika',
                'HOUR' => 'saa',
                'DAY' => 'siku',
                'WEEK' => 'wiki',
                'MONTH' => 'mwezi',
                'YEAR' => 'mwaka',
                'DECADE' => 'muongo',
                'SEC' => 'sec',
                'MIN' => 'min',
                'HR' => 'hr',
                'WK' => 'wk',
                'MO' => 'mo',
                'YR' => 'yr',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'sekunde',
                'MINUTE_PLURAL' => 'dakika',
                'HOUR_PLURAL' => 'masaa',
                'DAY_PLURAL' => 'siku',
                'WEEK_PLURAL' => 'wiki',
                'MONTH_PLURAL' => 'miezi',
                'YEAR_PLURAL' => 'miaka',
                'DECADE_PLURAL' => 'miongo',
                'SEC_PLURAL' => 'secs',
                'MIN_PLURAL' => 'mins',
                'HR_PLURAL' => 'hrs',
                'WK_PLURAL' => 'wks',
                'MO_PLURAL' => 'mos',
                'YR_PLURAL' => 'yrs',
                'DEC_PLURAL' => 'decs'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b> Uthibitishaji umeshindwa: </b>',
                'INVALID_INPUT' => 'Ingizo batili katika',
                'MISSING_REQUIRED_FIELD' => 'Sehemu inayokosekana inahitajika:',
                'XSS_ISSUES' => 'Masuala yanayowezekana ya XSS yamegunduliwa katika uwanja wa \'% s'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Januari',
                1 => 'Februari',
                2 => 'Machi',
                3 => 'Aprili',
                4 => 'Mei',
                5 => 'Juni',
                6 => 'Julai',
                7 => 'Agosti',
                8 => 'Septemba',
                9 => 'Oktoba',
                10 => 'Novemba',
                11 => 'Desemba'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Jumatatu',
                1 => 'Jumanne',
                2 => 'Jumatano',
                3 => 'Alhamisi',
                4 => 'Ijumaa',
                5 => 'Jumamosi',
                6 => 'Jumapili'
            ],
            'YES' => 'Ndiyo',
            'NO' => 'Hapana',
            'CRON' => [
                'EVERY' => 'kila',
                'EVERY_HOUR' => 'kila saa',
                'EVERY_MINUTE' => 'kila dakika',
                'EVERY_DAY_OF_WEEK' => 'kila siku ya juma',
                'EVERY_DAY_OF_MONTH' => 'kila siku ya mwezi',
                'EVERY_MONTH' => 'kila mwezi',
                'TEXT_PERIOD' => 'Kila <b />',
                'TEXT_MINS' => ' saa <b /> dakika (saa) zilizopita saa',
                'TEXT_TIME' => ' saa <b />: <b />',
                'TEXT_DOW' => ' kwenye <b />',
                'TEXT_MONTH' => ' ya <b />',
                'TEXT_DOM' => ' kwenye <b />',
                'ERROR1' => 'Lebo% s haitumiki!',
                'ERROR2' => 'Idadi mbaya ya vitu',
                'ERROR3' => 'Jquery_element inapaswa kuwekwa kwenye mipangilio ya jqCron',
                'ERROR4' => 'Maneno yasiyotambulika'
            ]
        ]
    ]
];
