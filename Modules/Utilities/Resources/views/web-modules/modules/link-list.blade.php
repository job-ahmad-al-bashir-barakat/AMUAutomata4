<div class="col-md-{{ $data['width'] ?? '4' }}">
    <div class="list-group">
        @foreach($data['linkLists'] as $linkList)
            <a href="{{ $linkList->lang_url[app()->getLocale()]->text }}" class="list-group-item " style="background-color: {{ $linkList->bg_color }};border-color: {{ $linkList->bg_color }};">
                <h4 style="color: #fff;" class="list-group-item-heading">{!! $linkList->lang_text[app()->getLocale()]->text !!} <i style="font-size: 1.5em;" class="pull-right {{ $linkList->icon->code }}"></i></h4>
            </a>
        @endforeach
    </div>
</div>
