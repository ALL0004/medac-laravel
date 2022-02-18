<?php

namespace Database\Factories;
use App\Models\AsistenciaModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UsuarioModel;

class AsistenciaModelFactory extends Factory{
    protected $model = AsistenciaModel::class;

    public function definition(){
        return [
            "Fecha_entrada"=> $this->faker->dateTime($max = 'now', $timezone = null),
            "Fecha_salida"=> $this->faker->dateTime($max = 'now', $timezone = null),
            "validacion"=> $this->faker->boolean($chanceOfGettingTrue = 50),
            "id_usuario"=> UsuarioModel::all()->random()->id_usuario
        ];
    }
}
