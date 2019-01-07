<?php

namespace App\Library\Url;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Modules\Utilities\Entities\Table;

class RouteUrls
{

    public function localizeUrl($url = '', $modular = '')
    {
        $locale = app()->getLocale();

        if ($modular) $modular .= '/';

        return url("{$locale}/{$modular}{$url}");
    }

    public function langs()
    {
        return $this->localizeUrl('langs', 'utilities');
    }

    public function translationManager()
    {
        return $this->localizeUrl('translation-manager', 'utilities');
    }

    public function tables()
    {
        return $this->localizeUrl('tables', 'utilities');
    }

    public function schemaTables()
    {
        return $this->localizeUrl('schema-tables', 'utilities');
    }

    public function users()
    {
        return $this->localizeUrl('users', 'utilities');
    }

    public function roles()
    {
        return $this->localizeUrl('roles', 'utilities');
    }

    public function permissions()
    {
        return $this->localizeUrl('permissions', 'utilities');
    }

    public function attributes()
    {
        return $this->localizeUrl('attributes', 'utilities');
    }

    public function modules()
    {
        return $this->localizeUrl('modules', 'utilities');
    }

    public function showModules()
    {
        return $this->localizeUrl('modules/show', 'utilities');
    }

    public function galleries()
    {
        return $this->localizeUrl('builder/galleries', 'utilities');
    }

    public function eventGroups()
    {
        return $this->localizeUrl('builder/event-groups', 'utilities');
    }

    public function footers()
    {
        return $this->localizeUrl('builder/footers', 'utilities');
    }

    public function customModules()
    {
        return $this->localizeUrl('custom-modules', 'utilities');
    }

    public function menus()
    {
        return $this->localizeUrl('menus', 'utilities');
    }

    public function attributeHtml()
    {
        return $this->localizeUrl('attribute/html', 'utilities');
    }

    public function moduleAttributesInputs()
    {
        return $this->localizeUrl('module/attributes', 'utilities');
    }

    public function pages()
    {
        return $this->localizeUrl('pages', 'utilities');
    }

    public function icons()
    {
        return $this->localizeUrl('icons', 'utilities');
    }

    public function builderPages()
    {
        return $this->localizeUrl('builder/pages', 'utilities');
    }

    public function builderMenu()
    {
        return $this->localizeUrl('builder/menus', 'utilities');
    }

    public function builderSeo()
    {
        return $this->localizeUrl('builder/seo', 'utilities');
    }

    public function sliders()
    {
        return $this->localizeUrl('builder/sliders', 'utilities');
    }

    public function verticalSliders()
    {
        return $this->localizeUrl('builder/vertical-sliders', 'utilities');
    }

    public function slider($id)
    {
        return $this->localizeUrl("builder/sliders/{$id}", "utilities");
    }

    public function verticalSlider($id)
    {
        return $this->localizeUrl("builder/vertical-sliders/{$id}", 'utilities');
    }

    public function steps()
    {
        return $this->localizeUrl('builder/steps', 'utilities');
    }

    public function textCards()
    {
        return $this->localizeUrl('builder/text-cards', 'utilities');
    }

    public function blocks()
    {
        return $this->localizeUrl('builder/blocks', 'utilities');
    }

    public function block($id)
    {
        return $this->localizeUrl("builder/blocks/{$id}", 'utilities');
    }

    public function getBuilderPageModules()
    {
        return $this->localizeUrl('builder/modules', 'utilities');
    }

    /**
     * @Section Web Site Urls
     */
    public function home()
    {
        return $this->localizeUrl('/');
    }

    public function admin()
    {
        return $this->localizeUrl('/' ,'admin');
    }

    public function login()
    {
        return $this->localizeUrl('login');
    }

    public function loginAs($userId)
    {
        return $this->localizeUrl("login/{$userId}");
    }

    public function page($page)
    {
        return $this->localizeUrl("$page");
    }

    public function universityCouncilHtml()
    {
        return $this->localizeUrl("load-more/university-council");
    }

    public function trustedCouncilHtml()
    {
        return $this->localizeUrl("load-more/trusted-council");
    }

    public function facultyInstructorsHtml()
    {
        return $this->localizeUrl("load-more/faculty-instructors");
    }

    public function coursesListHtml()
    {
        return $this->localizeUrl('load-more/courses');
    }

    public function officesListHtml()
    {
        return $this->localizeUrl('load-more/offices');
    }

    public function labsListHtml()
    {
        return $this->localizeUrl('load-more/labs');
    }

    public function newsListHtml()
    {
        return $this->localizeUrl('load-more/news');
    }

    public function hierarchyType()
    {
        return $this->localizeURL('hierarchy-type', 'admin');
    }

    public function faculties()
    {
        return $this->localizeUrl('faculties', 'admin');
    }

    public function campuses()
    {
        return $this->localizeUrl('campuses', 'admin');
    }

    public function singleCourse($course)
    {
        return $this->localizeUrl("courses/{$course}");
    }

    public function singleLab($lab)
    {
        return $this->localizeUrl("labs/{$lab}");
    }

    public function departments()
    {
        return $this->localizeUrl('departments', 'admin');
    }

    public function degrees()
    {
        return $this->localizeUrl('degrees', 'admin');
    }

    public function studyPlan()
    {
        return $this->localizeUrl('study-plan', 'admin');
    }

    public function studyPlanCreate()
    {
        return $this->localizeUrl('study-plan/create', 'admin');
    }

    public function hierarchy()
    {
        return $this->localizeUrl('hierarchy/data');
    }

    public function hierarchyMenu()
    {
        return $this->localizeUrl('hierarchy/menu', 'admin');
    }

    public function offices()
    {
        return $this->localizeUrl('offices', 'admin');
    }

    public function partners()
    {
        return $this->localizeUrl('partners', 'admin');
    }

    public function universityCouncil()
    {
        return $this->localizeUrl('university-council', 'admin');
    }

    public function boardOfTrustees()
    {
        return $this->localizeUrl('board-of-trustees', 'admin');
    }

    public function staff()
    {
        return $this->localizeUrl('staff', 'admin');
    }

    public function managementStaff()
    {
        return $this->localizeUrl('management-staff', 'admin');
    }

    public function news()
    {
        return $this->localizeUrl('news', 'admin');
    }

    public function status()
    {
        return $this->localizeUrl('status', 'admin');
    }

    public function studyYear()
    {
        return $this->localizeUrl('study-year', 'admin');
    }

    public function semester()
    {
        return $this->localizeUrl('semester', 'admin');
    }

    public function course()
    {
        return $this->localizeURL("{id}/courses", 'admin');
    }

    public function lab()
    {
        return $this->localizeURL('{id}/labs' ,'admin');
    }

    public function listMenu()
    {
        return $this->localizeUrl("list/menu" ,'utilities');
    }

    public function siteMenu()
    {
        return $this->localizeUrl("site-menu" ,'utilities');
    }

    public function generalMenu($type = '')
    {
        return $this->localizeUrl("general/menu/$type" ,'utilities');
    }

    public function controlMenu()
    {
        return $this->localizeUrl('control/menu/control-menu' ,'utilities');
    }

    public function generalSetting()
    {
        return $this->localizeUrl('general-setting' ,'utilities');
    }

    public function socialNetwork()
    {
        return $this->localizeUrl('social-network' ,'utilities');
    }

    public function gender()
    {
        return $this->localizeUrl('gender' ,'utilities');
    }

    public function position()
    {
        return $this->localizeUrl('position' ,'utilities');
    }

    public function jobTitle()
    {
        return $this->localizeUrl('job-title' ,'utilities');
    }

    public function logout()
    {
        return $this->localizeUrl('logout');
    }

    public function lockscreen()
    {
        return $this->localizeUrl('lockscreen');
    }

    public function unlockscreen()
    {
        return $this->localizeUrl('unlockscreen');
    }

    public function universityStaff($staff)
    {
        return $this->localizeUrl("university/staff/$staff");
    }

    public function officePage($staff)
    {
        return $this->localizeUrl("office/$staff");
    }

    public function newsPage($news)
    {
        return $this->localizeUrl("news/$news");
    }

    public function translatedCurrentRoute($localeCode)
    {
        if (request()->route()->getName()) {
            list($morph, $id, $optional) = explode('.', request()->route()->getName());
            if ($morph === 'faculty') {
                $table = Table::whereMorphCode($morph)->get()->first();
                $model = $table->namespace;
                $data = $model::translated($localeCode)->where('id', $id)->get()->first();
                if ($localeCode != app()->getLocale()) {
                    $url = getSlug($data->id, $data->lang_name[$localeCode]->text);
                    return LaravelLocalization::getLocalizedURL($localeCode, "faculty/{$url}", [], true);
                }
            }
        }

        return LaravelLocalization::getLocalizedURL($localeCode, null, [], true);
    }
}
