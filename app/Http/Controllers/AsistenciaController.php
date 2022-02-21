<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsistenciaModel;
use App\Models\UsuarioModel;
/**
 * Clase controlador, crea un objeto que va a tener métodos asociados.
 */
class AsistenciaController extends Controller
{
    protected $asistenciaModel;

    public function __construct(AsistenciaModel $asistencia){
        $this->asistenciaModel = $asistencia;
        
    }
    /**
     * Método que devuelve la vista asistencias.lista 
     * vista visible para el administrador
     */
    public function index()
    {
        $asistencias = $this->asistenciaModel->obtenerAsistencia();
        return view('asistencias.lista', ["asistencias" => $asistencias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Método para crear una nueva asistencia
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//interactuar con la peticion HTTP
    {
        $asistencia = new asistenciaModel ($request -> all());
        $asistencia-> save();
        return redirect() -> action ([AsistenciaController:: class,'index']);
    }

    /**
     * mostrar un registro asistencia en funcion de una id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registroeditable = $this->asistenciaModel->obtenerAsistenciaPorCodigo($id);
        return view("asistencias.ver", ["registroeditable" => $registroeditable]);   
    }

    /**
     * Función para editar un registro de asistencia/fichajes, seleccionado por id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registroeditable = $this->asistenciaModel->obtenerAsistenciaPorCodigo($id);
            return view("asistencias.editar", ["registroeditable" => $registroeditable]);   
    }

    /**
     * Updatea los cambios producidos en el edit
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asistencia = AsistenciaModel::find($id);
        $asistencia->fill($request->all());
        $asistencia->save();
        return redirect()->action([AsistenciaController::class, "index"]);
    
    }

    /**
     * Elimina un registro en específico a partir del id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asistencia = AsistenciaModel::find($id);
        $asistencia->delete();
        return redirect()->action([AsistenciaController::class, "index"]);
    
    }

    /**
     * Obtenemos un registro asistencia a partir de un id
     */
    public function obtenerPorUsuario($id){
        $asistencias = $this->asistenciaModel->obtenerPorUsuario($id);
       
        return view("registro", ["asistencias" => $asistencias]);
        
    }

    /**
     * Funcion implementada para el boton de de fichar salida
     * 
     */
    public function fichajeSalida($id)
    {
        $asistencias = $this->asistenciaModel->obtenerPorUsuario($id);//obtiene el usuario
        $asistencia = $asistencias->last();//su ultima asistencia
        $asistencia->Fecha_salida = date('Y-m-d H:i:s');//asigno fecha actual en formato seleccionado
        $asistencia->save();//guardo en la bd
        $asistencias = $this->asistenciaModel->obtenerPorUsuario($id);
        return view ("registro", ["asistencias" => $asistencias]);//muestro registro de nuevo
            
    }
    /**
     * Funcion implementada para el boton de entrada
     * 
     */
    public function fichajeEntrada($id)
    {
        
        $asistencia = new AsistenciaModel();
        $asistencia->id_usuario = $id;//obtengo id del usuario
        $asistencia->Fecha_entrada = date('Y-m-d H:i:s');//ponemos campo a valor de fecha actual
        $asistencia->Fecha_salida =  null;//salida a null
        $asistencia->validacion = 0;//validacion a 0
        $asistencia-> save();//guardamos en la bd
        $usuario = UsuarioModel::find($id);

        $asistencias = $usuario->asistencias()->get();
        return view('registro', ["asistencias"=> $asistencias]);//muestro las asistencias del usuario en registro
        
    }

}
