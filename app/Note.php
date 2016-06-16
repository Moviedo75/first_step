<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['note']; //propiedad o atributo note pueda ser cargada como un arrya en el test o en la base de datos
    
}
