<?php
    session_start();
?>
<!-- cabecera -->
<x-header />
<!-- For demo purpose -->
<div class="container contenido">
    <div class="pt-5">
        <header class="py-5 mt-5">
            
        </header>

        <div class="row justify-content-center col-auto bg-light p-5 text-center  border rounded box-shadow ">
            <div class="col-md-6 col-md-offset-5">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{ url('/login') }}" method="POST">
                            @csrf
                            <div class="form-group text-left">
                                <label for="email">Email</label>
                                <input class="form-control "
                                type="email" 
                                name="email" 
                                placeholder="Ingrese su email">
                            </div>

                            <div class="form-group text-left">
                                <label for="password">Contraseña</label>
                                <input class="form-control"
                                type="password" 
                                name="password" 
                                placeholder="Ingrese su contraseña">
                            </div>
                            <br>
                            
                            
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                               
                            </div>
                        </form>
                        

                    </div>
                    
                </div>

            </div>

        </div>
        
    </div>           
</div>
<br>
    <!-- Pie de página -->
    <x-footer/>
   


  
