<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsistenciaModel extends Model
{
    /**
     * usa factoria, crea objetos y mete los datos a la tabla.
     */
    use HasFactory;

    protected $table = "asistencias";//nombre de la tabla
    protected $primaryKey = 'id_asistencia';//clave primaria
    protected $fillable = ["Fecha_entrada","Fecha_salida","validacion", //columnas
        "created_at","update_at","id_usuario"];

        /**
         * método para obtener todos los datos asistencias
         */
    public function obtenerAsistencia(){
        return AsistenciaModel::all();
    }
    /**
     * //obtener una unica asistencia a partir de un cod de asistencia
     */
    
    public function obtenerAsistenciaPorCodigo($cod){
        return AsistenciaModel::find($cod);
    }
    /**
     * //obtener asistencias a partir de un id de un usuario
     */
    
    public function obtenerPorUsuario($id){
        return AsistenciaModel::where("id_usuario", $id)->get();
    }
    
    
}
