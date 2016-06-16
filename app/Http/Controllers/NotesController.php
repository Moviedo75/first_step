<?php

namespace App\Http\Controllers;

use App\Note;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Request;utiliza el faza

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function index(){
    	$notes = Note::all();
    	return view('notes/list', compact('notes'));
    }

    public function create(){
    	return view('notes/create');
    }
    //procesar la creacion de la nota
    //function store(Request $request)
    public function store(){
    	//return 'Creating a note';
        //return request()->all();
        //return request()->get('note'); Obtiene los datos del campo que escojo
        //return request()->only(['note']);
        //return $request->only(['note']);Especifica los datos que quiero obtener

        //tambien se puede utilizar el siguiente comando con faza
        //return Request::only(['note']);

        $data = request()->all();
        Note::create($data);
        return redirect()->to('notes');//retorna a la vista notes
    }

    public function show($note){
    	dd($note);
    }
}
