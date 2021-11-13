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
                <button type="button" class="btn btn-light"> Volver Atrás</button>
            </header>
              <!-- DEsde aqui la tabla -->
              <table class="table table-hover" id="tabla">
                <!--Tabla-->
                <div id="tabla_resultado">
                    <!--Tabla donde se despliega tr ytd-->

                    <thead class="table-dark">
                        <tr>
                            <td>Id</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Sede</td>
                            <td>Fecha entrada</td>
                            <td>Fecha salida</td>
                            <td>Estado</td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i <4; $i++) 
                        <tr style="cursor:pointer">
                            <td>placeholder</td>
                            <td>placeholder</td>
                            <td>placeholder</td>
                            <td>placeholder</td>
                            <td>placeholder</td>
                            <td>placeholder</td>
                            <td>placeholder</td>
                            </tr>
                            @endfor
                    </tbody>
                </div>
            </table>

        </div>
            <!--Meto los botones --> 
            <div class="btn-group">
                
                <button type="button" class="btn btn-light">Confirmar Registro</button>
                <button type="button" class="btn btn-light">Rechazar Registro</button>
               
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
 
