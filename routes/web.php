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
    $events = App\Event::all();
    return view('layouts.landing')->with('events',$events);
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('admin', function () {
    $events = App\Event::all();
    return view('layouts.admin')->with('events',$events);
});
Route::get('/admin/create', 'EventsController@create')->name('create');
Route::resource('events','EventsController');
Route::get('/admin/create',EventsController::class . '@create');