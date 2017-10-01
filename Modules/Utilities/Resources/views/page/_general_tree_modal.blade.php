@component('controle.component.modal', [
    'id'                  => 'modal-general-tree',
    'title'               => trans('utilities::app.general_item'),
    'action'              => treeUrl($view),
    'successFunc'         => 'generalMenu',
    'stopDeleteSerialize' => true,
    'attr'                => ['data-tree-target' => 'general-tree'],
])

    {{ Form::bsPrimarykey('id' ,'id' ,null ,'' ,['data-json' => 'id']) }}
    {{--tree-autocomplete-change is class for change event to fill order with its value--}}
    {{ Form::bsAutocomplete(trans('utilities::app.parent') ,'parent-id' ,'parent_id','autocomplete/general',[],'3' ,'tree-autocomplete-change group' ,['data-json' => 'parent' , 'data-placeholder' => trans('utilities::app.parent')]) }}
    {{ Form::bsText(trans('utilities::app.name'),'name' ,'name' ,null ,'group langs trans required' ,['data-json' => 'name-{lang}']) }}
    {{ Form::bsHidden('order' ,'order' ,null ,'' ,['data-json' => 'order']) }}

@endcomponent

<script>


    function rejectLinks() {

        return [{
            rule: function(draggedElement) {

                // The this object refers to dragRootEl i.e. the nestable root element. The drag action is cancelled if this function returns true
                // The rule here is that it is forbidden drag elements to first-level children

                var reject = false;

                // prevent from nested element
                if($(draggedElement).data('type') == $(draggedElement).closest('.dd').data('type'))
                    reject = true;

                return reject;
            },

            action: function(draggedElement) {

                // This optional function defines what to do when such a rule applies
                // alert('You can\'t do that !');
            }
        }];
    }

    function rejectMainTree() {

        return [{
            rule: function(draggedElement) {

                // The this object refers to dragRootEl i.e. the nestable root element. The drag action is cancelled if this function returns true
                // The rule here is that it is forbidden drag elements to first-level children

                var reject = false;

                return reject;
            },

            action: function(draggedElement) {

                // This optional function defines what to do when such a rule applies
                // alert('You can\'t do that !');
            }
        }];
    }

    function generalMenu(form ,res) {

        APP_AMU.tree.ajaxLoad($('.' + $(form).data('tree-target')));
    }

</script>


