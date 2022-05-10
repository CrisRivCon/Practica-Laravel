@extends('layout')

@section('contenido')
<div class="row">
    <h1 class="p-3 mt-2 bg-secondary text-white col-md-8  offset-md-2 col-lg-6 offset-lg-3">EDITAR USUARIO</h1>
</div>
    <div class="row text-center">
        <form method="POST" action="{{ route('usuarios.update', $user->id) }}" class="col-md-8  offset-md-2 col-lg-6 offset-lg-3 p-3 mb-2 bg-light text-dark">
            {!! method_field('PUT') !!}
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>

                <input id="name" class="form-control" type="text" name="name" value="{{$user->name}}"/>
            </div>

            <!-- Email Address -->
            <div class="mt-4 form-group">
                <label for="email">Email</label>

                <input id="email" class="form-control" type="email" name="email" value="{{$user->email}}" required />
            </div>

        </form>
    </div>
@endsection
