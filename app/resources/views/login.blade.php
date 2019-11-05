<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='{{ asset('css/font-awesome.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/Roboto.css') }}'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="materialContainer">


    <div class="box">

        <div class="title">Ambient App</div>

        <div class="input">
            <label for="name">Usuario</label>
            <input type="text" name="name" id="name">
            <span class="spin"></span>
        </div>

        <div class="input">
            <label for="pass">Contraseña</label>
            <input type="password" name="pass" id="pass">
            <span class="spin"></span>
        </div>

        <div class="button login">
            <button><span>Ingresar</span> <i class="fa fa-check"></i></button>
        </div>



    </div>

    <div class="overbox">
        <div class="material-button alt-2"><span class="shape"></span></div>

        <div class="title">Registrar Usuario</div>

        <div class="input">
            <label for="regname">Nombre</label>
            <input type="text" name="regname" id="regname">
            <span class="spin"></span>
        </div>

        <div class="input">
            <label for="regemail">Correo</label>
            <input type="email" name="regemail" id="regemail">
            <span class="spin"></span>
        </div>

        <div class="input">
            <label for="regpass">Contraseña</label>
            <input type="password" name="regpass" id="regpass">
            <span class="spin"></span>
        </div>

        <div class="input">
            <label for="reregpass">Repetir Contraseña</label>
            <input type="password" name="reregpass" id="reregpass">
            <span class="spin"></span>
        </div>
         <div class="button login">
            <button><span>Registrar</span> <i class="fa fa-check"></i></button>
        </div>

    </div>

</div>
<!-- partial -->
<script src='{{ asset('js/jquery.min.js') }}'></script>
<script  src="{{ asset('js/script.js') }}"></script>

</body>
</html>