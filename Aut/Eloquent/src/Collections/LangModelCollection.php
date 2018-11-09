<?php

namespace Aut\Eloquent\Collections;

use Illuminate\Database\Eloquent\Collection;

class LangModelCollection extends Collection
{
    private $supportedLocales;
    private $fallback;

    public function __construct($items = [])
    {
        parent::__construct($items);
        $this->supportedLocales = \LaravelLocalization::getSupportedLanguagesKeys();
        $this->fallback = config('app.fallback_locale');
    }

    public function offsetGet($key)
    {
        $value = optional();
        try {
            $value = parent::offsetGet($key);
        } catch (\Exception $exception) {
            if (in_array($key, $this->supportedLocales)) {
                $value = $this->items[$this->fallback] ?? optional();
            }
        }
        return $value;
    }

    public function __get($key)
    {
        $value = parent::__get($key);

        return $value;
    }
}