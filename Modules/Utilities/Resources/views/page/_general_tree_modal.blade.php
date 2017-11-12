@component('controle.component.modal', [
    'id'                  => 'modal-general-tree',
    'title'               => trans('utilities::app.general_item'),
    'action'              => treeLocalizeUrl($view),
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

{{ Form::bsNotify('fa fa-bell-o' , 'prevent-drag-link',trans("utilities::app.prevent_drag_link_on_link")) }}
{{ Form::bsNotify('fa fa-bell-o' , 'prevent-drag-list',trans("utilities::app.prevent_drag_list_on_link")) }}

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

        var parentLink = $(item).parents('li:first').data('link');

        if(!$(item).is('[data-dynamic]'))
        {
            if((typeof $(item).data('link') == typeof undefined) && parentLink) {

                var _notify = $('.notify-clone.prevent-drag-list').clone();

                HELPER_AMU.notify({html: _notify.html(), status: 'warning' ,pos : 'top-left' , timeout: 1500})

                return false;
            }

            if ((typeof parentLink != typeof undefined && parentLink) == item.data('link')) {

                $(item).remove()

                var _notify = $('.notify-clone.prevent-drag-link').clone();

                HELPER_AMU.notify({html: _notify.html(), status: 'warning' ,pos : 'top-left' , timeout: 1500})

                return;
            }
        }

        if ((source != destination) && typeof item.data('saved') == typeof undefined) {

            var parent = item.parents('li:first'),
                order  = item.closest('.dd-list').children('li').length + 1;

            item.attr('data-saved' ,true);

            $.post(destination.closest('.aut-tree').data('url') ,$.extend(item.data() ,parent.length > 0 ? { parent_id : parent.data('id') ,order : order } : { order : order }) ,function () {

                APP_AMU.tree.init('.general-tree');

                HELPER_AMU.notify({message: OPERATION_MESSAGE_SUCCESS, status: 'success'})
            });

            return false;
        }

        return true;
    }

    function ruleSiteMenu(draggedElement) {

        var reject = false;

        // prevent from nested element
        if(!$(draggedElement).is('[data-dynamic]'))
            if($(draggedElement).parents('li:first').data('link'))
                reject = true;

        return reject;
    }
    
    function initSiteMenu(event) {

        $('.general-tree').off('click').on('click' , '.trash' ,function () {

            var $this = $(this),
                   li = $this.closest('li');

            APP_AMU.sweetalert_swal({
                title              : SWAL.title,
                text               : SWAL.text,
                type               : 'warning',
                confirmButtonText  : SWAL.confirmButtonText,
                cancelButtonText   : SWAL.cancelButtonText,
                showCancelButton   : true,
                showCloseButton    : true,
                allowEscapeKey     : true,
                allowOutsideClick  : true,
                confirmButtonColor : "#DD6B55",
                showLoaderOnConfirm: true,

            } ,function () {

                $.delete($this.closest('.aut-tree').data('url') +'/'+ li.data('id') ,function () {

                    APP_AMU.tree.init('.general-tree');

                    HELPER_AMU.notify({message: OPERATION_MESSAGE_SUCCESS, status: 'success'});
                });
            },{
                ok: SWAL.ok,
                cancleSafe : {
                    text : SWAL.cancleSafe.text,
                    message: SWAL.cancleSafe.message,
                }
            });

        });
    }

</script>
