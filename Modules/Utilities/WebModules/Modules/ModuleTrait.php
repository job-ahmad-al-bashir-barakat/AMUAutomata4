<?php

namespace Modules\Utilities\WebModules\Modules;

/**
 * This Trait was built to make the functions changeable outside the package
 *
 * Class ModuleTrait
 * @package Modules\Utilities\WebModules
 */
trait ModuleTrait
{

    /**
     * This Function will determined the Module Class by Module id
     *
     * @param $moduleId
     * @return SectionEndModule|SectionStartModule|TextEditorModule|SliderModule|BlockModule|CoursesOneModule
     * @throws \Exception
     */
    public static function setModule($moduleId)
    {
        switch ($moduleId) {
            case 2:
                return new TextEditorModule();
            case 3:
                return new SectionStartModule();
            case 4:
                return new SectionEndModule();
            case 5:
                return new SliderModule();
            case 6:
                return new BlockModule();
            case 7:
                return new CoursesOneModule();
            default:
                throw new \Exception('Undefined Web Module');
        }
    }

    /**
     * This Function will determined the Module Class by Module Code
     *
     * @param $moduleCode
     * @return SectionEndModule|SectionStartModule|TextEditorModule|SliderModule|BlockModule|CoursesOneModule
     * @throws \Exception
     */
    public static function setModuleByCode($moduleCode)
    {
        switch ($moduleCode) {
            case 'text_editor':
                return new TextEditorModule();
            case 'section_start':
                return new SectionStartModule();
            case 'section_end':
                return new SectionEndModule();
            case 'sliders':
                return new SliderModule();
            case 'blocks':
                return new SliderModule();
            case 'courses_1':
                return new CoursesOneModule();
            default:
                throw new \Exception('Undefined Web Module');
        }
    }
}