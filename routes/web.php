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
	$people = ['Misa', 'Pera', 'Miki'];
    return view('welcome', compact('people'));
});

Route::get('/contact', function(){
	return view('contact');
});

// Route::get('/about', function(){
// 	return view('pages.about');
// });

Route::get('pages', 'PagesController@home');
Route::get('about', 'PagesController@about');

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@store');
// or
//Route::post('cards/{card}/note', 'CardsController@storeNote');

Route::get('notes/{note}/edit', 'NotesController@edit');
// or Route::put
Route::patch('notes/{note}', 'NotesController@update');