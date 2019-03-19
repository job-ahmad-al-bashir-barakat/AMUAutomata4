<?php

namespace Modules\Admin\Factories\PersonFactoryStructure;


use Aut\DataTable\DataTableBuilder;
use Modules\Admin\Entities\Person;

class SocialNetworksInfo
{
    protected $socialNetworks, $lang;

    public function __construct($socialNetworks, $lang)
    {
        $this->socialNetworks = $socialNetworks;
        $this->lang = $lang;
    }

    public function __invoke(DataTableBuilder $table)
    {
        $table->each($this->socialNetworks, function (DataTableBuilder $table, $socialNetwork) {
            $table->relation('contact[social][' . $socialNetwork->id . ']', function (DataTableBuilder $table) use ($socialNetwork) {
                $table->setDefaultValue('#')->addInputText($socialNetwork->lang_name[$this->lang]['text'], 'contact.social.' . $socialNetwork->code . '.pivot.url', 'contact.social.' . $socialNetwork->code . '.pivot.url', 'none', '', '', true, false, true, false);
            });
        });
    }
}