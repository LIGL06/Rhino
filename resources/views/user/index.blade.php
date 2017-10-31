@extends('layouts.app')
@section('content')
<div class="content">
					<div class="container-fluid">
						<div class="input-group">
							<span class="input-group-addon"><i class="ti-search"></i></span>
						  <input type="text" placeholder="Buscar Usuario" class="form-control">
						</div>
					</div>

          <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Usuarios</h4>
                                <p class="category">Usuarios Registrados</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    	<th>Nombre</th>
                                        <th>Apellido</th>
                                    	<th>Tipo</th>
                                    	<th>Vigente</th>
                                    	<th>Vigencia</th>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{$user->fname}}</td>
                                        <td>{{$user->lname}}</td>
                                        @if($user->role_id==3)
                                        <td>Estudiante</td>
                                        @else
                                        <td>INAPAM</td>
                                        @endif
                                        @if($user->card->renew_approval)
                                        <td>Si</td>
                                        @else
                                        <td>No</td>
                                        @endif
                                        <td>{{$user->card->valid_until}}</td>
                                        @if(Auth::user()->isCoordinator()||Auth::user()->isAdmin())
                                        <td><button type="button" name="editUser" class="btn btn-info btn-fill btn-wd editUser">Editar</button></td>
                                        @endif
                                        @if(Auth::user()->isAdmin())
                                        <td><button type="button" name="deleteUser" class="btn btn-danger btn-fill btn-wd" id="deleteUser">Eliminar</button></td>
                                        @endif
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection