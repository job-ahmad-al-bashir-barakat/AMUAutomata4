<?php

namespace App\Http\Controllers;

use App\Library\Mapping\LangMapper;
use App\Models\Lang;

class LangController extends Controller
{
    protected $langMapper;

    public function __construct(LangMapper $langMapper)
    {
        $this->langMapper = $langMapper;
    }

    public function index()
    {
        return $this->langMapper->mapCollection(Lang::all());
    }

    public function store()
    {

    }

    public function create()
    {

    }

    public function show(Lang $lang)
    {

    }

    public function update(Lang $lang)
    {

    }

    public function destroy(Lang $lang)
    {

    }

    public function edit(Lang $lang)
    {

    }
}
