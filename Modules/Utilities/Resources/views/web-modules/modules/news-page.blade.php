@php($newsSlug = \Route::input('news'))
@php($newsId = getIdFromSlug($newsSlug))
@php($news = \Modules\Admin\Entities\News::findOrFail($newsId))
@php($left = ($dir == 'ltr')?'left':'right')

<div class="col-md-{{ $data['width'] }}">
    <div class="blog-posts single-post">
        <article class="post clearfix mb-0">
            <div class="entry-header">
                <div class="post-thumb thumb"> <img src="{{ getWebpSrc(asset($news->image_path['lg'])) }}" alt="" class="img-responsive img-fullwidth"> </div>
            </div>
            <div class="entry-title pt-10 pl-15">
                <h4><a class="" href="#">{{ $news->lang_title[$lang]->text }} </a></h4>
            </div>
            <div class="entry-meta pl-15">
                <ul class="list-inline">
                    <li>{{trans('admin::app.publish_date')}}:<span class="text-theme-color-2"> {{ $news->publish_date->format('d/m/Y') }}</span></li>
                </ul>
            </div>
            <div class="entry-content mt-10">
                {!! fixFileManagerSrc($news->lang_content[$lang]->text) !!}
            </div>
            <div class="mt-30 mb-0">
                <h5 class="pull-{{$left}} mt-10 mr-20 text-theme-color-2">{{trans('utilities::web-modules.share')}}: &nbsp</h5>
                <ul class="styled-icons icon-circled m-0">
                    <li><a href="{{ facebookShare() }}" target="_blank" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                    <li><a href="{{ twitterShare() }}" target="_blank" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                    <li><a href="{{ googleShare() }}" target="_blank" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
                </ul>
            </div>
            <div class="fb-share-button"
                 data-href="{{ Request::fullUrl() }}"
                 data-layout="button_count">
            </div>
        </article>
    </div>
</div>
<script>
    $(document).ready(function() {
        /*$.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
            FB.init({
                appId: '{your-app-id}',
                version: 'v2.7' // or v2.1, v2.2, v2.3, ...
            });
            $('#loginbutton,#feedbutton').removeAttr('disabled');
            FB.getLoginStatus(function (){
                console.log('test fb share buttons');
            });
        });*/
    });
</script>