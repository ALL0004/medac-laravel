<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AsistenciaModel;

class AsistenciasSeeder extends Seeder
{
    public function run()
    {
        AsistenciaModel::factory()->times(48)->create();
    }
}
