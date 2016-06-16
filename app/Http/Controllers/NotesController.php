<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function index(){
    	$notes = Note::all();
    	return view('notes/list', compact('notes'));
    }
}
