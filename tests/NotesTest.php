<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note; //indica a php que quiero trabajar con la clase Note

class NotesTest extends TestCase
{
 	
    use WithoutMiddleware;

    public function test_notes_list()
    {

    	//Having condiciones para hacer la prueba   
		Note::create(['note' => 'My first note']);
		Note::create(['note' => 'Second note']);

		//When definimos las diferentes acciones que haria el usuario
        $this->visit('notes')
        	//Then donde agregamos todas las comprobaciones
        	->see('My first note')
        	->see('Second note');
    }

    public function test_create_note(){
        //Route::post('notes')
        //when el usuario haga una peticion post para crear notas en la vista notes
        $this->post('notes')
            //then
            ->see('Creating a note');
    }
}
