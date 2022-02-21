<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CentroModel;

class CentrosSeeder extends Seeder
{
    /**
     * Run the database seeds.mete los datos en la base de datos
     *
     * @return void
     */
    public function run()
    {
        CentroModel::factory()->times(48)->create();
    }
}
