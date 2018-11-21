$.fn.extend({
    selectedAsJSON: function(stringify = false){
        var result = [];
        $('option:selected', this).each(function(){
            var $this = $(this);
            var obj = {
                id:   $this.val(),
                name: $this.text()
            };

            for(var key in $this.data('data')){
                if(key.startsWith('data-')) {
                    var _key = key.replace('data-','');
                    obj[_key] = $this.data('data')[key];
                }
            }
            result.push(obj);
        });

        if(stringify)
            return JSON.stringify(result);
        else
            return result;
    }
});


/**
 *
 * please add this libs 
 * --------------------
 * 1 - bootstrap         css/js
 * 2 - select2           css/js
 * 3 - select2-bootstrap css
 *
 * global Js
 * DIR  = "{{ $dir }}",
 * LANG = "{{ $lang }}",
 */

// autocomplete select2

var AUT_AUTOCOMPLETE_PACK = {

    autocomplete: {

        init: function (Data) {

            return function () {
                var $this          = $(this);
                var url            = $this.data('remote');
                var required       = $this.data('required')       || null;
                var placeholder    = $this.data('placeholder')    || '';
                var target         = $($this.data('target'))      || '';
                var letters        = typeof $this.data('letter') != typeof undefined ? $this.data('letter') : 3;
                var tags           = $this.data('tags')           || false;
                var tagsCreate     = $this.data('tags-create')    || false;
                var tagsApprovied  = $this.data('tags-approvied') || false;
                var multiple       = $this.attr('multiple')       ? true : false;
                var linkWith       = $this.data('param')          || '';
                var data           = Data                         || [];

                $this.find('option:selected').each(function (i) {
                    var $this = $(this);
                    data[i] = {id: $this.val(), name: $this.text()};
                });

                if (linkWith.charAt(0) == '#') {
                    $(linkWith).change(function () {
                        $this.val('').change();
                    });
                }

                $this.select2({
                    ajax: {
                        url: url,
                        dataType: 'json',
                        delay: 400,
                        method: "GET",
                        global: false,
                        data: function (params) {

                            var param       = $this.data('param') || null;
                            var remoteParam = $this.attr('data-remote-param') || null;

                            if (param && param.charAt(0) === '#') {
                                var name = $(param).attr('name') || $(param).attr('id');
                                var val = $(param).val() ? $(param).val() : 0;
                                param = JSON.parse('{"' + name + '":"' + val + '"}');
                            }
                            var $data = {q: params.term, page: params.page};
                            if (param) {
                                $data = $.extend($data, param);
                            }

                            if (remoteParam)
                                $((remoteParam).split(',')).each(function (i, v) {
                                    $data = $.extend($data, JSON.parse('{"' + (v).split('=')[0] + '" : "' + (v).split('=')[1] + '"}'));
                                });

                            return $data;
                        },
                        processResults: function (data, params) {
                            params.page = params.page || 1;

                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 30) < data.total_count
                                }
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function (markup) {
                        return markup;
                    },
                    dir: DIR,
                    language: LANG,
                    minimumInputLength: letters,
                    placeholder: placeholder,
                    allowClear: true,
                    templateResult: AUT_AUTOCOMPLETE_PACK.autocomplete.formatRepo,
                    templateSelection: AUT_AUTOCOMPLETE_PACK.autocomplete.formatRepoSelection,
                    dropdownParent: target,
                    theme: "bootstrap",
                    data: data,

                    tags: tags,
                    multiple: multiple,
                    selectOnClose: tagsApprovied ? !multiple : false,
                    tokenSeparators: [","],
                    createTag: AUT_AUTOCOMPLETE_PACK.autocomplete.createTag,
                })
                .off('select2:select').on('select2:select',AUT_AUTOCOMPLETE_PACK.autocomplete.eventSelect)
                .off('select2:unselect').on('select2:unselect',AUT_AUTOCOMPLETE_PACK.autocomplete.eventUnSelect);
            }
        },

        createTag: function(newTag) {

            var term = $.trim(newTag.term);

            if (term === '' || term.length < 2 || term.indexOf('@') === -1 || term.indexOf('@') !== 0)
                return null;

            var newTag = (newTag.term).replace(/@/,'');

            return {
                id: 'new:' + newTag,
                text: newTag,
                newTag: true
            };
        },

        formatRepo: function (repo) {

            var result = repo.name || repo.text;

            if(repo.id == null || !(repo.tags && repo.approvied))
                return result;

            var $option = $("<spam></span>");
            var $preview = $(result);

            /*
             * Select2 will remove the dropdown on `mouseup`, which will prevent any `click` events from being triggered
             * So we need to block the propagation of the `mouseup` event
             */
            $preview.find('.delete-autocomplete,.approvied-autocomplete').on('mouseup', function(evt) {
                evt.stopPropagation();
            });

            /*
             * click event on menu for delete or approvied menu item
             */
            $preview.find('.delete-autocomplete,.approvied-autocomplete').on('click', function (evt) {

                var target = $(evt.target),
                    data   = target.data(),
                    text   = target.parent().text().trim();

                /*
                 * menu: delete item autocomplete if isn't approvied
                 * if item approvied you will not able to delete it
                 */
                if(target.hasClass('delete-autocomplete'))
                    AUT_AUTOCOMPLETE_PACK.autocomplete.deleteAutocomplete({
                        this   : target,
                        key    : data.key,
                        action : data.action,
                        isItem : false
                    });

                /*
                 * menu: approvied item is allowed for user owner only how create this item
                 * if user approvied his item it is will be availible for all users or it will not
                 */
                if(target.hasClass('approvied-autocomplete'))
                    AUT_AUTOCOMPLETE_PACK.autocomplete.approviedAutocomplete({
                        this   : target,
                        action : data.action,
                        text   : text,
                        isItem : false
                    });
            });

            // $option.text(result);
            $option.append($preview);

            return $option;
        },

        formatRepoSelection: function (repo) {

            var repoText = repo.text || repo.name;
            var $option = $(repo.element);
            for(var key in repo){
                if(key.startsWith('data-')) {
                    $option.attr(key, repo[key]);
                    // $option.data('type')
                }
            }
            return repoText;
        },

        eventSelect: function (evt) {

            var $this          = $(this),
                url            = $this.data('remote'),
                lang           = $this.data('lang'),
                tagsCreate     = $this.data('tags-create')    || false;

            if(tagsCreate)
            {
                // this for fix height for long text
                $this.parent().find('.select2-selection').css('height', 'auto');

                if(evt.params.data.newTag)
                {
                    $.post(url,{ text: evt.params.data.text, lang: lang }, function (res) {

                        // add new item to selected object
                        var data = $this.select2('data');
                        data.push({ id: res.id, text: res.text, name: res.name, title: res.title ,tags: true ,approvied: res.approvied ,selected: true ,disabled: false });

                        // delete new tag element
                        var index = data.findIndex(function(x){
                            return (x.id.toString()).match(/new:/ig);
                        });
                        data.splice(index ,1);

                        //foreach item to be selected
                        $.each(data, function(i,v) {
                            data[i].selected = true;
                        });

                        // reload autocomplete with selected
                        AUT_AUTOCOMPLETE_PACK.autocomplete.resetAutocomplete($this);
                        AUT_AUTOCOMPLETE_PACK.autocomplete.selectedAutocomplete($this ,data);

                    }).fail(function (res) {

                        $this.find('option[value="' + evt.params.data.id + '"]').remove();

                        AUT_AUTOCOMPLETE_PACK.autocomplete.notifyAutocomplete($this.parent().find('.select2') ,res.responseJSON.message,'danger');
                    });
                }
            }
        },

        eventUnSelect: function (evt) {

            var $this = $(this);

            $this.find('option[value="' + evt.params.data.id + '"]').remove();
        },

        notifyAutocomplete: function(select2Selector ,message ,status) {

            // show notify message
            select2Selector.next().append('<span class="autocomplete-alert-delete text-' + status + '" style="font-size: 0.8em;">'+ message +'</span>');
            select2Selector.parent().find('.autocomplete-alert-delete').fadeOut(4500,function() {
                $(this).remove();
            });
        },

        approviedAutocomplete: function(param) {

            var action = param.action;
            var autoSelector = param.isItem ? param.this.closest('.select2') : $('[aria-owns="' + param.this.closest('ul').attr('id') + '"]').closest('.select2');

            $.post(action, { '_method' : 'put' ,'text' : param.text }, function(res) {

                AUT_AUTOCOMPLETE_PACK.autocomplete.notifyAutocomplete(autoSelector ,res.message ,'success');

                // get selected data
                var autocomplete = autoSelector.parent().find('.datatable-autocomplete,.autocomplete');
                var data = autocomplete.select2('data');
                data.push({ id: res.id, text: res.text ,name: res.name ,title: res.title ,approvied: res.approvied ,selected: true ,disabled: false });

                // delete item element
                var index = data.findIndex(function(x){
                    return x.id == res.id;
                });
                data.splice(index ,1);

                //forcr item to be selected
                $.each(data, function(i,v) {
                    data[i].selected = true;
                });

                // reload autocomplete with selected
                AUT_AUTOCOMPLETE_PACK.autocomplete.resetAutocomplete(autocomplete);
                AUT_AUTOCOMPLETE_PACK.autocomplete.selectedAutocomplete(autocomplete ,data);

                if(param.isItem)
                {
                    param.this.removeClass('text-danger').addClass('text-success');
                    param.this.parent().find('.delete-autocomplete').remove();

                    autoSelector.parent().find('.datatable-autocomplete,.autocomplete').select2('close');
                    autoSelector.parent().find('.datatable-autocomplete,.autocomplete').select2('open');
                }

            }).fail(function (res) {

                AUT_AUTOCOMPLETE_PACK.autocomplete.notifyAutocomplete(autoSelector ,res.responseJSON.message,'danger');
            });
        },

        deleteAutocomplete: function (param) {

            $.post(param.action, { '_method' : 'delete' }, function(res) {

                var autoSelector = param.isItem ? param.this.closest('.select2') : $('[aria-owns="' + param.this.closest('ul').attr('id') + '"]').closest('.select2');

                AUT_AUTOCOMPLETE_PACK.autocomplete.notifyAutocomplete(autoSelector ,res.message ,'success');

                //delete option from select2
                if(param.isItem)
                {
                    param.selector.find('option[value="' + param.key + '"]').remove();
                }
                else
                {
                    param.this.closest('li').remove();
                    autoSelector.parent().find('option[value="' + $(param.this).data('key') + '"]').remove();
                }
            });
        },

        reloadAutocomplete: function (selector) {

            var $selector = $(selector);

            $selector.each(AUT_AUTOCOMPLETE_PACK.autocomplete.init(null));

            /*
             * delete item on autocomplete
             */
            $selector.parent().on('click','.delete-autocomplete,.approvied-autocomplete',function() {

                var $this = $(this),
                    data  = $this.data(),
                    text  = $this.parent().text().trim();

                if(target.hasClass('delete-autocomplete'))
                    AUT_AUTOCOMPLETE_PACK.autocomplete.deleteAutocomplete({
                        this: $this,
                        key: data.key,
                        action: data.action,
                        selector: $selector,
                        isItem: true
                    });

                if(target.hasClass('approvied-autocomplete'))
                    AUT_AUTOCOMPLETE_PACK.autocomplete.approviedAutocomplete({
                        this    : $this,
                        action  : data.action,
                        text    : text,
                        isItem  : true,
                    });

                $selector.select2('close');
            });
        },

        selectedAutocomplete: function (selector, data) {

            $(selector).each(AUT_AUTOCOMPLETE_PACK.autocomplete.init(data));
        },

        resetAutocomplete: function (selector) {

            //$('.autocomplete').val(null).trigger("change");
            $(selector).empty().trigger('change');
        },

        initAutocomplete: function (selector, $cont) {
            var $obj, $cont = $cont || false;
            if(typeof selector == 'object'){
                $obj = selector;
            } else {
                selector = selector || '.autocomplete';

                if($cont){
                    $obj = $cont.find(selector);
                } else {
                    $obj = $(selector);
                }
            }
            $obj.each(AUT_AUTOCOMPLETE_PACK.autocomplete.init(null));
        },

        destroyAutocomplete: function (selector, $cont) {
            var $obj, $cont = $cont || false;
            if(typeof selector == 'object'){
                $obj = selector;
            } else {
                selector = selector || '.autocomplete';
                if($cont){
                    $obj = $cont.find(selector);
                } else {
                    $obj = $(selector);
                }
            }
            $obj.select2('destroy');
        },
    },

    select: {

        init: function (data) {

            return function () {

                var $this = $(this);
                var placeholder = (typeof $this.data('placeholder') !== typeof undefined) ? $this.data('placeholder') : '';

                $this.select2({
                    dir: DIR,
                    language: LANG,
                    placeholder: placeholder,
                    allowClear: true,
                    theme: "bootstrap",
                    data: data
                });
            }
        },

        reloadSelect: function (selector) {

            $(selector).each(AUT_AUTOCOMPLETE_PACK.select.initSelect);
        },

        selectedSelect: function (selector, data) {

            $(selector).each(AUT_AUTOCOMPLETE_PACK.select.initSelect(data));
        },

        resetSelect: function (selector) {

            $(selector).val('').trigger("change");
        },

        initSelect: function (selector, $cont) {
            var $obj, $cont = $cont || false;
            if(typeof selector == 'object'){
                $obj = selector;
            } else {
                selector = selector || '.select';
                if($cont){
                    $obj = $cont.find(selector);
                } else {
                    $obj = $(selector);
                }
            }

            $obj.each(AUT_AUTOCOMPLETE_PACK.select.init());
        },

        destroySelect: function (selector, $cont) {
            var $obj, $cont = $cont || false;
            if(typeof selector == 'object'){
                $obj = selector;
            } else {
                selector = selector || '.select';
                if($cont){
                    $obj = $cont.find(selector);
                } else {
                    $obj = $(selector);
                }
            }
            $obj.select2('destroy');
        }
    },
};

/**
 * init App
 */

$(function () {
    AUT_AUTOCOMPLETE_PACK.select.initSelect();
    AUT_AUTOCOMPLETE_PACK.autocomplete.initAutocomplete();
});
