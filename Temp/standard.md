## Form Service Provider
public static function bsPrimarykey($id = '' ,$name = '' ,$value = null ,$class = '' ,$attr = []){}
public static function bsHidden($id = '' ,$name = '' ,$value = null ,$class = '' ,$attr = []){}
public static function bsText($label = '', $id = '', $name =  '', $value = null, $class = '', $attr = []){}
public static function bsNumber($label = '', $id = '', $name =  '', $value = null, $class = '', $attr = []){}
public static function bsAutocomplete($label = '', $id = '', $name = '', $remote = '', $option = [], $letter = '3', $class  = '', $attr   = []){}
public static function bsSelect($label = '', $id = '', $name = '', $option = [], $selected = null, $class = '', $attr = []){}
public static function bsImageUpload($id = '', $name = '', $class = '', $param = '', $imageWidth = '', $imageHeight = '', $targetModel =  ['modalId' => '', 'modalTitle' => '', 'modalWidth' => '700px',], $datatable = '', $datatableInitialize = 'true', $datatableInitializeProperty = '.image', $extraParameter = ['maxFileCount' => '0', 'minFileCount' => '0', 'minImageWidth' => null, 'minImageHeight' => null, 'maxImageWidth' => null, 'maxImageHeight' => null, 'allowedFileExtensions' => 'jpeg,jpg,bmp,png' ,'appendLocation' => '' ,'appendName' => '' , 'reloadDatatable' => 'true' ,'fileuploadedEvent' => '' ,'filedeletedEvent' => '' ,'allowedPreviewIcons' => 'false' ,'autoReplace' => 'false' ,'showCaption' => 'false' ,'showPreview' => 'true']){}
public static function bsImageUploadCropper($width = '90%', $single = false, $showName = true ,$showType = false, $showOption = false, $showToggleOption = false, $showPreview = false ,$previewType = ['lg' ,'md' ,'sm' ,'xs']){}
public static function bsNotify($icon = '' ,$class = '',$text = '' ,$html = ''){}


## route 
-- dont't put any _ in your route always type all letter in small case

please follow this way for typing route :

| Method        | Route                | Action          | Controller
---------------------------------------------------------------------------------
| GET|HEAD      | example              | example.index   | exampleController@index
| GET|HEAD      | example/create       | example.create  | exampleController@create 
| POST          | example              | example.store   | exampleController@store
| GET|HEAD      | example/{param}      | example.show    | exampleController@show     
| GET|HEAD      | example/{param}/edit | example.edit    | exampleController@edit 
| PUT|PATCH     | example/{param}      | example.update  | exampleController@update  
| DELETE        | example/{param}      | example.destroy | exampleController@destroy 

-- index   : Display a listing of the resource 
-- create  : Show the form for creating a new resource. 
-- store   : Store a newly created resource in storage.
-- show    : Display the specified resource.
-- edit    : Show the form for editing the specified resource.
-- update  : Update the specified resource in storage.
-- destroy : Remove the specified resource from storage.