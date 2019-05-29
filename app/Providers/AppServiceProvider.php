<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Alumno;
use App\Observers\AlumnoObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Alumno::observe(AlumnoObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\AlumnoRepositoryInterface',
            'App\Repositories\AlumnoRepository'
        );
        $this->app->bind(
            'App\Repositories\CursoRepositoryInterface',
            'App\Repositories\CursoRepository'
        );
        $this->app->bind(
            'App\Repositories\AlumnoCursoRepositoryInterface',
            'App\Repositories\AlumnoCursoRepository'
        );
    }
}
