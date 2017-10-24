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
<div class="sidebar" data-background-color="black" data-active-color="success">
    	<div class="sidebar-wrapper" >
            <div class="logo">
                <a href="dashboard.html" class="simple-text">
                {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="/home">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/user/create">
                        <i class="ti-user"></i>
                        <p>Registrar usuario</p>
                    </a>
                </li>
                <li>
                    <a href="/user">
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
                        <li>
                            <a href="index.html">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                <p>Cerrar sesión</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
