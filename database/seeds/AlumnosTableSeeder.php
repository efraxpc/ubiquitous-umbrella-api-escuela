<?php

use Illuminate\Database\Seeder;

class AlumnosTableSeeder extends Seeder
{
    private $cantidadseed;
    function __construct($cantidadSeed = 50){
        $this->cantidadseed = $cantidadSeed;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return factory(\App\Alumno::class,$this->cantidadseed)->create();
    }
}
