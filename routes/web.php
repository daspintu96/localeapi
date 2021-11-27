<?php

use Illuminate\Support\Facades\Route;

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

// Route::redirect('/','/en');



Route::get('/setlang/{lg}','SwithLang@index');

// Route::group([
//     'prefix' => '{language}',
// ], function(){
    Route::get('/','PagesController@deashboard');
   
Route::get('/mission', 'PagesController@index');
Route::get('create-student','PagesController@create_student');
Route::get('/export','PagesController@export');
Route::post('/import','PagesController@import');
// });