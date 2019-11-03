<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>AmbientApp | @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />

</head>

<body class="">
<div class="wrapper ">

    @include('template.menu')

    <div class="main-panel">

        @yield('content')

    </div>

</div>

<!--   Core JS Files   -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>

<!--  Google Maps Plugin    -->

<!-- plugins -->
<script src="{{ asset('js/chartjs.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-notify.js') }}"></script>
<script src="{{ asset('js/paper-dashboard.min.js?v=2.0.0') }}" type="text/javascript"></script>

<!-- JS -->
<script src="{{ asset('js/demo.js') }}"></script>
</body>

</html>
