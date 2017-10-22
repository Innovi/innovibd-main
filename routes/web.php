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
    return view('home');
});

Route::get('/about', 'PhotoController@index');

Route::get('/work', function() {
	return view('work');
});

Route::get('/services', function() {
	return view('service');
});

Route::get('/contact', function() {
	return view('contact');
});

// Route::get('/gallery', function() {
// 	return view('gallery');
// });

// Route::get('/gallery/design', 'PhotoController@design');

// Route::get('/gallery/wedding', 'PhotoController@wedding');

// Route::get('/gallery/membership', 'PhotoController@membership');
