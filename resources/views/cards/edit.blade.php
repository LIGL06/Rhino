@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Alta de Tarjeta</div>

                <div class="panel-body">
                  <div class="row">
                  @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                  @endif
                      <div class="col-xs-12 col-md-12">
                        {!! Html::ul($errors->all()) !!}
                        <form action="{{action('CardController@update',$card[0]->id)}}" method="POST" style="display:inline">
                          {{ method_field('PUT') }}
                          {{ csrf_field() }}
                          <input type="hidden" value="{{$card[0]->user->id}}">
                          <div class="form-group">
                            <input type="text" disabled value="{{$card[0]->user->name}}" class="form-control" name="user_name">
                          </div>
                          <div class="form-group">
                            <label for="tag">Tag</label>
                            <input type="text" name="tag" class="form-control" value="{{$card[0]->tag}}" disabled>
                          </div>
                          <div class="form-group">
                            <label for="renew_approval">Vigencia</label>
                            <select name="renew_approval" class="form-control">
                              <option value="0">No vigente</option>
                              <option value="1">Vigente</option>
                            </select>
                          </div>
                          <div class="row col-md-offset-10 col-xs-offset-10">
                            <input type="submit" class="btn btn-warning" value="Editar">
                          </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
