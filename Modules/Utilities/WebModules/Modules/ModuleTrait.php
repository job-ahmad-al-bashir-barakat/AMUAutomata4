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
            case 34:
                return new LabsListOneModule();
            case 35:
                return new LabPageModule();
            case 36:
                return new OfficesListOneModule();
            case 37:
                return new NewsListOneModule();
            case 38:
                return new NewsPageModule();
            case 39:
                return new LatestNewsModule();
            case 40:
                return new EmptyBlockModule();
            case 41:
                return new FacultyResearchesModule();
            case 42:
                return new CalendarModule();
            case 43:
                return new PersonTwoModule();
            case 44:
                return new SliderUpcomingEventsModule();
            case 45:
                return new CardsModule();
            case 46:
                return new TendersListModule();
            case 47:
                return new LinkListModule();
            case 48:
                return new EventsListModule();
            case 49:
                return new BooksListOneModule();
            case 50:
                return new GraduatedStudentsModule();
            case 51:
                return new TopStudentsModule();
            case 52:
                return new EventsCarouselModule();
            case 53:
                return new VideoModule();
            case 54:
                return new SecurityLabelModule();
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
            case 'labs_list_1':
                return new LabsListOneModule();
            case 'lab_page':
                return new LabPageModule();
            case 'offices_list_1':
                return new OfficesListOneModule();
            case 'news_list_1':
                return new NewsListOneModule();
            case 'news_page':
                return new NewsPageModule();
            case 'latest_news':
                return new LatestNewsModule();
            case 'empty_block':
                return new EmptyBlockModule();
            case 'faculty_researches':
                return new FacultyResearchesModule();
            case 'calender':
                return new CalendarModule();
            case 'person_2':
                return new PersonTwoModule();
            case 'slider_upcoming_events':
                return new SliderUpcomingEventsModule();
            case 'cards':
                return new CardsModule();
            case 'tenders_list':
                return new TendersListModule();
            case 'link_list':
                return new LinkListModule();
            case 'events_list':
                return new EventsListModule();
            case 'books_list_1':
                return new BooksListOneModule();
            case 'graduated_students':
                return new GraduatedStudentsModule();
            case 'top_students':
                return new TopStudentsModule();
            case 'events_carousel':
                return new EventsCarouselModule();
            case 'video':
                return new VideoModule();
            case 'security_label':
                return new SecurityLabelModule();
            default:
                throw new \Exception("Undefined Web Module [Code:$moduleCode]");
        }
    }
}