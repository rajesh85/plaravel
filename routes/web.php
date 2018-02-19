<?php

Auth::routes();

Route::get('/country', 'CountryController@index')->name('country.index');
Route::get('/country/create', 'CountryController@create')->name('country.create');

Route::get('/home', 'HomeController@index')->name('home');
