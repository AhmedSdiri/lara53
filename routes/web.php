<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
	return realpath(base_path('resources/views'));
    return view('welcome');
});*/
  Route::get('/','PagesController@index');
  
 //middleware
// Route::get('users','UsersController@index')->middleware('my_auth');
  Route::get('users/create', ['uses' => 'UsersController@create']);
 Route::post('users', ['uses' => 'UsersController@store']);
// the global auth 

 //authenfication
Auth::routes();

Route::get('/home', 'HomeController@index');

//bladetest
Route::get('/blade','PagesController@blade');

//no need for this one becaause it is the route group
/*Route::get('users','UsersController@index')->middleware('auth');*/



//route group

Route::group(['middleware' => 'auth', 'anothermiddlware'], function(){
	 Route::get('users','UsersController@index');
       //profile composer route 

      Route::get('/profile','PagesController@profile');
      Route::get('/settings','PagesController@settings');
});