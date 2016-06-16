<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', function(){
	$notes = Note::all();
	//dd($notes);
	//return view('notes');Cuando el usuario vaya o obtenga la ruta o la url llamada notes, esto va enviarlo a esta vista
	return view('notes', compact('notes'));//para crear un array asociativo y eso pasa como segundo argumento en el metodo view
});

Route::get('notes/create', function(){
	/*return [
		'notes' => 'create notes'
	];*/
	//return '[Create Notes]';
	return view('notes/create');
});

Route::post('notes', function(){
	return 'Creating a note';
});

Route::get('notes/{note}/{slug?}', function($note,$slug = null){
	//return $note;
	dd($note, $slug);
})->where('note', '[0-9]+');

/*Route::get('notes/create', function(){

	return '[Create Notes]';

});

Route::post('notes', function(){

	return 'Creating a notes';

});

Route::get('notes', function(){

	return view('notes');

});

Route::get('notes/{note}/{slug?}', function($note,$slug = null){

	dd($note, $slug);

})->where('note', '[0-9]+');
*/