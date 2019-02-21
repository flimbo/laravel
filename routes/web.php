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
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

//projects
/* Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/create', 'ProjectsController@create');
Route::get('/projects/{project}', 'ProjectsController@show');
Route::get('/projects/{project}/edit', 'ProjectsController@edit');
Route::post('/projects', 'ProjectsController@store');

 */

 Route::resource('project', 'ProjectsController');
 
/* Route::get('/', function () {
    
    $Task=['go to stora', 'goto to work'];

    return view('welcome')->with([
        'task'=>$Task
    ]);
    
}); */
