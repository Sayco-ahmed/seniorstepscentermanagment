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


// Route::group(['namespace' => 'Pages'], function () {
//     Route::resource('/branch', 'BranchController');
    
// });


Route::namespace('Pages')->group(function () {
    Route::resource('/branch', 'BranchController');
    Route::resource('/cities', 'CityController');
    Route::resource('/courses', 'CourseController');
    Route::resource('/faculty', 'FacultyController');
    Route::resource('/lab', 'LabController');
    Route::resource('/nationality', 'NationalityController');
    Route::resource('/reach_source', 'ReachsourceController');
    Route::resource('/round', 'RoundController');
    Route::resource('/student_status', 'StudentstatusController');
    Route::resource('/trainer', 'TrainerController');
    Route::resource('/user', 'UserController');
    Route::resource('/student', 'StudentController');
    
});