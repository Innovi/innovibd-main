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
    return view('pages.home');
});

Route::get('/about', function() {
    return view('pages.about');
});

Route::get('/work', function() {
	return view('pages.work');
});

Route::get('/services', function() {
	return view('pages.service');
});

Route::get('/contact', function() {
	return view('pages.contact');
});

// Route::get('/gallery', function() {
// 	return view('gallery');
// });

// Route::get('/gallery/design', 'PhotoController@design');

// Route::get('/gallery/wedding', 'PhotoController@wedding');

// Route::get('/gallery/membership', 'PhotoController@membership');
