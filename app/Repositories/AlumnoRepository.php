<?php

namespace App\Repositories;

use App\Alumno;
use Illuminate\Support\Facades\DB;

class AlumnoRepository implements AlumnoRepositoryInterface
{
    /**
     * Get's a post by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($id)
    {
        return Alumno::find($id);
    }

    /**
     * Get's a post by it's ID
     *
     * @param int
     * @return collection
     */
    public function get_last()
    {
        return DB::table('alumnos')->orderBy('created_at', 'desc')->first();
    }

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all()
    {
        return Alumno::all();
    }

    /**
     * Create an alumno.
     *
     * @return mixed
     */
    public function store()
    {
        $this->runAlumnoTableseeder();
        return response()->json([
            'response' => 'Alumno creado',
            'status' => 200
        ]);
    }

    /**
     * Deletes an alumno.
     *
     * @param int
     */
    public function delete($id)
    {
        return Alumno::destroy($id);
    }

    /**
     * Updates an alumno.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data)
    {
        Alumno::find($id)->update($data);
        return Alumno::find($id);
    }

    private function runAlumnoTableseeder()
    {
        $seeder = new \AlumnosTableSeeder(1);
        $seeder->run();
    }
}
