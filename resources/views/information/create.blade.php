@extends('layout.index')

@section('title')
    Agregar Informacion
@endsection

@section('content')
<br><br>
    {{ Form::open(['route'=>'information.store','method'=>'post']) }}
         @include('information.fields')
        {{ Form::submit('Agregar') }}
   {{ Form::close() }}
   <br><br>
@endsection