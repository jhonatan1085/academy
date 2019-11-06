@extends('layout.index')

@section('title')
    Editar Informacion
@endsection

@section('content')
<br><br>
    {{ Form::model($model,['route'=>['matricula.update',$model->id],'method'=>'post']) }}
        @include('matricula.fields')
        {{ Form::submit('Actualizar') }}
    {{ Form::close() }}
    <br><br>
@endsection