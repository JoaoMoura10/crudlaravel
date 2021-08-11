<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    // Definindo os atributos Iniciais 
    protected $fillable = ['nome','genero'];
}
