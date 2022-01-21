<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    use HasFactory;
    protected $table = "usuario";
    protected $primaryKey = "id_usuario";
    protected $fillable = ['created_at','updated_at','nombre','apellidos','DNI','email','telefono','contraseña','categoria','id_sede'];

public function obtenerUsuarios(){
    return UsuarioModel::all();
}

public function obtenerUsuario($cod){
    return UsuarioModel::find($cod);
}

}
