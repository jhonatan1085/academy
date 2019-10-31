@extends('layout.index')

@section('title')
    Agregar Alumno
@endsection

@section('content')
<br><br>
    {{ Form::open(['route'=>'alumno.store','method'=>'post']) }}
         @include('alumno.fields')
        {{ Form::submit('Agregar') }}
   {{ Form::close() }}
   <br><br>
@endsection