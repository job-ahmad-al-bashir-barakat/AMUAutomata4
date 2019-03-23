<div class="item">
    <article class="post clearfix maxwidth600 mb-sm-30">
        <div class="entry-header">
            <div class="post-thumb thumb"> <img src="{{asset($news->image_path['sm'])}}" alt="" class="img-responsive img-fullwidth"> </div>
            {{--<div class="entry-meta meta-absolute text-center pl-15 pr-15">
                <div class="display-table">
                    <div class="display-table-cell">
                        <ul>
                            <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                            <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>--}}
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