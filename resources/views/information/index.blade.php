@extends('layout.index')

@section('title')
   Informacion
@endsection

@section('content')





<br>
<div class="container">
<a href="{{ route('alumno.create') }}">Nuevo Alumno</a>
<br>
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">dni</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha Nac.</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>

        @foreach($models as $model)
        <tr>
        <th scope="row">{{ $model->id }}</th>
            <td>{{ $model->dni }}</td>
            <td>{{ $model->nombre }}</td>
            <td>{{ $model->fecha_nac }}</td>
            <td>
                <a href="{{ route('alumno.edit',$model->id) }}">Editar</a>
                <a href="{{ route('alumno.delete',$model->id) }}">Eliminar</a>
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