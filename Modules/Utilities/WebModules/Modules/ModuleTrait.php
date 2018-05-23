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
     * @return Module
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
            case 21:
                return new BreadcrumbModule();
            case 22:
                return new UniversityCouncilModule();
            case 23:
                return new TrustedCouncilModule();
            case 24:
                return new UniversityPartnerModule();
            case 25:
                return new DegreesTableModule();
            case 26:
                return new CoursesTableModule();
            case 27:
                return new StudyPlanModule();
            case 28:
                return new FacultyInstructorsModule();
            case 29:
                return new UniversityHierarchyModule();
            case 30:
                return new GalleriesModule();
            case 31:
                return new CoursesListOneModule();
            case 32:
                return new GoogleMapModule();
            case 33:
                return new CourseContentModule();
            default:
                throw new \Exception("Undefined Web Module [id:$moduleId]");
        }
    }

    /**
     * This Function will determined the Module Class by Module Code
     *
     * @param $moduleCode
     * @return Module
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
            case 'breadcrumb':
                return new BreadcrumbModule();
            case 'university_council':
                return new UniversityCouncilModule();
            case 'trusted_council':
                return new TrustedCouncilModule();
            case 'university_partner':
                return new UniversityPartnerModule();
            case 'degrees_table':
                return new DegreesTableModule();
            case 'courses_table':
                return new CoursesTableModule();
            case 'study_plan':
                return new StudyPlanModule();
            case 'faculty_instructors':
                return new FacultyInstructorsModule();
            case 'university_hierarchy':
                return new UniversityHierarchyModule();
            case 'galleries':
                return new GalleriesModule();
            case 'courses_list_1':
                return new CoursesListOneModule();
            case 'google_map':
                return new GoogleMapModule();
            case 'course_content':
                return new CourseContentModule();
            default:
                throw new \Exception("Undefined Web Module [$moduleCode]");
        }
    }
}