@extends('layout')

@section('contenido')
<div class="row">
    <h1 class="p-3 mt-2 bg-secondary text-white col-md-8  offset-md-2 col-lg-6 offset-lg-3">EDITAR USUARIO</h1>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row text-center">
        <form method="POST"
              action="{{ route('usuarios.update', $user->id) }}"
              enctype="multipart/form-data"
              class="col-md-8  offset-md-2 col-lg-6 offset-lg-3 p-3 mb-2 bg-light text-dark">
            {!! method_field('PUT') !!}
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name">Nombre y Apellidos</label>

                <input id="name" class="form-control" type="text" name="name" value="{{$user->name}}"/>
            </div>

            <!-- Email Address -->
            <div class="mt-4 form-group">
                <label for="email">Email</label>

                <input id="email" class="form-control" type="email" name="email" value="{{$user->email}}" />
            </div>
            <div class="mt-4 form-group">
                <label for="file">Foto</label>

                <input id="file" class="form-control" type="file" name="foto" value="{{$user->foto}}" />
            </div>
            <input type="submit" class="btn btn-secondary" value="Guardar">
        </form>
    </div>
@endsection
