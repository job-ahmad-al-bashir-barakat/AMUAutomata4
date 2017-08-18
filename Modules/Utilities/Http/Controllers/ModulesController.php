<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Utilities\WebModules\Modules\Module;

class ModulesController extends Controller
{

    public function moduleHtml()
    {

    }

    public function attributeInput(Request $request)
    {
        $customModuleId = $request->get('customModuleId');

        $module = Module::setModule($customModuleId);

        return ['html' => $module->getModuleAttributeHtml(), 'id' => $module->id, 'code' => $module->code];
    }
}
