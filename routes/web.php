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


// ----------------------------------------USERS-----------------------------------------

//List all users.
Route::get('/users', 'UserController@all');

//Return the user information
Route::get('users/{id}','UserController@find');

//Return the user's login history
Route::get('users/{id}/history','UserController@history');

//Return new user view
Route::get('users/user','UserController@new');

Route::post('users/user','UserController@addUser');

Route::post('users/update','UserController@update');

// ----------------------------------------COURSES-----------------------------------------

//Return courses view
Route::get('/courses', 'CursoController@courses');

//return new Course view
Route::get('/courses/course', 'CursoController@new');

Route::post('/courses/course', 'CursoController@insert');

//Return a course view
Route::get('/courses/{id}','CursoController@course');

//-------------------------------------------MATRICULA-----------------------------------------

//Return list of users enrolled in a course.
Route::get('/courses/{id}/students', 'MatriculaController@enrolledUsers');

//Return all users that are not enrolled in the course
Route::get('/courses/{id}/nenroll','MatriculaController@allUsers');

//Enroll a user
Route::post('/courses/{id}/enroll', 'MatriculaController@enroll');




