<?php
namespace App\Repositories;

interface AlumnoRepositoryInterface
{
    /**
     * Get's a post by it's ID
     *
     * @param int
     */
    public function get($post_id);

    /**
     * Get's all alumnos.
     *
     * @return mixed
     */
    public function all();

    /**
     * Create an alumno.
     *
     * @return mixed
     */
    public function store();

    /**
     * Deletes an alumno.
     *
     * @param int
     */
    public function delete($post_id);

    /**
     * Updates an alumno.
     *
     * @param int
     * @param array
     */
    public function update($post_id, array $post_data);

    /**
     * Get ultimo alumno.
     *
     * @return mixed
     */
    public function get_last();
}