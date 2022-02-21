<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroModel extends Model
{

    /**
     * Crea registros fake de prueba
     */
    
    use HasFactory;

    // campos del Modelo para evitar su modificacion
    // nombre de la tabla sede de nuestraw bd
    protected $table = "sedes";

    /**
     * id de la tabla
     */
    protected $primaryKey='id_sede';

    /**
     * campos de la tabla
     */
    protected $fillable = ["sector", "localizacion", "created_at", "updated_at"];


    /**
     * Recogemos todos los datos
     */
    public function obtenerCentros(){
        return CentroModel::all();
    }

    /**
     * Obtener el centro por el id del centro
     * 
     */
    public function obtenerCentroPorCodigo($cod){
        return CentroModel::find($cod);
    }

    /**
     * Recibe dos parametros, el nombre del centro y un número (cuantos centros quieres encontrar)
     */
    public function obtenerCentrosContenganSector($texto, $numero=10){
        return CentroModel::where("sector", "like", "%". $texto . "%")->take($numero)->get();
    }

     
}
