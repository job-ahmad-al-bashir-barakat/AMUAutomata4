@php
    $preview = isset($preview) ? $preview : false;
    $previewType = isset($previewType) ? $previewType : ['lg' ,'md' ,'sm' ,'xs'];
@endphp
<div class="cropper">
    <div class="container-md">
        <div class="row">
            <div>
                <div class="form-group col-lg-12">
                    <button type="button" class="btn btn-success mt" data-method="getCroppedCanvas">Upload</button>
                    <button type="button" class="btn btn-primary mt" data-method="original-image">Original Image</button>
                    <button type="button" class="btn btn-primary mt" data-method="choose-image-manager">Choose Image Manager</button>
                </div>
            </div>
            <div>
                {{--added by basheer for name image--}}
                <div class="form-group col-lg-12">
                    <input type="text" name="ImageName" class="form-control" placeholder="Image Name">
                </div>
            </div>
            <div>
                <div class="col-lg-12 docs-buttons">
                    <div class="mb btn-group btn-group-justified btn-group-sm">
                        <label data-method="setDragMode" data-option="move" type="button" title="Move" class="btn btn-info">
                            <span class="fa fa-arrows"></span>
                        </label>
                        <label data-method="setDragMode" data-option="crop" type="button" title="Crop" class="btn btn-info">
                            <span class="fa fa-crop"></span>
                        </label>
                        <label data-method="zoom" data-option="0.1" type="button" title="Zoom In" class="btn btn-info">
                            <span class="fa fa-plus-square"></span>
                        </label>
                        <label data-method="zoom" data-option="-0.1" type="button" title="Zoom Out" class="btn btn-info">
                            <span class="fa fa-minus-square"></span>
                        </label>
                        <label data-method="rotate" data-option="-45" type="button" title="Rotate Left" class="btn btn-info">
                            <span class="fa fa-arrow-left"></span>
                        </label>
                        <label data-method="rotate" data-option="45" type="button" title="Rotate Right" class="btn btn-info">
                            <span class="fa fa-arrow-right"></span>
                        </label>
                        <label data-method="crop" type="button" title="Crop" class="btn btn-info">
                            <span class="fa fa-check"></span>
                        </label>
                        <label data-method="clear" type="button" title="Clear" class="btn btn-info">
                            <span class="fa fa-times"></span>
                        </label>
                        <label data-method="disable" type="button" title="Disable" class="btn btn-info">
                            <span class="fa fa-lock"></span>
                        </label>
                        <label data-method="enable" type="button" title="Enable" class="btn btn-info">
                            <span class="fa fa-unlock"></span>
                        </label>
                        <label data-method="reset" type="button" title="Reset" class="btn btn-info">
                            <span class="fa fa-refresh"></span>
                        </label>
                        <label for="inputImage" title="Upload image file" class="btn btn-info btn-upload">
                            <input id="inputImage" name="file" type="file" accept="image/*" class="sr-only">
                            <span class="fa fa-upload"></span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-12 docs-toggles">
                    <div data-toggle="buttons" class="mb btn-group btn-group-justified btn-group-sm">
                        <label data-method="setAspectRatio" data-option="1.7777777777777777" title="Set Aspect Ratio" class="btn btn-info ratio active">
                            <input id="aspestRatio1" name="aspestRatio" value="1.7777777777777777" type="radio" class="sr-only">
                            <span>16:9</span>
                        </label>
                        <label data-method="setAspectRatio" data-option="1.3333333333333333" title="Set Aspect Ratio" class="btn btn-info ratio">
                            <input id="aspestRatio2" name="aspestRatio" value="1.3333333333333333" type="radio" class="sr-only">
                            <span>4:3</span>
                        </label>
                        <label data-method="setAspectRatio" data-option="1" title="Set Aspect Ratio" class="btn btn-info ratio">
                            <input id="aspestRatio3" name="aspestRatio" value="1" type="radio" class="sr-only">
                            <span>1:1</span>
                        </label>
                        <label data-method="setAspectRatio" data-option="0.6666666666666666" title="Set Aspect Ratio" class="btn btn-info ratio">
                            <input id="aspestRatio4" name="aspestRatio" value="0.6666666666666666" type="radio" class="sr-only">
                            <span>2:3</span>
                        </label>
                        <label data-method="setAspectRatio" data-option="NaN" title="Set Aspect Ratio" class="btn btn-info ratio">
                            <input id="aspestRatio5" name="aspestRatio" value="NaN" type="radio" class="sr-only">
                            <span>Free</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @component('controle.component.panel' ,['title' => 'Crop Detail' ,'active' => false])
                    <div class="form-group col-lg-6">
                        <div class="input-group">
                            <input type="text" id="dataWidth" class="form-control" placeholder="Image Width" readonly>
                            <span class="input-group-addon">
                                        <b>W</b>
                                    </span>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <div class="input-group">
                            <input type="text" id="dataHeight" class="form-control" placeholder="Image Height" readonly>
                            <span class="input-group-addon">
                                        <b>H</b>
                                    </span>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <div class="input-group">
                            <input type="text" id="dataX" class="form-control" placeholder="Image X" readonly>
                            <span class="input-group-addon">
                                        <b>X</b>
                                    </span>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <div class="input-group">
                            <input type="text" id="dataY" class="form-control" placeholder="Image Y" readonly>
                            <span class="input-group-addon">
                                        <b>Y</b>
                                    </span>
                        </div>
                    </div>
                    <div class="form-group col-lg-4">
                        <div class="input-group">
                            <input type="text" id="dataRotate" class="form-control" placeholder="Image Rotate" readonly>
                            <span class="input-group-addon">
                                        <b>Rotate</b>
                                    </span>
                        </div>
                    </div>
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt">
                <div class="img-container mb-lg">
                    {{--added by basheer for return original image--}}
                    <input type="hidden" name="original-image" id="original-image">
                    <img src="{{ asset('img/mb-sample.jpg') }}" alt="Picture">
                </div>
                @if($preview)
                    <div class="docs-preview clearfix">
                        @foreach($previewType as $type)
                            <div class="img-preview preview-{{ $type }}"></div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
           <div class="col-lg-12">
               @component('controle.component.panel' ,['title' => 'Crop Type' ,'active' => false])
                   <div class="form-group col-lg-12">
                       <button type="button" class="btn btn-info btn-block mt" data-method="personal-image">Personal Image</button>
                       <button type="button" class="btn btn-info btn-block mt" data-method="thumbnail">Thumbnail</button>
                   </div>
               @endcomponent
           </div>
        </div>
        <div class="row mt">
            <div class="col-lg-12 docs-toggles">
                <div class="mb dropdown dropup docs-options">
                    <button id="toggleOptions" type="button" data-toggle="dropdown" aria-expanded="true" class="btn btn-info btn-block dropdown-toggle">Toggle Options
                        <span class="caret"></span>
                    </button>
                    <ul role="menu" aria-labelledby="toggleOptions" class="dropdown-menu p">
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="strict" checked="checked">strict</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="responsive" checked="checked">responsive</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="checkImageOrigin" checked="checked">checkImageOrigin</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="modal" checked="checked">modal</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="guides" checked="checked">guides</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="highlight" checked="checked">highlight</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="background" checked="checked">background</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="autoCrop" checked="checked">autoCrop</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="dragCrop" checked="checked">dragCrop</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="movable" checked="checked">movable</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="rotatable" checked="checked">rotatable</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="zoomable" checked="checked">zoomable</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="touchDragZoom" checked="checked">touchDragZoom</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="mouseWheelZoom" checked="checked">mouseWheelZoom</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="cropBoxMovable" checked="checked">cropBoxMovable</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="cropBoxResizable" checked="checked">cropBoxResizable</label>
                        </li>
                        <li role="presentation" class="pv-sm">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="option" value="doubleClickToggle" checked="checked">doubleClickToggle</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>