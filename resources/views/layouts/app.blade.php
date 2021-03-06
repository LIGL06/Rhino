<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="success">

    	<div class="sidebar-wrapper" >
            <div class="logo">
            <a class="simple-text" href="{{ url('/home') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{ url('/home') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/user/create') }}">
                        <i class="ti-user"></i>
                        <p>Registrar usuario</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/user') }}">
                        <i class="ti-view-list-alt"></i>
                        <p>Lista de usuarios</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->fname }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                    Cerrar Sesión
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        </div>
    </div>
</div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-checkbox/1.4.0/bootstrap-checkbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.0/chartist.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>
    <script src="{{URL::asset('js/vendor.js')}}"></script>
    <script src="{{URL::asset('js/chart.js')}}"></script>
</body>
</html>
