<?php

use App\Http\Controllers\PagesController;
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

Route::get('/projects','ProjectsController@index');

Route::get('/projects/about','PagesController@about');

//Route::get('/contact','PagesController@contact');

/* ---------------------------------------------------------------------------*/


Route::get('/projects/create','ProjectsController@create');

Route::get('/projects/{projects}','ProjectsController@show');

Route::post('/projects','ProjectsController@store');

Route::get('/projects/{projects}/edit','ProjectsController@edit');

Route::patch('projects/{projects}','ProjectsController@update');

Route::delete('/projects','ProjectsController@destroy');

/*-------------------------------------------------------------------------------*/

Route::resource('projects','ProjectsController');
/*Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});
*/
