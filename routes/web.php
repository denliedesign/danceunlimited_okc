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

Route::get('faculty', function () {
    return view('faculty');
});

Route::get('policies-faqs', function () {
    return view('policies-faqs');
});

Route::get('starlette-information', function () {
    return view('starlette-information');
});

Route::get('dress', function () {
    return view('dress');
});

Route::get('spotlight-acting-academy', function () {
    return view('spotlight-acting-academy');
});

Route::get('the-vibe', function () {
    return view('the-vibe');
});

//Route::get('meet-the-vibe', function () {
//    return view('meet-the-vibe');
//});

Route::get('spring', function () {
    return view('spring');
});

Route::get('summer', function () {
    return view('summer');
});

Route::get('fall', function () {
    return view('fall');
});

Route::get('contact', 'ContactUsController@create')->name('contact.create');
Route::post('contact', 'ContactUsController@store')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('calendars', 'CalendarController');
Route::resource('updates', 'UpdateController');
Route::resource('sstyles', 'SstyleController');
Route::resource('fstyles', 'FstyleController');

