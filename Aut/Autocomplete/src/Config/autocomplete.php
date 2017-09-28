<?php

return [

    'routeMiddleware' => ['web', 'localeSessionRedirect', 'localizationRedirect' ],

    'isLangs' => false,

    'AutocompleteHelperClass' => \App\Library\AutocompleteHelper::class,

    'version'    => '5.4',

    'default'   => [

        'withoutLang' => [
            'colId'     => 'id',
            'colName'   => 'name_{lang}',
            'condition' => [
                'name_{langs}',
            ],
        ],

        /*
         * Langs Way
         */
        'withLang' => [
            'colId'     => 'id',
            'colName'   => 'transName->text',
            'condition' => [
                'transName' => 'text',
            ],
        ]
    ],
];