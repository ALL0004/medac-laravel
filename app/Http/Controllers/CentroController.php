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
        return redirect() -> action([CentroController::class, 'index']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
