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
Route::get('contact', function () {
	return view('pages.contact', ['title' => 'Contactez-nous']);
});
Route::get('lien', function () {
	return view('pages.lien', ['title' => 'Lien - partenaire']);
});
Route::get('galerie', function () {
	return view('pages.galerie', ['title' => 'Galerie photo']);
});
Route::get('galerie/{dossier}', function($dossier){
	$files = File::allFiles(public_path('images/'.$dossier));
	return view('pages.slideshow', ['title' => 'Galerie photo '.$dossier, 'files' => $files, 'folder' => $dossier]);
});
Route::group(['prefix' => 'actualite'], function() {
    Route::get('', 'blogController@showAll');

    Route::get('comment/{slug}', 'blogController@show');

    Route::post('comment/{slug}', 'blogController@postCom');

    Route::get('like/{slug}', 'blogController@newsLike');

    Route::get('dislike/{slug}', 'blogController@newsDislike');

    Route::get('comment/like/{id}/{slug}', 'blogController@commentLike');

    Route::get('comment/dislike/{id}/{slug}', 'blogController@commentDislike');
});
Route::group(['prefix' => 'admin'], function() {
    Route::get('', 'AdminController@home')->middleware('auth');

    Route::get('login', 'AdminController@showLogin');

    Route::post('login', 'AdminController@login');

    Route::get('deconnexion', 'AdminController@deco');
});

Route::post('contact/send', function(Request $request){

    Illuminate\Support\Facades\Mail::send('emails.contact', ['mail' => $request->all()], function($message){
        $message->from($request->all()['mail'], $request->all()['prenom'].' '.$request->all()['nom']);

        $message->to('info@funforall.ch');
    });
});

Route::get('dev', function(){
    return view('emails.contact', ['title' => 'Test']);
});