//CKEditor browse dialog
function aut_filemanager_handleImageUpload(event,baseURL,Lang){
    var editor = event.editor;
    var dialogDefinition = event.data.definition;
    var dialogName = event.data.name;
    var tabCount = dialogDefinition.contents.length;
    //add browse button to media embed plugin
    if(dialogName=="embedBase"){
        dialogDefinition.contents[0].add( {
            type: 'button',
            id: 'browse',
            label: CKEDITOR.lang[Lang].common.browseServer,
            title: CKEDITOR.lang[Lang].common.browseServer
        });
    }

    //handle browse button event
    for (var i = 0; i < tabCount; i++) {
        if(typeof(dialogDefinition.contents[i])!=typeof(undefined)) {
            var browseButton = dialogDefinition.contents[i].get('browse');
            if (browseButton !== null) {
                browseButton.hidden = false;
                browseButton.onClick = function (dialog, i) {
                    editor._.filebrowserSe = this;
                    var iframe = $("<iframe id='fm-iframe' class='fm-modal'/>").attr({
                        src: baseURL + Lang + '/filemanager/dialog?type=2&editor=ckeditor&fldr=',
                        style: "width:100%;min-height:400px; border: 0;"
                    });
                    var $modal=$('.modal[data-url="'+baseURL+'"]');
                    if ($modal.length == 0) {
                        $modal = $('<div class="modal fade file-explorer"  style="z-index: 1000011;" data-url="'+baseURL+'">' +
                            '<div class="modal-dialog" style=";min-width:75%">' +
                            '<div class="modal-content">' +
                            '<div class="modal-header">' +
                            '<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>' +
                            '<h4 class="modal-title">File Explorer</h4>' +
                            '</div>' +
                            '<div class="modal-body" style="padding: 1px;">' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>');

                        $('body').append($modal);
                        $modal.find(".modal-body").html(iframe);
                    }
                    $modal.modal('show');
                    // Get rid of possible scrollbars in containing document
                    $modal.css({"z-index": "1000011"});
                }
            }
        }
    }
}