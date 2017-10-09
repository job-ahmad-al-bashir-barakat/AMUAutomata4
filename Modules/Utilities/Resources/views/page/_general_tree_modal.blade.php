@component('controle.component.modal', [
    'id'                  => 'modal-general-tree',
    'title'               => trans('utilities::app.general_item'),
    'action'              => treeUrl($view),
    'successFunc'         => 'generalMenu',
    'stopDeleteSerialize' => true,
    'attr'                => ['data-tree-target' => '.general-tree'],
])

    {{ Form::bsPrimarykey('id' ,'id' ,null ,'' ,['data-json' => 'id']) }}
    {{--tree-autocomplete-change is class for change event to fill order with its value--}}
    {{ Form::bsAutocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/general',[],'3' ,'tree-autocomplete-change group' ,['data-json' => 'parent' , 'data-placeholder' => trans('utilities::app.parent')]) }}
    {{ Form::bsText(trans('utilities::app.name'),'name' ,'name' ,null ,'group langs trans required' ,['data-json' => 'name-{lang}']) }}
    {{ Form::bsHidden('order' ,'order' ,null ,'' ,['data-json' => 'order']) }}

@endcomponent

<script>

    function rejectLinks(draggedElement) {

        var reject = false;

        // prevent from nested element
        if($(draggedElement).data('type') == $(draggedElement).closest('.dd').data('type'))
            reject = true;

        return reject;
    }

    function generalMenu(form ,res) {

        APP_AMU.tree.init($(form).data('tree-target'));
    }

    function dragSiteMenu(event, item, source, destination, position) {

        var parentLink = $(item).parents('li:first').data('link')
        if ((typeof parentLink != typeof undefined && parentLink) == item.data('link')) {
            $(item).remove()

            alert('done22');

            return
        }

        if (source != destination) {

            var parent = $(item).parents('li:first');
            $.post(destination.closest('.aut-tree').data('url') ,$.extend($(item).data() ,{ parent_id : parent.data('id') , order: parent.find('.dd-list:first').children('li').length }) ,function () {

                APP_AMU.tree.init('.general-tree');
            });
        }
    }

    function ruleSiteMenu(draggedElement) {

        var reject = false;

        // prevent from nested element
        if($(draggedElement).parents('li:first').data('link'))
            reject = true;

        return reject;
    }

    function actionSiteMenu(draggedElement) {

        alert('done');
    }

</script>


