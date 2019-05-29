<?php

namespace App\Repositories;

use App\Curso;
use Illuminate\Support\Facades\DB;
class CursoRepository implements CursoRepositoryInterface
{
    /**
     * Get's a post by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($post_id)
    {
        return Curso::find($post_id);
    }

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all()
    {
        return Curso::all();
    }


    /**
     * Deletes a post.
     *
     * @param int
     */
    public function delete($post_id)
    {
        return Curso::destroy($post_id);
    }

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($post_id, array $post_data)
    {
        return Curso::find($post_id)->update($post_data);
    }
}
