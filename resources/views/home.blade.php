@extends('layouts.app')

@section('content')
<div class="container">
<!-- INFO -->
<div class="row">
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="content">
            <div class="row">
                <div class="col-xs-5">
                    <div class="icon-big icon-success text-center">
                        <i class="ti-user"></i>
                    </div>
                </div>
                <div class="col-xs-7">
                    <div class="numbers">
                        <p>Estudiantes</p>
                        {{$students}}
                    </div>
                </div>
            </div>
            <div class="footer">
                <hr />
                <div class="stats">
                    <i class="ti-calendar"></i> Ayer
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-sm-6">
    <div class="card">
        <div class="content">
            <div class="row">
                <div class="col-xs-5">
                    <div class="icon-big icon-danger text-center">
                        <i class="ti-user"></i>
                    </div>
                </div>
                <div class="col-xs-7">
                    <div class="numbers">
                        <p>3ra Edad</p>
                        {{$elders}}
                    </div>
                </div>
            </div>
            <div class="footer">
                <hr />
                <div class="stats">
                    <i class="ti-calendar"></i> Ayer
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /INFO -->
<!-- GRAPH Users -->
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="header">
    <h4 class="title">Comportamiento de los usuarios</h4>
    <p class="category">24 horas</p>
</div>
<div class="content">
    <div id="chartHours" class="ct-chart"></div>
    <div class="footer">
        <div class="chart-legend">
            <i class="fa fa-circle text-info"></i> Estudiantes
            <i class="fa fa-circle text-warning"></i> Adultos Mayores
        </div>
        <hr>
        <div class="stats">
            <i class="ti-reload"></i> Última actualización hace 3 minutos
        </div>
    </div>
</div>
</div>
    </div>
    <div class="col-md-12">
        <div class="card ">
            <div class="header">
                <h4 class="title">Usuarios anuales</h4>
                <p class="category">Uso de la plataforma en 2016</p>
            </div>
            <div class="content">
                <div id="chartActivity" class="ct-chart"></div>

                <div class="footer">
                    <div class="chart-legend">
                        <i class="fa fa-circle text-info"></i> Estudiantes
                        <i class="fa fa-circle text-warning"></i> Adultos mayores
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /GRAPH Users -->
</div>
@endsection
