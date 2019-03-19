<?php

namespace Modules\Admin\Factories;

use Illuminate\Support\Str;
use Modules\Admin\Entities\Person;
use Aut\DataTable\DataTableBuilder;
use Modules\Admin\Entities\Contact;
use Aut\DataTable\Factories\GlobalFactory;
use Modules\Utilities\Entities\SocialNetwork;
use Modules\Admin\Factories\PersonFactoryStructure\AcademicInfo;
use Modules\Admin\Factories\PersonFactoryStructure\ContactInfo;
use Modules\Admin\Factories\PersonFactoryStructure\PersonalInfo;
use Modules\Admin\Factories\PersonFactoryStructure\SocialNetworksInfo;

class PersonFactory extends GlobalFactory
{
    protected $types = ['university-council', 'board-of-trustees', 'management-staff', 'staff', 'student', 'author'];

    protected $allowedPersonal = ['university-council', 'board-of-trustees', 'management-staff', 'staff', 'student', 'author'];
    protected $allowedContact = ['university-council', 'board-of-trustees', 'management-staff', 'staff', 'student'];
    protected $allowedAcademic = ['student'];
    protected $allowedSocialMedia = ['university-council', 'board-of-trustees', 'management-staff', 'staff', 'student'];
    protected $allowedResearches = ['staff'];

    /**
     *  get datatable query
     */
    public function getDatatable($model ,$request)
    {
        $query = Person::with(['contact' => function($query) {
            return $query->allLangs();
        },'faculty.transName', 'academic.graduate'])->allLangs()->type();

        $tableId = 'datatable-persons-'.Str::snake(\Route::input('model'));

        $type = Str::snake(\Route::input('model'));

        $this->table
            ->queryConfig($tableId)
            ->queryDatatable($query)
            ->queryUpdateButton('id')
            ->queryDeleteButton('id')
            ->queryMultiLang(['name', 'summary', 'experience', 'contact' => 'address'])
            ->when(in_array($type, $this->allowedResearches), function (DataTableBuilder $table) {
                $table->queryCustomButton('btn-researches', 'id', 'fa fa-book', 'btn-researches', "href='javascript:void(0);' onclick='researchesModal(this)'");
            })
            ->queryCustomButton('upload_image', 'id', 'fa fa-image', '', "onclick='showFileUploadModal(this)' data-tableid='#$tableId'");

        return $this->table->queryRender();
    }

    /**
     *  build datatable modal and table
     */
    public function buildDatatable($model ,$request)
    {
        $socialNetworks = SocialNetwork::all();
        $type = Str::snake(\Route::input('model'));

        $table = $this->table
            ->config("datatable-persons-$type", trans('admin::app.' . Str::slug(\Route::input('model'), '_')), ['withTab' => true, 'gridSystem' => true, 'dialogWidth' => "60%"])
            ->addPrimaryKey('id', 'id')
            ->addHiddenInput('type', 'type', $type, false, true)
            ->gridSystemConfig(false)
            ->setGridNormalCol(12, 'lg')

            ->when(in_array($type, $this->allowedPersonal), function (DataTableBuilder $table) use ($type) {
                $table->tab(trans('admin::app.personal_Info'), new PersonalInfo($type, $this->name, $this->summary, $this->lang), 'fa fa-user fa-2x');
            })
            ->when(in_array($type, $this->allowedContact), function (DataTableBuilder $table) use ($type) {
                $table->tab(trans('admin::app.contact'), new ContactInfo($type), 'fa fa-phone fa-2x');
            })
            ->when(in_array($type, $this->allowedAcademic), function (DataTableBuilder $table) {
                $table->tab(trans('admin::app.academic_info'), new AcademicInfo($this->lang), 'fa fa-graduation-cap fa-2x');
            })
            ->when(in_array($type, $this->allowedSocialMedia), function (DataTableBuilder $table) use ($socialNetworks) {
                $table->tab(trans('admin::app.social_media'), new SocialNetworksInfo($socialNetworks, $this->lang), 'fa fa-facebook fa-2x');
            })
            ->when(in_array($type, $this->allowedResearches), function (DataTableBuilder $table) {
                $table->addActionButton(trans('admin::app.researches'), 'btn-researches', 'btn-researches', 'center all', '80px');
            })

            ->addActionButton(trans('admin::app.upload_images'), 'upload_image', 'upload_image', 'center all', '100px')
            ->addActionButton($this->update, 'update', 'update')
            ->addActionButton($this->delete, 'delete', 'delete')
            ->addNavButton();

        return $table->render();
    }

    public function storeDatatable($model ,$request ,$result)
    {
        if ($request->input('contact')) {
            $contact = Contact::create($request->input('contact'));
            $contact->socialNetwork()->sync($request->input('contact.social'));
        }

        $person = Person::create(array_merge($request->input(),['contact_id' => $contact->id ?? null]));

        if (request()->input('jobTitle.id')) {
            $person->jobTitle()->sync(request()->input('jobTitle.id'));
        }

        if ($request->get('academic')) {
            request()->merge(['academic' => ['graduate_semester_id' => request('academic.graduate_semester_id')]]);
            $academic = $request->get('academic');
            $person->academic()->updateOrCreate(['person_id' => $person->id], $academic);
        }

    }

    public function updateDatatable($model ,$request ,$result)
    {
        $result->jobTitle()->sync(request()->input('jobTitle.id'));

        $result->contact()->update($request->input('contact'));

        $result->contact->socialNetwork()->sync($request->input('contact.social'));

        request()->merge(['academic' => ['graduate_semester_id' => request('academic.graduate_semester_id')]]);

        $academic = $request->get('academic');

        $result->academic()->updateOrCreate(['person_id' => $result->id], $academic);
    }
}
