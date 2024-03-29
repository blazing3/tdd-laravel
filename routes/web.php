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

use App\Project;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects','ProjectsController@index');
Route::post('/projects', 'ProjectsController@store');
