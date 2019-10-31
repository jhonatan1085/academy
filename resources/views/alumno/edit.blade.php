@extends('layout.index')

@section('title')
    Editar Alumno
@endsection

@section('content')
<br><br>
    {{ Form::model($model,['route'=>['alumno.update',$model->id],'method'=>'post']) }}
        @include('alumno.fields')
        {{ Form::submit('Actualizar') }}
    {{ Form::close() }}
    <br><br>
@endsection