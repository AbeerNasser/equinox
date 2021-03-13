<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front/index');
});
// Route::resource('/clients', 'front\ClientController');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

// Route::prefix('Dashboard')->middleware(['auth'])->group(function()
// {
//     Route::resource('/clients', 'dashboard\ClientController');
//     Route::resource('/projects', 'dashboard\ProjectController');
//     Route::resource('/offers', 'dashboard\OfferController');
//     Route::get('/activeOffer/{id}', 'dashboard\OfferController@activeOffer');
//     Route::resource('/services', 'dashboard\ServiceController');
//     Route::resource('/settings', 'dashboard\settingController');
// });
