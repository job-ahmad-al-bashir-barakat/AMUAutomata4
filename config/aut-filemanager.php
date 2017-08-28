<?php

return [

    'paths'=>[
        'admin/1/labs' => [
            'middleware'=> [ 'web', 'localizationRedirect' ,'localeSessionRedirect'/*,'auth','auth.admin:Awareness'*/],
            'upload_dir'        =>'storage/images/labs/',
            'current_path'      =>'storage/images/labs/',
            'thumbs_base_path'  =>'storage/images/thumbs/',
        ],
    ]
];