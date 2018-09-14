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




// Route::get('/', function () {
//     return view('welcome');
// });

// ROUTES FOR LECTURER
Route::get('lecturer/lecturer_add','LecturerController@lecturerAdd');
Route::post('lecturer/lecturer_add','LecturerController@lecturerSave');
Route::get('lecturer/lecturer_home','LecturerController@lecturerViewHome');
Route::get('lecturer/lecturer_list','LecturerController@lecturerList');
Route::get('lecturer/lecturer_view/{id}','LecturerController@lecturerView');
// Route::get('lecturer/lecturer_view/{id}','LecturerController@lecturerSearch');
Route::get('lecturer/lecturer_update/{id}','LecturerController@lecturerEdit');
Route::post('lecturer/lecturer_update/{id}','LecturerController@lecturerUpdate');
Route::get('lecturer/lecturer_delete/{id}','LecturerController@lecturerDelete');

// ROUTES FOR ADMIN
Route::get('admin/master','AdminController@view');
Route::get('admin/dashboard','AdminController@view');

// ROUTES FOR COURSE
Route::get('course/course_add','CourseController@courseAdd');
Route::post('course/course_add','CourseController@courseSave');
Route::get('/course/course_list', 'CourseController@courseList');
Route::get('/course/course_view/{id}', 'CourseController@courseView');
Route::get('/course/course_update/{id}', 'CourseController@courseEdit');
Route::post('/course/course_update/{id}', 'CourseController@courseUpdate');
Route::get('course/course_delete/{id}','CourseController@courseDelete');

Route::get('/student/student_add','StudentController@studentAdd');
Route::post('/student/student_add','StudentController@studentSave');
