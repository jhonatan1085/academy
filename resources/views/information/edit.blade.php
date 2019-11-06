@extends('layout.index')

@section('title')
    Editar Informacion
@endsection

@section('content')
<br><br>
    {{ Form::model($model,['route'=>['information.update',$model->id],'method'=>'post']) }}
        @include('information.fields')
        {{ Form::submit('Actualizar') }}
    {{ Form::close() }}
    <br><br>
@endsection