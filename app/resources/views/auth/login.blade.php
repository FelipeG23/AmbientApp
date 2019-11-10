<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='{{ asset('css/bootstrap.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/font-awesome.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/Roboto.css') }}'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="materialContainer">
    <div class="box">
        <div class="title">Ambient App</div>
        <form action="{{ route('login') }}" class="form" method="post">
            @csrf
            <div class="input">
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror">
                <span class="spin"></span>
                @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror">
                <span class="spin"></span>
                @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="button login">
                <button><span>Ingresar</span> <i class="fa fa-check"></i></button>
            </div>
        </form>
    </div>

    <div class="overbox">
        <div class="material-button alt-2"><span class="shape"></span></div>

        <div class="title">Registrar Usuario</div>

        <form action="{{ route('register') }}" class="form" method="post">
            @csrf
            <div class="input">
                <label for="regname">Nombre</label>
                <input type="text" name="regname" id="regname" value="{{ old('regname') }}" class="@error('regname') is-invalid @enderror">
                <span class="spin"></span>
                @error('regname')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="input">
                <label for="regphone">Telefono</label>
                <input type="number" name="regphone" id="regphone" value="{{ old('regphone') }}" class="@error('regphone') is-invalid @enderror">
                <span class="spin"></span>
                @error('regphone')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input">
                <label for="regemail">Correo</label>
                <input type="email" name="regemail" id="regemail" value="{{ old('regemail') }}" class="@error('regemail') is-invalid @enderror">
                <span class="spin"></span>
                @error('regemail')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input">
                <label for="regpass">Contraseña</label>
                <input type="password" name="regpass" id="regpass" value="{{ old('regpass') }}" class="@error('regpass') is-invalid @enderror">
                <span class="spin"></span>
                @error('regpass')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input">
                <label for="rereregpass_confirmationregpass_confirmationpass">Repetir Contraseña</label>
                <input type="password" name="regpass_confirmation" id="regpass_confirmation" value="{{ old('regpass_confirmation') }}" class="@error('regpass_confirmation') is-invalid @enderror">
                <span class="spin"></span>
                @error('regpass_confirmation')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="button login">
                <button><span>Registrar</span> <i class="fa fa-check"></i></button>
            </div>
        </form>
    </div>
</div>
<!-- partial -->
<script src='{{ asset('js/jquery.min.js') }}'></script>
<script  src="{{ asset('js/script.js') }}"></script>

</body>
</html>