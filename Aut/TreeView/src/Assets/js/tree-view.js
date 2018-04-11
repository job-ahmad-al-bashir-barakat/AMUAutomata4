
var AUT_TREE_VIEW = {

    tree: {

        treeContId: '.aut-tree',

        treeLoadClass: '.nestable',

        storageKeyName: 'js-nestable',

        storageKeyAuto: 'js-nestable-auto',

        parentAutocompleteSelector: '.tree-autocomplete-change',

        init : function ($this ,$node) {

            var $cont               = $($this), //$this || $(this)
                $treeParam          = $node != null ? "?nodeId=" + $node : "",
                clone               = typeof $cont.data('clone') != typeof undefined ? JSON.parse($cont.data('clone')) : false,
                groupSource         = typeof $cont.data('group-source') != typeof undefined ? $cont.data('group-source') : undefined,
                reject              = typeof $cont.data('reject') != typeof undefined ? JSON.parse($cont.data('reject')) : false,
                init                = typeof $cont.data('init') != typeof undefined ? JSON.parse($cont.data('init')) : false,
                drop                = typeof $cont.data('drop') != typeof undefined ? JSON.parse($cont.data('drop')) : false,
                drop_exists         = typeof $cont.data('drop-exists') != typeof undefined ? JSON.parse($cont.data('drop-exists')) : false,
                disableNest         = typeof $cont.data('disable-nest') != typeof undefined ? JSON.parse($cont.data('disable-nest')) : false,
                emptyText           = typeof $cont.data('empty-text') !=  typeof undefined ? $cont.data('empty-text') : 'Drag Here',
                enableAutoOrderSave = typeof $cont.data('enable-auto-order-save') !=  typeof undefined ? JSON.parse($cont.data('enable-auto-order-save')) : false;

            var optionsObj = {
                maxDepth: $cont.data('max-depth'),
                group: $cont.data('group'),
                clone: clone,
                emptyText: emptyText,
                disableNest : disableNest,
                // afterInit: function ( event ) { }
            };

            if(groupSource) {

                var groupSource = (groupSource.toString()).split(',').map(Number);

                optionsObj.group_source = groupSource;
            }

            // this it is just allow for the same list not between lists
            if(reject)
                optionsObj.reject = [{

                    rule: function(draggedElement) {

                        // The this object refers to dragRootEl i.e. the nestable root element. The drag action is cancelled if this function returns true
                        // The rule here is that it is forbidden drag elements to first-level children

                        var rule;

                        if(typeof $cont.data('reject-rule-callback') != typeof undefined)
                            rule = window[$cont.data('reject-rule-callback')](draggedElement);
                        else
                            rule = false;

                        return rule;
                    },

                    action: function(draggedElement) {

                        // This optional function defines what to do when such a rule applies
                        // alert('You can\'t do that !');

                        if(typeof $cont.data('reject-action-callback') != typeof undefined)
                            window[$cont.data('reject-action-callback')](draggedElement);
                    }
                }];

            if(init)
                optionsObj.afterInit = function ( event ) {

                    if(typeof $cont.data('init-callback') != typeof undefined)
                        window[$cont.data('init-callback')](event);
                }

            if(drop)
                optionsObj.dropCallback = function (details) {
                };

            var nestable = function ($this) {

                $this.nestable(optionsObj)
                .off('change').on('change', AUT_TREE_VIEW.tree.updateOutput)
                .off('dragEnd').on('dragEnd', function(event, item, source, destination, position) {

                    // Make an ajax request to persist move on database
                    // here you can pass item-id, source-id, destination-id and position index to the server

                    // need this for save order operation
                    if($cont.hasClass('order')) {

                        item.parent().children('li').each(function (i, v) {

                            var $this = $(this) ,parent = $this.parents('li:first');

                            // order
                            $this.attr('data-order', i + 1);
                            $this.data('order', i + 1);
                            // ordered
                            $this.attr('data-ordered',true);
                            $this.data('ordered',true);

                            if(parent.length) {
                                var obj = { 'id' : parent.data('id') , 'name' : parent.data('name') };
                                $this.data('parent' ,obj);
                                $this.attr('data-parent' ,JSON.stringify(obj));
                            } else {
                                delete $this.data().parent;
                                $this.removeAttr('data-parent');
                            }
                        });

                        var data = [];
                        $('[data-ordered=true]').each(function(i ,v){
                            data.push($(v).data());
                        });
                        $cont.data('order_list' ,data);
                    }

                    if(typeof $cont.data('drag-end-callback') != typeof undefined) {

                        // drag callback
                        var $drag = window[$cont.data('drag-end-callback')](event, item, source, destination, position);

                        // stop drag when return false
                        if(!$drag)
                            return;
                    }

                    // for drop any item when is exists in same tree :: this driven by data-exitst and data-type
                    if(drop_exists) {

                        var destinationExists = destination.find('[data-exists=' + item.data('exists') + ']');
                        if(destinationExists.length > 1)
                            $.each(destinationExists ,function (i ,v) {
                                if(i == (destinationExists.length - 1))
                                    $(this).remove();
                            });

                        if(item.data('type') != destination.closest(AUT_TREE_VIEW.tree.treeContId).data('type'))
                            item.remove();
                    }

                    if(enableAutoOrderSave) {

                        if($cont.hasClass('ajax')) {

                            var item   = $(_.head(item)),
                                id     = item.data('id'),
                                parent = item.parents('li:first').data('id'),
                                parent_target = item.data('parent');

                            // get serialize data from tree
                            var list = event.length ? event : $(event.target);

                            var ObjectOrderSerialize = list.nestable('serialize');

                            var data;
                            if (parent_target) {
                                //children
                                data = JSPath.apply('..{.parent.id == "' + parent_target.id + '"}', ObjectOrderSerialize);
                            } else {
                                //parent
                                data = JSPath.apply('.', ObjectOrderSerialize);
                            }

                            $.put($cont.data('url') + "/order/" + id, { data: data }, AUT_TREE_VIEW.tree.plugin.autoOrderSaveSuccess);
                        }
                    }
                })
                //.off('beforeDragStart').on('beforeDragStart', function(handle) {})
                //.off('dragStart').on('dragStart', function(event, item, source) { })
                //.off('dragMove').on('dragMove', function(event, item, source, destination) { })
                //.off('beforeDragEnd').on('beforeDragEnd', function(event, item, source, destination, position, feedback) {
                // If you need to persist list items order if changes, you need to comment the next line
                // if (source[0] === destination[0]) { feedback.abort = true; return; }
                //  feedback.abort = !window.confirm('Continue?');
                //});
            }

            if($cont.hasClass('ajax')) {

                $cont.load($cont.data('url') + $treeParam, function () {

                    var $this    = $(this),
                        _nestable = $this.find(AUT_TREE_VIEW.tree.treeLoadClass);

                    nestable(_nestable);

                    // output initial serialised data
                    if (_nestable.length)
                        AUT_TREE_VIEW.tree.updateOutput(_nestable.data('output', $this.find('.nestable-output')));

                    AUT_AUTOCOMPLETE_PACK.autocomplete.reloadAutocomplete($this.find('.autocomplete'));
                });

            } else nestable($cont.find(AUT_TREE_VIEW.tree.treeLoadClass));

            // with ajax
            $(document).off('change.parentAutocomplete').on('change.parentAutocomplete', AUT_TREE_VIEW.tree.parentAutocompleteSelector, AUT_TREE_VIEW.tree.changeParentAutocomplete);
            $(document).off('change.treeAutocomplete').on('change.treeAutocomplete', '#treeAutocomplete', AUT_TREE_VIEW.tree.treeAutocomplete);
            $(document).off('click.nestableAction').on('click.nestableAction', '.js-nestable-action [data-action]', AUT_TREE_VIEW.tree.eventNestableAction);
            $(document).off('click.add').on('click.add', '[data-form-add]', AUT_TREE_VIEW.tree.eventFormAdd);
            $(document).off('click.update').on('click.update', '[data-form-update]', AUT_TREE_VIEW.tree.eventFormUpdate);
        },

        updateOutput: function (e) {

            var list     = e.length ? e : $(e.target),
                output   = list.data('output'),
                treeCont = list.closest(AUT_TREE_VIEW.tree.treeContId);

            if(output) {
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                } else {
                    output.val('JSON browser support required for this demo.');
                }
            }

            var treeAction = $.localStorage.get(treeCont.data('storage-key') || AUT_TREE_VIEW.tree.storageKeyName);

            if (treeAction != null)
                list.nestable((treeAction.action).toCamelCase());
        },

        clear: function (selector ,text) {

            var tree = $(selector)
            tree.find('ol:first').remove();
            tree.find('.dd-empty').remove();
            tree.append('<div class="dd-empty">' + text + '</div>');
        },

        changeParentAutocomplete: function () {

            var $this = $(this),
                $treeContId = $($this.closest('form').data('tree-target')),
                $length;

            if ($this.val())
            // get children length for parent
                $length = $treeContId
                    .find("[data-id=" + $this.val() + "] .dd-list li:first")
                    .parent()
                    .children().length + 1;
            else
            // get length for first level
                $length = $treeContId.find('.dd .dd-list:first').children('li').length + 1;

            // add order to order input inside form
            $this.closest('form')
                .find('#order')
                .val($length);
        },

        treeAutocomplete: function () {

            var $this = $(this),
                $node = $this.val();

            AUT_TREE_VIEW.tree.init($this.closest(AUT_TREE_VIEW.tree.treeContId), $node);
        },

        eventNestableAction: function (e) {

            var target   = $(e.target),
                action   = target.data('action'),
                treeCont = target.closest(AUT_TREE_VIEW.tree.treeContId),
                list     = treeCont.find(AUT_TREE_VIEW.tree.treeLoadClass),
                modal    = target.data('target');

            if (action === 'expand-all') {
                list.nestable('expandAll');
            }

            if (action === 'collapse-all') {
                list.nestable('collapseAll');
            }

            if (action === 'reset_tree') {
                AUT_TREE_VIEW.tree.init(treeCont, null);
            }

            if (action === 'add_tree_node') {
                // make change for parent autocomplete
                $(modal).find(AUT_TREE_VIEW.tree.parentAutocompleteSelector).trigger('change');
            }

            if (action == 'save_order') {
                AUT_TREE_VIEW.tree.saveTreeOrder(treeCont);
            }

            $.localStorage.set(treeCont.data('storage-key') || AUT_TREE_VIEW.tree.storageKeyName, {"action": action});
        },

        saveTreeOrder: function (treeCont) {

            $.put(treeCont.data('url') + '/order', { data: treeCont.data('order_list') },AUT_TREE_VIEW.tree.plugin.saveTreeOrderSuccess);
        },

        eventFormAdd: function () {

            var $this  = $(this),
                $modal = $(this).data('target');

            // add id selected item  for filter auto without this id and its children
            $($modal).find(AUT_TREE_VIEW.tree.parentAutocompleteSelector).attr('data-remote-param', "");
        },

        eventFormUpdate: function () {

            var $this     = $(this),
                $contData = $this.closest($this.data('editable-target')),
                $modal    = $this.data('target');

            // add id selected item  for filter auto without this id and its children
            $($modal).find(AUT_TREE_VIEW.tree.parentAutocompleteSelector).attr('data-remote-param', "id=" + $($contData).data('id'));
        },

        initTree: function () {

            $(AUT_TREE_VIEW.tree.treeContId).each(function () {

                AUT_TREE_VIEW.tree.init(this ,null);
            });
        },

        plugin: {
            autoOrderSaveSuccess: function (res) {
                AUT_HELPER.notify({ message: res.operation_message, status: 'success' });
            },
            saveTreeOrderSuccess: function (res) {
                AUT_HELPER.notify({message: res.operation_message, status: 'success'});
            }
        }
    },
};

/**=========================================================
 * Module: Tree View
 =========================================================*/

(function(window, document, $, undefined) {

    $(function() {
        AUT_TREE_VIEW.tree.initTree();
    });

})(window, document, window.jQuery);
