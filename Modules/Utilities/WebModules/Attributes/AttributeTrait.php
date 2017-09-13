<?php

namespace Modules\Utilities\WebModules\Attributes;

/**
 * This Trait was built to make the functions changeable outside the package
 *
 * Class AttributeTrait
 * @package Modules\Utilities\WebModules
 */
trait AttributeTrait
{
    /**
     * This Function will determined the Attribute Class by Attribute id
     *
     * @param $attributeId
     * @return LimitAttribute|StatusAttribute|TextEditorAttribute|WidthAttribute|SlidersAttribute|BlocksAttribute|CoursesAttribute|ShowAttribute
     * @throws \Exception
     */
    public static function setAttribute($attributeId)
    {
        switch ($attributeId) {
            case 1:
                return new StatusAttribute();
            case 2:
                return new WidthAttribute();
            case 3:
                return new LimitAttribute();
            case 4:
                return new TextEditorAttribute();
            case 5:
                return new SlidersAttribute();
            case 6:
                return new BlocksAttribute();
            case 7:
                return new CoursesAttribute();
            case '8':
                return new ShowAttribute();
            default:
                throw new \Exception('Undefined Attributes');
        }
    }

    /**
     * This Function will determined the Attribute Class by Attribute Code
     *
     * @param $attributeCode
     * @return LimitAttribute|StatusAttribute|TextEditorAttribute|WidthAttribute|SlidersAttribute|BlocksAttribute|CoursesAttribute|ShowAttribute
     * @throws \Exception
     */
    public static function setByAttributeCode($attributeCode)
    {
        switch ($attributeCode) {
            case 'status':
                return new StatusAttribute();
            case 'width':
                return new WidthAttribute();
            case 'limit':
                return new LimitAttribute();
            case 'text_editor':
                return new TextEditorAttribute();
            case 'sliders':
                return new SlidersAttribute();
            case 'blocks':
                return new BlocksAttribute();
            case 'courses':
                return new CoursesAttribute();
            case 'show':
                return new ShowAttribute();
            default:
                throw new \Exception('Undefined Attributes');
        }
    }
}