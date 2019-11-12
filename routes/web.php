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
Route::post('eventstore', 'EventsController@store')->name('eventstore');
Route::post('{id}/eventupdate', 'EventsController@update')->name('eventupdate');
Route::put('/admin/edit/{id}', 'EventsController@edit')->name('edit');
Route::delete('/admin/{id}', 'EventsController@destroy')->name('events.delete');
Route::get('/admin/{id}', 'EventsController@show')->name('book');
Route::post('ticketstore/{id}', 'TicketsController@store')->name('ticketstore');
Route::resource('tickets','TicketsController');
