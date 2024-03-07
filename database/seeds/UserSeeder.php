<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([ 
            'userName' => 'Admon',
            'correo' => 'admon@robotics.com',
            'contrasena' => 'Adm@2022',
            'userType' => 'Administrativo',
        ]);

        DB::table('usuarios')->insert([ 
            'userName' => 'Tecmilenio',
            'correo' => 'tecmilenio@robotics.com',
            'contrasena' => 'Adm@2022',
            'userType' => 'Docente',
        ]);

        DB::table('usuarios')->insert([ 
            'userName' => 'Estudiante',
            'correo' => 'estudiante@robotics.com',
            'contrasena' => 'Adm@2022',
            'userType' => 'Estudiante',
        ]);
    }
}
