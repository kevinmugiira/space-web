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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::resource ('master','MasterController');
Route::resource ('index','IndexController');
Route::resource ('about','AboutController');
Route::resource ('contact','ContactController');
Route::resource ('blog','BlogController');
Route::resource ('project','ProjectController');
Route::resource ('singlepost','SinglepostController');
Route::resource ('proj1','Proj1Controller');
Route::resource('throw','ThrowController');*/


//Route::get('contact','PagesController@contact');
//Route::get('blogs', 'BlogsController1@index');
//Route::get('blogs', ['as' => 'blogs.index', 'uses' => 'BlogsController1@index']);
//Route::get('blogs/{id}','BlogsController1@show');

Route::resource('blogs', 'BlogsController');

