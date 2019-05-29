<?php

namespace App\Observers;

use App\Alumno;
use App\Repositories\AlumnoRepositoryInterface;
use Illuminate\Support\Facades\Log;

class AlumnoObserver
{
    function __construct(AlumnoRepositoryInterface $alumno)
    {
        $this->modelo = $alumno;
    }
    /**
     * Handle to the User "created" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function created(Alumno $alumno)
    {
        $ultimoRow = $this->modelo->get_last();
        Log::info('El alumno con nombre ' . $ultimoRow->nombres . ' ' . $ultimoRow->apellidos . ' con '.
            $ultimoRow->edad . ' años de edad y residente en ' . $ultimoRow->ciudad . ' se inscribió en la escuela extrema');
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function updated(Alumno $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\User  $user
     * @return void
     */
    public function deleted(Alumno $user)
    {
        //
    }
}