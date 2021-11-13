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
                <div>
                    <h3>Usuario: </h3>
                    <p><b>Nombre y apellidos: </b></p>
                    <p><b>Email: </b></p>
                    <p><b>Nº de teléfono: </b></p>
                    <p><b>Sede: </b></p>
                    </br>  
            
                    <button type="button" class="btn btn-light">Cerrar sesión</button></br></br>
                </div>

                <div>
                    <table class="table table-hover" id="tabla">
                    <!--Tabla-->
                    <div id="tabla_resultado">
                        <!--Tabla donde se despliega tr ytd-->

                        <thead class="table-dark">
                            <tr>
                                <td>Fichado de entrada</td>
                                <td>Fichado de salida</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i=0; $i <4; $i++) <tr style="cursor:pointer">
                                <td>place holder</td>
                                <td>place holder</td>
                                <td>place holder</td>
                                </tr>
                                @endfor
                        </tbody>
                    </div>
                </table>
            </div>
            <div class="btn-group">
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
