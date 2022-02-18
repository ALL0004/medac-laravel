<?php
    session_start();
?>

    <x-header />

    <div class="container contenido">
        <div class="pt-5 ">
            <header class="py-5 mt-5">

            <a href="javascript:;" class="avatar avatar-xl rounded-circle">
            <img class="avatar_rounded" alt="Image placeholder" src="img/avatar.png">
            </a>
                <div class="container">                 
                        <div class="cuerpo">
                            <div class="letras">
                                <h3>Usuario: </h3>
                                    <p><b>Nombre y apellidos: </b></p>
                                    <p><b>Email: </b></p>
                                    <p><b>Nº de teléfono: </b></p>
                                    <p><b>Sede: </b></p>
                                </div>
                        </div>
                </div>

                
            <div class="btn-group">

            <button type="button" class="btn btn-light">Cerrar sesión</button></br></br>

                @if(true) <!-- condición a introducir en desde controlador-->
                
                <button type="button" class="btn btn-light">Fichado de entrada</button>
                @else
                <button type="button" class="btn btn-light">Fichado de salida</button>
                
                @endif
            </div>
            </header>
        </div>
    </div>

    <x-footer />
