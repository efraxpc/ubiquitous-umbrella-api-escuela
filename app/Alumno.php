<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable=['nombres','apellidos','edad','direccion','ciudad'];

    public function cursos(){
        return $this->belongsToMany(Curso::class);
    }
}
