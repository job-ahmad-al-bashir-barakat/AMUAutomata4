
String.prototype.replaceAll = function(search, replaceAllment) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replaceAllment);
};

String.prototype.toCamelCase = function() {
    return this.replace(/^([A-Z])|[\s-_](\w)/g, function(match, p1, p2, offset) {
        if (p2) return p2.toUpperCase();
        return p1.toLowerCase();
    });
};

var HELPER_AMU = {

    /**
     *
     * Set Value in Cookie.
     */
    setCookie : function (cookieName, value, exdays) {
        var exp = new Date();
        var x   = exp.getTime() + (exdays * 24 * 60 * 60 * 1000);
        exp.setTime(x);
        document.cookie = cookieName + "=" + encodeURI(value) + "; expires=" + exp.toGMTString() + ";path=/";
    },

    /**
     *
     * Get Value from Cookie.
     */
    getCookie : function (name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    },

    notify : function (notify) {

        var icon = (typeof notify.icon !== typeof undefined) ? '<em class="fa fa-' + notify.icon +  '"></em> ' : '';

        $.notify({
            message: icon + notify.message,
            pos: 'bottom-right',
            status: notify.status,
            timeout: 1000
        });
    },

    reloadElement : function (element) {

        _.each(element ,function (v ,k) {

            switch (k)
            {
                case 'tree': APP_AMU.tree.load(v);
            }
        })
    }
};

var APP_AMU = {

    initModalEvent : function () {

        $(document).on({

            'shown.bs.modal': function () {

                if($(this).find('.cropper').length);
                {
                    APP.CROPPER.destroy('.modal .cropper');
                    APP.CROPPER.init();
                }
            },

            'hidden.bs.modal' : function() {
                //
            }

        }, '.modal');
    },

    //Themes
    changeColorControleTheme: function () {

        // store theme color on click
        $('body').on('click' ,'[data-load-css]' ,function() {

            var $this  = $(this),
                $color = $this.find('.color');

            HELPER_AMU.setCookie('controleThemeColorUrl' ,$this.data('load-css'));
            HELPER_AMU.setCookie('controleThemeColorRGB' ,$color.first().css('background-color').replaceAll(/ /,''));
            HELPER_AMU.setCookie('controleThemeColorColorClass' ,$color.first().attr('class'));

            //change pace loader color
            $('#dynamic-style').remove();
            $('#globalStyle').after('<style id="dynamic-style"> .pace .pace-progress { background-color: ' + HELPER_AMU.getCookie("controleThemeColorRGB") + '!important; } </style>');
        });

        // set theme color on load
        $("[data-load-css='" + HELPER_AMU.getCookie('controleThemeColorUrl') + "']").click();
    },

    // Ajax History
    initPjax: function (container) {

        if ($.support.pjax) {

            $.fn.initializeMyPlugin = function () {

                APP.TRANSLATION();
                APP.COLLAPSE_PANELS();
                APP_AMU.ajax.init();
            };

            // time in milliseconds
            $.pjax.defaults.timeout = 1000;
            // maxCacheLength
            $.pjax.defaults.maxCacheLength = 0;

            $(document).on('click', 'a.ajax', function(event) {

                if ($(container).length == 0 || $(this).hasClass('no-ajax')) {
                    return;
                }

                $.pjax.click(event, {
                    container: container ,
                    timeout: 1000,
                });
            });

            // always fires after ajax, regardless of result
            $(document).on("pjax:complete", function () { });
            // after replacing HTML content loaded from the server
            $(document).on("pjax:success", function () {

                $('head [role="header"]').not(container + ' [role="header"]').remove();
                $('head').append($(container).find('[role="header"]'));

                $('body [role="footer"]').not(container + ' [role="footer"]').remove();
                $('body').append($(container).find('[role="footer"]'));
            });

            // before replacing content
            $(document).on("pjax:start", function (event) {

                $(container).fadeOut(300);
            });

            // 	after replacing content
            $(document).on("pjax:end", function (event) {

                $(container).fadeIn(300);

                $(event.target).initializeMyPlugin();
            });

            // event direction property: "back"/"forward"
            $(document).on("pjax:popstate", function (event) { });
            // right before replacing HTML with content from cache
            $(document).on("pjax:beforeReplace", function (event) { });
            // on ajax error; will hard refresh unless canceled
            $(document).on("pjax:error", function (event) { });
            // fires after options.timeout; will hard refresh unless canceled
            $(document).on("pjax:timeout", function (event) {
                event.preventDefault();
            });

            $(document).on('click','[data-reload]',function () {

                $.pjax({url: window.location.href, container: container, timeout: 1000});
            });
        }
    },

    // autocomplete select2
    autocomplete : {

        init : function (Data) {

            return function () {
                var $this = $(this);
                var data = (typeof Data !== typeof undefined) ? Data : [];
                $this.find('option:selected').each(function(i){
                    var $this = $(this);
                    data[i] = {id:$this.val(),name:$this.text()};
                });
                var url = $this.data('remote');
                var required = (typeof $this.data('required') !== typeof undefined) ? $this.data('required') : null;
                var placeholder = (typeof $this.data('placeholder') !== typeof undefined) ? $this.data('placeholder') : '';
                var target = (typeof $this.data('target') !== typeof undefined) ? $($this.data('target')) : '';
                var letters = (typeof $this.data('letter') !== typeof undefined) ? $this.data('letter'):3;
                var linkWith = $this.data('param') || '';
                if(linkWith.charAt(0) == '#') {
                    $(linkWith).change(function() {
                        $this.val('').change();
                    });
                }
                $this.select2({
                    ajax: {
                        url: url,
                        dataType: 'json',
                        delay: 400,
                        method : "GET",
                        data: function (params) {
                            var param = (typeof $this.data('param') !== typeof undefined)?$this.data('param'):null;

                            //added by basheer
                            var remoteParam = (typeof $this.attr('data-remote-param') !== typeof undefined) ? $this.attr('data-remote-param') : null;

                            if(param && param.charAt(0) === '#') {
                                var name = $(param).attr('name') || $(param).attr('id');
                                var val = $(param).val() ? $(param).val() : 0;
                                param = JSON.parse('{"'+name+'":"'+val+'"}');
                            }
                            var $data = {q: params.term,page: params.page};
                            if(param) {
                                $data = $.extend($data,param);
                            }

                            //added by basheer
                            if(remoteParam)
                                $((remoteParam).split(',')).each(function(i ,v) {
                                    $data = $.extend($data,JSON.parse('{"' + (v).split('=')[0] + '" : "' + (v).split('=')[1] + '"}'));
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
                    escapeMarkup: function (markup) { return markup; },
                    dir:DIR,
                    language: LANG,
                    minimumInputLength: letters,
                    placeholder: placeholder,
                    allowClear: true,
                    templateResult: APP_AMU.autocomplete.formatRepo,
                    templateSelection: APP_AMU.autocomplete.formatRepoSelection,
                    dropdownParent: target,
                    theme: "bootstrap",
                    data: data
                });
            }
        },

        formatRepo : function (repo) {

            if (repo.loading)
                return repo.text;
            return repo.name;
        },

        formatRepoSelection : function (repo) {

            if(typeof repo.selected === typeof undefined)
                return repo.text;
            return repo.name;
        },

        selectedAutocomplete : function (selector ,data) {

            $(selector).each(APP_AMU.autocomplete.init(data));
        },

        reloadAutocomplete : function (selector) {

            $(selector).each(APP_AMU.autocomplete.init());
        },

        resetAutocomplete : function (selector) {

            //$('.autocomplete').val(null).trigger("change");
            $(selector).empty().trigger('change');
        },

        initAutocomplete : function (selector) {

            var selector = typeof selector != typeof undefined ? selector : '.autocomplete';

            $(selector).each(APP_AMU.autocomplete.init());
        },
    },

    select : {

        init: function(data) {

            return  function () {

                var $this = $(this);
                var placeholder = (typeof $this.data('placeholder') !== typeof undefined) ? $this.data('placeholder') : '';

                $this.select2({
                    dir:DIR,
                    language: LANG,
                    placeholder: placeholder,
                    allowClear: true,
                    theme: "bootstrap",
                    data: data
                });
            }
        },

        reloadSelect: function(selector) {

            $(selector).each(initSelect());
        },

        selectedSelect: function(selector,data) {

            $(selector).each(initSelect(data));
        },

        resetSelect:function(selector) {

            $(selector).val('').trigger("change");
        },

        initSelect : function (selector) {

            var selector = typeof selector != typeof undefined ? selector : '.select';

            $(selector).each(APP_AMU.select.init());
        },
    },

    /**
     * validate classes
     *
     * cont class .ajaxCont  // class div form continer
     * init class .ajax-form // class ajax form
     *
     * you must have primarykey input in you form
     * -------------------form attrx--------------------
     * action : set action for form
     * method : set method form form
     * take-action : is data attribute allow you to take action directly from form without any change from javascript
     *               this will be handy with normal form
     *
     * ----------------form button attr-----------------
     * data-state               : this data attribute used to show/hide button with primary as helper
     * data-method              : this data attribute used to define type of request post/put/delete please type in lowercase
     * ajax-form-success        : set success funcName after add or update or delete
     * ajax-form-add-success    : set success funcName for add button
     * ajax-form-update-success : set success funcName for udate button
     * ajax-form-delete-success : set success funcName for delete button
     * data-serialize           : true/false -- in some cases you may need to start/stop serialize data with delete/add/update
     *
     * > just type function without any braces
     * > you must declare this func in you page if you need to do something
     * > i passed with this func form and res as param
     *
     */
    validate: {

        /**
         *
         * @param $form
         * @returns {*}
         */
        changeAction : function ($form) {

            var primarykey = $form.find('.primarykey').val(),
                takeAction = typeof $form.data('take-action') != typeof undefined ? true : false,
                action;

            if(!takeAction && primarykey)
                action = $form.attr('action') + "/" + primarykey;
            else
                action = $form.attr('action');

            return action;
        },

        init: function ($cont) {

            $($cont).find('form.ajax-form').each(function ()  {

                var validator = $(this).validate({

                    submitHandler: function (form, e) {

                        e.preventDefault();

                        var $this   = this,
                            $form   = $(form),
                            $button = $($this.submitButton),
                            $method = $button.data('method'),
                            $serialize = typeof $button.data('serialize') != typeof undefined ? $button.data('serialize') : true,
                            $data;

                        if($serialize)
                            $data = $form.serialize();
                        else
                            $data = {};

                        if(typeof $button.data('method') != typeof undefined) {
                            $method = $button.data('method');
                        } else {
                            $method = typeof $form.find('[name=_method]').val() != typeof undefined
                                ? _.lowerCase($form.find('[name=_method]').val())
                                : _.lowerCase($form.attr('method'));
                        }

                        $[$method](APP_AMU.validate.changeAction($form), $data, function(res) {

                            // if form was inside modal we will close it after save
                            if(typeof $form.parents('.modal') != typeof undefined)
                                $($form.parents('.modal')).modal('hide');

                            // reload after success oper by enter json like {"tree" : [".aut-tree"],....}
                            if(typeof $form.data('ajax-form-reload') != typeof undefined)
                                HELPER_AMU.reloadElement($form.data('ajax-form-reload'));

                            /**
                             *  Success Button Function Area
                             *
                             *  data-ajax-form-success
                             *  data-ajax-form-delete-success
                             *  data-ajax-form-update-success
                             *  data-ajax-form-add-success
                             *
                             */

                            // callback exec after oper success
                            if(typeof $button.data('ajax-form-success') != typeof undefined)
                                window[$button.data('ajax-form-success')](form ,res);

                            // callback exec after add oper success
                            if(typeof $button.data('ajax-form-add-success') != typeof undefined)
                                window[$button.data('ajax-form-add-success')](form ,res);

                            // callback exec after update oper success
                            if(typeof $button.data('ajax-form-update-success') != typeof undefined)
                                window[$button.data('ajax-form-update-success')](form ,res);

                            // callback exec after delete oper success
                            if(typeof $button.data('ajax-form-delete-success') != typeof undefined)
                                window[$button.data('ajax-form-delete-success')](form ,res);

                            HELPER_AMU.notify({ message : res.operation_message ,status : 'success' })

                        }).fail(function(res) {

                            HELPER_AMU.notify({ message : OPERATION_MESSAGE_FAIL ,status : 'danger'});

                            $.each(JSON.parse(res.responseText).server_message,function(k ,v){

                                var error = $form.find('#error_' + k);
                                error.children().remove();
                                error.append('<div id="' + k + '-error" class="validate-error validate-error-help-block validate-error-style animated fadeInDown">' + v[0] + '</div>');
                            });
                        });
                    },
                    ignore: [],
                    errorClass: 'validate-error validate-error-help-block validate-error-style animated fadeInDown',
                    errorElement: 'div',
                    invalidHandler: function(event, validator) {
                        if(validator.errorList.length)
                            $('[data-tab=' + $(validator.errorList[0].element).closest('[data-tab]').data('tab') + ']').trigger('click');
                    },
                    errorPlacement: function(error, e) {

                        jQuery(e).closest('.form-group').find('div[id*=error_]').append(error);
                    },
                    highlight: function(e, errorClass, validClass) {

                        var elem = jQuery(e);
                        elem.closest('.form-group > div').removeClass('has-error').addClass('has-error');
                        elem.closest('.help-block').remove();
                    },
                    unhighlight: function(e, errorClass, validClass) {

                        var elem = jQuery(e);
                        elem.closest('.form-group > div').removeClass('has-error');
                        elem.closest('.help-block').remove();
                    },
                    success: function(e) {

                        var elem = jQuery(e);
                        elem.closest('.form-group  > div').removeClass('has-error');
                        elem.closest('.help-block').remove();
                    }
                });
            });

            $($cont).find('.autocomplete').change(function(){
                $(this).valid();
            });

            APP_AMU.validate.initAdditionalValidationClass();
            APP_AMU.validate.clearModal($cont);
        },

        /**
         *
         * @param $cont
         * @param $state
         *
         * this mothod for hide show button inside form
         */
        hideShowButtonForm : function ($cont ,$state) {
            $cont = $($cont),
            $form = $cont.find('form .primarykey');
            $cont.find("form [data-state]").hide();
            if($form.val() && $state == 'update')
                $cont.find("form [data-state='update']").show();
            else
                $cont.find("form [data-state='add']").show();
        },

        /**
         *
         * this function for init some class validation
         */
        initAdditionalValidationClass : function () {

            jQuery.validator.addClassRules({
                number : {
                    required: true,
                    number: true
                },
                email : {
                    email: true,
                }
            });
        },

        /**
         *
         * @param $cont --> you must add form cont as selector
         *
         * this function for reset form
         */
        resetForm : function ($cont) {

            $($cont).validate().resetForm();
        },

        /**
         *
         * @param form
         *
         * this function clear all items on form
         */
        clearForm : function (form) {

            _.head(form).reset();
            //re drew validation for each submit
            form.find('[id^=error_]').children().remove();
            form.find('input[type=hidden]').not('[data-permanent=true],[name="_token"]').val('');
            if(form.find('.autocomplete').length != 0) {
                APP_AMU.autocomplete.resetAutocomplete(form.find('.autocomplete'));
            }
            APP_AMU.validate.resetForm(form);
        },

        /**
         *
         * @param $cont
         *
         * clear you modal and reset form button
         */
        clearModal : function ($cont) {

            $($cont).find('.modal').on('show.bs.modal', function() {
                //
            });

            $($cont).find('.modal').on('hidden.bs.modal', function() {

                var $form = $(this).find('form');

                APP_AMU.validate.clearForm($form);

                APP_AMU.validate.hideShowButtonForm($cont ,'add');
            });
        },

        /**
         *
         * Fill Form and reset form button
         */
        fillForm : function () {

            $(document).on('click','[data-form-add]' ,function () {

                $cont = $(this).data('target');

                APP_AMU.validate.hideShowButtonForm($cont ,'add');
            });

            $(document).on('click' ,'[data-form-update]' ,function () {

                $contData = $(this).closest($(this).data('editable-target'));

                $cont = $(this).data('target');

                $($cont).find('[data-json]').each(function (i ,v) {

                    var $value = $contData.attr("data-" + $(v).data('json'));
                    if($(v).hasClass('autocomplete') && typeof $value != typeof undefined)
                        APP_AMU.autocomplete.selectedAutocomplete($(v) ,[JSON.parse($value)]);
                    else
                    {
                        $(v).val($value);
                        //fill ckeditor if exists
                        if($(v).hasClass('text-editor'))
                            CKEDITOR.instances[v.id].setData($value);
                    }
                });

                APP_AMU.validate.hideShowButtonForm($cont ,'update');
            });
        },
    },

    tree : {

        treeContId: '.aut-tree',

        storageKeyName : 'js-nestable',

        storageKeyAuto : 'js-nestable-auto',

        updateOutput : function(e)
        {
            var list   = e.length ? e : $(e.target),
                output = list.data('output');

            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');
            }

            var treeAction = $.localStorage.get(APP_AMU.tree.storageKeyName);
            if(treeAction != null)
                $('.dd').nestable((treeAction.action).toCamelCase());
        },

        load : function ($cont ,$node) {

            var $cont = $($cont);
            var $treeParam = $node != null ? "?nodeId=" + $node : "";

            $cont.load($cont.data('url') + $treeParam ,function () {

                var $_nestable = $('#nestable'),
                    $this      = $(this);
                // activate Nestable for list 1
                $_nestable.nestable({
                    group    : $this.data('group'),
                    maxDepth : $this.data('max-depth'),
                    // afterInit: function ( event ) { }
                }).on('change', APP_AMU.tree.updateOutput)
                //.on('beforeDragStart', function(handle) {})
                //.on('dragStart', function(event, item, source) { })
                //.on('dragMove', function(event, item, source, destination) { })
                //.on('beforeDragEnd', function(event, item, source, destination, position, feedback) {
                //   //If you need to persist list items order if changes, you need to comment the next line
                //   if (source[0] === destination[0]) { feedback.abort = true; return; }
                //   feedback.abort = !window.confirm('Continue?');
                //})
                    .on('dragEnd', function(event, item, source, destination, position) {
                        // Make an ajax request to persist move on database
                        // here you can pass item-id, source-id, destination-id and position index to the server
                        // ....

                        var  item   = $(_.head(item)),
                            id     = item.data('id'),
                            parent = item.parents('li:first').data('id'),
                            parent_target = item.data('parent');

                        // get serialize data from tree
                        var list   = event.length ? event : $(event.target);

                        var ObjectOrderSerialize = list.nestable('serialize');

                        var data;
                        if(parent_target) {
                            //children
                            data = JSPath.apply('..{.parent.id == "' + parent_target.id + '"}' ,ObjectOrderSerialize);
                        } else {
                            //parent
                            data = JSPath.apply('.' ,ObjectOrderSerialize);
                        }

                        //reorder html item
                        item.parent().children('li').each(function (i ,v) {
                            $(this).attr('data-order' ,i+1);
                        });
                        //reorder data
                        _.each(data ,function (v ,k) {
                            v.order = k + 1;
                        });

                        if(!id)
                            console.log('please set an data-id and data-parent for every item');

                        parent = typeof parent != typeof undefined ? parent : null;

                        $.put($this.data('url') + "/" + id,{ "parent" : parent ,"drag" : true , "order" : position+1 ,"data" : data },function (res) {

                            if(typeof res.id != typeof null)
                                item.attr('data-parent' ,'{ "id" : "' + res.id + '","name" : "'+ res.name + '"}');
                            else
                                item.removeAttr('data-parent');

                            HELPER_AMU.notify({ message : res.operation_message ,status : 'success'});
                        });
                    });

                // output initial serialised data
                if($('#nestable').length)
                    APP_AMU.tree.updateOutput($('#nestable').data('output', $('#nestable-output')));

                APP_AMU.autocomplete.reloadAutocomplete($this.find('.autocomplete'));

                $(document).off('change.tree').on('change.tree' ,'.tree-autocomplete-change' ,function () {

                    var $this = $(this),
                        $treeContId = $(APP_AMU.tree.treeContId),
                        $length;

                    if($this.val())
                        $length = $treeContId
                            .find("[data-id="+$(this).val()+"] .dd-list li:first")
                            .parent()
                            .children().length + 1;
                    else
                        $length = $treeContId.find('.dd .dd-list:first').children('li').length + 1;

                        $this.closest('form')
                            .find('#order')
                            .val($length);
                });
            });
        },

        loadAction : function ($cont) {

            $($cont).off('change').on('change' ,'#treeAutocomplete' ,function () {

                var $node = $(this).val();

                APP_AMU.tree.load($(this).closest($cont) ,$(this).val());
            });

            $($cont).on('click','.js-nestable-action [data-action]', function(e)
            {
                var target = $(e.target),
                    action = target.data('action');

                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }

                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }

                if (action === 'reset_tree') {
                    APP_AMU.tree.load($(this).closest(APP_AMU.tree.treeContId) ,null);
                }

                if (action === 'add_tree_node') {
                    $('.tree-autocomplete-change').trigger('change');
                }

                $.localStorage.set(APP_AMU.tree.storageKeyName, { "action" : action });
            });

            $($cont).on('click','[data-form-add]' ,function () {

                $modal = $(this).data('target');
                $($modal).find('.tree-autocomplete-change').attr('data-remote-param' ,"");
            });

            $($cont).on('click' ,'[data-form-update]' ,function () {

                $contData = $(this).closest($(this).data('editable-target'));
                $modal = $(this).data('target');
                $($modal).find('.tree-autocomplete-change').attr('data-remote-param' ,"id="+$($contData).data('id'));
            });
        },

        init: function ($cont) {

            $(APP_AMU.tree.treeContId).each(function () {
                APP_AMU.tree.load(this);
                APP_AMU.tree.loadAction(this);
            });
        }
    },

    ckeditor : {

        init : function ($cont ,$target) {

            $cont = $($cont);

            if (typeof(CKEDITOR) != 'undefined')
            {
                $cont.find($target).each(function () {

                    var orginal_id = this.id;//$(this).data('original-id');

                    var params = {
                        /*
                         filebrowserBrowseUrl : baseUrl+lang+'/filemanager/dialog?type=2&editor=ckeditor&fldr=',
                         filebrowserUploadUrl :  baseUrl+lang+'/filemanager/dialog?type=2&editor=ckeditor&fldr=',
                         filebrowserImageBrowseUrl :  baseUrl+lang+'/filemanager/dialog?type=1&editor=ckeditor&fldr=',*/
                        contentsLangDirection: $(this).hasClass('en') ? 'ltr' : $(this).hasClass('ar') ? 'rtl' : '',
                        language: LANG,
                        resize_enabled: typeof $(this).data('resize') != typeof undefined ? $(this).data('resize') : true,
                        resize_dir: typeof $(this).data('resize-type') != typeof undefined ? $(this).data('resize-type') : 'both',
                    };

                    CKEDITOR.on('instanceCreated', function(ev) {
                        // alert('Editor instance created');
                    });

                    APP_AMU.ckeditor.reset($cont ,$target ,'single' ,orginal_id);
                    $textarea = CKEDITOR.replace(orginal_id ,params);
                    $textarea.on('fileUploadRequest', function (evt) {
                        /*  evt.data.requestData.type = 'ckeditor';
                         var xhr = evt.data.fileLoader.xhr;
                         xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest' );
                         xhr.setRequestHeader('X-CSRF-TOKEN', _csrf );
                         // xhr.setRequestHeader('Content-Type', 'application/json' );
                         //xhr.send( this.file );*/
                        evt.stop();
                    });

                    CKEDITOR.on('instanceReady', function(event) {

                        var editor = event.editor;

                        editor.on('change', function(event) {

                            // Sync textarea
                            this.updateElement();
                        });

                        editor.on('resize',function(reEvent) {
                            //
                        });
                    });
                });

                // CKEDITOR.on('dialogDefinition', function (event) {
                //     aut_filemanager_handleImageUpload(event, baseUrl, lang) // dialogDefinition
                // });
            }
            else
                console.log('warning: ckeditor is not defined');
        },

        reset : function ($cont ,$target ,$type ,$orginal_id) {

            if(typeof(CKEDITOR) != 'undefined')
            {
                switch ($type)
                {
                    // delete only all instance
                    case 'all'    : {

                        for (name in CKEDITOR.instances) {

                            var editor = CKEDITOR.instances[name];
                            if (editor) {
                                delete CKEDITOR.instances[name];
                                // CKEDITOR.remove(instance);
                                // instance.destroy(false);
                            }
                        }

                    };break;

                    // delete only one instance
                    case 'single' : {

                        var editor = CKEDITOR.instances[$orginal_id];
                        if (editor) {
                            delete CKEDITOR.instances[$orginal_id];
                            // CKEDITOR.remove(editor);
                            // editor.destroy(true);
                        }

                    };break;
                }
            }
        },

        clear : function ($cont ,$target) {

            if(typeof(CKEDITOR) != 'undefined')
            {
                for (instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].setData('');
                }
            }
        },

        fixCkeditorModal : function () {

            //fix ckeditor modal
            $.fn.modal.Constructor.prototype.enforceFocus = function() {
                var modal_this = this;
                $(document).on('focusin.modal', function (e) {
                    if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
                        && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select')
                        && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
                        modal_this.$element.focus();
                    }
                });
            };
        }
    },
    map : {

        initGMapInputLocation : function () {

            $(document).on('click' ,'.input-location',function () {
                var $modal = '#' + $(this).find('input').data('modal');
                $($modal).on('shown.bs.modal', function (event) {

                    APP.GMap.init();
                });
                $($modal).modal('show');
            });

            $(document).on('click' ,'.set-map-location' ,function () {

                $modal = $(this).closest('.modal');
                $locationData = $modal.find('[data-gmap]').data('location');

                var InputFullLocation = $(this).data('input-full-location');
                var InputLatLocation = $(this).data('input-lat-location');
                var InputLngLocation = $(this).data('input-lng-location');

                if(InputFullLocation)
                    $(InputFullLocation).val($($locationData.location).val());
                if(InputLatLocation)
                    $(InputLatLocation).val($($locationData.lat).val())
                if(InputLngLocation)
                    $(InputLngLocation).val($($locationData.lng).val())

                $($modal).modal('hide');
            });
        },

        init : function () {

            APP_AMU.map.initGMapInputLocation();
        }
    },

    ajax : {

        init : function () {

            APP_AMU.autocomplete.initAutocomplete();
            APP_AMU.select.initSelect();
            APP_AMU.validate.init('.ajaxCont');
            APP_AMU.tree.init();
            APP_AMU.ckeditor.init('body' ,'.text-editor');
            $('.datatable').each(loadDatatable);
        }
    }
}

/**
 * init App
 */
$(function () {

    /**
     * Delegate Load
     */
    APP_AMU.changeColorControleTheme();
    APP_AMU.initPjax('#pjax-container');
    APP_AMU.validate.fillForm();
    APP_AMU.initModalEvent();

    /**
     * Load
     */
    APP_AMU.autocomplete.initAutocomplete();
    APP_AMU.select.initSelect();
    APP_AMU.validate.init('.ajaxCont');
    APP_AMU.tree.init();
    APP_AMU.ckeditor.init('body' ,'.text-editor');
    APP_AMU.ckeditor.fixCkeditorModal();
    APP_AMU.map.init();
});