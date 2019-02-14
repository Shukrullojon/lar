<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test','TestController@test');
Route::get('/tests','TestController@post');
Route::resource('companies','CompaniesController');
Route::resource('projects','ProjectsController');
Route::resource('roles','RolesController');
Route::resource('tasks','TasksController');
Route::resource('users','UsersController');


Route::resource('products','ProductController');