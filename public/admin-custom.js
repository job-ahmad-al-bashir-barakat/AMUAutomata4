
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
                case 'tree': APP_AMU.tree.ajaxLoad(v);
            }
        })
    },
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
            for (var key in repo) {
                if (key.startsWith('data-')) {
                    $option.attr(key.replace('data-', ''), repo[key]);
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

                        $[$method](APP_AMU.validate.changeAction($form), $data, function (res) {

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

                            HELPER_AMU.notify({message: res.operation_message || OPERATION_MESSAGE_SUCCESS, status: 'success'})

                        }).fail(function (res) {

                            HELPER_AMU.notify({message: OPERATION_MESSAGE_FAIL, status: 'danger'});

                            $.each(JSON.parse(res.responseText).server_message, function (k, v) {

                                var error = $form.find('#error_' + k);
                                error.children().remove();
                                error.append('<div id="' + k + '-error" class="validate-error validate-error-help-block validate-error-style animated fadeInDown">' + v[0] + '</div>');
                            });
                        });
                    },
                    ignore: [],
                    errorClass: 'validate-error validate-error-help-block validate-error-style animated fadeInDown',
                    errorElement: 'div',
                    invalidHandler: function (event, validator) {
                        if (validator.errorList.length)
                            $('[data-tab=' + $(validator.errorList[0].element).closest('[data-tab]').data('tab') + ']').trigger('click');
                    },
                    errorPlacement: function (error, e) {

                        jQuery(e).closest('.form-group').find('div[id*=error_]').append(error);
                    },
                    highlight: function (e, errorClass, validClass) {

                        var elem = jQuery(e);
                        elem.closest('.form-group > div').removeClass('has-error').addClass('has-error');
                        elem.closest('.help-block').remove();
                    },
                    unhighlight: function (e, errorClass, validClass) {

                        var elem = jQuery(e);
                        elem.closest('.form-group > div').removeClass('has-error');
                        elem.closest('.help-block').remove();
                    },
                    success: function (e) {

                        var elem = jQuery(e);
                        elem.closest('.form-group  > div').removeClass('has-error');
                        elem.closest('.help-block').remove();
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

                $cont = $(this).data('target');

                APP_AMU.validate.hideShowButtonForm($cont, 'add');
            });

            $(document).on('click', '[data-form-update]', function () {

                $contData = $(this).closest($(this).data('editable-target'));

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

        treenormalLoadClass: '.nestable',

        storageKeyName: 'js-nestable',

        storageKeyAuto: 'js-nestable-auto',

        updateOutput: function (e) {
            var list     = e.length ? e : $(e.target),
                output   = list.data('output'),
                treeCont = list.closest(APP_AMU.tree.treeContId);

            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');
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

        normalLoad : function () {

            var $this        = $(this),
                clone        = typeof $this.data('clone') != typeof undefined ? JSON.parse($this.data('clone')) : false,
                groupSource  = typeof $this.data('group-source') != typeof undefined ? $this.data('group-source') : undefined,
                reject       = typeof $this.data('reject') != typeof undefined ? JSON.parse($this.data('reject')) : false,
                init         = typeof $this.data('init') != typeof undefined ? JSON.parse($this.data('init')) : false,
                drop         = typeof $this.data('drop') != typeof undefined ? JSON.parse($this.data('drop')) : false,
                drop_exists  = typeof $this.data('drop-exists') != typeof undefined ? JSON.parse($this.data('drop-exists')) : false,
                disableNest  = typeof $this.data('disable-nest') != typeof undefined ? JSON.parse($this.data('disable-nest')) : false,
                emptyText    = typeof $this.data('empty-text') !=  typeof undefined ? $this.data('empty-text') : 'Drag Here';

            var optionsObj = {
                maxDepth: $this.data('max-depth'),
                group: $this.data('group'),
                clone: clone,
                emptyText: emptyText,
                disableNest : disableNest,
            };

            if(groupSource) {

                var groupSource = (groupSource.toString()).split(',').map(Number);

                optionsObj.group_source = groupSource;
            }

            // this it is just allow for the same list not between lists
            if(reject)
                optionsObj.reject = typeof $this.data('reject-callback') != typeof undefined
                    ? window[$this.data('reject-callback')]()
                    : [{
                        rule: function(draggedElement) {

                            // The this object refers to dragRootEl i.e. the nestable root element. The drag action is cancelled if this function returns true
                            // The rule here is that it is forbidden drag elements to first-level children

                            return true;
                        },

                        action: function(draggedElement) {

                            // This optional function defines what to do when such a rule applies
                            // alert('You can\'t do that !');
                        }
                    }];

            if(init)
                optionsObj.afterInit = function ( event ) {
                }

            if(drop)
                optionsObj.dropCallback = function (details) {
                };

            $this.nestable(optionsObj).on('dragEnd', function(event, item, source, destination, position) {

                if(drop_exists) {

                    var destinationExists = destination.find('[data-exists=' + item.data('exists') + ']');
                    if(destinationExists.length > 1)
                        $.each(destinationExists ,function (i ,v) {
                            if(i == (destinationExists.length - 1))
                                $(this).remove();
                        });

                    if(item.data('type') != destination.closest(APP_AMU.tree.treenormalLoadClass).data('type'))
                        item.remove();
                }

                if($this.hasClass('order')) {

                    item.parent().children('li').each(function (i, v) {

                        $(this).attr('data-order', i + 1);
                    });
                }
            });
        },

        ajaxLoad: function ($cont, $node) {

            var $cont = $($cont);
            var $treeParam = $node != null ? "?nodeId=" + $node : "";

            $cont.load($cont.data('url') + $treeParam, function () {

                var $this = $(this),
                    $_nestable = $this.find('.ajax-nestable'),
                    groupSource  = typeof $this.data('group-source') != typeof undefined ? $this.data('group-source') : undefined,
                    reject       = typeof $this.data('reject') != typeof undefined ? JSON.parse($this.data('reject')) : false,
                    emptyText    = typeof $this.data('empty-text') !=  typeof undefined ? $this.data('empty-text') : 'Drag Here';

                var optionsObj = {
                    maxDepth: $this.data('max-depth'),
                    group: $this.data('group'),
                    emptyText: emptyText
                    // afterInit: function ( event ) { }
                };

                if(groupSource) {

                    var groupSource = (groupSource.toString()).split(',').map(Number);

                    optionsObj.group_source = groupSource;
                }

                // this it is just allow for the same list not between lists
                if(reject)
                    optionsObj.reject = typeof $this.data('reject-callback') != typeof undefined
                        ? window[$this.data('reject-callback')]()
                        : [{
                            rule: function(draggedElement) {

                                // The this object refers to dragRootEl i.e. the nestable root element. The drag action is cancelled if this function returns true
                                // The rule here is that it is forbidden drag elements to first-level children

                                return true;
                            },

                            action: function(draggedElement) {

                                // This optional function defines what to do when such a rule applies
                                // alert('You can\'t do that !');
                            }
                        }];

                $_nestable.nestable(optionsObj).on('change', APP_AMU.tree.updateOutput).on('dragEnd', function (event, item, source, destination, position) {
                    // Make an ajax request to persist move on database
                    // here you can pass item-id, source-id, destination-id and position index to the server
                    var item = $(_.head(item)),
                        id = item.data('id'),
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

                    //reorder html item
                    item.parent().children('li').each(function (i, v) {
                        $(this).attr('data-order', i + 1);
                    });

                    //reorder data
                    _.each(data, function (v, k) {
                        v.order = k + 1;
                    });

                    if (!id)
                        console.log('please set an data-id and data-parent for every item');

                    parent = typeof parent != typeof undefined ? parent : null;

                    $.put($this.data('url') + "/" + id, {
                        "parent": parent,
                        "drag": true,
                        "order": position + 1,
                        "data": data
                    }, function (res) {

                        if (typeof res.id != typeof null)
                            item.attr('data-parent', '{ "id" : "' + res.id + '","name" : "' + res.name + '"}');
                        else
                            item.removeAttr('data-parent');

                        HELPER_AMU.notify({message: res.operation_message, status: 'success'});
                    });
                })
                //.on('beforeDragStart', function(handle) {})
                //.on('dragStart', function(event, item, source) { })
                //.on('dragMove', function(event, item, source, destination) { })
                .on('beforeDragEnd', function(event, item, source, destination, position, feedback) {
                    console.log(item);

                 //If you need to persist list items order if changes, you need to comment the next line
                 //   if (source[0] === destination[0]) { feedback.abort = true; return; }
                 //   feedback.abort = !window.confirm('Continue?');
                });

                // output initial serialised data
                if ($this.find('.ajax-nestable').length)
                    APP_AMU.tree.updateOutput($this.find('.ajax-nestable').data('output', $this.find('.ajax-nestable-output')));

                APP_AMU.autocomplete.reloadAutocomplete($this.find('.autocomplete'));
            });
        },

        loadAjaxAction: function ($cont) {

            $(document).off('change.tree').on('change.tree', '.tree-autocomplete-change', function () {

                var $this = $(this),
                    $treeContId = $(APP_AMU.tree.treeContId),
                    $length;

                if ($this.val())
                    $length = $treeContId
                        .find("[data-id=" + $this.val() + "] .dd-list li:first")
                        .parent()
                        .children().length + 1;
                else
                    $length = $treeContId.find('.dd .dd-list:first').children('li').length + 1;

                $this.closest('form')
                    .find('#order')
                    .val($length);
            });

            $($cont).off('change').on('change', '#treeAutocomplete', function () {

                var $node = $(this).val();

                APP_AMU.tree.ajaxLoad($(this).closest($cont), $(this).val());
            });

            $($cont).on('click', '.js-nestable-action [data-action]', function (e) {
                var target   = $(e.target),
                    action   = target.data('action'),
                    treeCont = target.closest(APP_AMU.tree.treeContId),
                    list     = treeCont.find('.ajax-nestable'),
                    modal    = target.data('target');

                if (action === 'expand-all') {
                    list.nestable('expandAll');
                }

                if (action === 'collapse-all') {
                    list.nestable('collapseAll');
                }

                if (action === 'reset_tree') {
                    APP_AMU.tree.ajaxLoad($(this).closest(APP_AMU.tree.treeContId), null);
                }

                if (action === 'add_tree_node') {
                    $(modal).find('.tree-autocomplete-change').trigger('change');
                }

                $.localStorage.set(treeCont.data('storage-key') || APP_AMU.tree.storageKeyName, {"action": action});
            });

            $($cont).on('click', '[data-form-add]', function () {

                $modal = $(this).data('target');
                $($modal).find('.tree-autocomplete-change').attr('data-remote-param', "");
            });

            $($cont).on('click', '[data-form-update]', function () {

                $contData = $(this).closest($(this).data('editable-target'));
                $modal = $(this).data('target');
                $($modal).find('.tree-autocomplete-change').attr('data-remote-param', "id=" + $($contData).data('id'));
            });
        },

        initTreeAjax: function ($cont) {

            $(APP_AMU.tree.treeContId).each(function () {
                APP_AMU.tree.ajaxLoad(this);
                APP_AMU.tree.loadAjaxAction(this);
            });
        },

        initTreeNormal: function ($cont) {

            $cont = $cont || APP_AMU.tree.treenormalLoadClass;

            $($cont).each(APP_AMU.tree.normalLoad);
        }
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

        load: function(selector ,datatableRaw) {

            if (typeof($.fn.fileinput) != 'undefined') {

                $selector = $(selector);

                $selector.each(function () {

                    var _this = this,
                        $this = $(_this);

                    var btns, cropperTemplete, infoTemplete, downloadTemplete,
                        previewFileType       = $this.data('preview-file-type'),
                        allowedFileTypes      = typeof $this.data('allowed-file-types') != typeof undefined ? $this.data('allowed-file-types').split(',') : null,
                        allowedFileExtensions = typeof $this.data('allowed-file-extensions') != typeof undefined ? $this.data('allowed-file-extensions') : null,
                        uploadUrl       = $this.data('upload-url'),
                        deleteUrl       = $this.data('delete-url'),
                        downloadFolder  = $this.data('download-folder'),
                        maxFileSize     = $this.data('max-file-size') || 0,
                        maxFileCount    = $this.data('max-file-count') || 0,
                        minFileCount    = $this.data('min-file-count') || 0,
                        removeLabel     = $this.data('remove-label'),
                        uploadRetryTitle= $this.data('upload-retry-title'),
                        cropTitle       = $this.data('crop-title'),
                        attributeTitle  = $this.data('attribute-title'),
                        downloadTitle   = $this.data('download-title'),
                        showCaption     = typeof $this.data('show-caption') != typeof undefined ? JSON.parse($this.data('show-caption')) : false,
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
                        appendLocation              = typeof $this.data('append-location') != typeof undefined ? $this.data('append-location') : '';

                    if(cropper)
                        cropperTemplete = '<button type="button" class="kv-cust-btn btn-crop-image btn btn-xs btn-default" title="' + cropTitle + '"><i class="fa fa-crop"></i></button>';
                    infoTemplete = '<button type="button" class="kv-cust-btn btn-attr-image btn btn-xs btn-default" title="' + attributeTitle + '" {dataKey}><i class="fa fa-question-circle"></i></button>';
                    downloadTemplete = '<a href="{downloadUrl}" class="kv-cust-btn btn-download btn btn-xs btn-default" title="' + downloadTitle + '" download="{caption}"><i class="fa fa-download"></i></a>';

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
                        // autoReplace: true,
                        required: true,

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
                        },
                        removeLabel: removeLabel,
                        uploadRetryTitle: uploadRetryTitle,
                        previewThumbTags : {
                            '{cropper}'  : cropperTemplete || '',
                            '{info}'     : infoTemplete,
                            '{download}' : '',
                        },
                        initialPreviewShowDelete: true,
                        initialPreview: [],
                        initialPreviewAsData: true,
                        initialPreviewFileType: 'image',
                        initialPreviewConfig: [],
                        initialPreviewThumbTags : [],
                    };

                    if(param != '')
                        _.each(param.split('&') , function(v ,i) {
                            var extra = JSON.parse('{"' + v.split('=')[0] + '" : "' + v.split('=')[1] + '"}');
                            $.extend(params.uploadExtraData ,extra);
                            $.extend(params.deleteExtraData ,extra);
                        });

                    if(datatableInitialize == true && datatableRaw) {

                        var images = JSPath.apply(datatableInitializeProperty ,datatableRaw);
                        _.each(images ,function (row ,index) {

                            var url = (row.image_url).replaceAll('{folder}', downloadFolder);

                            params.initialPreview.push(url);

                            params.initialPreviewConfig.push({
                                previewAsData: true,
                                type: row.type,
                                url: deleteUrl,
                                caption: row.name,
                                size: row.size,
                                key: row.id,
                                extra: $.extend(params.deleteExtraData , {file_name: row.hash_name})
                            });

                            params.initialPreviewThumbTags.push({
                                '{cropper}': '',
                                '{info}' : infoTemplete,
                                '{download}': downloadTemplete,
                                '{downloadUrl}': url,
                                '{caption}': row.name,
                            });
                        });

                    } else if (datatableInitialize == false) {

                        $.get(uploadUrl ,params.uploadExtraData ,function (res) {

                            alert('oppps not ready yet !!! coming soon :(');
                            console.log(res);
                        });
                    }

                    $this.fileinput('destroy');
                    $this.fileinput(params).off('fileimagesloaded').on('fileimagesloaded', function(event) {
                        // This event is triggered when all file images are fully loaded in the preview window.
                        // This is only applicable for image file previews and if showPreview is set to true.
                    }).off('fileloaded').on('fileloaded', function(event, file, previewId, index, reader) {
                        // this event trigger after select new file from browse
                    }).off('fileuploaded').on('fileuploaded', function(event, data, previewId, index) {

                        var response  = data.response,
                            inputFile = $this.closest('.file-input');
                        appendLocation = $(appendLocation);

                        var hidden = '<input class="file-uploaded" type="hidden" name="' + _this.id + '[]" value="' + response[_this.id]['id'] + '"/>';

                        // add hidden id foreach image uploaded
                        if(appendLocation.length)
                            appendLocation.append(hidden);
                        else
                            inputFile.before(hidden);

                        // reload datatable after upload success
                        if(datatableInitialize == true && datatableRaw && reloadDatatable)
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
                    }).off('filedeleted').on('filedeleted', function(event, key, jqXHR, data) {

                        // reload datatable after upload success
                        if(datatableInitialize == true && datatableRaw && reloadDatatable)
                            aut_datatable_reload(datatable);

                        if ((typeof $this.data('filedeleted') != typeof undefined) && $this.data('filedeleted'))
                            window[$this.data('filedeleted')](event, key, jqXHR, data)  ;
                    });

                    // temp solution for remove crop on update
                    $this.closest('.file-input').find('.file-preview-initial .btn-crop-image').remove();

                    $this.closest('.file-input').on('click' ,'.btn-attr-image' ,function () {
                        //info button
                    });

                    if(cropper) {

                        $this.closest('.file-input').on('click' ,'.btn-crop-image', function() {

                            var $thisBtn   = $(this),
                                $fileindex = $thisBtn.closest('div.kv-preview-thumb').data('fileindex');
                            // prev command
                            //$fileindex = $thisBtn.closest('tr').data('fileindex');

                            // var $btn = $(this), key = $btn.data('key');

                            var id = '#' + _this.id,
                                files = $(id).fileinput('getFileStack'),
                                file = files[$fileindex];

                            $(cropperModal).off('shown.bs.modal').on('shown.bs.modal', function (event) {

                                $(cropperModal).find(cropperSelector)
                                    .attr('data-fileindex' ,$fileindex)
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
                        $mask = '(9{3}) 9{3}-9{4}';
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
            APP_AMU.tree.initTreeAjax();
            APP_AMU.tree.initTreeNormal();
            APP_AMU.ckeditor.init('body', '.text-editor');
            APP_AMU.inputMask.init('[data-masked]');
            APP_AMU.fileUpload.load('.upload-file');

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
        APP_AMU.tree.initTreeAjax,
        APP_AMU.tree.initTreeNormal,
        function (){APP_AMU.ckeditor.init('body' ,'.text-editor')},
        APP_AMU.ckeditor.fixCkeditorModal,
        function (){APP_AMU.inputMask.init('[data-masked]')},
        APP_AMU.map.init,
        function () { APP_AMU.fileUpload.load('.upload-file') }
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