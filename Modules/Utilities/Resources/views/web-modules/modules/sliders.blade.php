@php($dir = LaravelLocalization::getCurrentLocaleDirection())
<div class="rev_slider_wrapper">
    <div class="rev_slider" data-version="5.0">
        <ul>
            @php($i = 1)
            @foreach($data['sliders']->sliderDetails()->with('image')->get() as $sliderDetail)
                @if($sliderDetail->position == 'L')
                    @php($bgposition = '10%')
                    @php($layers['1']['class'] = 'tp-caption tp-resizeme text-uppercase text-white font-raleway')
                    @php($layers['1']['x'] = 'left')
                    @php($layers['1']['hoffset'] = '30'){{--$dir=='rtl'?'1100':'30', 30--}}
                    @php($layers['1']['voffset'] = '-110')
                    @php($layers['1']['fontsize'] = '100')
                    @php($layers['1']['lineheight'] = '110')
                    @php($layers['1']['style'] = 'z-index: 7; white-space: nowrap; font-weight:700;')
                    @php($layers['2']['class'] = 'tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20')
                    @php($layers['2']['x'] = 'left')
                    @php($layers['2']['hoffset'] = '35'){{--$dir=='rtl'?'1095':--}}
                    @php($layers['2']['voffset'] = '-25')
                    @php($layers['2']['fontsize'] = '35')
                    @php($layers['2']['lineheight'] = '54')
                    @php($layers['2']['style'] = 'z-index: 7; white-space: nowrap; font-weight:600;')
                    @php($layers['3']['class'] = 'tp-caption tp-resizeme text-white')
                    @php($layers['3']['x'] = 'left')
                    @php($layers['3']['hoffset'] = '35'){{--$dir=='rtl'?'1095':--}}
                    @php($layers['3']['voffset'] = '35')
                    @php($layers['3']['fontsize'] = '16')
                    @php($layers['3']['lineheight'] = '28')
                    @php($layers['3']['style'] = 'z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;')
                    @php($layers['4']['class'] = 'tp-caption tp-resizeme')
                    @php($layers['4']['x'] = 'left')
                    @php($layers['4']['hoffset'] = '35'){{--$dir=='rtl'?'1095':--}}
                    @php($layers['4']['voffset'] = '100')
                    @php($layers['4']['link_class'] = 'btn btn-colored btn-lg btn-flat btn-theme-colored border-left-theme-color-2-6px pl-20 pr-20')
                    @php($layers['4']['style'] = 'z-index: 5; white-space: nowrap; letter-spacing:1px;')
                @elseif($sliderDetail->position == 'C')
                    @php($bgposition = '40%')
                    @php($layers['1']['class'] = 'tp-caption tp-resizeme text-uppercase  bg-dark-transparent-5 text-white font-raleway border-left-theme-color-2-6px border-right-theme-color-2-6px pl-30 pr-30')
                    @php($layers['1']['x'] = 'center')
                    @php($layers['1']['hoffset'] = '0'){{--$dir=='rtl'?'100':--}}
                    @php($layers['1']['voffset'] = '-90')
                    @php($layers['1']['fontsize'] = '28')
                    @php($layers['1']['lineheight'] = '54')
                    @php($layers['1']['style'] = 'z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;')
                    @php($layers['2']['class'] = 'tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30')
                    @php($layers['2']['x'] = 'center')
                    @php($layers['2']['hoffset'] = '0'){{--$dir=='rtl'?'235':--}}
                    @php($layers['2']['voffset'] = '-20')
                    @php($layers['2']['fontsize'] = '48')
                    @php($layers['2']['lineheight'] = '70')
                    @php($layers['2']['style'] = 'z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;')
                    @php($layers['3']['class'] = 'tp-caption tp-resizeme text-white text-center')
                    @php($layers['3']['x'] = 'center')
                    @php($layers['3']['hoffset'] = '0'){{--$dir=='rtl'?'435':--}}
                    @php($layers['3']['voffset'] = '50')
                    @php($layers['3']['fontsize'] = '16')
                    @php($layers['3']['lineheight'] = '28')
                    @php($layers['3']['style'] = 'z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;')
                    @php($layers['4']['class'] = 'tp-caption tp-resizeme')
                    @php($layers['4']['x'] = 'center')
                    @php($layers['4']['hoffset'] = '0'){{--$dir=='rtl'?'80':--}}
                    @php($layers['4']['voffset'] = '115')
                    @php($layers['4']['link_class'] = 'btn btn-default btn-circled btn-transparent pl-20 pr-20')
                    @php($layers['4']['style'] = 'z-index: 5; white-space: nowrap; letter-spacing:1px;')
                @elseif($sliderDetail->position == 'R')
                    @php($bgposition = 'center')
                    @php($layers['1']['class'] = 'tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-right-theme-color-2-6px pr-20 pl-20')
                    @php($layers['1']['x'] = 'right')
                    @php($layers['1']['hoffset'] = '30'){{--$dir=='rtl'?'700':--}}
                    @php($layers['1']['voffset'] = '-90')
                    @php($layers['1']['fontsize'] = '64')
                    @php($layers['1']['lineheight'] = '72')
                    @php($layers['1']['style'] = 'z-index: 7; white-space: nowrap; font-weight:600;')
                    @php($layers['2']['class'] = 'tp-caption tp-resizeme text-uppercase bg-dark-transparent-6 text-white font-raleway pl-20 pr-20')
                    @php($layers['2']['x'] = 'right')
                    @php($layers['2']['hoffset'] = '35'){{--$dir=='rtl'?'760':--}}
                    @php($layers['2']['voffset'] = '-25')
                    @php($layers['2']['fontsize'] = '32')
                    @php($layers['2']['lineheight'] = '54')
                    @php($layers['2']['style'] = 'z-index: 7; white-space: nowrap; font-weight:600;')
                    @php($layers['3']['class'] = 'tp-caption tp-resizeme text-white text-right')
                    @php($layers['3']['x'] = 'right')
                    @php($layers['3']['hoffset'] = '35'){{--$dir=='rtl'?'200':--}}
                    @php($layers['3']['voffset'] = '30')
                    @php($layers['3']['fontsize'] = '16')
                    @php($layers['3']['lineheight'] = '28')
                    @php($layers['3']['style'] = 'z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;')
                    @php($layers['4']['class'] = 'tp-caption tp-resizeme')
                    @php($layers['4']['x'] = 'right')
                    @php($layers['4']['hoffset'] = '35'){{--$dir=='rtl'?'900':--}}
                    @php($layers['4']['voffset'] = '95')
                    @php($layers['4']['link_class'] = 'btn btn-colored btn-lg btn-flat btn-theme-colored btn-theme-colored border-right-theme-color-2-6px pl-20 pr-20')
                    @php($layers['4']['style'] = 'z-index: 5; white-space: nowrap; letter-spacing:1px;')
                @endif
                @php($layers['1']['data'] = $sliderDetail->lang_head[$lang]->text)
                @php($layers['2']['data'] = $sliderDetail->lang_title[$lang]->text)
                @php($layers['3']['data'] = $sliderDetail->lang_text[$lang]->text)
                @php($layers['4']['data'] = $sliderDetail->lang_btn[$lang]->text)
                @include('utilities::web-modules.modules.sub.slider',
                    [
                        'i' => $i++,
                        'image' => asset($sliderDetail->image_path),
                        'imageThumb' => asset($sliderDetail->image_path),
                        'bgposition' => '10%',
                        'layers' => $layers,
                    ]
                )
            @endforeach
        </ul>
    </div>
</div>