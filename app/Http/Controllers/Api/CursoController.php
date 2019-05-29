<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\CursoRepositoryInterface;

class CursoController extends Controller
{
    function __construct(CursoRepositoryInterface $curso)
    {
        $this->modelo = $curso;
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