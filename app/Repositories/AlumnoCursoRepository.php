<?php

namespace App\Repositories;

use App\Alumno;
use Illuminate\Support\Facades\DB;

class AlumnoCursoRepository implements AlumnoCursoRepositoryInterface
{
    /**
     * Get's an alumno_curso by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($post_id)
    {
        return Alumno::find($post_id);
    }

    /**
     * Get's all alumno_curso.
     *
     * @return mixed
     */
    public function all()
    {
        return $users = DB::table('alumnos')
            ->join('alumno_curso', 'alumnos.id', '=', 'alumno_curso.alumno_id')
            ->join('cursos', 'cursos.id', '=', 'alumno_curso.curso_id')
            ->select('cursos.nombre as curso','alumnos.nombres','alumnos.apellidos','alumnos.edad','alumnos.ciudad','alumnos.direccion')
            ->get();
    }
    /**
     * Create an alumno_curso.
     *
     * @return mixed
     */
    public function store()
    {

    }
    /**
     * Deletes an alumno_curso.
     *
     * @param int
     */
    public function delete($post_id)
    {
        return Alumno::destroy($post_id);
    }

    /**
     * Updates an alumno_curso.
     *
     * @param int
     * @param array
     */
    public function update($post_id, array $post_data)
    {
        return Alumno::find($post_id)->update($post_data);
    }
}
