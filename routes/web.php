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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/instructor', 'InstructorController@index')->name('instructor');


Route::get('/course', 'CourseController@index')->name('course');


Route::get('/subject', 'SubjectController@index')->name('subject');


Route::get('/schedule', 'ScheduleController@index')->name('schedule');


Route::get('/room', 'RoomController@index')->name('room');

Route::get('/meetingtime', 'MeetingController@index')->name('meeting');
