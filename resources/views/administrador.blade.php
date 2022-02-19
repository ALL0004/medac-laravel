    <?php
    session_start();
    if(isset($usuario) && !isset($_SESSION["usuario"])){
        
        $_SESSION["usuario"]=$usuario;
       
    }else{
        
        $x = "adios";
    }
    ?>
    <!-- cabecera -->
    <x-header />
    <!-- For demo purpose -->
    <div class="container" style="min-height: 100vh;">
        <div class="pt-5 ">
            <header class="py-5 mt-5">
                <h1 class="display-4">Bienvenido Administrador : {{$_SESSION["usuario"]->nombre}}</h1>


                <img class="avatar_rounded" alt="Image placeholder" src="{{URL::asset('img/avatar.png')}}">  
                <a href ="{{URL::asset('cerrar')}}" class="btn btn-light" role="button">Cerrar sesión</a>
              
                
                
               
                
               
            </header>

            <div class="btn-group-vertical">

            </div>
            
            <a href ="{{URL::asset('usuarios')}}" class="btn btn-light" role="button">Consultar Usuarios</a>
            <a href ="{{URL::asset('asistencias')}}" class="btn btn-light" role="button">Consultar Fichajes</a>
            <a href ="{{URL::asset('centros')}}" class="btn btn-light" role="button">Consultar Sedes</a>
            <div class="btn-group">
                
             
               
            </div>
        </div>
    </div>
    <!-- Pie de página -->

    <x-footer />
