<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsistenciaModel;

class AsistenciaController extends Controller
{
    protected $asistenciaModel;

    public function __construct(AsistenciaModel $asistencia){
        $this->asistenciaModel = $asistencia;
        
    }

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asistencia = new asistenciaModel ($request -> all());
        $asistencia-> save();
        return redirect() -> action ([AsistenciaController:: class,'index']);
    }

    /**
     * Display the specified resource.
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
     * Show the form for editing the specified resource.
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
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
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


    public function obtenerPorUsuario($id){
        $asistencias = $this->asistenciaModel->obtenerPorUsuario($id);
       
        return view("registro", ["asistencias" => $asistencias]);
        
    }

    public function fichajeSalida($id)
    {
        $asistencias = $this->asistenciaModel->obtenerPorUsuario($id);
        $asistencia = $asistencias->last();
        $asistencia->Fecha_salida = date('Y-m-d H:i:s');
        $asistencia->save();
        $asistencias = $this->asistenciaModel->obtenerPorUsuario($id);
        return view ("registro", ["asistencias" => $asistencias]);
            
    }
    public function fichajeEntrada($id)
    {
        
        $asistencia = new AsistenciaModel();
        $asistencia->id_usuario = $id;
        $asistencia->Fecha_entrada = date('Y-m-d H:i:s');
        $asistencia->Fecha_salida =  null;
        $asistencia->validacion = 0;
        $asistencia-> save();
        $asistencias = $this->asistenciaModel->obtenerPorUsuario($id);
        return view('registro', ["asistencias"=> $asistencias]);
        
    }

}
