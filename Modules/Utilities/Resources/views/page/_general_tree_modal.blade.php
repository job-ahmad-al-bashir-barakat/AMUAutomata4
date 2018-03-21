{{ FormComponent::modalOpen('modal-general-tree') }}
    {{ FormComponent::formOpen('general-tree','post',treeLocalizeUrl($view),'',['data-tree-target' => '.general-tree']) }}
        {{ FormComponent::modalHeaderOpen(trans('utilities::app.general_item')) }}
        {{ FormComponent::modalHeaderClose() }}

        {{ FormComponent::modalBodyOpen() }}
            {{ FormComponent::primarykey('id' ,'id' ,null ,'' ,['data-json' => 'id']) }}
            {{--tree-autocomplete-change is class for change event to fill order with its value--}}
            {{ FormComponent::autocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/general?type=dialog',[],'3' ,'tree-autocomplete-change group' ,['data-json' => 'parent' , 'data-placeholder' => trans('utilities::app.parent')]) }}
            {{ FormComponent::text(trans('utilities::app.name'),'name' ,'name' ,null ,'group langs trans required' ,['data-json' => 'name-{lang}']) }}
            {{ FormComponent::text(trans('utilities::app.prefix'),'prefix','prefix',null,'group',['data-json' => 'prefix']) }}
            {{ FormComponent::hidden('order' ,'order' ,null ,'' ,['data-json' => 'order']) }}
        {{ FormComponent::modalBodyClose() }}

        {{ FormComponent::modalFooterOpen() }}
            {{ FormComponent::formAjaxButtons(['']) }}
        {{ FormComponent::modalFooterClose() }}
    {{ FormComponent::formClose() }}
{{ FormComponent::modalClose() }}

{{ FormComponent::notify('fa fa-bell-o' , 'prevent-drag-link',trans("utilities::app.prevent_drag_link_on_link")) }}
{{ FormComponent::notify('fa fa-bell-o' , 'prevent-drag-list',trans("utilities::app.prevent_drag_list_on_link")) }}

@component('controle.component.modal', [
    'successFunc'         => 'generalMenu',
    'stopDeleteSerialize' => true,
])

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

        AUT_TREE_VIEW.tree.init($(form).data('tree-target'));
    }

    function dragSiteMenu(event, item, source, destination, position) {

        var parentLink = $(item).parents('li:first').data('link');

        if(!$(item).parents('li:first').is('[data-dynamic]'))
        {
            if(!$(item).is('[data-dynamic]'))
            {
                if((typeof $(item).data('link') == typeof undefined) && parentLink) {

                    var _notify = $('.notify-clone.prevent-drag-list').clone();

                    AUT_HELPER.notify({html: _notify.html(), status: 'warning' ,pos : 'top-left' , timeout: 1500})

                    return false;
                }

                if ((typeof parentLink != typeof undefined && parentLink) == item.data('link')) {

                    $(item).remove()

                    var _notify = $('.notify-clone.prevent-drag-link').clone();

                    AUT_HELPER.notify({html: _notify.html(), status: 'warning' ,pos : 'top-left' , timeout: 1500})

                    return;
                }
            }
        }

        if ((source != destination) && typeof item.data('saved') == typeof undefined) {

            var parent = item.parents('li:first'),
                order  = item.closest('.dd-list').children('li').length + 1;

            item.attr('data-saved' ,true);

            $.post(destination.closest('.aut-tree').data('url') ,$.extend(item.data() ,parent.length > 0 ? { parent_id : parent.data('id') ,order : order } : { order : order }) ,function () {

                AUT_TREE_VIEW.tree.init('.general-tree');

                AUT_HELPER.notify({message: OPERATION_MESSAGE_SUCCESS, status: 'success'})
            });

            return false;
        }

        return true;
    }

    function ruleSiteMenu(draggedElement) {

        var reject = false;

        // prevent from nested element
        if(!$(draggedElement).parents('li:first').is('[data-dynamic]'))
            if(!$(draggedElement).is('[data-dynamic]'))
                if($(draggedElement).parents('li:first').data('link'))
                    reject = true;

        return reject;
    }
    
    function initSiteMenu(event) {

        $('.general-tree').off('click').on('click' , '.trash' ,function () {

            var $this = $(this),
                   li = $this.closest('li');

            AUT_HELPER.sweetalert_swal({
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

                    AUT_TREE_VIEW.tree.init('.general-tree');

                    AUT_HELPER.notify({message: OPERATION_MESSAGE_SUCCESS, status: 'success'});
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
