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

/* Welcome Route */
/* Route::get('/', function () {
    return view('welcome');
}); */

/* Welcome page Route */
Route::get('/', 'TodosController@welcome');

/* about Route */
Route::get('about', 'TodosController@about');

/* todos project route folder */
Route::get('todos', 'TodosController@index');

