<?php

namespace Modules\Utilities\Traits;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\Utilities\Scopes\LangInfoScope;
use Modules\Utilities\Scopes\MultiLangScope;

trait MultiLangs
{
    /**
     * Boot the Multi Lang trait for a model.
     *
     * @return void
     */
    public static function bootMultiLangs()
    {
        static::addGlobalScope(new MultiLangScope);
    }

    public function save(array $options = [])
    {
        $input = request()->input();

        $methods = get_class_methods($this);

        $transMethod = preg_grep('/^trans/', $methods);

        $supportedLocale = LaravelLocalization::getSupportedLanguagesKeys();
        $status = parent::save($input);

//        if(class_basename($this) == 'CustomModuleAttributeValue')
//            dd($this, array_keys($this->getGlobalScopes()), $this->removedScopes());
//        if(in_array('Modules\Utilities\Scopes\MultiLangScope', array_keys($this->getGlobalScopes())) && !in_array('Modules\Utilities\Scopes\MultiLangScope', array_keys($this->removedScopes())))

        //update by basheer
        //I need this because in tree when i reorder the tree i dont need to save transName so I
        //stoped it with request stopOper if you find onther way i will apply it.
        if(request('transSaveOper' ,true))
        {
            $object = static::allLangs()->where('id', '=', $this->id)->first();

            foreach ($transMethod as $method)// each trans in the model ex:: user_name user_summary
            {
                $inputName = snake_case(str_replace('trans', '', $method));
                $attribute = snake_case($method);
                $data = $input[$attribute];
                $createArr = [];
                $relations = $object->{$method};

                if($relations->count())
                {
                    foreach ($relations as $relation)
                    {
                        $relation->text = $data["{$inputName}_{$relation->lang_code}"];
                        $status = $relation->save();
                    }
                }
                else
                {
                    foreach ($supportedLocale as $key => $lang)// each lang in current trans username -> en, ar ,...
                    {
                        $createArr[] = ['lang_id' => $key + 1, 'text' => $data["{$inputName}_{$lang}"]];
                    }
                    $object->$method()->createMany($createArr);
                }
            }
        }
    }

    public function delete()
    {
        $methods = get_class_methods($this);

        $transMethod = preg_grep('/^trans/', $methods);
        parent::delete();
        foreach ($transMethod as $method)// each trans in the model ex:: user_name user_summary
        {
            $this->$method()->withoutGlobalScopes([LangInfoScope::class])->delete();
        }
    }
}
