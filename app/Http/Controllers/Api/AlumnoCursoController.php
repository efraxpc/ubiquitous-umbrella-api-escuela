<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\AlumnoCursoRepositoryInterface;

class AlumnoCursoController extends Controller
{
    private $modelo;

    function __construct(AlumnoCursoRepositoryInterface $alumnoCurso)
    {
        $this->modelo = $alumnoCurso;
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
}