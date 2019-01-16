<div class="item">
    <article class="post clearfix maxwidth600 mb-sm-30">
        <div class="entry-header">
            <div class="post-thumb thumb"> <img src="{{asset($news->image_path['sm'])}}" alt="" class="img-responsive img-fullwidth"> </div>
            {{--<div class="entry-meta meta-absolute text-center pl-15 pr-15">--}}
                {{--<div class="display-table">--}}
                    {{--<div class="display-table-cell">--}}
                        {{--<ul>--}}
                            {{--<li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>--}}
                            {{--<li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <div class="entry-content border-1px p-20">
            <h4 class="entry-title mt-0 pt-0"><a href="{{ RouteUrls::newsPage(getSlug($news->id, $news->lang_title[$lang]->text)) }}">{{$news->lang_title[$lang]->text}}</a></h4>
            <p class="mb-20 mt-15 font-13">{{$news->lang_description[$lang]->text}}</p>
            <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ RouteUrls::newsPage(getSlug($news->id, $news->lang_title[$lang]->text)) }}">{{trans('utilities::web-modules.read_more')}}</a>
            <ul class="list-inline entry-date pull-right font-12 mt-5">
                {{--<li><span class="fa fa-calendar"></span></li>--}}
                <li><span class="text-theme-colored">{{$news->publish_date->format('d/m/Y')}}</span></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </article>
</div>
{{--{{dd($news)}}--}}
<!--Blog Post Start-->
{{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="causes-post">--}}
        {{--<div class="causes-thumb">--}}
            {{--<div class="link-wrap"> <a href="{{ RouteUrls::newsPage(getSlug($news->id, $news->lang_title[$lang]->text)) }}">{{trans('admin::app.view_details')}}</a> </div>--}}
            {{--<img src="{{asset($news->image_path['sm'])}}" alt="Aleppo Website News"> </div>--}}
            {{--<img src={{asset("images/cause-1.jpg")}} alt=""> </div>--}}
        {{--<div class="causes-text">--}}
            {{--<div class="prograss-wrap">--}}
                {{--<div class="progress blue">--}}
                    {{--<span class="progress-left">--}}
                        {{--<span class="progress-bar"></span>--}}
                    {{--</span>--}}
                    {{--<span class="progress-right">--}}
                        {{--<span class="progress-bar"></span>--}}
                    {{--</span>--}}
                    {{--<div class="progress-value"><strong>{{trans('admin::app.new')}}</strong></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<h4> <a href="{{ RouteUrls::newsPage(getSlug($news->id, $news->lang_title[$lang]->text)) }}">{{$news->lang_title[$lang]->text}}</a> </h4>--}}
            {{--<p>{{$news->lang_description[$lang]->text}}</p>--}}
        {{--</div>--}}
        {{--<ul class="cause-footer">--}}
            {{--<li><i class="fa fa-calendar"></i></li>--}}
            {{--<li><i>{{$news->publish_date->format('d/m/Y')}}</i></li>--}}
            {{--<li><i>{{$news->publish_date->format('d/m/Y H:i A')}}</i></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}
<!--Blog Post End-->
{{--<div class="news-box">--}}
    {{--<div class="news-icon"> <i class="fa fa-newspaper-o" aria-hidden="true"></i> </div>--}}
    {{--<div class="news-txt"> <span class="ndate">{{$news->publish_date->format('d').' '.$news->publish_date->format('M')}}</span>--}}
        {{--<h4><a href="#">{{$news}}</a></h4>--}}
    {{--</div>--}}
    {{--<div class="news-thumb"><img src="{{ asset($news->image_path['sm']) }}" alt=""></div>--}}
{{--</div>--}}
{{--<div class="gallery-item">--}}
    {{--<article class="post clearfix mb-30 bg-lighter">--}}
        {{--<div class="entry-header">--}}
            {{--<div class="post-thumb thumb">--}}
                {{--<img src="{{ asset($news->image_path['sm']) }}" alt="" class="img-responsive img-fullwidth">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="entry-content border-1px p-20 pr-10">--}}
            {{--<div class="entry-meta media mt-0 no-bg no-border">--}}
                {{--<div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">--}}
                    {{--<ul>--}}
                        {{--<li class="font-16 text-white font-weight-600">{{ $news->publish_date->format('d') }}</li>--}}
                        {{--<li class="font-12 text-white ">{{ $news->publish_date->format('M') }}</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="media-body pl-15">--}}
                    {{--<div class="event-content pull-left flip">--}}
                        {{--<h4 class="entry-title text-white m-0 mt-5"><a href="{{ RouteUrls::newsPage(getSlug($news->id, $news->lang_title[$lang]->text)) }}">{{ $news->lang_title[$lang]->text }}</a></h4>--}}
                        {{--<span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>--}}
                        {{--<span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<p class="mt-10">--}}
                {{--{{ $news->lang_description[$lang]->text }}--}}
            {{--</p>--}}
            {{--<a href="{{ RouteUrls::newsPage(getSlug($news->id, $news->lang_title[$lang]->text)) }}" class="btn-read-more">Read more</a>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
    {{--</article>--}}
{{--</div>--}}