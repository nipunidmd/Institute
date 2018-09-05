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

Route::get('admin/master','AdminController@view');

Route::get('/', function () {
    return view('welcome');
});

Route::get('lecturer/lecturer_add','LecturerController@lecturerAdd');
Route::post('lecturer/lecturer_add','LecturerController@lecturerSave');
Route::get('lecturer/lecturer_home','LecturerController@lecturerViewHome');
Route::get('lecturer/lecturer_list','LecturerController@lecturerList');
Route::get('lecturer/lecturer_view','LecturerController@lecturerView');
Route::get('lecturer/lecturer_view','LecturerController@lecturerSearch');
Route::get('lecturer/lecturer_update','LecturerController@lecturerUpdate');
Route::get('lecturer/lecturer_delete','LecturerController@lecturerDelete');
