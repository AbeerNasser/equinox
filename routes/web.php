<?php

use Illuminate\Support\Facades\Route;

//
    Route::resource('/', 'front\FrontController');
    // Route::get('/project', 'front\FrontController');

    // Route::get('/service', 'front\FrontController');
    // Route::get('/news', 'front\FrontController');
    // // Route::post('/contact', 'front\ContactController');
    // Route::get('/leader', 'front\FrontController');
//
Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('Dashboard')->middleware(['auth'])->group(function()
{
    Route::resource('/projects', 'dashboard\ProjectController');
    Route::resource('/subjects', 'dashboard\SubjectController');
    Route::resource('/services', 'dashboard\ServiceController');
    Route::resource('/newes', 'dashboard\NeweController');
    Route::resource('/contacts', 'dashboard\ContactController');
    Route::resource('/leaders', 'dashboard\LeaderController');
    Route::resource('/users', 'dashboard\UsersController');
});
