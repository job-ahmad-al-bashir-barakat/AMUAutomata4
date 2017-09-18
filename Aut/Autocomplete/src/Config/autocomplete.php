<?php

return [

    'routeMiddleware' => ['web', 'localeSessionRedirect', 'localizationRedirect' ],

    'isLangs' => true,

    'AutocompleteHelperClass' => \App\Library\AutocompleteHelper::class,

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