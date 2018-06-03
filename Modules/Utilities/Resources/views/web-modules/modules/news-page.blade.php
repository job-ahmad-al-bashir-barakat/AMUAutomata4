@php($newsSlug = \Route::input('news'))
@php($newsId = getIdFromSlug($newsSlug))
@php($news = \Modules\Admin\Entities\News::findOrFail($newsId))

<div class="col-md-{{ $data['width'] }}">
    <div class="blog-posts single-post">
        <article class="post clearfix mb-0">
            <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ asset($news->image_path['lg']) }}" alt="" class="img-responsive img-fullwidth"> </div>
            </div>
            <div class="entry-title pt-10 pl-15">
                <h4><a class="text-uppercase" href="#">{{ $news->lang_title[$lang]->text }} </a></h4>
            </div>
            <div class="entry-meta pl-15">
                <ul class="list-inline">
                    <li>Posted: <span class="text-theme-color-2"> {{ $news->publish_date->format('d/m/Y') }}</span></li>
                    {{--<li>By: <span class="text-theme-color-2">Admin</span></li>--}}
                    {{--<li><i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments</li>--}}
                </ul>
            </div>
            <div class="entry-content mt-10">
                {!! $news->lang_content[$lang]->text !!}
            </div>
            <div class="mt-30 mb-0">
                <h5 class="pull-left mt-10 mr-20 text-theme-color-2">Share:</h5>
                <ul class="styled-icons icon-circled m-0">
                    <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                    <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                    <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                </ul>
            </div>
        </article>
    </div>
</div>