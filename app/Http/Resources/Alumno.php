<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Alumno extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'nombres'=>$this->nombres,
            'apellidos'=>$this->apellidos,
            'edad'=>$this->edad,
            'ciudad'=>$this->ciudad,
            'direccion'=>$this->direccion,
            'created_at'=>(string)$this->created_at->format('m/d/Y'),
        ];
    }
}
