<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.home', ['title' => 'Accueil']);
});
Route::get('materiel', function () {
	return view('pages.stuff', ['title' => 'Materiels']);
});
Route::get('help', function () {
	return view('pages.help', ['title' => 'Aidez-nous']);
});