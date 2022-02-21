<?php

namespace App\Models;
//usa el factory
use Illuminate\Database\Eloquent\Factories\HasFactory;
//clase padre del modelo
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    /**
     * Va a rellenar los campos mediante el Factory 
     * */
    use HasFactory;
    /**
     * 3 propiedad obligatorias para el desarrollo del modelo. La primera es el nombre de la
     * tabla, la primary_key seria id_usuario y la tercera son todos los campos que va a tener esa tabla
     */
    protected $table = "usuario";
    protected $primaryKey = "id_usuario";
    protected $fillable = ['created_at','updated_at','nombre','apellidos','DNI','email','telefono','contraseña','categoria','id_sede'];

    /**
     * Primera funcion del modelo usuario: va a obtener todos los usuarios
     */
public function obtenerUsuarios(){
    return UsuarioModel::all();
}

    /**
     * Segunda funcion que nos va a obtener el usuario segun el id que le pasemos
     */
public function obtenerUsuario($cod){
    return UsuarioModel::find($cod);
}

    /**
     * Tercera funcion, lo que hace es a traves de relaciones de laravel, obtener la asistencia de un usuario
     */
public function asistencias(){
    return $this->hasMany(AsistenciaModel::class,'id_usuario');
}

}
