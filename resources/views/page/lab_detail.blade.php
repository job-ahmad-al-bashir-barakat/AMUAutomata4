@extends('temp_layout')

@section('content')
    <div class="main-content">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-pin text-theme-colored"></i></a>
                                    <div class="media-body">
                                        <strong>Lab Description</strong>
                                        <p class="pt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                    <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                                        <p>+325 12345 65478</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <img src="{{ asset('tempImage/755x480.png') }}" alt="">
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-md-12">
                        <h4 class="mb-20">Lab Photo</h4>
                        <div class="owl-carousel-6col">
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                            <div class="item"><img src="https://placehold.it/285x215" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection