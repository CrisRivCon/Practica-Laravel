<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Practica</title>
</head>
<body class="d-flex flex-column h-100">
  <header>
    @php
    function activeMenu($url){
      return request()->is($url) ? 'active' : '';
    }
    @endphp
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!-- Image and text -->
            <a class="navbar-brand" href="{{route('index')}}">
            <img src="/docs/4.6/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Practica Laravel
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link {{ activeMenu('/') }}" href="{{ route('index')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ activeMenu('saludo/*') }}" href="{{ route('saludo', 'Cris')}}">Saludo</a>
                </li>
                  @auth
                <li class="nav-item">
                  <a class="nav-link {{ activeMenu('mensajes') }}" href="{{ route('mensajes.index')}}">Mensajes</a>
                </li>
                      @if(auth()->user()->role_id === 1)
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle {{ activeMenu('usuarios') }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Perfil
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('usuarios.index')}}">Usuarios</a>
                  </div>
                </li>
                      @endif
                      <li class="nav-item">
                          <a class="nav-link {{ activeMenu('mensajes/create') }}" href="{{ route('mensajes.create')}}">Contacto</a>
                      </li>
                  @endauth
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
            @auth
            <ul class="navbar-nav mr-auto navbar-right">
              <li class="nav-item">
                <a class="nav-link {{ activeMenu('logout') }}" href=""
                onclick="event.preventDefault(); document.getElementById('form_logout').submit()"
                >Cerrar Sesion</a>
              </li>
                <form id="form_logout" method="POST" action="{{ route('logout')}}" style="display: none">
                    @csrf
                </form>
            </ul>
            @endauth
            @guest
            <ul class="navbar-nav mr-auto navbar-right">
              <li class="nav-item">
                <a class="nav-link {{ activeMenu('login') }}" href="{{route('login')}}">Iniciar Sesion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ activeMenu('register') }}" href="{{route('register')}}">Registrarse</a>
              </li>
            </ul>
            @endguest
        </nav>
      </header>
      <div class="container text-center">
      @yield('contenido')
      </div>
      <footer class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <a>Pie de pagina</a>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>
</html>
