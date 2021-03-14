<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front/index');
});
// Route::resource('/clients', 'front\ClientController');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('Dashboard')->middleware(['auth'])->group(function()
{
    Route::resource('/projects', 'dashboard\ProjectController');
    Route::resource('/services', 'dashboard\ServiceController');
    Route::resource('/news', 'dashboard\ContactController');
    Route::resource('/contacts', 'dashboard\ServiceController');
    Route::resource('/leaders', 'dashboard\LeaderController');
});
