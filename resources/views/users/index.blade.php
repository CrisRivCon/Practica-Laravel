@extends('layout')
@section('contenido')
    <div class="container">
        <h2>users</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        <a href=" {{ route('users.edit', $user->id) }}">
                            {{ $user->name }}
                        </a>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->rol->rol }}</td>
                {{--<td>
                    <button class="btn btn-dark">
                        <a href=" {{ route('user.edit', $user->id)}} ">
                            Editar
                        </a>
                    </button>
                    <form method="POST" class="d-inline" action="{{ route('users.destroy', $usario->id)}}">
                        @csrf
                        {{@method_field('DELETE')}}
                        <button class="btn btn-dark">
                            Eliminar
                        </button>
                    </form>
                </td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
