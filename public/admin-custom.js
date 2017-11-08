
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

window.open_popup = function(url) {

    var w = 880;
    var h = 570;
    var l = Math.floor((screen.width - w) / 2);
    var t = Math.floor((screen.height - h) / 2);
    var win = window.open(url, 'ResponsiveFilemanager', "scrollbars=1,width=" + w + ",height=" + h + ",top=" + t + ",left=" + l);
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
            message: notify.html || (icon + notify.message),
            pos: notify.pos || 'bottom-right',
            status: notify.status,
            timeout: notify.timeout || 1000
        });
    },

    reloadElement : function (element) {

        _.each(element ,function (v ,k) {

            switch (k)
            {
                case 'tree': APP_AMU.tree.ajaxLoad(v);
            }
        })
    },

    getDataAttribute: function (dom) {

        var attributes = {} ,value = '';

        $.each($(dom).get(0).attributes, function(i, attrib){

            var matchValue = attrib.value.match("{"),
                matchData  = attrib.name.match("^data-");

            if(matchData)
            {
                if(matchValue && matchValue.length) {
                    value = JSON.parse(attrib.value);
                    attributes[attrib.name.slice(5)] = value;
                } else if(attrib.value) {
                    value = attrib.value;
                    attributes[attrib.name.slice(5)] = value;
                }
            }
        });

        return attributes;
    }
};


var APP_AMU = {

    initModalEvent: function () {

        $(document).on({

            'shown.bs.modal': function () {

                if ($(this).find('.cropper').length)
                {
                    APP.CROPPER.destroy('.aut-cropper-modal');
                    APP.CROPPER.init('.aut-cropper-modal');
                }
            },

            'hidden.bs.modal': function () {
                //
            }

        }, '.modal');
    },

    //Themes
    changeColorControleTheme: function () {

        // store theme color on click
        $('body').on('click', '[data-load-css]', function () {

            var $this = $(this),
                $color = $this.find('.color');

            HELPER_AMU.setCookie('controleThemeColorUrl', $this.data('load-css'));
            HELPER_AMU.setCookie('controleThemeColorRGB', $color.first().css('background-color').replaceAll(/ /, ''));
            HELPER_AMU.setCookie('controleThemeColorColorClass', $color.first().attr('class'));

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
                APP_AMU.COLLAPSE_PANELS();
                APP_AMU.ajax.init();
            };

            // time in milliseconds
            $.pjax.defaults.timeout = 1000;
            // maxCacheLength
            $.pjax.defaults.maxCacheLength = 0;

            $(document).on('click', 'a.ajax', function (event) {

                if ($(container).length == 0 || $(this).hasClass('no-ajax')) {
                    return;
                }

                $.pjax.click(event, {
                    container: container,
                    timeout: 1000,
                });
            });

            // always fires after ajax, regardless of result
            $(document).on("pjax:complete", function () {

            });
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
            $(document).on("pjax:popstate", function (event) {
            });
            // right before replacing HTML with content from cache
            $(document).on("pjax:beforeReplace", function (event) {
            });
            // on ajax error; will hard refresh unless canceled
            $(document).on("pjax:error", function (event, xhr, textStatus, errorThrown, options) {
                console.log('Event', event);
                console.log('XHR', xhr);
                console.log('Text Status', textStatus);
                console.log('Error Thrown', errorThrown);
                console.log('Options', options);
                /*options.success(xhr.responseText, textStatus, xhr);
                 return false;*/
            });
            // fires after options.timeout; will hard refresh unless canceled
            $(document).on("pjax:timeout", function (event) {
                event.preventDefault();
            });

            $(document).on('click', '[data-reload]', function () {

                $.pjax({url: window.location.href, container: container, timeout: 1000});
            });

            $(document).ajaxError(function( event, jqxhr, settings, thrownError ) {

                if(jqxhr.responseJSON.redirect_url)
                    window.location.href = jqxhr.responseJSON.redirect_url;
            });

            $(document).ajaxSuccess(function( event, jqxhr, settings, thrownError ) {

                if(jqxhr.responseJSON.redirect_url)
                    window.location.href = jqxhr.responseJSON.redirect_url;
            });
        }
    },

    // autocomplete select2
    autocomplete: {

        init: function (Data) {

            return function () {
                var $this = $(this);
                var data = (typeof Data !== typeof undefined) ? Data : [];
                $this.find('option:selected').each(function (i) {
                    var $this = $(this);
                    data[i] = {id: $this.val(), name: $this.text()};
                });
                var url = $this.data('remote');
                var required = (typeof $this.data('required') !== typeof undefined) ? $this.data('required') : null;
                var placeholder = (typeof $this.data('placeholder') !== typeof undefined) ? $this.data('placeholder') : '';
                var target = (typeof $this.data('target') !== typeof undefined) ? $($this.data('target')) : '';
                var letters = (typeof $this.data('letter') !== typeof undefined) ? $this.data('letter') : 3;
                var linkWith = $this.data('param') || '';
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
                        data: function (params) {
                            var param = (typeof $this.data('param') !== typeof undefined) ? $this.data('param') : null;

                            //added by basheer
                            var remoteParam = (typeof $this.attr('data-remote-param') !== typeof undefined) ? $this.attr('data-remote-param') : null;

                            if (param && param.charAt(0) === '#') {
                                var name = $(param).attr('name') || $(param).attr('id');
                                var val = $(param).val() ? $(param).val() : 0;
                                param = JSON.parse('{"' + name + '":"' + val + '"}');
                            }
                            var $data = {q: params.term, page: params.page};
                            if (param) {
                                $data = $.extend($data, param);
                            }

                            //added by basheer
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
                    templateResult: APP_AMU.autocomplete.formatRepo,
                    templateSelection: APP_AMU.autocomplete.formatRepoSelection,
                    dropdownParent: target,
                    theme: "bootstrap",
                    data: data
                });
            }
        },

        //Updated By AA1992
        formatRepo: function (repo) {
            return repo.name || repo.text;
        },

        //Updated By AA1992
        formatRepoSelection: function (repo) {
            var repoText = repo.text || repo.name;
            var $option = $(repo.element);
            for(var key in repo){
                if(key.startsWith('data-')){
                    $option.attr(key, repo[key]);
                    //$option.data('type')
                }
            }
            return repoText;
        },

        selectedAutocomplete: function (selector, data) {

            $(selector).each(APP_AMU.autocomplete.init(data));
        },

        reloadAutocomplete: function (selector) {

            $(selector).each(APP_AMU.autocomplete.init());
        },

        resetAutocomplete: function (selector) {

            //$('.autocomplete').val(null).trigger("change");
            $(selector).empty().trigger('change');
        },

        //Updated By AA1992
        initAutocomplete: function (selector, $cont) {
            $cont = $cont || false;
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
            $obj.each(APP_AMU.autocomplete.init());
        },

        //Added By AA1992
        destroyAutocomplete: function (selector, $cont) {
            $cont = $cont || false;
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
        }
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

            $(selector).each(initSelect());
        },

        selectedSelect: function (selector, data) {

            $(selector).each(initSelect(data));
        },

        resetSelect: function (selector) {

            $(selector).val('').trigger("change");
        },

        //Updated By AA1992
        initSelect: function (selector, $cont) {
            $cont = $cont || false;
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

            $obj.each(APP_AMU.select.init());
        },

        //Added By AA1992
        destroySelect: function (selector, $cont) {
            $cont = $cont || false;
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
     * > I passed with this func form and res as param
     *
     */
    validate: {

        loaderSelector : '[data-form-loader]',

        loader :

        '<div class="form-loader overlay">' +
        '<div class="ball-triangle-path" style="left: 50%; top: 50%;">' +
        '<div style="background-color: #3e3935;"></div>' +
        '<div style="background-color: #3e3935;"></div>' +
        '<div style="background-color: #3e3935;"></div>' +
        '</div>' +
        '</div>',

        addLoader: function ($button) {

            // form loader
            $button.closest(APP_AMU.validate.loaderSelector)
                .attr('style' ,'position:relative;')
                .prepend(APP_AMU.validate.loader);

            // button loader
            if(!$button.is('[data-loading-text]'))
                $button.attr('data-loading-text' ,"<i class='fa fa-circle-o-notch fa-spin'> </i> " + WAITING_TITLE);

            $button.button('loading');
        },

        removeLoader: function ($button) {

            // form loader
            $formLoader = $button.closest(APP_AMU.validate.loaderSelector);
            $formLoader.removeAttr('style' ,'position:relative;');
            $formLoader.find('.form-loader.overlay').remove();

            // done / fail
            $button.button('reset');
        },

        /**
         * serialize data function
         *
         * @param formArray
         * @returns {{}}
         */
        serializeObject: function (formArray) {

            var returnArray = {};
            for (var i = 0; i < formArray.length; i++){
                returnArray[formArray[i]['name']] = formArray[i]['value'];
            }
            return returnArray;
        },

        /**
         *
         * @param $form
         * @returns {*}
         */
        changeAction: function ($form) {

            var primarykey = $form.find('.primarykey').val(),
                takeAction = typeof $form.data('take-action') != typeof undefined ? true : false,
                action;

            if (!takeAction && primarykey)
                action = $form.attr('action') + "/" + primarykey;
            else
                action = $form.attr('action');

            return action;
        },

        init: function ($cont) {

            $($cont).find('form.ajax-form').each(function () {

                var validator = $(this).validate({

                    submitHandler: function (form, e) {

                        e.preventDefault();

                        var $this = this,
                            $form = $(form),
                            $button = $($this.submitButton),
                            $method = $button.data('method'),
                            $serialize = typeof $button.data('serialize') != typeof undefined ? $button.data('serialize') : true,
                            $data;

                        // here
                        if ($serialize)
                            $data = APP_AMU.validate.serializeObject($form.serializeArray());
                        else
                            $data = {};

                        if ($serialize && typeof $button.data('extra-serialize') != typeof undefined)
                            $data = $.extend($data ,window[$button.data('extra-serialize')](form));

                        if (typeof $button.data('method') != typeof undefined) {
                            $method = $button.data('method');
                        } else {
                            $method = typeof $form.find('[name=_method]').val() != typeof undefined
                                ? _.lowerCase($form.find('[name=_method]').val())
                                : _.lowerCase($form.attr('method'));
                        }

                        // add Loader
                        APP_AMU.validate.addLoader($button);

                        $call = function () {

                            $[$method]($button.data('action') || APP_AMU.validate.changeAction($form), $data, function (res) {

                                // redirect to url from response
                                if(res.redirect_url)
                                    window.location.href = res.redirect_url;

                                // if form was inside modal we will close it after save
                                if (typeof $form.parents('.modal') != typeof undefined)
                                    $($form.parents('.modal')).modal('hide');

                                // reload after success oper by enter json like {"tree" : [".aut-tree"],....}
                                if (typeof $form.data('ajax-form-reload') != typeof undefined)
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
                                if (typeof $button.data('ajax-form-success') != typeof undefined)
                                    window[$button.data('ajax-form-success')](form, res);

                                // callback exec after add oper success
                                if (typeof $button.data('ajax-form-add-success') != typeof undefined)
                                    window[$button.data('ajax-form-add-success')](form, res);

                                // callback exec after update oper success
                                if (typeof $button.data('ajax-form-update-success') != typeof undefined)
                                    window[$button.data('ajax-form-update-success')](form, res);

                                // callback exec after delete oper success
                                if (typeof $button.data('ajax-form-delete-success') != typeof undefined)
                                    window[$button.data('ajax-form-delete-success')](form, res);

                                if(!($button.is('[data-stop-operation-message]') || $form.is('[data-stop-operation-message]')))
                                    HELPER_AMU.notify({message: res.operation_message || OPERATION_MESSAGE_SUCCESS, status: 'success'});

                            }).fail(function (res) {

                                // remove Loader
                                APP_AMU.validate.removeLoader($button);

                                if(!($button.is('[data-stop-operation-message]') || $form.is('[data-stop-operation-message]')))
                                    HELPER_AMU.notify({message: OPERATION_MESSAGE_FAIL, status: 'danger'});

                                //JSON.parse(res.responseText).server_message
                                $.each(res.responseJSON, function (k, v) {

                                    var error = $form.find('#error_' + k);
                                    error.children().remove();
                                    //v[0]
                                    error.append('<div id="' + k + '-error" class="validate-error validate-error-help-block validate-error-style animated fadeInDown">' + v + '</div>');
                                });
                            }).done(function (res) {

                                // remove Loader
                                APP_AMU.validate.removeLoader($button);
                            });
                        };

                        if($method == 'delete') {

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

                                $call();

                            } ,{
                                ok: SWAL.ok,
                                cancleSafe : {
                                    text : SWAL.cancleSafe.text,
                                    message: SWAL.cancleSafe.message,
                                }
                            });

                        } else {

                            $call();
                        }

                    },
                    ignore: [],
                    errorClass: 'validate-error validate-error-help-block validate-error-style animated fadeInDown',
                    errorElement: 'div',
                    invalidHandler: function (event, validator) {

                        if (validator.errorList.length)
                            $('[data-tab=' + $(validator.errorList[0].element).closest('[data-tab]').data('tab') + ']').trigger('click');
                    },
                    errorPlacement: function (error, e) {

                        jQuery(e).parent().find('div[id*=error_]').append(error);
                    },
                    highlight: function (e, errorClass, validClass) {

                        var elem = jQuery(e);
                        elem.closest('div').addClass('has-error');
                    },
                    unhighlight: function (e, errorClass, validClass) {

                        var elem = jQuery(e);
                        elem.closest('div').removeClass('has-error');
                    },
                    success: function (e) {

                        var elem = jQuery(e);
                        elem.closest('div').removeClass('has-error');
                    }
                });
            });

            $($cont).find('.autocomplete').change(function () {
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
        hideShowButtonForm: function ($cont, $state) {
            $cont = $($cont),
                $form = $cont.find('form .primarykey');
            $cont.find("form [data-state]").hide();
            if ($form.val() && $state == 'update')
                $cont.find("form [data-state='update']").show();
            else
                $cont.find("form [data-state='add']").show();
        },

        /**
         *
         * this function for init some class validation
         */
        initAdditionalValidationClass: function () {

            jQuery.validator.addClassRules({
                number: {
                    required: true,
                    number: true
                },
                email: {
                    required: true,
                    email: true,
                },
                url: {
                    required: true,
                    url: true,
                }
            });
        },

        /**
         *
         * @param $cont --> you must add form cont as selector
         *
         * this function for reset form
         */
        resetForm: function ($cont) {

            $($cont).validate().resetForm();
        },

        /**
         *
         * @param form
         *
         * this function clear all items on form
         */
        clearForm: function (form) {

            _.head(form).reset();
            //re drew validation for each submit
            form.find('[id^=error_]').children().remove();
            form.find('input[type=hidden]').not('[data-permanent=true],[name="_token"]').val('');
            if (form.find('.autocomplete').length != 0) {
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
        clearModal: function ($cont) {

            $($cont).find('.modal').on('show.bs.modal', function () {
                //
            });

            $($cont).find('.modal').on('hidden.bs.modal', function () {

                var $form = $(this).find('form');

                APP_AMU.validate.clearForm($form);

                APP_AMU.validate.hideShowButtonForm($cont, 'add');
            });
        },

        /**
         *
         * Fill Form and reset form button
         */
        fillForm: function () {

            $(document).on('click', '[data-form-add]', function () {

                var $cont = $(this).data('target');

                APP_AMU.validate.hideShowButtonForm($cont, 'add');
            });

            $(document).on('click', '[data-form-update]', function () {

                var $contData = $(this).closest($(this).data('editable-target')),
                    $cont = $(this).data('target');

                $($cont).find('[data-json]').each(function (i, v) {

                    var $value = $contData.attr("data-" + $(v).data('json'));
                    if ($(v).hasClass('autocomplete') && typeof $value != typeof undefined)
                        APP_AMU.autocomplete.selectedAutocomplete($(v), [JSON.parse($value)]);
                    else {
                        $(v).val($value);
                        //fill ckeditor if exists
                        if ($(v).hasClass('text-editor'))
                            CKEDITOR.instances[v.id].setData($value);
                    }
                });

                APP_AMU.validate.hideShowButtonForm($cont, 'update');
            });
        },
    },

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
                    .off('change').on('change', APP_AMU.tree.updateOutput)
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
                        $drag = window[$cont.data('drag-end-callback')](event, item, source, destination, position);

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

                        if(item.data('type') != destination.closest(APP_AMU.tree.treeContId).data('type'))
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

                            $.put($cont.data('url') + "/order/" + id, { data: data }, function (res) {

                                HELPER_AMU.notify({message: res.operation_message, status: 'success'});
                            });
                        }
                    }
                })
                //.off('beforeDragStart').on('beforeDragStart', function(handle) {})
                //.off('dragStart').on('dragStart', function(event, item, source) { })
                //.off('dragMove').on('dragMove', function(event, item, source, destination) { })
                //.off('beforeDragEnd').on('beforeDragEnd', function(event, item, source, destination, position, feedback) {
                // If you need to persist list items order if changes, you need to comment the next line
                // if (source[0] === destination[0]) { feedback.abort = true; return; }
                // feedback.abort = !window.confirm('Continue?');
                //});
            }

            if($cont.hasClass('ajax')) {

                $cont.load($cont.data('url') + $treeParam, function () {

                    var $this    = $(this),
                        _nestable = $this.find(APP_AMU.tree.treeLoadClass);

                    nestable(_nestable);

                    // output initial serialised data
                    if (_nestable.length)
                        APP_AMU.tree.updateOutput(_nestable.data('output', $this.find('.nestable-output')));

                    APP_AMU.autocomplete.reloadAutocomplete($this.find('.autocomplete'));
                });

            } else nestable($cont.find(APP_AMU.tree.treeLoadClass));

            // with ajax
            $(document).off('change.parentAutocomplete').on('change.parentAutocomplete', APP_AMU.tree.parentAutocompleteSelector, APP_AMU.tree.changeParentAutocomplete);
            $(document).off('change.treeAutocomplete').on('change.treeAutocomplete', '#treeAutocomplete', APP_AMU.tree.treeAutocomplete);
            $(document).off('click.nestableAction').on('click.nestableAction', '.js-nestable-action [data-action]', APP_AMU.tree.eventNestableAction);
            $(document).off('click.add').on('click.add', '[data-form-add]', APP_AMU.tree.eventFormAdd);
            $(document).off('click.update').on('click.update', '[data-form-update]', APP_AMU.tree.eventFormUpdate);
        },

        updateOutput: function (e) {

            var list     = e.length ? e : $(e.target),
                output   = list.data('output'),
                treeCont = list.closest(APP_AMU.tree.treeContId);

            if(output) {
                if (window.JSON) {
                    output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                } else {
                    output.val('JSON browser support required for this demo.');
                }
            }

            var treeAction = $.localStorage.get(treeCont.data('storage-key') || APP_AMU.tree.storageKeyName);

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

            APP_AMU.tree.init($this.closest(APP_AMU.tree.treeContId), $node);
        },

        eventNestableAction: function (e) {

            var target   = $(e.target),
                action   = target.data('action'),
                treeCont = target.closest(APP_AMU.tree.treeContId),
                list     = treeCont.find(APP_AMU.tree.treeLoadClass),
                modal    = target.data('target');

            if (action === 'expand-all') {
                list.nestable('expandAll');
            }

            if (action === 'collapse-all') {
                list.nestable('collapseAll');
            }

            if (action === 'reset_tree') {
                APP_AMU.tree.init(treeCont, null);
            }

            if (action === 'add_tree_node') {
                // make change for parent autocomplete
                $(modal).find(APP_AMU.tree.parentAutocompleteSelector).trigger('change');
            }

            if (action == 'save_order') {
                APP_AMU.tree.saveTreeOrder(treeCont);
            }

            $.localStorage.set(treeCont.data('storage-key') || APP_AMU.tree.storageKeyName, {"action": action});
        },

        saveTreeOrder: function (treeCont) {

            $.put(treeCont.data('url') + '/order', { data: treeCont.data('order_list') }, function (res) {

                // APP_AMU.tree.init(treeCont);

                HELPER_AMU.notify({message: res.operation_message, status: 'success'});
            });
        },

        eventFormAdd: function () {

            var $this  = $(this),
                $modal = $(this).data('target');

            // add id selected item  for filter auto without this id and its children
            $($modal).find(APP_AMU.tree.parentAutocompleteSelector).attr('data-remote-param', "");
        },

        eventFormUpdate: function () {

            var $this     = $(this),
                $contData = $this.closest($this.data('editable-target')),
                $modal    = $this.data('target');

            // add id selected item  for filter auto without this id and its children
            $($modal).find(APP_AMU.tree.parentAutocompleteSelector).attr('data-remote-param', "id=" + $($contData).data('id'));
        },

        initTree: function () {

            $(APP_AMU.tree.treeContId).each(function () {

                APP_AMU.tree.init(this ,null);
            });
        }
    },

    sweetalert_swal: function (param ,func ,paramCancleSafe) {

        swal({
            title              : typeof param.title               != typeof undefined ? param.title               : null,
            text               : typeof param.text                != typeof undefined ? param.text                : null,
            type               : typeof param.type                != typeof undefined ? param.type                : null,
            showCancelButton   : typeof param.showCancelButton    != typeof undefined ? param.showCancelButton    : false,
            showCloseButton    : typeof param.showCloseButton     != typeof undefined ? param.showCloseButton     : false,
            allowEscapeKey     : typeof param.allowEscapeKey      != typeof undefined ? param.allowEscapeKey      : true,
            allowOutsideClick  : typeof param.allowOutsideClick   != typeof undefined ? param.allowOutsideClick   : true,
            confirmButtonColor : typeof param.confirmButtonColor  != typeof undefined ? param.confirmButtonColor  : '#3085d6',
            confirmButtonText  : typeof param.confirmButtonText   != typeof undefined ? param.confirmButtonText   : 'OK',
            cancelButtonText   : typeof param.cancelButtonText    != typeof undefined ? param.cancelButtonText    : 'Cancel',
            showLoaderOnConfirm: typeof param.showLoaderOnConfirm != typeof undefined ? param.showLoaderOnConfirm : false,
            width              : typeof param.width               != typeof undefined ? param.width               : '500px',
            html               : typeof param.html                != typeof undefined ? param.html                : '',
        }).then(func, function (dismiss) {

            if (dismiss === 'cancel') {

                aut_datatable_swal({
                    title : paramCancleSafe.cancleSafe.text,
                    text  : paramCancleSafe.cancleSafe.message,
                    confirmButtonText  : paramCancleSafe.ok,
                    type : "error",
                });
            }
        });
    },

    ckeditor: {

        init: function ($cont, $target) {

            var $cont   = $($cont),
                _editor = [];

            if (typeof(CKEDITOR) != 'undefined') {
                $cont.find($target).each(function (i ,v) {

                    var orginal_id = this.id;//$(this).data('original-id');

                    // Only open filemanager(type=0 and not set field_id):
                    // path to filemanager../filemanager/dialog.php?type=0&fldr=
                    //
                    // Select Image: (type=1 and set id of input text in field_id variable):
                    // path to filemanager../filemanager/dialog.php?type=1&field_id=fieldID
                    //
                    // Select Video: (type=3 and set id of input text in field_id variable):
                    // path to filemanager../filemanager/dialog.php?type=3&field_id=fieldID
                    //
                    // Select File: (type=2 and set id of input text in field_id variable):
                    // path to filemanager../filemanager/dialog.php?type=2&field_id=fieldID

                    // Get Variables list
                    // type: the type of filemanager (1:images files 2:all files 3:video files)
                    // fldr: the folder where i enter (the root folder remains the same). default=""
                    // sort_by: the element to sorting (values: name,size,extension,date) default=""
                    // descending: descending? or ascending (values=1 or 0) default="0"
                    // lang: the language code (ex: &lang=en_EN). default="en_EN"
                    // relative_url: should be	added to the request with a value of "1" when opening RFM.
                    // Otherwise returned URL-s will be absolute.
                    // extensions: a json encoded array of available files extensions (ex: &extensions=["pdf",'doc'])

                    var params = {
                        filebrowserBrowseUrl: BASE_URL + LANG + '/filemanager/dialog?type=2&editor=ckeditor&fldr=',
                        filebrowserUploadUrl: BASE_URL + LANG + '/filemanager/dialog?type=2&editor=ckeditor&fldr=',
                        filebrowserImageBrowseUrl: BASE_URL + LANG + '/filemanager/dialog?type=1&editor=ckeditor&fldr=',
                        contentsLangDirection: $(this).hasClass('en') ? 'ltr' : $(this).hasClass('ar') ? 'rtl' : '',
                        language: LANG,
                        resize_enabled: typeof $(this).data('resize') != typeof undefined ? $(this).data('resize') : true,
                        resize_dir: typeof $(this).data('resize-type') != typeof undefined ? $(this).data('resize-type') : 'both',
                    };

                    APP_AMU.ckeditor.reset($cont, $target, 'single', orginal_id);
                    var $textarea = CKEDITOR.replace(orginal_id, params);
                    $textarea.on('fileUploadRequest', function (evt) {
                        evt.data.requestData.type = 'ckeditor';
                        var xhr = evt.data.fileLoader.xhr;
                        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                        xhr.setRequestHeader('X-CSRF-TOKEN', CSRF_TOKEN);
                        xhr.setRequestHeader('Content-Type', 'application/json');
                        xhr.send(this.file);
                        evt.stop();
                    });
                });

                // CKEDITOR.on('instanceCreated', function (event) {
                //     alert('Editor instance created');
                // });

                // CKEDITOR.on('currentInstance', function(event) {
                //     Removes the current listener.
                //     ev.removeListener();
                //
                //     CKEDITOR.instances[element_id].checkDirty()
                // });

                CKEDITOR.on('instanceReady', function (event) {

                    var editor = event.editor;

                    editor.on('change', function (event) {

                        // Sync textarea
                        this.updateElement();
                    });

                    editor.on('resize', function (event) {
                        //
                    });

                    //Indicates that no further listeners are to be called.
                    event.stop();
                });

                CKEDITOR.on('dialogDefinition', function (event) {

                    var editor = event.editor;

                    aut_filemanager_handleImageUpload(event, BASE_URL, LANG);

                    event.stop();
                });
            }
            else
                console.log('warning: ckeditor is not defined');
        },

        reset: function ($cont, $target, $type, $orginal_id) {

            if (typeof(CKEDITOR) != 'undefined') {
                switch ($type) {
                    // delete only all instance
                    case 'all'    : {

                        for (name in CKEDITOR.instances) {

                            var editor = CKEDITOR.instances[name];
                            if (editor) {
                                delete CKEDITOR.instances[name];
                                // CKEDITOR.remove(editor);
                                // editor.destroy(false);
                            }
                        }

                    } ;break;

                    // delete only one instance
                    case 'single' : {

                        var editor = CKEDITOR.instances[$orginal_id];
                        if (editor) {
                            delete CKEDITOR.instances[$orginal_id];
                            // CKEDITOR.remove(editor);
                            // editor.destroy(true);
                        }

                    }; break;
                }
            }
        },

        clear: function ($cont, $target) {

            if (typeof(CKEDITOR) != 'undefined') {
                for (instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].setData('');
                }
            }
        },

        fixCkeditorModal: function () {

            //fix ckeditor modal
            $.fn.modal.Constructor.prototype.enforceFocus = function () {
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

    // added by basheer
    fileUpload: {

        selector : '.upload-file',

        formatBytes : function(bytes,decimals) {
            if(bytes == 0) return '0 Bytes';
            var k = 1024,
                dm = decimals || 2,
                sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
                i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
        },

        /**
         *
         * @param file
         * @param typeObject | fileToUrlBlob,fileToDataUrl
         * @returns {{}}
         */
        convertFileToObject : function (file ,returnPlace) {

            var retutnObject = {};

            /**
             *  fileToDataUrl
             */
            if(returnPlace == 'fileToDataUrl')
            {
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {

                    var fileToDataUrl = reader.result;

                    retutnObject = $.extend(retutnObject, { fileToDataUrl : fileToDataUrl });
                };

                reader.onerror = function (error) {

                    console.log('error: ', error);
                };

                return retutnObject;
            }

            /**
             *  fileToUrlBlob
             */
            if(returnPlace == 'fileToUrlBlob')
            {
                var fileToUrlBlob = URL.createObjectURL(file)

                retutnObject = $.extend(retutnObject, { fileToUrlBlob : fileToUrlBlob });

                return retutnObject;
            }
        },

        /**
         *
         * @param imageUrl
         * @param typeObject | canvasToUrlBlob,blobToDataUrl,imageWithBlob
         * @returns {{}}
         */
        convertImageToObject : function (imageUrl ,callback) {

            var retutnObject = {};

            // like image.png
            var img = new Image()
            img.src = imageUrl;
            img.onload = function () {

                var imageToCanvas = document.createElement('canvas'), context = imageToCanvas.getContext('2d');
                imageToCanvas.width = img.width;
                imageToCanvas.height = img.height;
                context.drawImage(img, 0, 0, img.width, img.height);
                $.extend(retutnObject, { imageToCanvas : imageToCanvas });

                var canvasToDataUrl = imageToCanvas.toDataURL('image/png');
                $.extend(retutnObject, { canvasToDataUrl : canvasToDataUrl});

                imageToCanvas.toBlob(function (blob) {

                    /**
                     *  canvasToUrlBlob
                     */
                    var canvasToUrlBlob = URL.createObjectURL(blob);
                    $.extend(retutnObject, { canvasToUrlBlob : canvasToUrlBlob });

                    /**
                     *  blobToDataUrl
                     */
                    var reader = new window.FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function () {

                        var base64data    = reader.result;
                        $.extend(retutnObject, { blobToDataUrl : base64data });
                    }

                    /**
                     *  imageWithBlob
                     */
                    var imageWithBlob = document.createElement('img'),
                        urlBlob       = URL.createObjectURL(blob);

                    imageWithBlob.onload = function () {
                        // no longer need to read the blob so it's revoked
                        URL.revokeObjectURL(urlBlob);
                    };

                    imageWithBlob.src = urlBlob;
                    $.extend(retutnObject, { imageWithBlob : imageWithBlob });

                    callback(retutnObject);
                });
            };
        },

        load: function(selector ,data) {

            if (typeof($.fn.fileinput) != 'undefined') {

                var $selector = selector || APP_AMU.fileUpload.selector;

                $($selector).each(function () {

                    var _this       = this,
                        $this       = $(_this),
                        $imageCont  = $this.closest('.image-cont'),
                        cropperTemplete, infoTemplete, replacedFile = [], invalidRatio = [],
                        previewFileType       = $this.data('preview-file-type'),
                        allowedFileTypes      = typeof $this.data('allowed-file-types') != typeof undefined ? $this.data('allowed-file-types').split(',') : null,
                        allowedFileExtensions = typeof $this.data('allowed-file-extensions') != typeof undefined ? $this.data('allowed-file-extensions') : null,
                        uploadUrl       = $this.data('upload-url'),
                        ratioUrl        = $this.data('ratio-url'),
                        deleteUrl       = $this.data('delete-url'),
                        downloadFolder  = $this.data('download-folder'),
                        maxFileSize     = $this.data('max-file-size') || 0,
                        maxFileCount    = $this.data('max-file-count') || 0,
                        minFileCount    = $this.data('min-file-count') || 0,
                        removeLabel     = $this.data('remove-label'),
                        uploadRetryTitle= $this.data('upload-retry-title'),
                        cropTitle       = $this.data('crop-title'),
                        attributeTitle  = $this.data('attribute-title'),
                        showCaption     = typeof $this.data('show-caption') != typeof undefined ? JSON.parse($this.data('show-caption')) : false,
                        showPreview     = typeof $this.data('show-preview') != typeof undefined ? JSON.parse($this.data('show-preview')) : true,
                        imageWidth      = $this.data('image-width') || null,
                        imageHeight     = $this.data('image-height') || null,
                        minImageHeight  = $this.data('min-image-height') || null,
                        maxImageHeight  = $this.data('max-image-height') || null,
                        minImageWidth   = $this.data('min-image-width')  || null,
                        maxImageWidth   = $this.data('max-image-width')  || null,
                        param           = $this.attr('data-param')       || '',
                        multiple        = typeof $this.attr('multiple') != typeof undefined ? true : false,
                        target          = typeof $this.data('target') != typeof undefined ? $this.data('target') : '',
                        cropper         = typeof $this.data('cropper') != typeof undefined ? JSON.parse($this.data('cropper')) : true,
                        cropperSelector = $this.data('cropper-selector') || '.aut-cropper-file-upload',
                        cropperModal    = $this.data('cropper-modal') || '',
                        datatable                   = $this.data('datatable'),
                        reloadDatatable             = typeof $this.data('reload-datatable') != typeof undefined ? JSON.parse($this.data('reload-datatable')) : true,
                        datatableInitialize         = typeof $this.data('datatable-initialize') != typeof undefined ? JSON.parse($this.data('datatable-initialize')) : true,
                        datatableInitializeProperty = $this.data('datatable-initialize-property') || '.image',
                        appendLocation              = typeof $this.data('append-location') != typeof undefined ? $this.data('append-location') : '',
                        appendName                  = typeof $this.data('append-name') != typeof undefined ? $this.data('append-name') : '',
                        appendName                  = (appendName || _this.id + '[]'),
                        allowedPreviewIcons         = typeof $this.data('allowed-preview-icons') != typeof undefined ? JSON.parse($this.data('allowed-preview-icons')) : false,
                        autoReplace                 = typeof $this.data('auto-replace') != typeof undefined ? JSON.parse($this.data('auto-replace')) : false,
                        allowRatio                  = typeof $this.data('allow-ratio') != typeof undefined ? JSON.parse($this.data('allow-ratio')) : false,
                        ratio                       = typeof $this.data('ratio') != typeof undefined ? $this.data('ratio') : {},
                        ratioMessage                = typeof $this.data('ratio-message') != typeof undefined ? $this.data('ratio-message') : '';

                    if(cropper)
                        cropperTemplete = '<button type="button" class="btn-crop-image btn btn-kv btn-default btn-outline-secondary" title="' + cropTitle + '"><i class="fa fa-crop"></i></button>';
                    infoTemplete = '<button type="button" class="btn-attr-image btn btn-kv btn-default btn-outline-secondary" title="' + attributeTitle + '" {dataKey}><i class="fa fa-question-circle"></i></button>';

                    var params = {
                        rtl: DIR == 'rtl' ? true : false,
                        language: LANG,
                        theme : "fa",
                        uploadUrl: uploadUrl,
                        deleteUrl: deleteUrl,
                        uploadExtraData: {},
                        deleteExtraData: {},
                        validateInitialCount: true,
                        minFileCount: minFileCount,
                        maxFileCount: maxFileCount,
                        showCaption: showCaption,
                        maxFileSize: maxFileSize,
                        allowedFileTypes: allowedFileTypes,
                        allowedFileExtensions : allowedFileExtensions.split(','),
                        previewFileType: previewFileType,
                        minImageHeight: minImageHeight,
                        maxImageHeight: maxImageHeight,
                        minImageWidth: minImageWidth,
                        maxImageWidth: maxImageWidth,
                        elErrorContainer: '.kv-fileinput-error',
                        otherActionButtons: '',
                        showUpload: true,
                        showDownload: true,
                        showPreview: showPreview,
                        autoReplace: autoReplace,
                        //required: true,
                        overwriteInitial: false,
                        layoutTemplates : {
                            actions: '<div class="file-actions">' +
                            '    <div class="file-footer-buttons">' +
                            '        {upload} {download} {delete} {cropper} {info} {zoom} {other}' +
                            '    </div>' +
                            '</div>',
                        },
                        fileActionSettings: {
                            uploadRetryIcon: '<i class="fa fa-refresh"></i>',
                            downloadIcon: '<i class="fa fa-download"></i>'
                        },
                        removeLabel: removeLabel,
                        uploadRetryTitle: uploadRetryTitle,
                        previewThumbTags : {
                            '{cropper}'  : cropperTemplete || '',
                            '{info}'     : infoTemplete,
                        },
                        initialPreviewShowDelete: true,
                        initialPreview: [],
                        initialPreviewAsData: true,
                        initialPreviewFileType: 'image',
                        initialPreviewConfig: [],
                        initialPreviewThumbTags : []
                    };

                    if(allowedPreviewIcons)
                        $.extend(params ,{

                            // set to empty, null or false to disable preview for all types
                            // allow only preview of image & text files
                            allowedPreviewTypes: null,
                            //allowedPreviewTypes: ['image', 'text'],
                            // allow content to be shown only for certain mime types
                            //allowedPreviewMimeTypes: ['image/jpeg', 'text/javascript'],
                            previewFileIcon: '<i class="fa fa-file"></i>',
                            // this will force thumbnails to display icons for following file extensions
                            preferIconicPreview: true,
                            // configure your icon file extensions
                            previewFileIconSettings: {
                                'doc': '<i class="fa fa-file-word-o text-primary"></i>',
                                'xls': '<i class="fa fa-file-excel-o text-success"></i>',
                                'ppt': '<i class="fa fa-file-powerpoint-o text-danger"></i>',
                                'pdf': '<i class="fa fa-file-pdf-o text-danger"></i>',
                                'zip': '<i class="fa fa-file-archive-o text-muted"></i>',
                                'htm': '<i class="fa fa-file-code-o text-info"></i>',
                                'txt': '<i class="fa fa-file-text-o text-info"></i>',
                                'mov': '<i class="fa fa-file-movie-o text-warning"></i>',
                                'mp3': '<i class="fa fa-file-audio-o text-warning"></i>',
                                // note for these file types below no extension determination logic
                                // has been configured (the keys itself will be used as extensions)
                                'jpg': '<i class="fa fa-file-photo-o text-danger"></i>',
                                'gif': '<i class="fa fa-file-photo-o text-warning"></i>',
                                'png': '<i class="fa fa-file-photo-o text-primary"></i>'
                            },
                            previewFileExtSettings: { // configure the logic for determining icon file extensions
                                'doc': function(ext) {
                                    return ext.match(/(doc|docx)$/i);
                                },
                                'xls': function(ext) {
                                    return ext.match(/(xls|xlsx)$/i);
                                },
                                'ppt': function(ext) {
                                    return ext.match(/(ppt|pptx)$/i);
                                },
                                'zip': function(ext) {
                                    return ext.match(/(zip|rar|tar|gzip|gz|7z)$/i);
                                },
                                'htm': function(ext) {
                                    return ext.match(/(htm|html)$/i);
                                },
                                'txt': function(ext) {
                                    return ext.match(/(txt|ini|csv|java|php|js|css)$/i);
                                },
                                'mov': function(ext) {
                                    return ext.match(/(avi|mpg|mkv|mov|mp4|3gp|webm|wmv)$/i);
                                },
                                'mp3': function(ext) {
                                    return ext.match(/(mp3|wav)$/i);
                                },
                            }
                        });

                    if(param != '')
                        _.each(param.split('&') , function(v ,i) {
                            var extra = JSON.parse('{"' + v.split('=')[0] + '" : "' + v.split('=')[1] + '"}');
                            $.extend(params.uploadExtraData ,extra);
                            $.extend(params.deleteExtraData ,extra);
                        });

                    var initialPreviewFunc = function ($params) {

                        var url = ($params.url).replaceAll('{folder}', downloadFolder);

                        params.initialPreview.push(url);

                        // deep clone object
                        var extra = jQuery.extend(true, {}, params.deleteExtraData , $params.extra);

                        params.initialPreviewConfig.push({
                            previewAsData: true,
                            type: $params.type,
                            url: deleteUrl,
                            caption: $params.caption,
                            size: $params.size,
                            key: $params.key,
                            downloadUrl: url,
                            extra: extra,
                        });

                        params.initialPreviewThumbTags.push({
                            '{cropper}': '',
                            '{info}' : infoTemplete,
                            '{caption}': $params.caption,
                        });
                    };

                    var appendHiddenFunc = function (name ,value ,status) {

                        var _appendLocation = $(appendLocation),
                            inputFile = $this.closest('.file-input'),
                            selector  = function (name ,extraClass) {

                                var select = 'input[type=hidden][name="' + name + '"][value="' + value + '"]';

                                if(extraClass)
                                    select = select + extraClass;

                                return select;
                            },
                            hidden    = '<input class="'+ status +'" type="hidden" name="' + name + '" value="' + value + '"/>';

                        if(status == 'delete' && $(selector(name.replace('delete_' ,''))).hasClass('new'))
                            return;

                        if(status == 'replaced' && $(selector(name ,'.replaced')).length > 0)
                            return;

                        // add hidden id foreach image uploaded
                        if(_appendLocation.length)
                            _appendLocation.append(hidden);
                        else
                            inputFile.before(hidden);
                    };

                    var deleteHiddenFunc = function (name ,value ,status) {

                        var _appendLocation = $(appendLocation),
                            selector       = 'input[type=hidden][name="' + name + '"]';

                        if(value != null)
                            selector += '[value="' + value + '"]';

                        if(status != null ,status == 'replaced')
                            selector += '.replaced';

                        if(_appendLocation.length)
                            _appendLocation.find(selector).remove();
                        else
                            $(selector).remove();
                    };

                    var initFileUpload = function (params) {

                        $this.fileinput('destroy');
                        $this.fileinput(params).off('fileimagesloaded').on('fileimagesloaded', function(event) {
                            // This event is triggered when all file images are fully loaded in the preview window.
                            // This is only applicable for image file previews and if showPreview is set to true.
                        }).off('fileloaded').on('fileloaded', function(event, file, previewId, index, reader) {

                            // check image ratio
                            var blob = APP_AMU.fileUpload.convertFileToObject(file ,'fileToUrlBlob').fileToUrlBlob;
                            var img = new Image;
                            img.onload = function() {

                                var invalid = true;
                                $.each(ratio ,function (i ,v) {
                                    var imageRatio = parseInt(img.width)/parseInt(img.height);
                                    var ratio      = parseInt(v.width) / parseInt(v.height);
                                    if(imageRatio === ratio)
                                        invalid = false;
                                });

                                if(invalid)
                                    invalidRatio[previewId] = ratioMessage.replace('{name}' ,file.name);
                            };
                            img.src = blob;

                            // this event trigger after select new file from browse
                            if(autoReplace)
                                if($this.fileinput('getFilesCount') > params.maxFileCount)
                                    $.each($this.fileinput('getPreview').config , function(i ,v) {

                                        //replaced file
                                        appendHiddenFunc('delete_' + appendName ,v.key ,'replaced');
                                        //push replaced item to array
                                        replacedFile.push($.extend(v.extra ,{ key : v.key }));
                                    });

                        }).off('fileclear').on('fileclear', function(event) {

                            if(autoReplace)
                                if($this.fileinput('getFilesCount') > params.maxFileCount)
                                {
                                    // remove replaced hidden ..
                                    deleteHiddenFunc('delete_' + appendName ,null ,'replaced');
                                    // reset replaced file from replaced items
                                    replacedFile = [];
                                }
                        }).off('fileuploaded').on('fileuploaded', function(event, data, previewId, index) {

                            var response  = data.response;

                            appendHiddenFunc(appendName ,response[_this.id]['id'] ,'new');

                            if(autoReplace)
                                if($this.fileinput('getFilesCount') > params.maxFileCount)
                                {
                                    // delete delete_repaced hidden
                                    $.each(replacedFile ,function (i ,v) {

                                        // send post for delete replaced files
                                        $.post(params.deleteUrl , v);

                                        // delete new and uploaded
                                        deleteHiddenFunc(appendName ,v.key ,null);
                                    });

                                    // reset replaced file from replaced items
                                    replacedFile = [];
                                }

                            // reload datatable after upload success
                            if(datatableInitialize == true && data && reloadDatatable)
                                aut_datatable_reload(datatable);

                            if ((typeof $this.data('fileuploaded') != typeof undefined) && $this.data('fileuploaded'))
                                window[$this.data('fileuploaded')](event, data, previewId, index);

                            // hide modal after upload success
                            if($(target).hasClass('modal'))
                                $(target).modal('hide');

                        }).off('fileuploaderror').on('fileuploaderror', function(event, data, msg) {

                            if(data.jqXHR.responseJSON) {
                                var errorUl = $('.file-error-message').find('ul');
                                errorUl.html('');
                                _.each(data.jqXHR.responseJSON ,function (v ,i) {
                                    var message = "<li data-file-id='" + data.id + "'><b>" + data.filenames[data.index] + " </b>" + data.jqXHR.statusText + "<pre>" + v[0] + "</pre></li>";
                                    errorUl.append(message);
                                });
                            }

                        }).off('filebatchuploaderror').on('filebatchuploaderror', function(event, data, msg) {

                            if(data.jqXHR.responseJSON) {
                                var errorUl = $('.file-error-message').find('ul');
                                errorUl.html('');
                                _.each(data.jqXHR.responseJSON ,function (v ,i) {
                                    var message = "<li data-file-id='" + data.id + "'>" + data.jqXHR.statusText + "<pre>" + v[0] + "</pre></li>";
                                    errorUl.append(message);
                                });
                            }

                        }).off('filedeleted').on('filedeleted', function(event, key, jqXHR, data) {

                            appendHiddenFunc('delete_' + appendName ,key ,'delete');

                            deleteHiddenFunc(appendName ,key);

                            // reload datatable after upload success
                            if(datatableInitialize == true && data && reloadDatatable)
                                aut_datatable_reload(datatable);

                            if ((typeof $this.data('filedeleted') != typeof undefined) && $this.data('filedeleted'))
                                window[$this.data('filedeleted')](event, key, jqXHR, data);

                        }).off('filepreupload').on('filepreupload', function(event, data, previewId, index) {

                            if(invalidRatio[previewId] && !data.files[0].crop) {

                                return {
                                    message: invalidRatio[previewId],
                                    data: {data: data}
                                };
                            }

                        }).off('filecustomerror').on('filecustomerror', function(event, params) {

                            // params.abortData will contain the additional abort data passed
                            // params.abortMessage will contain the aborted error message passed

                            if(params.files[0].crop) {
                                $this.fileinput('upload');
                            }
                        });
                        /*
                        .on('filecleared', function(event){ })
                        .on('filereset', function(event){ })
                        .on('fileselectnone', function(event) { })
                        .on('fileselect', function(event, numFiles, label) { })
                        .on('filebatchselected', function(event, files) { })
                        .on('filebrowse', function(event) { })
                        .on('filepreremove', function(event, id, index) { })
                        .on('fileremoved', function(event, id, index) { })
                        .on('filebeforedelete', function(event, key, data) { })
                        .on('filepredelete', function(event, key, jqXHR, data) { })
                        .on('filedeleted', function(event, key, jqXHR, data) { })
                        .on('filesuccessremove', function(event, id) {  });
                        .on('fileclear', function(event) { }).on('filecleared', function(event) { })
                        .on('change', function(event) { });*/

                        $this.closest('.file-input').on('click' ,'.btn-attr-image' ,function () {
                            //info button
                        });

                        if(allowRatio) {

                            if(!$imageCont.data('allow-ratio-done'))
                                $.get(ratioUrl ,function (res) {

                                    var $cropRaio = $(cropperModal).find('.crop-raio');
                                    $cropRaio.html(res.ratio.ratio_button);

                                    $imageCont.find('.ratio-cont').html(res.ratio.ratio_resolution);
                                    $imageCont.data('allow-ratio-done' ,true);
                                });
                        }

                        if(cropper) {

                            $this.closest('.file-input').on('click' ,'.btn-crop-image', function() {

                                var $thisBtn   = $(this),
                                    $fileindex = $thisBtn.closest('div.kv-preview-thumb').data('fileindex');
                                // prev command
                                //$fileindex = $thisBtn.closest('tr').data('fileindex');

                                // var $btn = $(this), key = $btn.data('key');
                                var id = '#' + _this.id + APP_AMU.fileUpload.selector,
                                    files = $(id).fileinput('getFileStack'),
                                    file = files[$fileindex];

                                $(cropperModal).off('shown.bs.modal').on('shown.bs.modal', function (event) {

                                    $(cropperModal).find(cropperSelector)
                                        .attr('data-fileindex' ,$fileindex)
                                        .attr('data-model'     ,_this.id)
                                        .attr('data-target'    ,id)
                                        .attr('data-width'     ,imageWidth)
                                        .attr('data-height'    ,imageHeight)
                                        .attr('data-maxWidth'  ,maxImageWidth)
                                        .attr('data-maxHeight' ,maxImageHeight)
                                        .attr('data-minHeight' ,minImageHeight)
                                        .attr('data-minWidth'  ,minImageWidth);

                                    APP.CROPPER.init(cropperSelector ,file);
                                });

                                $(cropperModal).modal('show');
                            });
                        }
                    };

                    if(datatableInitialize == true && data) {

                        var images = JSPath.apply(datatableInitializeProperty ,data);
                        _.each(images ,function (row ,index) {

                            initialPreviewFunc({
                                url : row.image_url,
                                type : row.type,
                                caption : row.name,
                                size: row.size,
                                key: row.id,
                                extra : {file_name: row.hash_name }
                            });
                        });

                        initFileUpload(params);

                    } else if (datatableInitialize == false) {

                        var ids = [],
                            capture = $(appendLocation).find('[name="' + appendName + '"]');

                        if(capture.length) {

                            capture.each(function (i ,v) {

                                ids.push($(v).val());
                            });
                        }

                        $.get(uploadUrl , $.extend(params.uploadExtraData ,{ images_id : ids }) ,function (data) {

                            _.each(data ,function (row ,index) {

                                initialPreviewFunc({
                                    url : row.image_url,
                                    type : row.type,
                                    caption : row.name,
                                    size: row.size,
                                    key: row.id,
                                    extra : {file_name: row.hash_name }
                                });
                            });

                            initFileUpload(params);
                        });
                    }
                });
            }
        },
    },

    map: {

        initGMapInputLocation: function () {

            $(document).on('click', '.input-location span:first', function () {

                var $this = $(this),
                    $input = $this.prev('input'),
                    $modal = $input.data('modal');

                $($modal).off('shown.bs.modal').on('shown.bs.modal', function (event) {

                    var location = $input.val();
                    APP.GMap.init($(this).find('[data-gmap]'), location);
                });

                $($modal).modal('show');
            });

            $(document).on('click', '.set-map-location', function () {

                $modal = $(this).closest('.modal');
                $locationData = $modal.find('[data-gmap]').data('location');

                var InputFullLocation = $(this).data('input-full-location');
                var InputLatLocation = $(this).data('input-lat-location');
                var InputLngLocation = $(this).data('input-lng-location');

                if (InputFullLocation)
                    $(InputFullLocation).val($($locationData.location).val());
                if (InputLatLocation)
                    $(InputLatLocation).val($($locationData.lat).val());
                if (InputLngLocation)
                    $(InputLngLocation).val($($locationData.lng).val());

                $($modal).modal('hide');
            });
        },

        init: function () {

            APP_AMU.map.initGMapInputLocation();
        }
    },

    inputMask: {

        init: function (selector) {

            /**
             * data param
             *
             * data-masked
             * data-inputmask = 'mask':'(999)999-9999'
             * data-inputmask-type
             */

            $(selector).each(function () {

                var $this = $(this),
                    $type = typeof $this.data('inputmask-type') != typeof undefined ? $this.data('inputmask-type') : false,
                    $mask;

                switch ($type) {

                    case 'phone': {
                        $mask = '(9{3}) 9{7}';
                    }; break;

                    case 'mobile': {
                        $mask = '(9{3}) 9{3}-9{4}';
                    }; break;

                    case 'fax': {
                        $mask = '+\\963 (9{2}) 9{3}-9{4}';
                    }; break;
                }

                $this.attr('dir', 'ltr');
                $this.inputmask($mask, {
                    rightAlign: DIR == 'ltr' ? false : true,
                    clearMaskOnLostFocus: true,
                });
            });
        },
    },

    ajax: {

        init: function () {

            APP_AMU.autocomplete.initAutocomplete();
            APP_AMU.select.initSelect();
            APP_AMU.validate.init('.ajaxCont');
            APP_AMU.tree.initTree();
            APP_AMU.ckeditor.init('body', '.text-editor');
            APP_AMU.inputMask.init('[data-masked]');
            APP_AMU.fileUpload.load('.upload-file.load-file');

            $('.datatable').each(loadDatatable);
            //Added By AA1992
            onPageLoad.loadPjax();
        }
    },

    //Added By AA1992
    htmlTable: {
        init: function (){
            APP_AMU.htmlTable.initInputs();
            $(document).on('click.table_copy_row', '[table-copy-row]', function () {
                var $btn = $(this);
                var $table = $($btn.attr('table-copy-row'));
                APP_AMU.htmlTable.cloneTr($table);
            });
            $(document).on('click.table_delte_row', '.delete-action', function () {
                var $this = $(this);
                var $table = $this.closest('table');
                var isNew = $this.hasClass('new');
                var $tr = $this.closest('tr');
                var inputName = $table.attr('table-dynamic-input');
                if(isNew) {
                    $tr.remove();
                } else {
                    var isForDelete = $tr.hasClass('row-for-delete');
                    if(isForDelete){
                        $tr.removeClass('row-for-delete');
                        // $tr.attr('table-dynamic-temp-val', val);
                        $tr.find('#delete_' + inputName).remove();
                    } else {
                        $tr.addClass('row-for-delete');
                        var val = $tr.find('#' + inputName).val();
                        $tr.find(':has(.delete-action)')
                            .append("<input type='hidden' table-dynamic-modal='"+inputName+"' name='delete_"+inputName+"[]' id='delete_"+inputName+"' value='"+val+"' />");
                    }
                }
            })
        },

        initHtmlTable: function (){
            APP_AMU.htmlTable.init();
        },

        initInputs: function () {
            $('.table-dynamic .template-row :input').each(function (){
                var $this = $(this);
                var disabled = $this.attr('disabled') || false;
                if(disabled){
                    $this.attr('table-dynamic-disabled', 'disabled');
                } else {
                    $this.attr('disabled', 'disabled');
                }
            });
        },

        cloneTr: function ($table, $rowData) {
            var $templateRow = $table.find('thead #template_row');
            var rowId = $templateRow.attr('dynamic-table-id') || null;
            var $newRow = $templateRow.clone();
            $newRow.removeClass('template-row hide').attr('id', rowId).appendTo($table.find('tbody'));
            $newRow.find(':input').each(function () {
                var $this = $(this);
                var classes = $this.attr('table-dynamic-class');
                var disabled = $this.attr('table-dynamic-disabled') || false;
                $this.attr('table-dynamic-class', null);
                $this.attr('disabled', disabled);

                if($rowData) {
                    var key = $this.attr('table-dynamic-modal') || $this.attr('table-dynamic-modal-option');
                    var option = key.split(':');
                    if (option.length > 1) {
                        var htmloption = "<option selected value='" + APP_AMU.htmlTable.getValue($rowData, option[0]) + "'>" + APP_AMU.htmlTable.getValue($rowData, option[1]) + "</option>";
                        $this.html(htmloption);
                    } else if (option.length) {
                        $this.val(APP_AMU.htmlTable.getValue($rowData, option[0]));
                    }
                }
                $this.addClass(classes);
            });
            if(!$rowData) {
                $newRow.find('.delete-action').addClass('new');
            }
            APP_AMU.autocomplete.initAutocomplete(false, $newRow);
            APP_AMU.select.initSelect(false, $newRow);

            return true;
        },

        fillTableData: function ($table, $tableData) {
            APP_AMU.htmlTable.clearRows($table);
            for(var i = 0; i < $tableData.length; i++) {
                APP_AMU.htmlTable.cloneTr($table, $tableData[i]);
            }
        },

        clearRows: function ($table){
            $table.find('tbody tr').remove();
        },

        getValue: function (arr, key){
            var keys = key.split('.');
            var val = arr;
            for(var i = 0; i < keys.length; i++) {
                val = val[keys[i]];
            }
            return val;
        }
    },

    COLLAPSE_PANELS : function () {

        var panelSelector = '[data-tool="panel-collapse"]',
            storageKeyName = 'jq-panelState';

        // Prepare the panel to be collapsable and its events
        $(panelSelector).each(function() {
            // find the first parent panel
            var $this        = $(this),
                parent       = $this.closest('.panel'),
                state        = typeof $this.data('save-state') != typeof undefined ? JSON.parse($this.data('save-state')) : false,
                wrapper      = parent.find('.panel-wrapper'),
                collapseOpts = {toggle: false},
                iconElement  = $this.children('em'),
                panelId      = parent.attr('id');

            // if wrapper not added, add it
            // we need a wrapper to avoid jumping due to the paddings
            if( ! wrapper.length) {
                wrapper =
                    parent.children('.panel-heading').nextAll() //find('.panel-body, .panel-footer')
                        .wrapAll('<div/>')
                        .parent()
                        .addClass('panel-wrapper');
                collapseOpts = {};
            }

            // Init collapse and bind events to switch icons
            wrapper
                .collapse(collapseOpts)
                .on('hide.bs.collapse', function() {
                    setIconHide( iconElement );
                    if(state)
                        savePanelState( panelId, 'hide' );
                    wrapper.prev('.panel-heading').addClass('panel-heading-collapsed');
                })
                .on('show.bs.collapse', function() {
                    setIconShow( iconElement );
                    if(state)
                        savePanelState( panelId, 'show' );
                    wrapper.prev('.panel-heading').removeClass('panel-heading-collapsed');
                });

            // Load the saved state if exists
            if(state) {
                var currentState = loadPanelState( panelId );
                if(currentState) {
                    setTimeout(function() { wrapper.collapse( currentState ); }, 50);
                    savePanelState( panelId, currentState );
                }
            }
        });

        // finally catch clicks to toggle panel collapse
        $(document).on('click', panelSelector, function () {

            var parent = $(this).closest('.panel');
            var wrapper = parent.find('.panel-wrapper');

            wrapper.collapse('toggle');

        });

        /////////////////////////////////////////////
        // Common use functions for panel collapse //
        /////////////////////////////////////////////
        function setIconShow(iconEl) {
            iconEl.removeClass('fa-plus').addClass('fa-minus');
        }

        function setIconHide(iconEl) {
            iconEl.removeClass('fa-minus').addClass('fa-plus');
        }

        function savePanelState(id, state) {
            var data = $.localStorage.get(storageKeyName);
            if(!data) { data = {}; }
            data[id] = state;
            $.localStorage.set(storageKeyName, data);
        }

        function loadPanelState(id) {
            var data = $.localStorage.get(storageKeyName);
            if(data) {
                return data[id] || false;
            }
        }
    }
};

//Added By AA1992
var onPageLoad = {
    pjax: [
        APP_AMU.htmlTable.initInputs
    ],
    onLoad: [
        /**
         * Delegate Load
         */
        APP_AMU.COLLAPSE_PANELS,
        APP_AMU.changeColorControleTheme,
        function (){APP_AMU.initPjax('#pjax-container')},
        APP_AMU.validate.fillForm,
        APP_AMU.initModalEvent,
        APP_AMU.htmlTable.initHtmlTable,
        /**
         * Load
         */
        APP_AMU.autocomplete.initAutocomplete,
        APP_AMU.select.initSelect,
        function (){APP_AMU.validate.init('.ajaxCont')},
        APP_AMU.tree.initTree,
        function (){APP_AMU.ckeditor.init('body' ,'.text-editor')},
        APP_AMU.ckeditor.fixCkeditorModal,
        function (){APP_AMU.inputMask.init('[data-masked]')},
        APP_AMU.map.init,
        function () { APP_AMU.fileUpload.load('.upload-file.load-file') }
    ],
    loadPjax: function (){
        for(var i = 0; i < this.pjax.length; i++){
            var func = this.pjax[i];
            func();
        }
    },
    loadOnLoad: function (){
        for(var i = 0; i < this.onLoad.length; i++){
            var func = this.onLoad[i];
            func();
        }
    },
    loadAll: function () {
        this.loadPjax();
        this.loadOnLoad();
    }
};

/**
 * init App
 */
$(function () {
    //Updated By AA1992
    onPageLoad.loadOnLoad();
});