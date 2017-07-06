/**
 *
 * @param search
 * @param replaceAllment
 * @returns {string}
 */
String.prototype.replaceAll = function(search, replaceAllment) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replaceAllment);
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

};

var APP_AMU = {

    dragResizeModal : function () {

        $(document).on({

            'shown.bs.modal': function () {
                //comment
                // $('.modal-dialog').draggable({
                //     handle: ".modal-header,.modal-footer",
                //     //revert: true
                // });

                if($(this).find('.cropper').length);
                {
                    APP.CROPPER.destroy('.modal .cropper');
                    APP.CROPPER.init();
                }
            },

            'hidden.bs.modal' : function() {
                //comment
                // var modalDialog = $(this).find('.modal-dialog');
                // var minWidth = modalDialog.css('min-width');
                // modalDialog.attr('style' ,'min-width:' + minWidth);
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

                // $('head [role="header"]').not(container + ' [role="header"]').remove();
                // $('head').append($(container).find('[role="header"]'));
                //
                // $('body [role="footer"]').not(container + ' [role="footer"]').remove();
                // $('body').append($(container).find('[role="footer"]'));
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
                            if(param && param.charAt(0) === '#') {
                                var name = $(param).attr('name') || $(param).attr('id');
                                var val = $(param).val() ? $(param).val() : 0;
                                param = JSON.parse('{"'+name+'":"'+val+'"}');
                            }
                            var $data = {q: params.term,page: params.page};
                            if(param) {
                                $data = $.extend($data,param);
                            }
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

    validate: {
        //comment
        // changeMethodAction : function ($form) {
        //
        //     var id     = $form.find('.primarykey').val(),
        //         action, method;
        //
        //     if(id)
        //     {
        //         action = $form.data('action') + "/" + id;
        //         method = 'POST';
        //         $form.find("[name='_method']").remove();
        //         $form.prepend('<input name="_method" type="hidden" value="PUT">');
        //     }
        //     else
        //     {
        //         action = $form.data('action');
        //         method = 'POST';
        //         $form.find("[name='_method']").remove();
        //     }
        //
        //     $form.attr('action' ,action);
        //     $form.attr('method' ,method);
        // },

        init: function ($cont) {

            $($cont).find('form.ajax-form').each(function ()  {

                // if(!$($cont).find('.modal').length)
                //     APP_AMU.validate.changeMethodAction($(this));

                var validator = $(this).validate({

                    submitHandler: function (form, e) {

                        e.preventDefault();

                        var $form = $(form);

                        var data = $form.serialize();

                        var $method = typeof $form.find('[name=_method]').val() != typeof undefined
                            ? _.lowerCase($form.find('[name=_method]').val())
                            : _.lowerCase($form.attr('method'));

                        var $action = $form.attr('action');

                        $[$method]($action, data, function(res) {

                            if(typeof $form.parents('.modal') != typeof undefined)
                                $($form.parents('.modal')).modal('hide');

                        }).fail(function(res) {

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

                if(!$(this).closest('.modal').hasClass('modal'))
                    APP_AMU.validate.hideShowButtonForm($cont);
            });

            $($cont).find('.autocomplete').change(function(){
                $(this).valid();
            });

            APP_AMU.validate.initAdditionalValidationClass();
            APP_AMU.validate.clearModal($cont);
        },

        hideShowButtonForm : function ($cont) {

            $($cont).find("form [data-state]").hide();
            if($($cont).find('form .primarykey').val())
                $($cont).find("form [data-state='update']").show();
            else
                $($cont).find("form [data-state='add']").show();
        },

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

        resetForm : function ($cont) {

            $($cont).validate().resetForm();
        },

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

        clearModal : function ($cont) {

            $($cont).find('.modal').on('show.bs.modal', function() {

                APP_AMU.validate.hideShowButtonForm(this);

                //APP_AMU.validate.changeMethodAction($(this).find('form.ajax-form'));
            });

            $($cont).find('.modal').on('hidden.bs.modal', function() {

                var form = $(this).find('form');

                APP_AMU.validate.clearForm(form);
            });
        },

        fillForm : function () {

            $('body').on('click' ,'[data-editable-target]' ,function () {

                $contData = $(this).closest($(this).data('editable-target'));

                $($(this).data('target')).find('[data-json]').each(function (i ,v) {

                    if($(v).hasClass('autocomplete'))
                    {
                        APP_AMU.autocomplete.selectedAutocomplete($(v) ,[$contData.data($(v).data('json'))])
                    }
                    else
                    {
                        $(v).val($contData.data($(v).data('json')));
                    }
                });
            });
        },
    },

    tree : {

        updateOutput : function(e)
        {
            var list   = e.length ? e : $(e.target),
                output = list.data('output');

            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));

            } else {
                output.val('JSON browser support required for this demo.');
            }
        },

        init : function () {

            $('.aut-tree').load($('.aut-tree').data('url'),function () {

                // activate Nestable for list 1
                $('#nestable').nestable({
                    group: 1
                }).on('change', APP_AMU.tree.updateOutput);

                APP_AMU.autocomplete.reloadAutocomplete($(this).find('.autocomplete'));

                // output initial serialised data
                if($('#nestable').length)
                    APP_AMU.tree.updateOutput($('#nestable').data('output', $('#nestable-output')));

                $('.js-nestable-action').on('click', function(e)
                {
                    var target = $(e.target),
                        action = target.data('action');

                    if (action === 'expand-all') {
                        $('.dd').nestable('expandAll');
                    }
                    if (action === 'collapse-all') {
                        $('.dd').nestable('collapseAll');
                    }
                });
            });
        }
    },

    ckeditor : {

        init : function ($cont ,$target) {

            $cont = $($cont);

            if (typeof(CKEDITOR) != 'undefined')
            {
                APP_AMU.ckeditor.reset('body' ,$target);

                $cont.find($target).each(function () {

                    var params = {
                        /*
                         filebrowserBrowseUrl : baseUrl+lang+'/filemanager/dialog?type=2&editor=ckeditor&fldr=',
                         filebrowserUploadUrl :  baseUrl+lang+'/filemanager/dialog?type=2&editor=ckeditor&fldr=',
                         filebrowserImageBrowseUrl :  baseUrl+lang+'/filemanager/dialog?type=1&editor=ckeditor&fldr=',*/
                        contentsLangDirection: $(this).hasClass('en') ? 'ltr' : $(this).hasClass('ar') ? 'rtl' : '',
                        language: LANG,
                        resize_enabled: typeof $(this).data('resize') != typeof undefined ? $(this).data('resize') : true,
                    };

                    $textarea = CKEDITOR.replace(this.name ,params);
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

                        editor.on('resize',function(reEvent){

                            //comment
                            // var $ckeditor = $($cont).find($target + '[data-orginal-id="'+this.name+'"]'),
                            //     $modal = $ckeditor.closest('.modal'),
                            //     $modalDialog  = $modal.find('.modal-dialog');
                            //
                            // if($modal.length)
                            // {
                            //     var ckEditorWidth     = reEvent.data.outerWidth,
                            //         leftCkeditor      = $ckeditor.closest('div').offset().left,
                            //         leftModalDialog   = $modalDialog.offset().left,
                            //         width;
                            //
                            //     var tabArea = $modal.find('.tab-area');
                            //
                            //     if(tabArea.length)
                            //     {
                            //         var paddingTabContent = parseInt($modalDialog.find('.bhoechie-tab-content').css('padding-left'));
                            //         width = ckEditorWidth + (((leftCkeditor - (tabArea.width() + paddingTabContent)) - leftModalDialog) * 2);
                            //         width = width + tabArea.width() - paddingTabContent;
                            //     }
                            //     else
                            //     {
                            //         width = ckEditorWidth + ((leftCkeditor - leftModalDialog) * 2)
                            //     }
                            //
                            //     $modal.find('.modal-content').attr('style' ,"width:" + width + "px;");
                            // }
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

        reset : function ($cont ,$target) {

            if(typeof(CKEDITOR) != 'undefined')
            {
                for (name in CKEDITOR.instances) {

                    if($($cont).find($target + '[data-orginal-id="'+name+'"]').length)
                    {
                        var instance = CKEDITOR.instances[name];
                        if (instance) {
                            CKEDITOR.remove(instance);
                            instance.destroy(false);
                        }
                    }
                }
            }
        },

        clear : function ($cont ,$target) {

            if(typeof(CKEDITOR) != 'undefined')
            {
                for (name in CKEDITOR.instances) {
                    if($($cont).find($target + '[data-orginal-id="'+name+'"]').length)
                        CKEDITOR.instances[name].setData('');
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
                        modal_this.$element.focus()
                    }
                });
            };
        }
    },

    ajax : {

        init : function () {

            APP_AMU.autocomplete.initAutocomplete();
            APP_AMU.validate.init('.ajaxCont');
            APP_AMU.tree.init();
            APP_AMU.ckeditor.init('body' ,'text-editor');
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
    APP_AMU.dragResizeModal();

    /**
     * Load
     */
    APP_AMU.autocomplete.initAutocomplete();
    APP_AMU.validate.init('.ajaxCont');
    APP_AMU.tree.init();
    APP_AMU.ckeditor.init('body' ,'text-editor');
    APP_AMU.ckeditor.fixCkeditorModal();
});