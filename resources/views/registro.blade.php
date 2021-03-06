    <?php
    session_start();
    
    ?>
     <!-- cabecera -->
     <x-header />
     <!-- For demo purpose -->
    <div class="container contenido">
        <div class="pt-5 ">
            <header class="py-5 mt-5">
                <h1>Registros de usuario</h1>
                <!-- boton con ruta relativa, proporcionado por helpers-->
                <a href={{URL::asset("usuario/".$_SESSION['usuario']->id_usuario)}} class="btn btn-light" role="button">Volver a usuario</a>
            </header>
              <!-- DEsde aqui la tabla -->
              <table class="table table-hover" id="tabla">
                <!--Tabla-->
                <div id="tabla_resultado">
                    <!--Tabla donde se despliega tr ytd-->

                    <thead class="table-dark">
                        <tr>
                            <td>Id</td>
                            <td>Fecha entrada</td>
                            <td>Fecha salida</td>
                            <td>Estado</td>
                        </tr>
                    </thead>
                    <tbody>
                    @if ($asistencias->count())<!-- si hay registro entro y muestro los valores-->
                        @foreach($asistencias as $asistencia) 
                        <tr style="cursor:pointer">
                            <td>{{$asistencia->id_asistencia}}</td>
                            <td>{{$asistencia->Fecha_entrada}}</td>
                            <td>{{$asistencia->Fecha_salida}}</td>
                            <td>{{$asistencia->validacion}}</td>
                       
                        </tr>
                            @endforeach
                    @else
                            <div class="alert alert-warning" role="alert">
                               No hay fichajes actualmente
                              </div>
                    @endif
                    </tbody>
                </div>
            </table>

        </div>
            <!--Meto los botones --> 
            
            <div class="btn-group">
                @if ($asistencias->count())<!-- si hay registro entro-->
                    @if (!$asistencia->Fecha_salida==null)<!-- si la fecha de salida no es null, muestra boton entrada o al reves-->
                    
                        <a href={{URL::asset("ficharEntrada/".$_SESSION['usuario']->id_usuario)}} class="btn btn-light" role="button">Fichar entrada</a>
                    @else
                        <a href={{URL::asset("ficharSalida/".$_SESSION['usuario']->id_usuario)}} class="btn btn-light" role="button">Fichar salida</a>
                    @endif
                @else
                <a href={{URL::asset("ficharEntrada/".$_SESSION['usuario']->id_usuario)}} class="btn btn-light" role="button">Fichar entrada</a>
                @endif
            </div>
            
      
            
           
	</div>
    
</div>
            
    </div>
    <!-- Pie de p??gina -->
    <x-footer /> 
 
