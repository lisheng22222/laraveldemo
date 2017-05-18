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


   // Route::group([], function()
   //  {
        // 控制器在「App\Http\Controllers\Admin\User」命名空间
          // Route::get('/', 'Person@index');
    // });

Route::get('/','StaticPagesController@home');

Route::get('/help','StaticPagesController@help')->name('help');

Route::get('/about','StaticPagesController@about');

Route::get('/test','TestController@index');
// Route::get('/users/create', ['users'=>'UsersController@create','as'=>'users.create']);

Route::get('/users/create', ['uses' => 'UsersController@create', 'as' => 'users.create']);

Route::post('/users',['uses'=>'UsersController@store','as'=>'users.store']);

Route::get('/users/{id}',['uses'=>'UsersController@show','as'=>'users.show']);
get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');
post('/users/{id}', 'UsersController@update')->name('users.update');

// Route::get('signup', 'UsersController@create')->name('signup');
// Route::get('/users', 'UsersController@index')->name('users.index');
// Route::get('/users/{id}', 'UsersController@show')->name('users.show');

// Route::post('/users', 'UsersController@store')->name('users.store');
// Route::get('/users/{id}/edit', 'UsersController@edit')->name('users.edit');
//patch('/users/{id}', 'UsersController@update')->name('users.update');
//delete('/users/{id}', 'UsersController@destroy')->name('users.destroy');


get('login', 'SessionsController@create')->name('login');
post('login', 'SessionsController@store')->name('login');
delete('logout', 'SessionsController@destroy')->name('logout');