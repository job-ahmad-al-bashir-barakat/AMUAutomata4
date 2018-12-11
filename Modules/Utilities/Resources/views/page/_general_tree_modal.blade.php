{!! FormComponent::modalOpen('modal-general-tree') !!}
{!! FormComponent::onSuccess('generalMenu')->getData('item')->formOpen('general-tree','post',treeLocalizeUrl($view),'',['data-tree-target' => '.general-tree','data-param' => "?menu=$menu"]) !!}
    {!! FormComponent::modalHeaderOpen(trans('utilities::app.general_item')) !!}
    {!! FormComponent::modalHeaderClose() !!}

    {!! FormComponent::modalBodyOpen() !!}
        {!! FormComponent::fill('id')->primarykey('id' ,'id') !!}
        {!! FormComponent::fill('menu_list_id')->hidden('menu_list_id' ,'menu_list_id',$menu,'',[],true) !!}
        {!! FormComponent::placeholder(trans('utilities::app.parent'))->fill('parent')->autocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/general?type=dialog',[],'3' ,'tree-autocomplete-change') !!}
        {{--tree-autocomplete-change is class for change event to fill order with its value--}}
        {!! FormComponent::fill('name-{lang}')->trans()->langs()->text(trans('utilities::app.name'),'name' ,'name' ,null ,'required') !!}
        {!! FormComponent::fill('prefix')->text(trans('utilities::app.prefix'),'prefix','prefix','','slug') !!}
        {!! FormComponent::fill('url')->text(trans('utilities::app.url'),'url','url') !!}
        {!! FormComponent::fill('order')->hidden('order' ,'order') !!}
    {!! FormComponent::modalBodyClose() !!}

    {!! FormComponent::modalFooterOpen() !!}
        {!! FormComponent::formAjaxButtons(['deleteSerialize' => false]) !!}
    {!! FormComponent::modalFooterClose() !!}
{!! FormComponent::formClose() !!}
{!! FormComponent::modalClose() !!}

{!! FormComponent::notify('fa fa-bell-o' , 'prevent-drag-link',trans("utilities::app.prevent_drag_link_on_link")) !!}
{!! FormComponent::notify('fa fa-bell-o' , 'prevent-drag-list',trans("utilities::app.prevent_drag_list_on_link")) !!}

<script>

    function rejectLinks(draggedElement) {

        var reject = false;

        // prevent from nested element
        if($(draggedElement).data('conflict') == $(draggedElement).closest('.aut-tree').data('conflict'))
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

            var parent     = item.parents('li:first'),
                order      = item.closest('.dd-list').children('li').length + 1,
                tree       = destination.closest('.aut-tree'),
                urlParams  = typeof tree.data('param') != typeof undefined ? tree.data('param') : '';

            item.attr('data-saved' ,true);

            $.post(tree.data('url') + urlParams ,$.extend(item.data() ,parent.length > 0 ? { parent_id : parent.data('id') ,order : order } : { order : order }) ,function () {

                source.find('[data-id="' + item.data('id') + '"]').remove();

                if(source.find('li').length == 0)
                    source.find('.dd-list').removeClass('dd-list').addClass('dd-empty')

                AUT_TREE_VIEW.tree.init('.general-tree');

                AUT_HELPER.notify({message: OPERATION_MESSAGE_SUCCESS, status: 'success'})
            });

            return false;
        }

        return true;
    }

    function ruleSiteMenu(draggedElement) {

        var reject = false;

        var draggedElement = $(draggedElement);
        var li   = draggedElement.parents('li:first');
        // prevent from nested element
        if(!li.is('[data-dynamic]'))
            if(!draggedElement.is('[data-dynamic]'))
                if(li.data('link'))
                    reject = true;

        return reject;
    }

    function initSiteMenu(event) {

        $('.general-tree').off('click').on('click' , '.trash' ,function () {

            var $this         = $(this),
                   li         = $this.closest('li'),
                   tree       = $this.closest('.aut-tree'),
                   url        = tree.data('url'),
                   urlParams  = typeof tree.data('param') != typeof undefined ? tree.data('param') : '';

            // has children
            if(li.data('children') > 0) {
                AUT_HELPER.notify({message: "{{ trans('app.can_not_delete_node_has_children') }}", status: 'danger'});
                return;
            }

            /*
                // hsa parent
                if(li.data('parent')) {
                    AUT_HELPER.notify({message: "trans('app.can_not_delete_node_has_parent')", status: 'danger'});
                    return;
                }
            */

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

                $.delete(url +'/'+ li.data('id') + urlParams,function () {

                    AUT_HELPER.notify({message: OPERATION_MESSAGE_SUCCESS, status: 'success'});

                    $.get("{{ RouteUrls::generalMenu($menu) }}",{ load_link_items : true },function (res) {

                        $('.link_items').html(res.html);

                        AUT_TREE_VIEW.tree.initTree();
                    });
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

    $(function () {

        // remove list that is empty
        $('.link_items .dd-list').each(function(i,ol){
            var ol = $(ol);
            if(!ol.find('li').length)
                ol.closest('.panel').remove();
        });
    });

</script>
