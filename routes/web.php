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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/courses', 'CourseController@index');
Route::post('/courses', 'CourseController@store');
Route::get('/courses/create', 'CourseController@create');

Route::post('/courses/{course}/comments','CommentController@store');
