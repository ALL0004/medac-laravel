<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentroModel;

class CentroController extends Controller
{

   protected $centroModel;

    public function __construct(CentroModel $sede){
        $this->centroModel = $sede;
    }

    /**
     * funcion que muestra la vista
     */
    public function index()
    {
        $centros = $this->centroModel->obtenerCentros();
        return view('centros.lista', ["centros" => $centros]);
    }

    
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
        $centro = new CentroModel($request->all());
        $centro->save();
        return redirect() -> action([CentroController::class, 'index']);// hace una accion al centro controller y llama a index 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $centro = $this ->centroModel->obtenerCentroPorCodigo($id);
       return view("centros.ver", ["sector" => $centro], ["id_sede"=> $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $centro = $this ->centroModel->obtenerCentroPorCodigo($id);
       return view("centros.editar", ["sector" => $centro], ["id_sede"=> $id]);

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
        $centro = CentroModel::find($id);
        $centro->fill($request->all());
        $centro->save();
        return redirect()->action([CentroController::class, "index"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $centro = CentroModel::find($id);
        $centro->delete();
        return redirect()->action([CentroController::class, "index"]);
    }

    public function obtenerPorUsuario($id){
        $sede = $this->centroModel->obtenerCentroPorCodigo($id);
       
        return view("sede", ["sede" => $sede]);
        
    }


    //--------------------------------------- web service

public function consultarCentroAPI($id){}
public function insertarCentroAPI(Request $request){} 
public function actualizarCentroAPI(Request $request, $id){}
public function borrarCentroAPI($id){}

}



