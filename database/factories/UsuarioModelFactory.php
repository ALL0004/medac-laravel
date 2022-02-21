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
            /**
             * faker es una libreria php que nos da la facilidad para generar datos de prueba
             */
            "nombre" => $this->faker->name(),
            "apellidos" => $this->faker->name(),
            "DNI" => $this->faker->unique()->text(9),
            "email" => $this->faker->email(),
            "telefono" => $this->faker->bothify('#########'),
            "contraseña" => $this->faker->password(),
            "categoria" => $this->faker->boolean(false),
            "id_sede" => CentroModel::all()->random()->id_sede
        ];
    }
}
