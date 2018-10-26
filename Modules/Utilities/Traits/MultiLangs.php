<?php

namespace Modules\Utilities\Traits;

use Modules\Utilities\Scopes\LangInfoScope;
use Modules\Utilities\Scopes\MultiLangScope;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
        $status = parent::save($options);

        //update by basheer
        //I need this because in tree when i reorder the tree i dont need to save transName so I
        //stoped it with request stopOper if you find onther way i will apply it.
        if(request('transSaveOper' ,true))
        {
            $object = static::allLangs()->where('id', '=', $this->get('id'))->first();

            foreach ($transMethod as $method)// each trans in the model ex:: user_name user_summary
            {
                $inputName = snake_case(str_replace('trans', '', $method));
                $attribute = snake_case($method);
                if(property_exists($this, 'transInputs') && isset($this->transInputs[$method])){
                    $data = $input[$this->transInputs[$method]][$attribute];
                } elseif(isset($input[$attribute])) {
                    $data = $input[$attribute];
                }
                $createArr = [];
                $relations = $object->{$method};

                if($relations->count())
                {
                    foreach ($relations as $relation)
                    {
                        if (isset($data["{$inputName}_{$relation->lang_code}"]) || is_null($data["{$inputName}_{$relation->lang_code}"])) {
                            $relation->text = $data["{$inputName}_{$relation->lang_code}"];
                            $status = $relation->save();
                        }
                    }
                }
                else
                {
                    foreach ($supportedLocale as $key => $lang)// each lang in current trans username -> en, ar ,...
                    {
                        if (isset($data["{$inputName}_{$lang}"])) {
                            $createArr[] = ['lang_id' => $key + 1, 'text' => $data["{$inputName}_{$lang}"]];
                        }
                    }
                    if (count($createArr)) {
                        $object->$method()->createMany($createArr);
                    }
                }
            }
        }
    }

    public function delete()
    {
        $methods = get_class_methods($this);

        $transMethod = preg_grep('/^trans/', $methods);
        parent::delete();
        foreach ($transMethod as $method)
        {
            $this->$method()->withoutGlobalScopes([LangInfoScope::class])->delete();
        }
    }

    /*public function getAttribute($name)
    {
        $value = parent::getAttribute($name);
        if (!$value) {
            $lang = app()->getLocale();
            $name = "lang_{$name}";
            $value = $this->{$name}[$lang]->text;
        }
        return $value;
    }*/
}
