@extends('layout.index')

@section('title')
   Informacion
@endsection

@section('content')





<br>
<div class="container">
<a href="{{ route('information.create') }}">Agregar Informacion</a>
<br>
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Fecha </th>
      <th scope="col">T. Institucion</th>
      <th scope="col">RUC</th>
    </tr>
  </thead>
  <tbody>

        @foreach($models as $model)
        <tr>
        <th scope="row">{{ $model->id }}</th>
            <td>{{ $model->nombre }}</td>
            <td>{{ $model->direccion }}</td>
            <td>{{ $model->fecha }}</td>
            <td>{{ $model->t_institucion }}</td>
            <td>{{ $model->ruc }}</td>
            <td>
                <a href="{{ route('information.edit',$model->id) }}">Editar</a>
                <a href="{{ route('information.delete',$model->id) }}">Eliminar</a>
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