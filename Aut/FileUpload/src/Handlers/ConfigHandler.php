<?php

namespace Aut\FileUpload\Handlers;

use Illuminate\Support\Facades\Auth;

class ConfigHandler
{
    public function userField()
    {
        return auth()->user() ? auth()->user()->id : [];
    }
}