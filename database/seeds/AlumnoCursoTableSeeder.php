<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AlumnoCursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=20;$i++){
            $alumno = DB::table('alumnos')
                ->inRandomOrder()
                ->first();
            $curso = DB::table('cursos')
                ->inRandomOrder()
                ->first();

            DB::table('alumno_curso')->insert([
                'alumno_id' => $alumno->id,
                'curso_id' => $curso->id,
                'created_at' => Carbon::create('2019', '01', '01'),
                'updated_at' => Carbon::create('2019', '01', '01')
            ]);
        }
    }
}