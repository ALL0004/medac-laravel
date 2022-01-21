<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call(CentrosSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(AsistenciasSeeder::class);
        
        //añadir los otros seeders de usuarios y asistencias.
    }
}
