<?php

namespace Modules\Utilities\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Utilities\WebModules\Attributes\Attribute;

class AttributesController extends Controller
{

    public function attributeHtml(Request $request)
    {
        $attributeId = $request->get('attributeId');

        $attribute = Attribute::setAttribute($attributeId);

        return ['html' => $attribute->getAttributeHtml(), 'id' => $attribute->id, 'code' => $attribute->code];
    }


}
