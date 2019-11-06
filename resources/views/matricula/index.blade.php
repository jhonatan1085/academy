@extends('layout.index')

@section('title')
   Matricula
@endsection

@section('content')


<br>
<div class="container">
<a href="{{ route('matricula.create') }}">Agregar Matricula</a>
<br>
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Fecha </th>
      <th scope="col">Alumno</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

        @foreach($models as $model)
        <tr>
        <th scope="row">{{ $model->id }}</th>
            <td>{{ $model->codigo }}</td>
            <td>{{ $model->fecha }}</td>
            <td>{{ $model->alumno->nombre }}</td>
            <td>
                <a href="{{ route('matricula.edit',$model->id) }}">Editar</a>
                <a href="{{ route('matricula.delete',$model->id) }}">Eliminar</a>
            </td>
        </tr>
         @endforeach
         </tbody>
     </table>    
    <br>
    <div class="row justify-content-end">
    {{ $models->render() }}
    </div>
    </div>
    
@endsection