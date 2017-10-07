@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Alta de Tarjeta</div>

                <div class="panel-body">
                  <div class="row">
                      <div class="col-xs-12 col-md-12">
                        {!! Html::ul($errors->all()) !!}
                        <form action="{{action('CardController@store')}}" method="post" style="display:inline">
                          {{ method_field('POST') }}
                          {{ csrf_field() }}
                          <div class="form-group">
                            <label for="user_id">Usuario</label>
                            <select class="form-control" name="user_id">
                              @foreach ($persons as $key => $person)
                                <option value="{{$person->id}}">{{$person->name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="tag">Tag</label>
                            <input type="text" name="tag" class="form-control" value="{{md5(microtime())}}">
                          </div>
                          <div class="row col-md-offset-10 col-xs-offset-10">
                            <input type="submit" class="btn btn-success" value="Guardar">
                          </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
