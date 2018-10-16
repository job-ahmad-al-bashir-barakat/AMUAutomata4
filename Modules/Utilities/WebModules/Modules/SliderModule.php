<?php

namespace Modules\Utilities\WebModules\Modules;


class SliderModule extends Module
{

    public $id = '5';

    public $code = 'sliders';

    public $viewName = 'sliders';

    /**
     * @param $data
     * @return array
     * @throws \Exception
     */
    public function getModuleData($data)
    {
        $data['sliders']->load(['sliderDetails.image']);
        $sliderDetails = [];
        foreach ($data['sliders']->sliderDetails as $sliderDetail) {
            $sliderDetailId = $sliderDetail->id;

            $sliderDetails[$sliderDetailId] = $this->positionSettings($sliderDetail->position);

            $sliderDetails[$sliderDetailId]['layers']['1']['data'] = $sliderDetail->lang_head[$this->lang]->text;
            $sliderDetails[$sliderDetailId]['layers']['2']['data'] = $sliderDetail->lang_title[$this->lang]->text;
            $sliderDetails[$sliderDetailId]['layers']['3']['data'] = $sliderDetail->lang_text[$this->lang]->text;
            $sliderDetails[$sliderDetailId]['layers']['4']['data'] = $sliderDetail->lang_btn[$this->lang]->text;
            $sliderDetails[$sliderDetailId]['image'] = asset($sliderDetail->image_path);
            $sliderDetails[$sliderDetailId]['imageThumb'] = asset($sliderDetail->image_path);
        }
        $data['sliderDetails'] = $sliderDetails;

        return $data;
    }

    /**
     * @param $position
     * @return array
     * @throws \Exception
     */
    private function positionSettings($position)
    {
        switch ($position) {
            case 'L':
                return $this->leftPositionSettings();
            case 'C':
                return $this->centerPositionSettings();
            case 'R':
                return $this->rightPositionSettings();
            default:
                throw new \Exception("Undefined position [{$position}]");
        }
    }

    private function leftPositionSettings()
    {
        return [
            'bgposition' => 'center',//'10%',
            'layers' => [
                '1' => [
                    'class' => 'tp-caption tp-resizeme text-uppercase text-white font-raleway',
                    'x' => 'left',
                    'hoffset' => '30',
                    'voffset' => '-110',
                    'fontsize' => '100',
                    'lineheight' => '110',
                    'style' => 'z-index: 7; white-space: nowrap; font-weight:700;',
                ],
                '2' => [
                    'class' => 'tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20',
                    'x' => 'left',
                    'hoffset' => '35',
                    'voffset' => '-25',
                    'fontsize' => '35',
                    'lineheight' => '54',
                    'style' => 'z-index: 7; white-space: nowrap; font-weight:600;',
                ],
                '3' => [
                    'class' => 'tp-caption tp-resizeme text-white',
                    'x' => 'left',
                    'hoffset' => '35',
                    'voffset' => '35',
                    'fontsize' => '16',
                    'lineheight' => '28',
                    'style' => 'z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;',
                ],
                '4' => [
                    'class' => 'tp-caption tp-resizeme',
                    'x' => 'left',
                    'hoffset' => '35',
                    'voffset' => '100',
                    'link_class' => 'btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20',
                    'style' => 'z-index: 5; white-space: nowrap; letter-spacing:1px;',
                ],
            ],
        ];
    }

    private function centerPositionSettings()
    {
        return [
            'bgposition' => 'center',//'40%',
            'layers' => [
                '1' => [
                    'class' => 'tp-caption tp-resizeme text-uppercase  bg-dark-transparent-5 text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30',
                    'x' => 'center',
                    'hoffset' => '0',
                    'voffset' => '-90',
                    'fontsize' => '28',
                    'lineheight' => '54',
                    'style' => 'z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;',
                ],
                '2' => [
                    'class' => 'tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30',
                    'x' => 'center',
                    'hoffset' => '0',
                    'voffset' => '-20',
                    'fontsize' => '48',
                    'lineheight' => '70',
                    'style' => 'z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;',
                ],
                '3' => [
                    'class' => 'tp-caption tp-resizeme text-white text-center',
                    'x' => 'center',
                    'hoffset' => '0',
                    'voffset' => '50',
                    'fontsize' => '16',
                    'lineheight' => '28',
                    'style' => 'z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;',
                ],
                '4' => [
                    'class' => 'tp-caption tp-resizeme',
                    'x' => 'center',
                    'hoffset' => '0',
                    'voffset' => '115',
                    'link_class' => 'btn btn-default btn-circled btn-transparent pl-20 pr-20',
                    'style' => 'z-index: 5; white-space: nowrap; letter-spacing:1px;',
                ],
            ]
        ];
    }

    private function rightPositionSettings()
    {
        return [
            'bgposition' => 'center',
            'layers' => [
                '1' => [
                    'class' => 'tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20',
                    'x' => 'right',
                    'hoffset' => '30',
                    'voffset' => '-90',
                    'fontsize' => '64',
                    'lineheight' => '72',
                    'style' => 'z-index: 7; white-space: nowrap; font-weight:600;',
                ],
                '2' => [
                    'class' => 'tp-caption tp-resizeme text-uppercase bg-dark-transparent-6 text-white font-raleway pl-20 pr-20',
                    'x' => 'right',
                    'hoffset' => '35',
                    'voffset' => '-25',
                    'fontsize' => '32',
                    'lineheight' => '54',
                    'style' => 'z-index: 7; white-space: nowrap; font-weight:600;',
                ],
                '3' => [
                    'class' => 'tp-caption tp-resizeme text-white text-right',
                    'x' => 'right',
                    'hoffset' => '35',
                    'voffset' => '30',
                    'fontsize' => '16',
                    'lineheight' => '28',
                    'style' => 'z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;',
                ],
                '4' => [
                    'class' => 'tp-caption tp-resizeme',
                    'x' => 'right',
                    'hoffset' => '35',
                    'voffset' => '95',
                    'link_class' => 'btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20',
                    'style' => 'z-index: 5; white-space: nowrap; letter-spacing:1px;',
                ],
            ]
        ];
    }
}