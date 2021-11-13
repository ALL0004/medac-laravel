    <?php
    session_start();
    ?>
    <!-- cabecera -->
    <x-header />
    <!-- For demo purpose -->
    <div class="container">
        <div class="pt-5 ">
            <header class="py-5 mt-5">
                <h1 class="display-4">Bienvenido Administrador : Jose Mª Antonio</h1>


                    <img class="avatar_rounded" alt="Image placeholder"
                        src="img/avatar.png"> <button type="button" class="btn btn-light">Cerrar Sesion</button>
              
                
                
               
                
               
            </header>
            <h2 class="display-5">Listado de Usuarios :</h2>
            <table class="table table-hover" id="tabla">
                <!--Tabla-->
                <div id="tabla_resultado">
                    <!--Tabla donde se despliega tr ytd-->

                    <thead class="table-dark">
                        <tr>
                            <td>Id_Usuario</td>
                            <td>Nombre</td>
                            <td>Apellidos</td>
                            <td>DNI</td>
                            <td>Teléfono</td>
                            <td>Email</td>
                            <td>Sede</td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i <10; $i++) <tr style="cursor:pointer">
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
            <div class="btn-group">
                
                <button type="button" class="btn btn-light">Consultar Fichajes</button>
                <button type="button" class="btn btn-light">Consultar Sede</button>
               
            </div>
        </div>
    </div>
    <!-- Pie de página -->

    <x-footer />
