<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioModel;

class UsuarioController extends Controller
{
    protected $usuarioModel;

    public function __construct(UsuarioModel $usuario){
        $this->usuarioModel = $usuario;
    }


    public function index()
    {
        $usuarios = $this->usuarioModel->obtenerUsuarios();
        return view('usuarios.lista', ["usuarios" => $usuarios]);
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
        $usuario = new UsuarioModel($request->all());
        $usuario->save();
        return redirect()->action([UsuarioController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = $this-> usuarioModel->obtenerUsuario($id);
        return view("usuarios.ver", ["usuario"=>$usuario], ["id_usuario"=>$id]);
    }
    public function showapli($id)
    {
        $usuario = $this-> usuarioModel->obtenerUsuario($id);
        return view("/usuario/{id}", ["usuario"=>$usuario], ["id_usuario"=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = $this-> usuarioModel->obtenerUsuario($id);
        return view("usuarios.editar", ["usuario"=>$usuario], ["id_usuario"=>$id]);

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
        $usuario = UsuarioModel::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->action([UsuarioController::class, "index"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = UsuarioModel::find($id);
        $usuario->delete();
        return redirect()->action([UsuarioController::class, "index"]);
    }

    public function exists(Request $request){
        
        $usuario = UsuarioModel::where("email", $request->email)->first();
        
        if(empty($usuario)){
            return view("login", ["error" => 1]);
        }else{
            if($request->email == $usuario->email && $request->password == $usuario->contraseña){
               
                if($usuario->categoria){
                    return view("administrador", ["usuario"=>$usuario], ["id_usuario" => $usuario->id_usuario]);
                }else{
                    return view("usuario", ["usuario"=>$usuario], ["id_usuario" => $usuario->id_usuario]);
                }
            }
            else{
                return view("login", ["error" => 1]);
            }
        }
    }
    public function cerrar(){
      
        return view("cerrar");
    }
}