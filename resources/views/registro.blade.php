    <?php
    session_start();
    $id=$_GET['id_asistencia'];
    ?>
     <!-- cabecera -->
     <x-header />
     <!-- For demo purpose -->
    <div class="container contenido">
        <div class="pt-5 ">
            <header class="py-5 mt-5">
                <h1>Registros de usuario</h1>
                <button type="button" class="btn btn-light" onClick = "document.location.href='/usuario'" > Volver Atrás</button>
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
                        @for($i=0; $i <4; $i++) 
                        <tr style="cursor:pointer">
                            <td>{{$asistencia->id_asistencia}}></td>
                            <td>{{$asistencia->Fecha_entrada}}</td>
                            <td>{{$asistencia->Fecha_salida}}</td>
                            <td>{{$asistencia->validacion?"Validada":"No Validada"}}</td>
                        </tr>
                            @endfor
                    </tbody>
                </div>
            </table>

        </div>
            <!--Meto los botones --> 
            <div class="btn-group">
                
                <button type="button" class="btn btn-light">Fichar entrada</button>
                <button type="button" class="btn btn-light">Fichar salida</button>
               
            </div>
            
      
            
           
	</div>
    <div class="button">
	            <div class="container">
		            <div class="tick">
		            </div>
	            </div>
            </div>
</div>
            
    </div>
    <!-- Pie de página -->
    <x-footer /> 
 
