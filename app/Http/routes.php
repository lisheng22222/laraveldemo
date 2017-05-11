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

Route::get('/help','StaticPagesController@help');

Route::get('/about','StaticPagesController@about');