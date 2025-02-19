<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PersonaEvaluadaResource extends Resource
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
            'idPersona'     => $this->idPersona,
            'dni'           => $this->dni,
            'nombre'        => $this->nombreCompleto,
            'rol'           => $this->rol,
            'idGrupo'       => $this->idGrupo
        ];
    }


}
