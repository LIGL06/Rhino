@extends('layouts.app')
@section('content')
<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-7">
            <div class="card">
                <div class="header">
                    <h4 class="title">Perfil de usuario</h4>
                </div>
                <div class="content">
                {{Form::open(['action' => 'UserController@store'])}}
                {{method_field('POST')}}
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            {{Form::label('fname','Nombre(s)')}}
                            {{Form::text('fname',null, ['class' => 'form-control', 'placeholder' => 'Nombre(s)'])}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            {{Form::label('lname','Apellido(s)')}}
                            {{Form::text('lname',null, ['class' => 'form-control', 'placeholder' => 'Apellido(s)'])}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {{Form::label('role_id','Tipo de Usuario')}}
                            {{Form::select('role_id', ['3' => 'Estudiante', '4' => 'INAPAM'],null,['class' => 'form-control', 'placeholder' => 'Seleccionar usuario'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            {{Form::label('email','Email')}}
                            {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electrónico'])}}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            {{Form::label('age','Edad')}}
                            {{Form::number('age', null, ['class' => 'form-control', 'placeholder' => 'Edad'])}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {{Form::label('birthday','Cumpleaños')}}
                            {{Form::date('birthday', \Carbon\Carbon::now()->subYears(27), ['class' => 'form-control'] )}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            {{Form::label('phone','Teléfono')}}
                            {{Form::text('phone',null, ['class' => 'form-control', 'placeholder' => 'Teléfono'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                        {{Form::label('address','Dirección')}}
                        {{Form::text('address',null, ['class' => 'form-control', 'placeholder' => 'Dirección'])}}
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                        {{Form::label('tag','Clave de Tarjeta')}}
                        {{Form::text('tag',null, ['class' => 'form-control', 'placeholder' => 'Clave de Tarjeta'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        {{Form::label('city','Ciudad')}}
                        {{Form::select('city', ['TAM' => 'Tampico', 'MAD' => 'Madero', 'ALT' => 'Altamira'],null,['class' => 'form-control', 'placeholder' => 'Seleccionar ciudad'])}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        {{Form::label('colonia','Colonia')}}
                        {{Form::text('colonia',null, ['class' => 'form-control', 'placeholder' => 'Colonia'])}}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        {{Form::label('postal','Codigo Postal')}}
                        {{Form::number('postal', null, ['class' => 'form-control', 'placeholder' => 'Codigo Postal'])}}
                        </div>
                    </div>
                </div>
                    {{Form::submit('Guardar Perfil', ['class' => 'btn'])}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection