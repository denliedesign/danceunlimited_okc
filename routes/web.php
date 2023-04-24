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

//Route::get('welcome', function () {
//    return view('welcome-snow');
//});
Route::get('/', function () {
    return view('welcome-snow');
});

Route::get('du-pop-ups', function () {
    return view('du-pop-ups');
});
Route::get('trash-week', function () {
    return view('trash-week-snow');
});
Route::get('calendar', function () {
    return view('calendar-snow');
});
Route::get('fall-schedule', function () {
    return view('fall-schedule-snow');
});
//Route::get('fall-tuition', function () {
//    return view('fall-tuition-snow');
//});
Route::get('summer-schedule', function () {
    return view('summer-schedule-snow');
});
Route::get('summer-camps', function () {
    return view('summer-camps-snow');
});
Route::get('productions-winter', function () {
    return view('productions-winter-snow');
});
Route::get('productions-spring', function () {
    return view('productions-spring-snow');
});
Route::get('spotlight-schedule', function () {
    return view('spotlight-schedule-snow');
});
//Route::get('spotlight-tuition', function () {
//    return view('spotlight-tuition-snow');
//});
Route::get('spotlight-show', function () {
    return view('spotlight-show-snow');
});
Route::get('spotlight-past-productions', function () {
    return view('spotlight-past-productions-snow');
});
Route::get('spotlight-voice', function () {
    return view('spotlight-voice-snow');
});
Route::get('vibe-audition', function () {
    return view('vibe-audition-snow');
});
Route::get('vibe-days-gone-by', function () {
    return view('vibe-days-gone-by-snow');
});
Route::get('vibe-policy', function () {
    return view('vibe-policy-snow');
});
Route::get('faq-faculty', function () {
    return view('faq-faculty-snow');
});
Route::get('faq-dress', function () {
    return view('faq-dress-snow');
});
Route::get('faq-studio', function () {
    return view('faq-studio-snow');
});
Route::get('good-times', function () {
    return view('good-times-snow');
});

//
//Route::get('faculty', function () {
//    return view('faculty');
//});
//
//Route::get('policies-faqs', function () {
//    return view('policies-faqs');
//});
//
//Route::get('starlette-information', function () {
//    return view('starlette-information');
//});
//
//Route::get('dress', function () {
//    return view('dress');
//});
//
//Route::get('spotlight-acting-academy', function () {
//    return view('spotlight-acting-academy');
//});
//
//Route::get('the-vibe', function () {
//    return view('the-vibe');
//});

//Route::get('meet-the-vibe', function () {
//    return view('meet-the-vibe');
//});

//Route::get('spring', function () {
//    return view('spring');
//});

//Route::get('summer', function () {
//    return view('summer');
//});

//Route::get('fall', function () {
//    return view('fall');
//});

Route::get('contact', 'ContactUsController@create')->name('contact.create');
Route::post('contact', 'ContactUsController@store')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('calendars', 'CalendarController');
Route::resource('updates', 'UpdateController');
Route::resource('sstyles', 'SstyleController');
Route::resource('fstyles', 'FstyleController');

