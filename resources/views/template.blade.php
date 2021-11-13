

    <!-- cabecera -->
    <x-header />
    <!-- For demo purpose -->
    <div class="container">
        <div class="pt-5 ">
            <header class="py-5 mt-5">
                <h1 class="display-4">Transparent Navbar</h1>
                <p class="lead mb-0">Using Bootstrap 4 and Javascript, create a transparent navbar which changes its
                    style on scroll.</p>
                <p class="lead mb-0">Snippet by
                    <a href="https://bootstrapious.com" class="">
                        <u>Bootstrapious</u></a>
                </p>
            </header>
            <!-- DEsde aqui la tabla -->
            <table class="table table-hover" id="tabla">
                <!--Tabla-->
                <div id="tabla_resultado">
                    <!--Tabla donde se despliega tr ytd-->

                    <thead class="table-dark">
                        <tr>
                            <td>N°</td>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Empresa</td>
                            <td>Direccion</td>
                            <td>Razon Social</td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i <4; $i++) 
                        <tr style="cursor:pointer">
                            <td>asd</td>
                            <td>asd</td>
                            <td>asd</td>
                            <td>asd</td>
                            <td>asd</td>
                            <td>asd</td>
                            </tr>
                            @endfor
                    </tbody>
                </div>
            </table>
            
            <!-- Hasta aquí la tabla-->
            <div class="py-5">
                <p class="lead">Lorem ipsum dolor sit amet, <strong class="font-weight-bold">consectetur adipisicing
                    </strong>elit. Explicabo consectetur odio voluptatum facere animi temporibus, distinctio tempore
                    enim corporis quam <strong class="font-weight-bold">recusandae </strong>placeat! Voluptatum
                    voluptate, ex modi illum quas nam distinctio.</p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="py-5">
                <p class="lead">Lorem ipsum dolor sit amet, <strong class="font-weight-bold">consectetur adipisicing
                    </strong>elit. Explicabo consectetur odio voluptatum facere animi temporibus, distinctio tempore
                    enim corporis quam <strong class="font-weight-bold">recusandae </strong>placeat! Voluptatum
                    voluptate, ex modi illum quas nam distinctio.</p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
    <!-- Pie de página -->

    <x-footer />
