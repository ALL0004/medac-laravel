<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\UsuarioModel;
use App\Models\CentroModel;

class UsuarioModelFactory extends Factory
{
    protected $model = UsuarioModel::Class;

    public function definition()
    {
        return [
            
            "nombre" => $this->faker->name(),
            "apellidos" => $this->faker->name(),
            "DNI" => $this->faker->unique()->text(9),
            "email" => $this->faker->email(),
            "telefono" => 0,
            "contraseña" => $this->faker->password(),
            "categoria" => $this->faker->name(),
            "id_sede" => CentroModel::all()->random()->id_sede
        ];
    }
}