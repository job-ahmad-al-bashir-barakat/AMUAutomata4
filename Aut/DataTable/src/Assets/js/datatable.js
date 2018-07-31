
/**
 * get datatable instance
 */
function _aut_datatable_getTable(selector) {

    return $(selector).dataTable();
}

/**
 * get datatable api object from instance
 */
function _aut_datatable_getTableObjectApi(selector) {

    return $(selector).dataTable().api();
}

/**
 * old way to get row data need to pass table api from function _aut_datatable_getTableObjectApi
 */
function _aut_datatable_getSelectedRow(table ,selectorRow) {

    return table.row(selectorRow).data();
}

/**
 * new way to get row data
 */
function _aut_datatable_getSelectedRowData(selectorTable ,selectorRow) {

    var table = _aut_datatable_getTableObjectApi(selectorTable);

    return table.row(selectorRow).data();
}

/**
 * reload data for single datatable
 */
function aut_datatable_reload(selector) {

    AUT_DATATABLE.reloadTable(_aut_datatable_getTableObjectApi(selector));
}

/**
 * refresh single datatable
 */
function aut_datatable_refresh(selector ,forceload) {

    $(selector + ' .datatable').each(function () {

        if(forceload || $(this).attr('data-load') == 'false')
            $(this).load($(this).attr('data-url'),function () {
                $(this).attr('data-load',true);
            });
    });
}

/**
 *
 * @param cont
 * @param param
 *
 * this function for change url inside modal and open modal and refresh datatable
 */
function _aut_datatable_custom_merge_datatable_url_open_modal_refresh_datatable(cont ,param) {

    var table = $(cont + ' .datatable');
    table.attr('data-url' ,table.data('url') + param);
    table.html('');
    $(cont).modal('show');
    aut_datatable_refresh(cont ,true);
}

var AUT_DATATABLE = {

    searchDelay: 0,

    exists: {
        select2_pack: typeof AUT_AUTOCOMPLETE_PACK != "undefined",
    },

    jsonPrettyPrint : {

        replacer: function(match, pIndent, pKey, pVal, pEnd) {
            var key = '<span class=json-key>';
            var val = '<span class=json-value>';
            var str = '<span class=json-string>';
            var r = pIndent || '';
            if (pKey)
                r = r + key + pKey.replace(/[": ]/g, '') + '</span>: ';
            if (pVal)
                r = r + (pVal[0] == '"' ? str : val) + pVal + '</span>';
            return r + (pEnd || '');
        },

        toHtml: function(obj) {
            var jsonLine = /^( *)("[\w]+": )?("[^"]*"|[\w.+-]*)?([,[{])?$/mg;
            return JSON.stringify(obj, null, 3)
                .replace(/&/g, '&amp;').replace(/\\"/g, '&quot;')
                .replace(/</g, '&lt;').replace(/>/g, '&gt;')
                .replace(jsonLine, AUT_DATATABLE.jsonPrettyPrint.replacer);
        }
    },

    notify: function(notify) {

        var icon = (typeof notify.icon !== typeof undefined) ? '<em class="fa fa-' + notify.icon +  '"></em> ' : '';

        $.notify({
            message: icon + notify.message,
            pos: 'bottom-right',
            status: notify.status,
            timeout: 1000
        });
    },

    swal: function(param ,func ,paramCancleSafe) {

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

                AUT_DATATABLE.swal({
                    title : paramCancleSafe.cancleSafeTitle,
                    text  : paramCancleSafe.cancleSafeText,
                    confirmButtonText  : paramCancleSafe.cancleSafeConfirmButtonText,
                    type : "error",
                });
            }
        });
    },

    initParamEvent: function(aut_datatable) {

        return {
            instance  : _aut_datatable_getTable(aut_datatable.ids.table),
            api       : _aut_datatable_getTableObjectApi(aut_datatable.ids.table)
        };
    },

    copyBladeToHisCont: function(aut_datatable) {

        $('.bladeCont').not('.appended').each(function () {
            var $this = $(this);
            if($this.data('append-type') == 'prependTo' || $this.data('append-type') == 'appendTo') {
                //$('#' + this.id + '.appended').remove();
                if($('#' + this.id + '.appended').length) {
                    $this.remove();
                } else {
                    $this[$this.data('append-type')]($this.data('append'));
                    $this.addClass('appended');
                }
            } else alert('type not allowed');
        });
    },

    sortRows: function(aut_datatable) {

        $(aut_datatable.ids.table + ' .sortable').sortable({
            forcePlaceholderSize: true,
            placeholder: "<tr><td colspan='3'><span class='center'>The row will appear here</span></tr>",
            items: 'tr',
            connectWith : 'tr',
        });

        $(aut_datatable.ids.table + ' .sortable').on('sortupdate', function(e) {

            $(aut_datatable.ids.table + ' tbody tr .index').each(function (i ,v) {

                $(v).text(i+1)
            });
        });
    },

    deleteRow: function(table ,aut_datatable) {

        $(aut_datatable.ids.table + '.dataTable tbody').on( 'click', 'tr .dialog-delete', function (e) {

            e.preventDefault();

            var id = $(this).data('key');

            var data = $(this).data('parent-key') != ''
                ? { 'parent_id' : $(this).data('parent-key') }
                : {};

            AUT_DATATABLE.swal({
                title              : aut_datatable.lang.swal.title,
                text               : aut_datatable.lang.swal.text,
                type               : 'warning',
                confirmButtonText  : aut_datatable.lang.swal.confirmButtonText,
                cancelButtonText   : aut_datatable.lang.swal.cancelButtonText,
                showCancelButton   : true,
                showCloseButton    : true,
                allowEscapeKey     : true,
                allowOutsideClick  : true,
                confirmButtonColor : "#DD6B55",
                showLoaderOnConfirm: true,

            } ,function () {

                $.delete(aut_datatable.url + '/' + id, data, function(res) {

                    AUT_DATATABLE.reloadTable(table, null, false);

                }).done(function () {

                    aut_datatable.events.on_delete(AUT_DATATABLE.initParamEvent(aut_datatable));

                    AUT_DATATABLE.swal({
                        title : aut_datatable.lang.swal.success.text,
                        text  : aut_datatable.lang.swal.success.message,
                        confirmButtonText  : aut_datatable.lang.swal.ok,
                        type : "success",
                    });
                });

            } , {
                cancleSafeTitle : aut_datatable.lang.swal.cancleSafe.text,
                cancleSafeText : aut_datatable.lang.swal.cancleSafe.message,
                cancleSafeConfirmText : aut_datatable.lang.swal.ok,
            });
        });
    },

    replaceDatatableFunctionWithJPath: function(aut_datatable) {

        aut_datatable.json_object.responsive.details.renderer = function (api, rowIdx, columns) {

            var data = $.map( columns, function ( col, i ) {
                return col.hidden ? aut_datatable.responsive_templete(col) :
                    '';
            } ).join('');

            return data ?
                $('<div/>').append( "<div class='form-horizontal'>" + data + "</div>" ) :
                false;
        }

        if(JSPath.apply('.buttons{.action == "buttons_action_plus"}',aut_datatable.json_object).length != 0)
            JSPath.apply('.buttons{.action == "buttons_action_plus"}',aut_datatable.json_object)[0].action = function(){

                $(aut_datatable.ids.modal + ' .text-dialog').html(aut_datatable.modal.add_btn);

                $(aut_datatable.ids.modal + ' button[data-status=save]').show();

                $(aut_datatable.ids.modal + ' .datatable-autocomplete').each(function(i ,v) {

                    if($(v).is('[data-selected-default]'))
                        if(AUT_DATATABLE.exists.select2_pack)
                            AUT_AUTOCOMPLETE_PACK.autocomplete.selectedAutocomplete(this , $(v).data('selected-default'));
                });

                aut_datatable.events.modal_add(AUT_DATATABLE.initParamEvent(aut_datatable));
            };

        if(JSPath.apply('.buttons{.action == "buttons_action_reload"}',aut_datatable.json_object).length != 0)
            JSPath.apply('.buttons{.action == "buttons_action_reload"}',aut_datatable.json_object)[0].action = function() {
                AUT_DATATABLE.reloadTable(this ,null ,false);
            };

        if(JSPath.apply('.buttons{.action == "buttons_action_code"}',aut_datatable.json_object).length != 0)
            JSPath.apply('.buttons{.action == "buttons_action_code"}',aut_datatable.json_object)[0].action = function() {

                $.post(aut_datatable.json_object.ajax.url ,function (res) {

                    AUT_DATATABLE.swal({
                        title: "Datatable <br><small>{ Json Data }</small>",
                        showCloseButton : true,
                        allowEscapeKey: true,
                        allowOutsideClick: true,
                        width:'80%',
                        confirmButtonText  : aut_datatable.lang.swal.ok,
                        html: "<pre style='direction: ltr; text-align: left;'><code>" + AUT_DATATABLE.jsonPrettyPrint.toHtml(res.data) + "</code></pre>",
                    });
                })
            };

        if(JSPath.apply('.buttons{.action == "buttons_action_destroy"}',aut_datatable.json_object).length != 0)
            JSPath.apply('.buttons{.action == "buttons_action_destroy"}',aut_datatable.json_object)[0].action = function() {

                var $this      = $(this)[0].node,
                    $datatable = $($this).closest('.datatable');

                $datatable.load($datatable.attr('data-url'));

                aut_datatable.events.on_destroy();
            };

        // if(JSPath.apply('.buttons .buttons {.action == "event_print_button"}',aut_datatable.json_object).length != 0)
        //     JSPath.apply('.buttons .buttons {.action == "event_print_button"}',aut_datatable.json_object)[0].action = function(e, dt, button, config) {
        //
        //     };
        //
        // if(JSPath.apply('.buttons .buttons {.action == "event_csv_button"}',aut_datatable.json_object).length != 0)
        //     JSPath.apply('.buttons .buttons {.action == "event_csv_button"}',aut_datatable.json_object)[0].action = function(e, dt, button, config) {
        //
        //     };
        //
        // if(JSPath.apply('.buttons .buttons {.action == "event_excel_button"}',aut_datatable.json_object).length != 0)
        //     JSPath.apply('.buttons .buttons {.action == "event_excel_button"}',aut_datatable.json_object)[0].action = function(e, dt, button, config) {
        //
        //     };
        //
        // if(JSPath.apply('.buttons .buttons {.action == "event_pdf_button"}',aut_datatable.json_object).length != 0)
        //     JSPath.apply('.buttons .buttons {.action == "event_pdf_button"}',aut_datatable.json_object)[0].action = function(e, dt, button, config) {
        //
        //     };

        // remove
        // if(JSPath.apply('.buttons{.customize == "datatable_print_customize"}',aut_datatable.json_object).length != 0)
        //     JSPath.apply('.buttons{.customize == "datatable_print_customize"}',aut_datatable.json_object)[0].customize = function(win) {
        //
        //         $(win.document.body)
        //             .css( 'font-size', '10pt' );
        //     };

        aut_datatable.json_object.createdRow =  function( row, data, dataIndex ) {

        };

        aut_datatable.json_object.rowCallback =  function( row, data, index ) {

        };

        aut_datatable.json_object.drawCallback = function(settings) {

            aut_datatable.events.on_load(aut_datatable.ids.modal, AUT_DATATABLE.initParamEvent(aut_datatable));

            // remove stuck order icon
            $('.dataTable .index').removeClass('sorting_asc');

            if(aut_datatable.setting.sortable)
                AUT_DATATABLE.sortRows(aut_datatable);
        };

        // settings, json
        aut_datatable.json_object.initComplete = function() {

            // columns filter
            var i = 0;
            this.api().columns().every( function () {

                var that = this;

                $('input.filter-Input',this.footer()).on('keyup change', function () {

                    // search
                    AUT_DATATABLE.searchDelay( this.value );
                });

                var select = $('select.filter-select',this.footer())

                if(AUT_DATATABLE.exists.select2_pack)
                    AUT_AUTOCOMPLETE_PACK.select.reloadSelect(select);

                select.on( 'change', function () {

                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    that.search( val ? '^'+val+'$' : '', true, false ).draw();
                });

                that.data().unique().sort().each( function ( d, j ) {

                    // filter trow unique col row in page
                });
            });

            aut_datatable.events.on_table_create(aut_datatable.ids.modal, AUT_DATATABLE.initParamEvent(aut_datatable));
        };
    },

    addTriggerOpenModelToButtonPlus: function(aut_datatable) {

        $('[role="datatable"][data-table=' + aut_datatable.model + ']').off('click.plus').on('click.plus' ,aut_datatable.ids.wrapper + ' .button-plus' ,function () {

            $(aut_datatable.ids.modal).modal('show');
        });
    },

    addGlobalScript: function(aut_datatable) {

        return aut_datatable.global_script();
    },

    supportPanelCollapse: function (aut_datatable) {

        // for panel Recalculate the widths used by responsive after a change in the display
        $('body').on('shown.bs.collapse.datatable','.panel-wrapper.collapse', function(){

            var $table = _aut_datatable_getTableObjectApi($(this).find('.dataTable'));
            $table.columns.adjust().responsive.recalc();
        });
    },

    dialog: {

        stackModal: function() {

            $(document).on({
                'show.bs.modal': function () {

                    //stack dialog
                    var zIndex = 1500 + (10 * $('.modal:visible').length);
                    $(this).css('z-index', zIndex);
                    setTimeout(function() {
                        $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
                    }, 0);

                },
                'hidden.bs.modal': function() {

                    //stack dialog
                    if ($('.modal:visible').length > 0) {
                        // restore the modal-open class to the body element, so that scrolling works
                        // properly after de-stacking a modal.
                        setTimeout(function() {
                            $(document.body).addClass('modal-open');
                        }, 0);
                    }
                }
            }, '.modal');
        },

        initTabs: function(aut_datatable) {

            $(aut_datatable.ids.modal + " div.bhoechie-tab-menu > div.list-group > a").click(function(e) {

                e.preventDefault();
                var $this = $(this),
                    index = $this.index(),
                    $tabContent = $(aut_datatable.ids.modal + " div.bhoechie-tab>div.bhoechie-tab-content");

                $this.siblings('a.active').removeClass("active");
                $this.addClass("active");
                $tabContent.removeClass("active");
                $tabContent.eq(index).addClass("active " + aut_datatable.tab_animation);

                var $tabContentActive = aut_datatable.ids.modal + " .bhoechie-tab-content.active";
                aut_datatable.events.on_tab_click($tabContentActive);
            });
        },

        copyModalToHisCont: function(aut_datatable) {

            var $modalCont = $('.modal-cont');

            $modalCont.find('[data-table="' + aut_datatable.model + '"]:first').remove();

            $modalCont.append($(aut_datatable.ids.modal));
        },

        toggleSidebarTab: function(aut_datatable) {

            $(aut_datatable.ids.modal).find('.datatable-sidebar-tab-toggle').on('click' ,function() {

                $target = $(this).closest('.datatable-modal').find('.datatable-sidebar-tab');
                if(!$target.hasClass('opened'))
                    $target.removeClass('hidden-sm hidden-xs').addClass('opened').animate({opacity: 1});
                else
                    $target.addClass('hidden-sm hidden-xs').removeClass('opened').animate({opacity: 0});
            });
        },

        responsiveWindow: function() {

            $(window).on('resize',function(){

                var winWidth   =  $(window).width();
                var SidebarTab = $('.datatable-sidebar-tab');

                if(winWidth < 768 ) {
                    // 'class used: col-xs'
                    SidebarTab.addClass('hidden-sm hidden-xs').removeClass('opened').animate({opacity: 0});
                } else if( winWidth <= 991) {
                    // 'class used: col-sm'
                    SidebarTab.addClass('hidden-sm hidden-xs').removeClass('opened').animate({opacity: 0});
                } else if( winWidth <= 1199) {
                    // class used: col-md
                    SidebarTab.removeClass('hidden-sm hidden-xs').addClass('opened').animate({opacity: 1});
                } else {
                    // class used: col-lg
                    SidebarTab.removeClass('hidden-sm hidden-xs').addClass('opened').animate({opacity: 1});
                }
            });
        },

        passwordHideShow: function (selector) {

            $(selector).on('click', '.btn-eye', function() {
                $(this).find('span').toggleClass('fa-eye-slash').toggleClass('fa-eye');
                var $input = $(this).closest('div').find('input');
                if ($input.attr('type')) {
                    $input.removeAttr('type');
                } else {
                    $input.attr('type', 'password');
                }
            });
        },

        passwordGenerator: function(selector ,url) {

            $(selector).on('click', '.btn-refresh', function() {
                var $this = $(this);
                $.get(url + '/password/generator',function (res) {

                    $this.closest('div').find("input.refresh").val(res);
                });
            });
        },

        dialogOpen: function(aut_datatable) {

            $(document).off('show.bs.modal', aut_datatable.ids.modal).on('show.bs.modal', aut_datatable.ids.modal, function() { });

            $(document).off('shown.bs.modal', aut_datatable.ids.modal).on('shown.bs.modal', aut_datatable.ids.modal, function() {

                var $form = $(this).find('form'),
                    $key = $form.attr('data-key');

                if(typeof $key != typeof undefined && $key != '')
                    $form.find('label[for=password] span').hide();
                else
                    $form.find('label[for=password] span').show();

                aut_datatable.events.modal_open(this ,AUT_DATATABLE.initParamEvent(aut_datatable));
            });
        },

        dialogHidden: function(aut_datatable) {

            $(document).off('hidden.bs.modal' ,aut_datatable.ids.modal).on('hidden.bs.modal', aut_datatable.ids.modal,function() {

                var form = $(this).find('form');

                AUT_DATATABLE.dialog.clearFrom(form);

                $(aut_datatable.ids.modal + " div.bhoechie-tab-menu > div.list-group > a:first").click();
                $(aut_datatable.ids.modal + " .nav-tabs li a:first").click();

                aut_datatable.events.modal_close(this ,AUT_DATATABLE.initParamEvent(aut_datatable));
            });
        },

        addModalCont: function() {

            if($('.modal-cont').length == 0)
                $('body').append('<div class="modal-cont"></div>');
        },

        fillDialogData: function(table ,aut_datatable) {

            $(aut_datatable.ids.table + '.dataTable tbody').on('click', 'tr .dialog-update', function () {

                var $this = $(this);

                aut_datatable.events.modal_update(this ,AUT_DATATABLE.initParamEvent(aut_datatable));

                $(aut_datatable.ids.modal + ' button[data-status=save]').hide();

                $(aut_datatable.ids.modal + ' .text-dialog').html(aut_datatable.modal.update_btn);

                $(aut_datatable.ids.modal + ' form').attr('data-key',$this.data('key'));

                var row = _aut_datatable_getSelectedRow(table ,$this.closest('tr'));

                $.each($(aut_datatable.ids.modal + ' form [data-editable=true]'),function () {

                    var $this = $(this);

                    if($this.hasClass('datatable-autocomplete'))
                    {
                        var ids , names;

                        if($this.data('datavalue') != '')
                        {
                            var found = ($this.data('datavalue')).match(/.+\./i);

                            if(found != null)
                            {
                                ids = JSPath.apply('.' + $this.data('datavalue') ,row)
                            }
                            else
                            {
                                ids = row[$this.data('datavalue')] != null ? [ row[$this.data('datavalue')] ] : [];
                            }
                        }
                        else
                        {
                            ids = [];
                        }

                        if($this.data('collabel') != '')
                        {
                            var found = ($this.data('collabel')).match(/.+\./i);

                            if(found != null)
                            {
                                names =  JSPath.apply('.' + $this.data('collabel'),row);
                            }
                            else
                            {
                                names = [ row[$this.data('collabel')] ];
                            }
                        }
                        else
                        {
                            names = [];
                        }

                        var arrayItems = [];
                        _.each(ids ,function (v ,k) {
                            arrayItems.push({ id : ids[k] != null ? ids[k] : '' , name : names[k] ,selected: true });
                        });

                        if(AUT_DATATABLE.exists.select2_pack)
                            AUT_AUTOCOMPLETE_PACK.autocomplete.selectedAutocomplete($this ,arrayItems);
                    }
                    else
                    {
                        if($this.data('datavalue') != '')
                        {
                            var val, found = ($this.data('datavalue')).match(/.+\./i);

                            if(found != null)
                            {
                                val = JSPath.apply('.' + $this.data('datavalue'),row)[0];
                                $this.not('[data-permanent=true]').val(val);
                            }
                            else
                            {
                                val = row[$this.data('datavalue')];
                                $this.not('[data-permanent=true]').val(val);
                            }

                            //fill ckeditor if exists
                            if($this.hasClass('datatable-text-editor'))
                                CKEDITOR.instances[this.id].setData(val);
                            else if($this.hasClass('summernote-editor'))
                                $this.summernote('code', val);
                        }
                    }
                });

                if(aut_datatable.component.used)
                {
                    if(aut_datatable.component.options.length != 0)
                    {
                        _.each(aut_datatable.component.options ,function (v ,k) {

                            $selector = $(aut_datatable.ids.modal + ' form').find(v.selector);

                            $tagName = $selector.prop("tagName").toLowerCase();

                            $data = typeof v.rowVal != typeof undefined ? v.rowVal : $selector.data('datavalue');

                            switch ($tagName)
                            {
                                case 'input'    :
                                case 'select'   :
                                case 'label'    :
                                case 'div'      :
                                case 'textarea' : $selector[v.targetAttr](JSPath.apply('.'+ $data ,row)[0]); break;
                                default         : $selector.attr(v.targetAttr ,JSPath.apply('.'+ $data ,row)[0]); break;
                            }
                        });
                    }
                    else
                    {
                        _.each($(aut_datatable.ids.modal + ' form [data-json=true]') ,function (v ,k) {

                            $this = $(v);

                            $tagName = $this.prop("tagName").toLowerCase();

                            $data = typeof $this.data('row-val') != typeof undefined ? $this.data('row-val') : $this.data('datavalue');

                            switch ($tagName)
                            {
                                case 'input'    :
                                case 'select'   :
                                case 'label'    :
                                case 'div'      :
                                case 'textarea' : $this[$this.data('target-attr')](JSPath.apply('.'+ $data ,row)[0]); break;
                                default         : $this.attr($this.data('target-attr') ,JSPath.apply('.'+ $data ,row)[0]); break;
                            }
                        });
                    }
                }
            });
        },

        reset: function ($cont) {

            $($cont).validate().resetForm();
        },

        clearFrom: function(form) {

            _.head(form).reset();
            //re drew validation for each submit
            form.find('[id^=error_]').children().remove();
            form.find('input[type=hidden]').not('[data-permanent=true]').val('');
            form.attr('data-key','');
            if(form.find('.datatable-autocomplete').length != 0) {
                if(AUT_DATATABLE.exists.select2_pack)
                    AUT_AUTOCOMPLETE_PACK.autocomplete.resetAutocomplete(form.find('.datatable-autocomplete'));
            }
            AUT_DATATABLE.dialog.reset(form);

            //filter any item with data-clear
            form.find('[data-clear]').each(function (k ,v) {

                $tagName = $(v).prop("tagName").toLowerCase();
                switch ($tagName)
                {
                    case 'div' : $(this).html(''); break;
                }
            });
            form.find('#password').attr('type', 'password');
            form.find('#icon-password span').addClass('fa-eye-slash').removeClass('fa-eye');
        },

        validate: {

            initAdditionalValidationClass: function () {

                jQuery.validator.addClassRules({

                    number : {
                        required: true,
                        number: true
                    },
                    email : {
                        required: true,
                        email: true,
                    },
                    url: {
                        required: true,
                        url: true
                    }
                });
            },

            init: function(table ,aut_datatable, status) {

                $(aut_datatable.ids.modal).find('form.ajax-form').each(function ()  {

                    var validator = $(this).validate({
                            submitHandler: function(form, e) {

                                e.preventDefault();

                                var button = $(this.submitButton).closest('button'),
                                    status = button.data('status'),
                                    data   = $(aut_datatable.ids.modal + ' form').serialize();

                                button.button('loading');

                                var id = (typeof $(aut_datatable.ids.modal + ' form input[type=hidden][data-key=true]').val() !== typeof undefined)
                                    ? $(aut_datatable.ids.modal + ' form input[type=hidden][data-key=true]').val()
                                    : $(form).attr('data-key');

                                (id == '') || (typeof id == typeof undefined)
                                    ? $.post(aut_datatable.url, data, function(res) {

                                        if(status == 'add')
                                            $(aut_datatable.ids.modal).modal('hide');
                                        else
                                        if(status == 'save')
                                            AUT_DATATABLE.dialog.clearFrom($(form));

                                        AUT_DATATABLE.reloadTable(table ,null ,false);

                                        AUT_DATATABLE.notify({ message : res.operation_message ,status : 'success'});

                                    }).fail(function(res) {

                                        button.button('reset');

                                        AUT_DATATABLE.notify({ message : aut_datatable.lang.oper.error ,status : 'danger'});

                                        var errors = JSON.parse(res.responseText);
                                        if(errors)
                                            $.each(errors ,function(k ,v){

                                                var error = $(aut_datatable.ids.modal).find('[id="error_' + (k).replace(/\.|_/g,'-') + '"]');
                                                error.children().remove();
                                                error.append('<div class="validate-error validate-error-help-block validate-error-style animated fadeInDown">' + v[0] + '</div>');
                                            });

                                    }).done(function () {

                                        button.button('reset');

                                        aut_datatable.events.on_add(AUT_DATATABLE.initParamEvent(aut_datatable));
                                    })
                                    : $.put(aut_datatable.url + '/' + id, data, function(res) {

                                        $(aut_datatable.ids.modal).modal('hide');

                                        AUT_DATATABLE.reloadTable(table, null, false);

                                        AUT_DATATABLE.notify({ message : res.operation_message ,status : 'success'});

                                    }).fail(function(res) {

                                        button.button('reset');

                                        AUT_DATATABLE.notify({ message :  aut_datatable.lang.oper.error ,status : 'danger'});

                                        var errors = JSON.parse(res.responseText);
                                        if(errors)
                                            $.each(errors ,function(k ,v){

                                                var error = $(aut_datatable.ids.modal).find('[id="error_' + (k).replace(/\.|_/g,'-') + '"]');
                                                error.children().remove();
                                                error.append('<div class="validate-error validate-error-help-block validate-error-style animated fadeInDown">' + v[0] + '</div>');
                                            });

                                    }).done(function () {

                                        button.button('reset');

                                        aut_datatable.events.on_update(AUT_DATATABLE.initParamEvent(aut_datatable));
                                    });

                                return false;
                            },
                            ignore: [],
                            errorClass: 'validate-error validate-error-help-block validate-error-style animated fadeInDown',
                            errorElement: 'div',
                            invalidHandler: function(event, validator) {

                                if(validator.errorList.length)
                                {
                                    $(validator.errorList[0].element).parents('[data-tab]').each(function (i ,v) {
                                        $('[data-tab=' + $(v).data('tab') + ']').trigger('click');
                                    })
                                }
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
                        }
                    );

                    $('.datatable-autocomplete').change(function(){
                        $(this).valid();
                    });
                });
            },

            submit: function(table ,aut_datatable) {

                AUT_DATATABLE.dialog.validate.init(table ,aut_datatable);
            },
        },

        init: function (table ,aut_datatable) {

            AUT_DATATABLE.addTriggerOpenModelToButtonPlus(aut_datatable);

            if(AUT_DATATABLE.exists.select2_pack)
                AUT_AUTOCOMPLETE_PACK.autocomplete.reloadAutocomplete(aut_datatable.ids.modal + ' .datatable-autocomplete');

            AUT_DATATABLE.dialog.fillDialogData(table ,aut_datatable);

            AUT_DATATABLE.dialog.dialogOpen(aut_datatable);

            AUT_DATATABLE.dialog.dialogHidden(aut_datatable);

            AUT_DATATABLE.dialog.validate.submit(table ,aut_datatable);

            AUT_DATATABLE.dialog.addModalCont();

            AUT_DATATABLE.dialog.copyModalToHisCont(aut_datatable);

            AUT_DATATABLE.dialog.passwordHideShow(aut_datatable.ids.modal);

            AUT_DATATABLE.dialog.passwordGenerator(aut_datatable.ids.modal ,aut_datatable.url);

            AUT_DATATABLE.dialog.initTabs(aut_datatable);

            AUT_DATATABLE.dialog.toggleSidebarTab(aut_datatable);
        }
    },

    initDatatable: function(aut_datatable) {

        $.fn.dataTable.ext.errMode = 'none';

        var table = $(aut_datatable.ids.table).on('preXhr.dt', function ( e, settings, data ) {

            //Ajax event - fired before an Ajax request is made.

        }).on('xhr.dt', function ( e, settings, json, xhr ) {

        }).on('draw.dt', function () {

        }).on( 'init.dt', function ( e, settings ,json ) {

        }).on( 'column-visibility.dt', function ( e, settings, column, state ) {

            $('.dataTables_empty').attr('colspan',$(this).find('thead tr th').length);

        }).on( 'error.dt', function ( e, settings, techNote, message ) {

            var error = {
                'event' : e,
                'settings' : settings,
                'techNote' : techNote,
                'message' : message,
            }

            console.log('%c message error :' + message, 'background: gray; color: white; display: block;');

            console.log( 'An error has been reported by DataTables: ', error );

        }).on( 'processing.dt', function ( e, settings, processing ) {

            var datatable_processing = $(aut_datatable.ids.table + '_processing');
            datatable_processing.addClass(aut_datatable.spinners.type)
                .removeClass('panel panel-default')
                .html(('<div></div>').repeat(5));

            var cover = $(aut_datatable.ids.table).closest('.panel,.modal-body');
            if(processing)
                cover.addClass(aut_datatable.spinners.overlay);
            else
                cover.removeClass(aut_datatable.spinners.overlay);

        }).DataTable(aut_datatable.json_object);

        return table;
    },

    extraEventDatatable: function(table ,aut_datatable) {

        table.on( 'responsive-resize', function ( e, datatable, columns ) {

            AUT_DATATABLE.tableButton.removeButtonStyleDisplayAttr(aut_datatable);
        });

        table.on('responsive-display', function ( e, datatable, row, showHide, update ) {

            // this event when trigger when hide show col
        });
    },

    tableButton: {

        placeButton: function(table ,aut_datatable) {

            if(aut_datatable.setting.scrollX)
            {
                table.buttons()
                    .container()
                    .appendTo(aut_datatable.ids.wrapper + ' .dataTables_scroll');
            }
            else
            {
                table.buttons()
                    .container()
                    .appendTo(aut_datatable.ids.wrapper + ' .table-button');
            }
        },

        repositionPlaceButtonsColvis: function(aut_datatable) {

            // reposition place for buttons-colvis dropdown
            $('[role="datatable"][data-table=' + aut_datatable.model + ']').off('click' ,'.buttons-colvis').on('click','.buttons-colvis',function(){

                if(aut_datatable.dir == 'rtl')
                {
                    var body             = $('body').width(),
                        colvisOffsetLeft = $('.buttons-colvis').offset().left,
                        colvisWidth      = $(this).width(),
                        colvisPadding    = parseInt($(this).css('padding-left'));

                    if($(this).parents('.modal').length == 0)
                        var pos = (body - (colvisOffsetLeft + colvisPadding)) - (colvisWidth + colvisPadding);
                    else
                        var pos = (body - (colvisOffsetLeft - colvisWidth - colvisPadding )) + (colvisWidth + colvisPadding) + colvisPadding;

                    var buttonCollection = $('.dt-button-collection');
                    buttonCollection.css('left','initial');
                    buttonCollection.css('right',pos);
                }
            });
        },

        removeButtonStyleDisplayAttr: function(aut_datatable) {

            $(aut_datatable.ids.wrapper + ' .table-button').attr('style','');
        },
    },

    tableDetail: {

        formatRowDetail: function(aut_datatable ,row) {

            return aut_datatable.row_detail(row)
        },

        rowDetail: function(table ,aut_datatable) {

            $(aut_datatable.ids.table + '.dataTable tbody').on('click', 'td.details-control', function () {

                var $this = $(this);
                var tr = $this.closest('tr');
                var row = table.row( tr );

                if($this.hasClass('toggle'))
                    $this.closest('[role=row]').siblings('[role=row].shown').find('.toggle').click();

                if(tr.hasClass('parent'))
                {
                    tr.removeClass('parent');
                    tr.find('.index').trigger('click');
                }

                if ( row.child.isShown() )
                {

                    // This row is already open - close it
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else
                {
                    // Open this row
                    row.child( AUT_DATATABLE.tableDetail.formatRowDetail(aut_datatable ,row.data()) ).show();
                    $(row.child()[0]).addClass('child');
                    var td = $(row.child()[0]).find('td:first');
                    td.addClass('animated fadeIn no-padding').attr('style','padding:0;');
                    tr.addClass('shown');

                    //event on click row detail
                    var obj = _aut_datatable_getSelectedRow(table ,tr);
                    aut_datatable.events.row_detail_click(td ,obj ,AUT_DATATABLE.initParamEvent(aut_datatable));
                }
            });

            $(aut_datatable.ids.table + '.dataTable tbody').on('click', 'td.index', function () {

                var $this = $(this);
                var tr = $this.closest('tr');
                if(tr.hasClass('shown'))
                {
                    tr.removeClass('shown');
                    tr.find('.index').trigger('click');
                    tr.addClass('parent');
                }

            });
        },
    },

    reloadTable: function(table ,callback ,resetPaging ,forceReload) {

        var callback    = callback == undefined ? null : callback,
            resetPaging = resetPaging == undefined ? false : resetPaging,
            forceReload = forceReload == undefined ? false : forceReload;

        var fnForceReload = function () {

        };

        table.ajax.reload(function () {

            if(forceReload)
                fnForceReload();

            (typeof callback == typeof null) ? null : callback();
        }, resetPaging);
    },

    loadDatatable: function () {

        var $this = $(this);

        if($this.data('load'))
            $.ajax({
                async: false,
                type: "GET",
                url: $this.data('url'),
                dataType: 'html',
                success: function(res){
                    $this.append(res);
                }
            });
    },

    loadContent: function () {

        $('.datatable').each(AUT_DATATABLE.loadDatatable);
    },

    load: function () {

        // load datatable
        AUT_DATATABLE.loadContent();
        // init validation
        AUT_DATATABLE.dialog.validate.initAdditionalValidationClass();
        // init stackModal
        AUT_DATATABLE.dialog.stackModal();
        // responsive Window
        AUT_DATATABLE.dialog.responsiveWindow();

        AUT_DATATABLE.supportPanelCollapse();
    },

    createNewTable: function(aut_datatable) {

        AUT_DATATABLE.replaceDatatableFunctionWithJPath(aut_datatable);

        var table = AUT_DATATABLE.initDatatable(aut_datatable);

        AUT_DATATABLE.extraEventDatatable(table ,aut_datatable);

        AUT_DATATABLE.searchDelay = $.fn.dataTable.util.throttle(

            function ( val ) {

                table.search( val ).draw();
            },
            1200
        );

        AUT_DATATABLE.tableButton.repositionPlaceButtonsColvis(aut_datatable);

        AUT_DATATABLE.tableButton.removeButtonStyleDisplayAttr(aut_datatable);

        AUT_DATATABLE.tableButton.placeButton(table ,aut_datatable);

        AUT_DATATABLE.copyBladeToHisCont(aut_datatable);

        AUT_DATATABLE.deleteRow(table ,aut_datatable);

        AUT_DATATABLE.addGlobalScript(aut_datatable);

        AUT_DATATABLE.tableDetail.rowDetail(table ,aut_datatable);

        if(!aut_datatable.setting.disable_dialog)
            AUT_DATATABLE.dialog.init(table ,aut_datatable)
    }
};

$(function(){

    AUT_DATATABLE.load();

});
