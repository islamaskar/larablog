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
    return view('welcome', [ 'name' => 'Islam']);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('foo', function () {
    return 'Hello World '.$var1;
});

// Route::get('users', 'UsersController@index'); // get all users

// Route::get('users/create', 'UsersController@create'); // get create form
// Route::post('users', 'UsersController@store'); // save the form data

// Route::get('users/{user}/edit', 'UsersController@edit'); // get update form
// Route::patch('users/{user}', 'UsersController@update'); // save update data

// Route::get('users/{user}', 'UsersController@show'); // get one user

// Route::delete('users/{user}', 'UsersController@destroy'); // delete user
Route::resource('user', 'UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
