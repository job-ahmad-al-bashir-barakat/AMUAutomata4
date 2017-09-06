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
     * @return SectionEndModule|SectionStartModule|TextEditorModule
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
            default:
                throw new \Exception('Undefined Web Module');
        }
    }

    /**
     * This Function will determined the Module Class by Module Code
     *
     * @param $moduleCode
     * @return SectionEndModule|SectionStartModule|TextEditorModule
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
            default:
                throw new \Exception('Undefined Web Module');
        }
    }
}