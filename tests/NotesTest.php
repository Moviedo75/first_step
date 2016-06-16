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
        //when
        //Cuando se visita la pagina notes
        $this->visit('notes')
            //then
            //cuando le damos click al link Add a note
            ->click('Add a note')
            //vamos hacer llevados a una pagina en la ruta 'notes/create'
            ->seePageIs('notes/create')
            //Vamos a ver un texto Create a note
            ->see('Create a note')
            //vamos a poder escribir
            ->type('A new note', 'note')
            //al presionar el botono create note
            ->press('create note')
            //vamos hacer lleavados a la pagina 'notes'
            ->seePageIs('notes')
            //podemos ver un texto 
            ->see('A new note')
            //Vamos a tener esa nota registrada en la base de datos
            ->seeInDatabase('notes', [
                    'note' => 'A new note'
                ]);

    }
}
