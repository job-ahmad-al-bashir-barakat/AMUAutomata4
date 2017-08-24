# Laravel/AUT-FileManager

# Automata4 Group

# Anas Bakro

# File Manager for Laravel using ResponsiveFileManager.

## Install and Usage

1-Copy FileManager Directory to Vendor\Aut Directory.
2-Edit composer.json by adding this line "Aut\\FileManager\\": "vendor/Aut/FileManager/src" to autoload->psr-4.
3-Publish FileManagerServiceProvider by executing this command: php artisan vendor:publish --provider="Aut\FileManager\FileManagerServiceProvider"
4-Go to aut-filemanager in Config Directory and add paths of the folders you want it to be explored like the following:
   //Paths and their options
       'paths'=>[
           //'ResourceURL for example url('admin/article') '=>[
           //     'middleware'=>['web', 'localizationRedirect','auth','auth.admin:Awareness'],
           //     'upload_dir'=>'storage/images/articles/',  //Don't forget about the '/' sign at the end of the path because its a directory
           //     'current_path'=>'storage/images/articles/',
           //     'thumbs_base_path'=>'storage/images/articles/',
           //],
    in previous example file explorer will allow the user to show the  'storage/images/articles/' folder only if:
        1- the user is in the admin/article or admin/article/create or admin/article/... pages
        2- has permissions in Awareness module for example (using middleware)
    Currently put them all as the current path.

5-FOR CKEDITOR: -add those following lines after the initialization of ckeditor:
                --- js
                  CKEDITOR.on('dialogDefinition', function (event) {
                            aut_filemanager_handleImageUpload(event,baseUrl,lang) // dialogDefinition
                        });
                ---
                -include vendor\filemanager\js\aut_browse_btn_event_handler.js
    notes:  a-baseUrl is the base route for example:http://127.0.0.1/laravel-project/
            b-lang for localization         example:en

## Change log

## Testing


## Contributing

## Security

## Credits

## License
