<?php
    session_start();
?>

<x-header />
<body>
    <div class="container contenido">
        <div class="pt-5 ">
            <header class="py-5 mt-5">
                <div class="imagen">
                    
                    </br>
                    <h3>Sede: {{$sede -> id_sede}}</h3>
                    <p><b>Sector: {{$sede -> sector}}</b></p>
                    <p><b>Localización: {{$sede -> localizacion}} </b></p>
                    
                    </br>
                    
                    <a href="{{URL::asset("usuario/".$_SESSION['usuario']->id_usuario)}}" class="btn btn-light" role="button">Volver a usuario</a>
                    @if($sede->localizacion!="")
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="400" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q={{$sede->localizacion}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" >
                                    </iframe>
                                    <a href="https://123movies-to.org"></a>
                                    <br>
                                    <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                                    
                                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                                </div>
                            </div>
                            
                  
                </div>
                    
                </div>
                @endif
                
            </header>
        </div>
    </div>

    <x-footer />
    <script type="text/javascript" src="{{asset('js/header.js')}}"></script>
</body>
</html>
