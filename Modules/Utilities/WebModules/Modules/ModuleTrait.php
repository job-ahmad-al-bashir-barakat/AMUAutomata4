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
     * @return SectionEndModule|SectionStartModule|TextEditorModule|SliderModule|BlockModule|CoursesOneModule|PersonsOneModule|VerticalSliderModule|GalleryModule|ShortInfoModule|SectionFluidStartModule|SmallGalleryModule|StepsModule|SectionIntersectTopStartModule|SectionIntersectEndModule|TextCardOneModule|ContactFormModule|TextCardTwoModule
     * @throws \Exception
     */
    public static function setModule($moduleId)
    {
        switch ($moduleId) {
            case 1:
                return new TextEditorModule();
            case 2:
                return new ShortInfoModule();
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
            case 8:
                return new PersonsOneModule();
            case 9:
                return new VerticalSliderModule();
            case 10:
                return new GalleryModule();
            case 11:
                return new SectionFluidStartModule();
            case 12:
                return new SmallGalleryModule();
            case 13:
                return new StepsModule();
            case 14:
                return new SectionIntersectTopStartModule();
            case 15:
                return new SectionIntersectEndModule();
            case 16:
                return new TextCardOneModule();
            case 17:
                return new ContactFormModule();
            case 18:
                return new TextCardTwoModule();
            case 19:
                return new PersonPageModule();
            case 20:
                return new OfficePageModule();
            default:
                throw new \Exception("Undefined Web Module [id:$moduleId]");
        }
    }

    /**
     * This Function will determined the Module Class by Module Code
     *
     * @param $moduleCode
     * @return SectionEndModule|SectionStartModule|TextEditorModule|SliderModule|BlockModule|CoursesOneModule|PersonsOneModule|VerticalSliderModule|GalleryModule|ShortInfoModule|SectionFluidStartModule|SmallGalleryModule|StepsModule|SectionIntersectTopStartModule|SectionIntersectEndModule|TextCardOneModule|ContactFormModule|TextCardTwoModule
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
            case 'persons_1':
                return new PersonsOneModule();
            case 'vertical_sliders':
                return new VerticalSliderModule();
            case 'gallery':
                return new GalleryModule();
            case 'short_info':
                return new ShortInfoModule();
            case 'section_fluid_start':
                return new SectionFluidStartModule();
            case 'small_gallery':
                return new SmallGalleryModule();
            case 'steps':
                return new StepsModule();
            case 'section_intersect_top':
                return new SectionIntersectTopStartModule();
            case 'section_intersect_end':
                return new SectionIntersectEndModule();
            case 'text_card_1':
                return new TextCardOneModule();
            case 'contact_form':
                return new ContactFormModule();
            case 'text_card_2':
                return new TextCardTwoModule();
            case 'person_page':
                return new PersonPageModule();
            case 'office_page':
                return new OfficePageModule();
            default:
                throw new \Exception("Undefined Web Module [$moduleCode]");
        }
    }
}