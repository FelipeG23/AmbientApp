<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('img/IconoArbol.png') }}">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Parques
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active ">
                <a href="#">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Parques</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Notificaciones</p>
                </a>
            </li>


        </ul>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">

    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#pablo">Paper Dashboard 2</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
                
                
                <li class="nav-item">
                    <a class="nav-link btn-rotate" href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="nc-icon nc-user-run"></i>
                        Cerrar Sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>