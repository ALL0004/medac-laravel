<?php

namespace Database\Factories;
use App\Models\CentroModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class CentroModelFactory extends Factory
{

    protected $model = CentroModel::class;
  
    public function definition()
    {
        return [
            "sector" => $this->faker->name(),
            "localizacion" => $this->faker->name()
        ];
    }
}
