transSaveOper // withoutTrans // tree // lang -- fix
fix get datatable issue

----------------------------- ckeditor and image upload and file manager
----------------------------- ckeditor and image upload and file manager
----------------------------- ckeditor and image upload and file manager
fix initailize ckeditor
add cutom delete button to delete file and image in ckeditor

-----------------------------------------------datatable
-----------------------------------------------datatable
-----------------------------------------------datatable
ساوي كلاسات اللغات بالتابع dialogClassAttr
------------------------------------------------
scroll datatable modal and table 
--------------------------------->
--------------------------------->
Scroll dialog  hieght ,min height ,overflow-y

Sweetalert scroll
-------------------
height: 300px;
overflow: auto;
-------------------
--------------------------------->
--------------------------------->
---------------------------------------------
add bundle assets to datatable lib
---------------------------------------------
make some fix to support arabic default for localization
--------------------------------->
--------------------------------->
Laravellocalization.php
'hideDefaultLocaleInURL' => true,

Route.php
'middleware' =>['web','localizationRedirect' /*,'localeSessionRedirect'*/],


Helper
function localizeURL($url='')
{
    $lang = (LaravelLocalization::getCurrentLocale()==LaravelLocalization::getDefaultLocale()
        ? ''
        :LaravelLocalization::getCurrentLocale().'/');

    return url($lang.$url);
}

datatable.php
'routeMiddleware' => ['web', 'localizationRedirect'/* ,'localeSessionRedirect' */],
--------------------------------->
لما تعمل توليد لملف الـ Factory ينحط اسم المتحول متل اسم ال PersonFactory بدون كلمة factory مع camel case
getDatatable($model, $request){ => $model -> $person
--------------------------------->
برمتر الداتا ساويه array فيها name , data
اضافة كلاس على hidden input 
ضيف url get على data-attr بال table
search regex in datatable
multiModel config add to js compy modal to his cont
fix withoutTrans lang on treeController and UploadController

-----------
fix ckeditor file link and upload button
change file input upload path for show well orginize in file manager