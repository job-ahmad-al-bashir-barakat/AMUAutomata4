<?php

namespace App\Library\Mapping;


class LangMapper extends Mapper
{

    public function mapper($lang)
    {
        return [
            'code'    => $lang['lang_code'],
            'name'    => $lang['name'],
            'native'  => $lang['native'],
            'default' => (boolean)$lang['is_default']
        ];
    }
}