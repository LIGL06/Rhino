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
                    <form>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Primer Nombre</label>
                                    <input type="text" class="form-control border-input" placeholder="Company" value="Marco">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Segundo Nombre</label>
                                    <input type="text" class="form-control border-input" placeholder="Username" value="Antonio">
                                </div>
                            </div>
                                                                    <div class="col-md-3">
                                <div class="form-group">
                                    <label>Apellido Paterno</label>
                                    <input type="text" class="form-control border-input" placeholder="Company" value="Carrizales">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Apellido Materno</label>
                                    <input type="text" class="form-control border-input" placeholder="Username" value="Figueroa">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="userType">Tipo de usuario</label>
                                <select class="form-control" id="userType">
                                <option>Estudiante</option>
                                <option>INAPAM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Correo Electrónico</label>
                                        <input type="email" class="form-control border-input" placeholder="Email" value="marco@me.com">
                                </div>
                        </div>
                          <div class="col-md-2">
                              <div class="form-group">
                                  <label>Edad</label>
                                  <input type="number" class="form-control border-input" placeholder="Company" value="21" min="1" max="110">
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="form-group">
                                  <label>Cumpleaños</label>
                                  <input type="date" class="form-control border-input" value="1995-10-31">
                              </div>
                          </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                        <label for="phone">Teléfono</label>
                                        <input type="tel" class="form-control border-input" placeholder="Teléfono" value="123-456-7890" id="phone">
                                </div>
                        </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control border-input" placeholder="Dirección" value="Avenida Siempre Viva #123">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Clave de tarjeta</label>
                                    <input type="number" class="form-control border-input" placeholder="Clave de tarjeta" value="1234567890987654321">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input type="text" class="form-control border-input" placeholder="Ciudad" value="Tampico">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Colonia</label>
                                    <input type="text" class="form-control border-input" placeholder="Colonia" value="Centro">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Código postal</label>
                                    <input type="number" class="form-control border-input" placeholder="1234" value="1234">
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Guardar Perfil</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection