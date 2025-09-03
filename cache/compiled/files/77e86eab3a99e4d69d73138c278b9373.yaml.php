<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/ivan/expoGroupOnServer/system/languages/si.yaml',
    'modified' => 1756928896,
    'size' => 4377,
    'data' => [
        'GRAV' => [
            'FRONTMATTER_ERROR_PAGE' => '---
මාතෘකාව: %1$s
---

# දෝෂය: වලංගු නොවන ඉදිරිපස

මාර්ගය: `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                '/([m|l])ouse$/i' => '\\1අයිස්',
                '/(matr|vert|ind)ix|ex$/i' => '\\1අයිස්',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2වෙස්',
                '/([ti])um$/i' => '\\1අ',
                '/(buffal|tomat)o$/i' => '\\1ඕඑස්',
                '/(bu)s$/i' => '\\1සෙස්'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1 අප',
                '/(cris|ax|test)es$/i' => '\\1 වේ',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1 භාවිතා කරන්න',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ඕවී',
                '/(s)eries$/i' => '\\1මාලා',
                '/(^analy)ses$/i' => '\\1සිස්',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2සිස්',
                '/([ti])a$/i' => '\\1ම්'
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'උපකරණ',
                1 => 'විස්තර',
                2 => 'සහල්',
                3 => 'මුදල',
                4 => 'විශේෂ',
                5 => 'මාලාවක්',
                6 => 'මාළු',
                7 => 'බැටළුවන්'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'මහජන',
                'man' => 'මිනිසුන්',
                'child' => 'දරුවන්',
                'sex' => 'ලිංගිකත්වය',
                'move' => 'චලනය කරයි'
            ],
            'INFLECTOR_ORDINALS' => [
                'first' => 'ශාන්ත'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'දිනයක් සපයා නැත',
                'BAD_DATE' => 'නරක දිනය',
                'AGO' => 'පෙර',
                'FROM_NOW' => 'මෙතැන් සිට',
                'JUST_NOW' => 'මේ දැන්',
                'SECOND' => 'දෙවැනි',
                'MINUTE' => 'මිනිත්තුව',
                'HOUR' => 'පැය',
                'DAY' => 'දින',
                'WEEK' => 'සතිය',
                'MONTH' => 'මස',
                'YEAR' => 'වර්ෂය',
                'DECADE' => 'දශකය',
                'SEC' => 'තත්පර',
                'MIN' => 'මිනි',
                'HR' => 'පැය',
                'YR' => 'වසර',
                'DEC' => 'දෙසැ',
                'SECOND_PLURAL' => 'තත්පර',
                'MINUTE_PLURAL' => 'මිනිත්තු',
                'HOUR_PLURAL' => 'පැය',
                'DAY_PLURAL' => 'දින',
                'WEEK_PLURAL' => 'සති',
                'MONTH_PLURAL' => 'මාස',
                'YEAR_PLURAL' => 'වසර',
                'DECADE_PLURAL' => 'දශක',
                'SEC_PLURAL' => 'තත්පර',
                'MIN_PLURAL' => 'මිනිත්තු',
                'HR_PLURAL' => 'පැය',
                'WK_PLURAL' => 'සති',
                'YR_PLURAL' => 'වසර',
                'DEC_PLURAL' => 'දෙසැ'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>වලංගු කිරීම අසාර්ථක විය:</b>',
                'INVALID_INPUT' => 'වලංගු නොවන ආදානය',
                'MISSING_REQUIRED_FIELD' => 'අවශ්‍ය ක්ෂේත්‍රය අස්ථානගත වී ඇත:',
                'XSS_ISSUES' => 'විභව XSS ගැටළු \'%s\' ක්ෂේත්‍රයේ අනාවරණය විය'
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'ජනවාරි',
                1 => 'පෙබරවාරි',
                2 => 'මාර්තු',
                3 => 'අප්රේල්',
                4 => 'මැයි',
                5 => 'ජූනි',
                6 => 'ජුලි',
                7 => 'අගෝස්තු',
                8 => 'සැප්තැම්බර්',
                9 => 'ඔක්තෝම්බර්',
                10 => 'නොවැම්බර්',
                11 => 'දෙසැම්බර්'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'සඳුදා',
                1 => 'අඟහරුවාදා',
                2 => 'බදාදා',
                3 => 'බ්රහස්පතින්දා',
                4 => 'සිකුරාදා',
                5 => 'සෙනසුරාදා',
                6 => 'ඉරිදා'
            ],
            'YES' => 'ඔව්',
            'NO' => 'නැත',
            'CRON' => [
                'EVERY' => 'සෑම',
                'EVERY_HOUR' => 'සෑම පැයකටම',
                'EVERY_MINUTE' => 'සෑම විනාඩියකටම',
                'EVERY_DAY_OF_WEEK' => 'සතියේ සෑම දිනකම',
                'EVERY_DAY_OF_MONTH' => 'මාසයේ සෑම දිනකම',
                'EVERY_MONTH' => 'සෑම මාසයකම',
                'TEXT_PERIOD' => 'සෑම <b />',
                'TEXT_MINS' => ' පැයට පසු විනාඩි <b /> කින්',
                'TEXT_TIME' => ' <b />:<b />ට',
                'TEXT_DOW' => ' <b />මත',
                'TEXT_MONTH' => ' <b />',
                'TEXT_DOM' => ' <b />මත',
                'ERROR1' => 'ටැගය %s සහාය නොදක්වයි!',
                'ERROR2' => 'නරක මූලද්රව්ය සංඛ්යාව',
                'ERROR3' => 'jquery_element jqCron සැකසුම් වලට සැකසිය යුතුය',
                'ERROR4' => 'හඳුනා නොගත් ප්‍රකාශනය'
            ]
        ]
    ]
];
