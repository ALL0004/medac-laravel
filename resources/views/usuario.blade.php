<?php
    session_start();
    if(isset($usuario) && !isset($_SESSION["usuario"])){
        
        $_SESSION["usuario"]=$usuario;
       
    }else{
        
        $x = "adios";
    }
?>

    <x-header />

    <div class="container contenido">
        <div class="pt-5 ">
            <header class="py-5 mt-5">

            <a href="javascript:;" class="avatar avatar-xl rounded-circle">
            <img class="avatar_rounded" alt="Image placeholder" src="{{URL::asset('img/avatar.png')}}">
            </a>
                <div class="container">                 
                        <div class="cuerpo">
                            <div class="letras">
                                <h3>Usuario: </h3>
                                    <p><b>Nombre y apellidos: {{$_SESSION['usuario']->nombre}} {{$_SESSION['usuario']->apellidos}}</b></p>
                                    <p><b>Email: {{$_SESSION['usuario']->email}}</b></p>
                                    <p><b>Nº de teléfono: {{$_SESSION['usuario']->telefono}}</b></p>
                                </div>
                        </div>
                </div>

                
            <div class="btn-group">

            <a href ="{{URL::asset('cerrar')}}" class="btn btn-light" role="button">Cerrar sesión</a>

            <a href="{{URL::asset("sede/".$_SESSION['usuario']->id_sede)}}" class="btn btn-light" role="button">Ver centro</a>
   
            <a href="{{URL::asset("registro/".$_SESSION['usuario']->id_usuario)}}" class="btn btn-light" role="button">Fichajes</a>

                
            </div>
            </header>
        </div>
    </div>

    <x-footer />
