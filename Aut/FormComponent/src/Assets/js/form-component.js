
var AUT_FORM_COMPONENT = {

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
                '<div style="background-color: #3e3935; left: 0;"></div>' +
                '<div style="background-color: #3e3935; left: 25px;"></div>' +
                '<div style="background-color: #3e3935; left: 50px;"></div>' +
            '</div>' +
        '</div>',

        notify : function (notify) {

            var icon = (typeof notify.icon !== typeof undefined) ? '<em class="fa fa-' + notify.icon +  '"></em> ' : '';

            $.notify({
                message: notify.html || (icon + notify.message),
                pos: notify.pos || 'bottom-right',
                status: notify.status,
                timeout: notify.timeout || 1000
            });
        },

        sweetalert_swal: function (param ,funcSuccess ,paramCancleSafe, funcCancle) {

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
            }).then(funcSuccess, function (dismiss) {

                if (dismiss === 'cancel') {

                    swal({
                        title : paramCancleSafe.cancleSafe.text,
                        text  : paramCancleSafe.cancleSafe.message,
                        confirmButtonText  : paramCancleSafe.ok,
                        type : "error",
                    });

                    if(typeof funcCancle == 'function')
                        funcCancle();
                }
            });
        },

        addLoader: function ($button) {

            // form loader
            $button.closest(AUT_FORM_COMPONENT.validate.loaderSelector)
                .attr('style' ,'position:relative;')
                .prepend(AUT_FORM_COMPONENT.validate.loader);

            // button loader
            if(!$button.is('[data-loading-text]'))
                $button.attr('data-loading-text' ,"<i class='fa fa-circle-o-notch fa-spin'> </i> " + WAITING_TITLE);

            $button.button('loading');
        },

        removeLoader: function ($button) {

            // form loader
            $formLoader = $button.closest(AUT_FORM_COMPONENT.validate.loaderSelector);
            $formLoader.removeAttr('style' ,'position:relative;');
            $formLoader.find('.form-loader.overlay').remove();

            // done / fail
            $button.button('reset');
        },

        serializeObject: function (formArray) {

            var returnArray = {};
            for (var i = 0; i < formArray.length; i++){
                returnArray[formArray[i]['name']] = formArray[i]['value'];
            }
            return returnArray;
        },

        convertUrlParamToJson: function (param) {

            return JSON.parse('{"' + param.replace(/&/g, '","').replace(/=/g,'":"') + '"}', function(key, value) {
                return key === "" ? value : decodeURIComponent(value)
            });
        },

        changeAction: function ($form) {

            var primarykey = $form.find('.primarykey').val(),
                takeAction = typeof $form.data('take-action') != typeof undefined ? true : false,
                actionParam = typeof $form.data('param') != typeof undefined ? $form.data('param') : '',
                action;

            if (!takeAction && primarykey)
                action = $form.attr('action') + "/" + primarykey + actionParam;
            else
                action = $form.attr('action') + actionParam;

            return action;
        },

        init: function ($cont) {

            $($cont).find('form.ajax-form').each(function () {

                var validator = $(this).validate({

                    submitHandler: function (form, e) {

                        e.preventDefault();

                        var $data,
                            $this                 = this,
                            $form                 = $(form),
                            $button               = $($this.submitButton),
                            $method               = $button.data('method'),
                            $serialize            = typeof $button.data('serialize') != typeof undefined ? $button.data('serialize') : true,
                            $extraSerialize       = $button.data('extra-serialize') || $form.data('extra-serialize'),
                            $stopOperationMessage = $form.is('[data-stop-operation-message]') || $button.is('[data-stop-operation-message]');

                        if ($serialize)
                            // AUT_FORM_COMPONENT.validate.serializeObject($form.serializeArray());
                            $data = $form.serialize();
                        else
                            $data = {};

                        if($serialize)
                            if (typeof $extraSerialize == 'function') {
                                $data = $.extend($data ,window[$extraSerialize](form));
                            } else if(typeof $extraSerialize == 'object') {
                                $data = $.extend($data ,$extraSerialize);
                            } else if(typeof $extraSerialize == "string") {
                                $data = $.extend($data ,AUT_FORM_COMPONENT.validate.convertUrlParamToJson($extraSerialize));
                            }

                        if (typeof $button.data('method') != typeof undefined)
                        {
                            $method = $button.data('method');
                        }
                        else
                        {
                            $method = typeof $form.find('[name=_method]').val() != typeof undefined
                                ? _.lowerCase($form.find('[name=_method]').val())
                                : _.lowerCase($form.attr('method'));
                        }

                        // add Loader
                        AUT_FORM_COMPONENT.validate.addLoader($button);

                        $call = function () {

                            $[$method]($button.data('action') || AUT_FORM_COMPONENT.validate.changeAction($form), $data, function (res) {

                                // if form was inside modal we will close it after save
                                if (typeof $form.closest('.modal') != typeof undefined && !$form.is('.stop-close-modal'))
                                    $($form.closest('.modal')).modal('hide');

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
                                if (typeof $form.data('ajax-form-success') != typeof undefined)
                                    window[$form.data('ajax-form-success')](form, res);

                                // callback exec after add oper success
                                if (typeof $button.data('ajax-form-add-success') != typeof undefined)
                                    window[$button.data('ajax-form-add-success')](form, res);

                                // callback exec after update oper success
                                if (typeof $button.data('ajax-form-update-success') != typeof undefined)
                                    window[$button.data('ajax-form-update-success')](form, res);

                                // callback exec after delete oper success
                                if (typeof $button.data('ajax-form-delete-success') != typeof undefined)
                                    window[$button.data('ajax-form-delete-success')](form, res);


                                if(!$stopOperationMessage)
                                    AUT_FORM_COMPONENT.validate.notify({message: res.operation_message || OPERATION_MESSAGE_SUCCESS, status: 'success'});

                            }).fail(function (res) {

                                // remove Loader
                                AUT_FORM_COMPONENT.validate.removeLoader($button);

                                if(!$stopOperationMessage)
                                    AUT_FORM_COMPONENT.validate.notify({message: OPERATION_MESSAGE_FAIL, status: 'danger'});

                                var errors = typeof res.responseJSON != typeof undefined
                                    ? res.responseJSON.errors
                                    : [];

                                $.each(errors, function (k, v) {

                                    var error = $form.find('#error_' + k);
                                    error.children().remove();
                                    //v[0]
                                    error.append('<div id="' + k + '-error" class="validate-error validate-error-help-block validate-error-style animated fadeInDown">' + v + '</div>');
                                });

                            }).done(function (res) {

                                // remove Loader
                                AUT_FORM_COMPONENT.validate.removeLoader($button);
                            });
                        };

                        if($method == 'delete') {

                            AUT_FORM_COMPONENT.validate.sweetalert_swal({
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
                            }, function () {

                                AUT_FORM_COMPONENT.validate.removeLoader($button);
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

            AUT_FORM_COMPONENT.validate.initAdditionalValidationClass();
            AUT_FORM_COMPONENT.validate.clearModal($cont);
        },

        /**
         *
         * @param $cont
         * @param $state
         *
         * this mothod for hide show button inside form
         */
        hideShowButtonForm: function ($cont, $state) {
            var $cont = $($cont),
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
                number:{
                    required: true,
                    number: true
                },
                email:{
                    required: true,
                    email: true,
                },
                url:{
                    required: true,
                    url: true,
                },
                date:{
                    required: true,
                    date: true
                },
                min:{
                    required: true,
                    minlength: 5
                },
                max:{
                    required: true,
                    maxlength: 5
                },
                range:{
                    required: true,
                    rangelength: [5, 10]
                },
                digits:{
                    required: true,
                    digits: true
                }    ,
                minVal:{
                    required: true,
                    min: 5
                },
                maxVal:{
                    required: true,
                    max: 100
                },
                rangeVal:{
                    required: true,
                    range: [5, 100]
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
            form.find('[id^=error_]').children().remove();
            form.find('.text-clear').text('');
            form.find('input[type=hidden]').not('[data-permanent=true],[name="_token"],[name="_method"]').val('');
            var taginput = form.find('[data-role="tagsinput"]');
            if(taginput.length)
                taginput.tagsinput('removeAll');
            if (form.find('.autocomplete').length != 0) {
                AUT_AUTOCOMPLETE_PACK.autocomplete.resetAutocomplete(form.find('.autocomplete'));
            }
            AUT_FORM_COMPONENT.validate.resetForm(form);
        },

        /**
         *
         * @param $cont
         *
         * clear you modal and reset form button
         */
        clearModal: function ($cont) {

            var modal = '';
            if($($cont).find('.modal').length)
                modal = $($cont).find('.modal');
            else
                modal = $($cont).closest('.modal');

            modal.on('show.bs.modal', function () {
                //
            });

            modal.on('hidden.bs.modal', function () {

                var $form = $(this).find('form');

                AUT_FORM_COMPONENT.validate.clearForm($form);

                AUT_FORM_COMPONENT.validate.hideShowButtonForm($cont, 'add');
            });
        },

        /**
         * Fill Form and reset form button
         */
        fillForm: function () {

            var setData = function (element, $data) {

                var $element = $(element);

                if($element.data('fixed-value'))
                    return;

                if(typeof $data != typeof undefined)
                {
                    if ($element.hasClass('autocomplete'))
                    {
                        AUT_AUTOCOMPLETE_PACK.autocomplete.selectedAutocomplete($element, $data);
                    }
                    else
                    {
                        $element.val($data);

                        if($element.is('[data-role="tagsinput"]'))
                            $element.tagsinput('add', $data[0]);

                        //fill ckeditor if exists
                        if ($element.hasClass('text-editor'))
                            CKEDITOR.instances[element.id].setData($data);
                    }
                }
                $element.trigger('change');
            };

            $(document).off('click.form-component','[data-form-add],.form-add').on('click.form-component', '[data-form-add],.form-add', function () {

                var $this         = $(this),
                    $cont         = $($this.data('target')),
                    $formTarget   = $cont.find('form'),
                    $fallbackData = $this.data();

                // fill fixed input
                $.map($formTarget.find('[data-editable],[data-json]'),function (element, i) {

                    if($(element).attr('id'))
                    {
                        var trgetDataId = ($(element).attr('id')).replace(/-/g,'_');

                        if($fallbackData[trgetDataId])
                        {
                            var $data = $fallbackData[trgetDataId];

                            if(typeof $data == 'object')
                                $data = [$data];

                            setData(element, $data)
                        }
                    }
                });

                AUT_FORM_COMPONENT.validate.hideShowButtonForm($cont, 'add');
            });

            $(document).off('click.form-component','[data-form-update],.form-update').on('click.form-component', '[data-form-update],.form-update', function () {

                var $this                = $(this),
                    $cont                = $($this.data('target')),
                    $formTarget          = $cont.find('form'),
                    $formDataMethod      = $formTarget.data('method'),
                    $editableTarget      = $this.data('editable-target') || $formTarget.data('editable-target'),
                    $editableTargetParam = $this.data('editable-target-param') || $formTarget.data('editable-target-param') || {},
                    $fallbackData        = $this.data();
                    getAutocompleteData = function ($trgetData, data) {

                        var $data = [];

                        $.map($trgetData, function(col ,prop) {

                            $.map(JSPath.apply('.' + col ,data), function(value, index){

                                if(!$data[index])
                                    $data.push({});

                                $data[index][prop] = value;
                            });
                        });

                        return $data;
                    },
                    fillForm            = function (type ,data) {

                        $($formTarget).find('[data-editable],[data-json]').each(function (i, element) {

                            var $element     = $(element),
                                $trgetDataId = ($element.attr('id')).replace(/-/g,'_'),
                                $trgetData   = $element.data('json') || $trgetDataId,
                                $data;

                            switch(type)
                            {
                                case 'item' : {

                                    $data = data.data($trgetData);

                                    if(typeof $data == 'object')
                                        $data = [$data];

                                }; break;

                                case 'datatable' :
                                case 'get' : {

                                    // get datata from datatable row
                                    if(typeof $trgetData == 'string') {
                                        $data = JSPath.apply('.' + $trgetData ,data);
                                    } else if(typeof $trgetData == 'object') {
                                        $data = getAutocompleteData($trgetData, data);
                                    }

                                    $data = $data.length ? $data : $fallbackData[$trgetDataId];

                                }; break;
                            }

                            setData(element, $data);
                        });
                    };

                switch ($formDataMethod)
                {
                    case  'item'      : {

                        // $editableTarget = selector for parent item that hold data
                        var $itemEditableTarget = $this.closest($editableTarget);

                        fillForm('item',$itemEditableTarget);

                        AUT_FORM_COMPONENT.validate.hideShowButtonForm($cont, 'update');

                    } break;

                    case  'datatable' : {

                        // $editableTarget = datatableId
                        var row = _aut_datatable_getSelectedRowData($editableTarget ,$this.closest('tr'));

                        fillForm('datatable',row);

                        AUT_FORM_COMPONENT.validate.hideShowButtonForm($cont, 'update');

                    } break;

                    case  'get'       : {

                        // $editableTarget = remoteUrl
                        $.get($editableTarget, $editableTargetParam, function (data) {

                            fillForm('get',data);

                            if (typeof $formTarget.data('get-success') != typeof undefined)
                                window[$formTarget.data('get-success')]($formTarget, data);

                            AUT_FORM_COMPONENT.validate.hideShowButtonForm($cont, 'update');
                        });

                    }; break;
                }
            });
        },

        loadEvent: function() {

            $('.slug').on('keyup',function(){
                $(this).val((($(this).val()).toLowerCase()).replace(/_|\/|\\| +/g,'-'));
            });
        },

        load: function () {
            AUT_FORM_COMPONENT.validate.init('.ajaxCont');

            AUT_FORM_COMPONENT.validate.fillForm();

            AUT_FORM_COMPONENT.validate.loadEvent();
        },
    },

    readOnly: {

        fill: function ($cont ,data) {

            $($cont).find('[data-json]').each(function(i ,v) {

                var isNull      = typeof data[$(v).data('json')] == typeof null,
                    isUndefined = typeof data[$(v).data('json')] == typeof undefined;

                var item = isNull || isUndefined ? ' ' : (data[$(v).data('json')]).replaceAll(/\s+/g, ' ');
                var value = (item != ' ') ? data[$(v).data('json')] : NO_DATA;

                switch($(v).context.tagName.toLowerCase())
                {
                    case 'label' : $(v).text(value); break;
                    case 'input' : {

                        switch($(v).attr('type'))
                        {
                            case 'image' : $(v).attr('src' ,value); break;
                            default : $(v).val(value); break;
                        }

                    }; break;
                }
            });
        },

        clear: function ($cont ,func) {

            $($cont).find('[data-json]').each(function(i ,v) {

                if($(v).context.tagName.toLowerCase() == 'label')
                    $(v).text(NO_DATA);
                else
                    $(v).val(NO_DATA);
            });

            if(typeof func != typeof undefined)
                func();
        }
    }
};


/**=========================================================
 * Module: From Component
 =========================================================*/

(function(window, document, $, undefined) {

    $(function() {
        AUT_FORM_COMPONENT.validate.load();
    });

})(window, document, window.jQuery);
