<?php
    session_start();
?>

<x-header />
<body>
    <div class="container contenido">
        <div class="pt-5 ">
            <header class="py-5 mt-5">
                <div class="imagen">
                    <img src="https://us.123rf.com/450wm/mahabiru/mahabiru1602/mahabiru160200033/53142408-estrella-3d-resumen-plantilla-logotipo-de-identidad-de-la-empresa-estrella-3d-de-dise%C3%B1o-de-logotipo-.jpg?ver=6" class="rounded" alt="Eniun">
                    </br>
                    <h3>Sede: </h3>
                    <p><b>Email: </b></p>
                    <p><b>Nº de teléfono: </b></p>
                    <p><b>Localización:</b></p>
                    </br>
                    @if(true) <!-- Si administrador redirige a la vista del administrador-->
                    <!-- <button type="button" class="btn btn-light admin">Volver atrás</button></br></br> -->
                    <a href="/medac-laravel/public/usuarios">ATRÁS </a>
                    @else
                    <button type="button" class="btn btn-light usuario">Volver atrás</button></br></br>
                    @endif
                </div>
            </header>
        </div>
    </div>

    <x-footer />
    <script type="text/javascript" src="{{asset('js/header.js')}}"></script>
</body>
</html>
