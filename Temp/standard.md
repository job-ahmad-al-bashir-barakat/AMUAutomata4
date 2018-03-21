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