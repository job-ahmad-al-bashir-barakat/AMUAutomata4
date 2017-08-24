function aut_filemanager_handleImageUpload(event,baseURL,Lang){
    var editor = event.editor;
    var dialogDefinition = event.data.definition;
    var dialogName = event.data.name;
    var tabCount = dialogDefinition.contents.length;
    for (var i = 0; i < tabCount; i++) {
        var browseButton = dialogDefinition.contents[i].get('browse');
        var textInput =dialogDefinition.contents[i].get("txtUrl");
        if (browseButton !== null) {
            browseButton.hidden = false;
            browseButton.onClick = function (dialog, i)
            {
                var $modal= $(".text-editor-modal:first");
                editor._.filebrowserSe = this;
                var iframe = $("<iframe id='fm-iframe' class='fm-modal'/>").attr({
                    src:  baseURL+Lang+'/filemanager/dialog?type=2&editor=ckeditor&fldr=',
                    style:"width:100%;min-height:400px",
                });
                var $modal;
                if($(editor.element.$.nextSibling).next().length==0) {
                    $modal = $('  <div class="modal fade text-editor-modal" id="{{$id}}-modal" style="z-index: 10011;">' +
                        '<div class="modal-dialog " style=";min-width:75%">' +
                        '<div class="modal-content">' +
                        '<div class="modal-body nopadding" style="min-height: 400px">' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>');

                    $(editor.element.$.nextElementSibling).after($modal);
                    $modal.find(".modal-body").html(iframe);
                }
                else $modal=$($(editor.element.$.nextSibling).next()[0]);
                $modal.modal('show');
                $modal.css("overflow-y", "hidden");  // Get rid of possible scrollbars in containing document
            }
        }
    }
}