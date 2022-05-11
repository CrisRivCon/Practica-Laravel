@extends('layout')

@section('contenido')

<div class="container">
    <h2>Mensajes</h2>
    <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Email</th>
                    <td>{{ $message->email }}</td>
                </tr>
                <tr>
                    <th>Mensaje</th>
                    <td>{{ $message->mensaje }}</td>
                </tr>
         </tbody>
    </table>
</div>

@endsection
