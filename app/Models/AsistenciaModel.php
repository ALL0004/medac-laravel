<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsistenciaModel extends Model
{
    use HasFactory;

    protected $table = "asistencias";
    protected $primaryKey = 'id_asistencia';
    protected $fillable = ["Fecha_entrada","Fecha_salida","validacion",
        "created_at","update_at","contraseña","id_usuario"];

    public function obtenerAsistencia(){
        return AsistenciaModel::all();
    }
    public function obtenerAsistenciaPorCodigo($cod){
        return AsistenciaModel::find($cod);
    }
}
