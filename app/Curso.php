<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //protected $table = 'alumnos';
    protected $fillable=['nombres','apellidos','edad','direccion','apodo'];

    public function alumnos(){
        return $this->belongsToMany(Alumno::class);
    }
}
