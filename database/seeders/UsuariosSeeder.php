<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UsuarioModel;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsuarioModel:: factory()->times(48)->create();
    }
}
