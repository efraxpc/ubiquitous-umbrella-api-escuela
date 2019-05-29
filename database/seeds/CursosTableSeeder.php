<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'nombre' => 'Matemática Extrema',
            'created_at' => Carbon::create('2019', '01', '01'),
            'updated_at' => Carbon::create('2019', '01', '01')
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'Física Extrema',
            'created_at' => Carbon::create('2019', '01', '01'),
            'updated_at' => Carbon::create('2019', '01', '01')
        ]);
        DB::table('cursos')->insert([
            'nombre' => 'Química Extrema',
            'created_at' => Carbon::create('2019', '01', '01'),
            'updated_at' => Carbon::create('2019', '01', '01')
        ]);
    }
}
