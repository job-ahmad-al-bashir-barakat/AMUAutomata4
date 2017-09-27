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

------------
//  Abdo  //
------------

شلونك بشير
في شغلة بالحذف ب datatable
مافي داعي تسكر ال alert تبعت التاكيد خليها ظاهرة وبس تعمل alert نجاح العملية هو لحالو بيعمل animation مشان يغير

-----------

بشير فكر بهي الشغلة وقلي شو رايك
جداول اللغات كلها متل بعضها الفرق بس ال id للجدول المرتبط معو
ليش ما منعمل جدول واحد object_id مع object_type وهاد مرتبط ب كل الجداول
بعرف انو نحن حكينا فيها بس فكر فيها على رواق وبعد ما نسلم ممكن نعمل مقارنة بالاداء للحالتين

-----------
هام جدا  
-----------

// save / update / delete / order
// destroy tree 
// work on unfinish tables
// fill public menu
// rtl issue
// fix datatable icon tabs responsive
// fix pjax page load
// add trash for each item on tree