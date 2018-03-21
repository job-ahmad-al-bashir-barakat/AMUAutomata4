
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
                '<div style="background-color: #3e3935;"></div>' +
                '<div style="background-color: #3e3935;"></div>' +
                '<div style="background-color: #3e3935;"></div>' +
            '</div>' +
        '</div>',

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

                        var $this      = this,
                            $form      = $(form),
                            $button    = $($this.submitButton),
                            $method    = $button.data('method'),
                            $serialize = typeof $button.data('serialize') != typeof undefined ? $button.data('serialize') : true,
                            $data;

                        if ($serialize)
                            $data = AUT_FORM_COMPONENT.validate.serializeObject($form.serializeArray());
                        else
                            $data = {};

                        if ($serialize && typeof $button.data('extra-serialize') != typeof undefined)
                            $data = $.extend($data ,window[$button.data('extra-serialize')](form));

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
                                if (typeof $form.parents('.modal') != typeof undefined)
                                    $($form.parents('.modal')).modal('hide');

                                // reload after success oper by enter json like {"tree" : [".aut-tree"],....}
                                if (typeof $form.data('ajax-form-reload') != typeof undefined)
                                    AUT_HELPER.reloadElement($form.data('ajax-form-reload'));

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
                                    AUT_HELPER.notify({message: res.operation_message || OPERATION_MESSAGE_SUCCESS, status: 'success'});

                            }).fail(function (res) {

                                // remove Loader
                                AUT_FORM_COMPONENT.validate.removeLoader($button);

                                if(!($button.is('[data-stop-operation-message]') || $form.is('[data-stop-operation-message]')))
                                    AUT_HELPER.notify({message: OPERATION_MESSAGE_FAIL, status: 'danger'});

                                //JSON.parse(res.responseText).server_message
                                $.each(res.responseJSON, function (k, v) {

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

            // todo: fixed value
            form.find('[id^=error_]').children().remove();
            form.find('input[type=hidden]').not('[data-permanent=true],[name="_token"]').val('');
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

            $($cont).find('.modal').on('show.bs.modal', function () {
                //
            });

            $($cont).find('.modal').on('hidden.bs.modal', function () {

                var $form = $(this).find('form');

                AUT_FORM_COMPONENT.validate.clearForm($form);

                AUT_FORM_COMPONENT.validate.hideShowButtonForm($cont, 'add');
            });
        },

        /**
         * Fill Form and reset form button
         */
        fillForm: function () {

            $(document).on('click', '[data-form-add],.form-add', function () {

                var $cont = $(this).data('target');

                AUT_FORM_COMPONENT.validate.hideShowButtonForm($cont, 'add');
            });

            $(document).on('click', '[data-form-update],.form-update', function () {

                // todo:
                // get data from datatable
                // get data from get request
                // get data from item
                // make replace for param $formDataUrl from button data attr

                var $this               = $(this),
                    $formTarget         = $this.data('target'),
                    $itemEditableTarget = $this.closest($this.data('editable-target')),
                    $formDataMethod     = $formTarget.data('method'),
                    $formDataUrl        = $formTarget.data('data-url'),
                    fillForm            = function (type ,data) {

                        $($formTarget).find('[data-json]').each(function (i, v) {

                            var $v = $(v),$value;

                            switch(type)
                            {
                                case  'item'      : {
                                    $value = $itemEditableTarget.attr("data-" + $v.data('json'));
                                }; break;

                                case  'datatable' : {
                                    // get datata from datatable row
                                }; break;

                                case  'post'      : {
                                    // get data from post
                                    $value = data[$v.data('json')];
                                }; break;
                            }

                            if ($v.hasClass('autocomplete') && typeof $value != typeof undefined)
                            {
                                AUT_AUTOCOMPLETE_PACK.autocomplete.selectedAutocomplete($v, [JSON.parse($value)]);
                            }
                            else
                            {
                                $v.val($value);
                                //fill ckeditor if exists
                                if ($v.hasClass('text-editor'))
                                    CKEDITOR.instances[v.id].setData($value);
                            }
                        });
                    };

                switch ($formDataMethod)
                {
                    case  'item'      : fillForm('item');
                    case  'datatable' : fillForm('datatable');
                    case  'post'      : {
                        $.post($formDataUrl,function (data) {
                            fillForm('post',data);
                        })
                    }
                }

                AUT_FORM_COMPONENT.validate.hideShowButtonForm($cont, 'update');
            });
        },

        load: function () {
            AUT_FORM_COMPONENT.validate.init('.ajaxCont');

            AUT_FORM_COMPONENT.validate.fillForm();
        },
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
