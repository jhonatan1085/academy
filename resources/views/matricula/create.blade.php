@extends('layout.index')

@section('title')
    Agregar Matricula
@endsection

@section('content')
<br><br>
    {{ Form::open(['route'=>'matricula.store','method'=>'post']) }}
         @include('matricula.fields')
        {{ Form::submit('Agregar') }}
   {{ Form::close() }}
   <br><br>
@endsection