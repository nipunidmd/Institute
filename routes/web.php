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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('admin/master','AdminController@view');
Route::get('admin/dashboard','AdminController@view');

Route::get('course/course_add','CourseController@courseAdd');
Route::post('course/course_add','CourseController@courseSave');

Route::get('/course/course_list', 'CourseController@lists');

Route::get('/course/course_show/{id}', 'CourseController@show');

Route::get('/course/course_edit/{id}', 'CourseController@edit');
Route::post('/course/course_edit/{id}', 'CourseController@updateStatus');

Route::get('/course/delete/{id}', 'CourseController@destroy');

