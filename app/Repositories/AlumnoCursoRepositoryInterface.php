<?php
namespace App\Repositories;

interface AlumnoCursoRepositoryInterface
{
    /**
     * Get's an alumno_curso by it's ID
     *
     * @param int
     */
    public function get($post_id);

    /**
     * Get's all alumno_curso.
     *
     * @return mixed
     */
    public function all();

    /**
     * Create an alumno_curso.
     *
     * @return mixed
     */
    public function store();


    /**
     * Deletes an alumno_curso.
     *
     * @param int
     */
    public function delete($post_id);

    /**
     * Updates an alumno_curso.
     *
     * @param int
     * @param array
     */
    public function update($post_id, array $post_data);
}