@extends('layout')
@section('contenido')
    <div class="container">
        <h2>Usuarios</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        <a href=" {{ route('usuarios.edit', $user->id) }}">
                            {{ $user->name }}
                        </a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->rol->rol }}</td>
                    <td><img class="img" src="{{asset('/storage/avatars/'.$user->foto)}}"></td>
                    <td class="row">
                        <div class="col-6">
                            <button class="btn btn-dark">
                            <a href=" {{ route('usuarios.edit', $user->id)}} ">
                                Editar
                            </a>
                            </button>
                        </div>
                        <div class="col-6">
                            <form method="POST" class="d-inline " action="{{ route('usuarios.destroy', $user->id)}}">
                                @csrf
                                {{@method_field('DELETE')}}
                                <button class="btn btn-dark">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
