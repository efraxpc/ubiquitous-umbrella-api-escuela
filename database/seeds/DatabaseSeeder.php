<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users',
            'cursos',
            'alumnos',
            'alumno_curso',
        ]);
        $this->call(UsersTableSeeder::class);
        $this->call(CursosTableSeeder::class);
        $this->call(AlumnosTableSeeder::class);
        $this->call(AlumnoCursoTableSeeder::class);
    }
    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
