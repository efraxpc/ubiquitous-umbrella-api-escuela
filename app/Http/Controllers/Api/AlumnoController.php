<?php

namespace App\Http\Controllers\Api;

use App\Alumno;
use App\Http\Controllers\Controller;
use App\Http\Resources\Alumno as AlumnoResource;
use Illuminate\Http\Request;
use App\Repositories\AlumnoRepositoryInterface;

class AlumnoController extends Controller
{
    function __construct(AlumnoRepositoryInterface $alumno)
    {
        $this->modelo = $alumno;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->modelo->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->modelo->store();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return new AlumnoResource($alumno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        $id = $alumno->id;
        $alumnoResponse = $this->modelo->update($id,$request->all());
        return new AlumnoResource($alumnoResponse);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno=$alumno->delete();
        return response()->json($alumno,200);
    }
}