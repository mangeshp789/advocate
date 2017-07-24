<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view("signin");
});
Route::get('/signup', function () {
    return view("signup");
});
Route::post("/register","Auth\RegisterController@create");

Route::post("/signin","Auth\RegisterController@login");
Route::get("/logout","Auth\RegisterController@logout");
/*Route::get('/dashboard',function (){

   return view("admin.dashboard");
});*/
Route::group(['middleware'=>'auth'],function (){
    Route::group(['prefix'=>'admin'],function (){

        Route::get('/users',['uses' => 'Admin\AdminController@getalluser', 'as' => 'admin.users']);
        Route::Delete('/delete/{id}',['uses'=>'Admin\AdminController@deletebyId']);
        Route::put('edit/{id}',['uses'=>'Admin\AdminController@editById']);
        Route::get('/edit/user/{id}',['uses'=>'Admin\AdminController@editUserById']);

        Route::group(['prefix'=>'client'],function (){

            Route::get('/form',function (){
                return view('admin.client.form');
            })->name('admin.client.form');

            Route::get('/uploadProfile',function(){
                 return view('admin.client.matter.fileUpload');
            })->name('admin.client.uploadProfile');

            Route::post('/uploadProfile',["uses"=>"Admin\ClientController@avtarStore"]);


            /*Route::get('/view',function (){
                return view('admin.client.viewclients');
            })->name('admin.client.view');*/
            Route::post('ajax/matter/{id}',["uses"=>'Admin\ClientController@getMatter']);

            Route::get('/view',["uses"=>"Admin\ClientController@getallclient","as"=>"admin.client.view"]);
            Route::get('/view-matter/{id}',["uses"=>"Admin\ClientController@getViewMatter","as"=>"admin.client.view-matter"]);


            Route::get('/viewclient/{id}',["uses"=>"Admin\ClientController@getbyId",'as'=>'admin.client.viewclient']);

            /*Route::get('/viewclient/{id}',function ($id){
                return view('admin.client.singleclient');
            })->name('admin.client.viewclient');*/

            Route::get('/add-matter/{id}',function ($id){
                return view('admin.client.matter.create',['id'=>$id]);
            })->name('admin.client.matter');

            Route::post('/add-matter/{id}',['uses'=>'Admin\ClientController@addMatter','as'=>'admin.client.add-matter']);

            Route::post('/create',['uses'=>'Admin\ClientController@create','as'=>'admin.client.create']);



        });

        Route::group(['prefix'=>'case'],function (){
            Route::get('addCase',function (){
               return View('admin.case.addCase');
            });
            Route::post('addCase',['uses'=>'Admin\ClientController@addCase']);
            Route::get('view',function (){
               return View('admin.case.view');
            });
        });
    });
});

