@php($parentId = $item->parent ? $item->parent->id : 0)
<!-- Portfolio Item Start -->
<div class="gallery-item hierarchy-{{ $parentId }} {{ $item->hierarchyType->code }}">
    <div class="hierarchy-filter portfolio-description">
        <h5 class="title">
            @if($item->children->count())
                <a href="#hierarchy-{{ $item->id }}" data-filter=".hierarchy-{{ $item->id }}">{{ $item->lang_name[App::getLocale()]['text'] }}</a>
            @else
                <span>{{ $item->lang_name[App::getLocale()]['text'] }}</span>
            @endif
        </h5>
        <span class="category"><span>{{ $item->hierarchyType->lang_name[App::getLocale()]['text'] }}</span></span>
        @if($item->children->count())
            <a style="padding: 10px; position: absolute; right: 5px; top: 0;" href="#hierarchy-{{ $item->id }}" data-filter=".hierarchy-{{ $item->id }}"><i class="fa fa-hand-o-right"></i></a>
        @endif
    </div>
</div>
<!-- Portfolio Item End -->
